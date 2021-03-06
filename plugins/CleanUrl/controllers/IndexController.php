<?php
/**
 * The plugin controller for index pages.
 *
 * @package CleanUrl
 */
class CleanUrl_IndexController extends Omeka_Controller_AbstractActionController
{
    // The type and id of record to get.
    private $_record_identifier = '';
    private $_record_type = '';
    private $_record_id = 0;
    // Identifiers from the url.
    private $_collection_identifier = '';
    private $_item_identifier = '';
    private $_file_identifier = '';
    // Resolved records.
    private $_collection_id = 0;
    private $_item_id = 0;
    private $_file_id = 0;

    // Resolved route plugin.
    private $_routePlugin = '';
    // The allowed plugins.
    private $_routePlugins = array();

    /**
     * Initialize the controller.
     */
    public function init()
    {
        // Reset script paths (will be regenerated in forwarded destination).
        $this->view->setScriptPath(null);
    }

    public function collectionShowAction()
    {
        $this->_collection_identifier = rawurldecode($this->getParam('record_identifier'));
        $result = $this->_setCollectionId();
        if (empty($result)) {
            throw new Omeka_Controller_Exception_404;
        }
        return $this->forward('show', 'collections', 'default', array(
            'module' => null,
            'controller' => 'collections',
            'action' => 'show',
            'id' => $this->_collection_id,
            'record_type' => 'Collection',
        ));
    }

    public function itemsBrowseAction()
    {
        return $this->forward('browse', 'items', 'default', array(
            'module' => null,
            'controller' => 'items',
            'action' => 'browse',
            'record_type' => 'Item',
        ));
    }

    /**
     * Routes a clean url of an item to the default url.
     */
    public function routeItemAction()
    {
        return $this->routeCollectionItemAction();
    }

    /**
     * Routes a clean url of an item to the default url.
     */
    public function routeCollectionItemAction()
    {
        $this->_collection_identifier = rawurldecode($this->getParam('collection_identifier'));
        // If 0, this is possible (item without collection, or generic route).
        $result = $this->_setCollectionId();
        if (is_null($result)) {
            throw new Omeka_Controller_Exception_404;
        }

        $this->_record_type = 'Item';
        $id = $this->_routeRecord();

        // If no identifier exists, the plugin tries to use the record id directly.
        if (!$id) {
            $record = get_record_by_id($this->_record_type, $this->_record_identifier);
            if (!$record) {
                throw new Omeka_Controller_Exception_404;
            }

            // Check if the found item belongs to the collection, if any.
            if (!empty($this->_collection_id)
                    && $this->_collection_id != $record->collection_id
                ) {
                throw new Omeka_Controller_Exception_404;
            }

            $id = $this->_record_identifier;
        }

        $this->_record_id = $id;

        if ($this->_checkRoutePlugin()) {
            return $this->_forwardToPlugin();
        }

        return $this->forward('show', 'items', 'default', array(
            'module' => null,
            'controller' => 'items',
            'action' => 'show',
            'id' => $this->_record_id,
            'record_type' => 'Item',
        ));
    }

    /**
     * Routes a clean url of a file to the default url.
     */
    public function routeFileAction()
    {
        $this->_record_type = 'File';
        $id = $this->_routeRecord();

        // If no identifier exists, the plugin tries to use the record id directly.
        if (!$id) {
            $record = get_record_by_id($this->_record_type, $this->_record_identifier);
            if (!$record) {
                throw new Omeka_Controller_Exception_404;
            }

            $id = $this->_record_identifier;
        }

        $this->_record_id = $id;

        if ($this->_checkRoutePlugin()) {
            return $this->_forwardToPlugin();
        }

        return $this->forward('show', 'files', 'default', array(
            'module' => null,
            'controller' => 'files',
            'action' => 'show',
            'id' => $this->_record_id,
            'record_type' => 'File',
        ));
    }

    /**
     * Routes a clean url of a file with item to the default url.
     */
    public function routeItemFileAction()
    {
        return $this->routeCollectionItemFileAction();
    }

    /**
     * Routes a clean url of a file with item to the default url.
     */
    public function routeCollectionFileAction()
    {
        return $this->routeCollectionItemFileAction();
    }

    /**
     * Routes a clean url of a file with collection and item to the default url.
     */
    public function routeCollectionItemFileAction()
    {
        $this->_collection_identifier = rawurldecode($this->getParam('collection_identifier'));
        // If 0, this is possible (item without collection, or generic route).
        $result = $this->_setCollectionId();
        if (is_null($result)) {
            throw new Omeka_Controller_Exception_404;
        }
        $this->_item_identifier = rawurldecode($this->getParam('item_identifier'));
        // If 0, this is possible (generic route).
        $result = $this->_setItemId();
        if (is_null($result)) {
            throw new Omeka_Controller_Exception_404;
        }
        $this->_record_type = 'File';
        $id = $this->_routeRecord();

        // If no identifier exists, the plugin tries to use the record id directly.
        if (!$id) {
            $record = get_record_by_id($this->_record_type, $this->_record_identifier);
            if (!$record) {
                throw new Omeka_Controller_Exception_404;
            }

            // Check if the found file belongs to the collection.
            if (!$this->_checkCollectionFile($record)) {
                throw new Omeka_Controller_Exception_404;
            }

            // Check if the found file belongs to the item.
            if (!$this->_checkItemFile($record)) {
                throw new Omeka_Controller_Exception_404;
            }

            $id = $this->_record_identifier;
        }

        $this->_record_id = $id;

        if ($this->_checkRoutePlugin()) {
            return $this->_forwardToPlugin();
        }

        return $this->forward('show', 'files', 'default', array(
            'module' => null,
            'controller' => 'files',
            'action' => 'show',
            'id' => $this->_record_id,
            'record_type' => 'File',
        ));
    }

    /**
     * Routes a clean url of an item or a file to the default url.
     *
     * Collections are managed directly in collectionShowAction().
     *
     * @return int Id of the record.
     */
    protected function _routeRecord()
    {
        $db = get_db();
        $elementId = (integer) get_option('clean_url_identifier_element');

        $this->_record_identifier = rawurldecode($this->getParam('record_identifier'));

        // Select table.
        switch ($this->_record_type) {
            case 'Item':
                $sqlFrom = "FROM {$db->Item} records";
                break;
            case 'File':
                $sqlFrom = "FROM {$db->File} records";
                break;
        }

        // Use of ordered placeholders.
        $bind = array();

        // Check the dublin core identifier of the record.
        $prefix = get_option('clean_url_identifier_prefix');
        $toQuote = array();
        $toQuote[] = $prefix . $this->_record_identifier;
        // Check with a space between prefix and identifier too.
        $toQuote[] = $prefix . ' ' . $this->_record_identifier;
        // Check prefix with a space and a no-break space.
        if (get_option('clean_url_identifier_unspace')) {
            $unspace = str_replace(array(' ', '??'), '', $prefix);
            if ($prefix != $unspace) {
                $toQuote[] = $unspace . $this->_record_identifier;
                $toQuote[] = $unspace . ' ' . $this->_record_identifier;
            }
        }
        $quoted = $db->quote($toQuote);

        // If the table is case sensitive, lower-case the search.
        if (get_option('clean_url_case_insensitive')) {
            $quoted = strtolower($quoted);
            $sqlWhereText =
                "AND LOWER(element_texts.text) IN ($quoted)";
        }
        // Default.
        else {
            $sqlWhereText =
                "AND element_texts.text IN ($quoted)";
        }

        // Checks if url contains generic or true collection.
        $sqlWhereCollection = '';
        if ($this->_collection_id) {
            switch ($this->_record_type) {
                case 'Item':
                    $sqlWhereCollection = 'AND records.collection_id = ?';
                    $bind[] = $this->_collection_id;
                    break;
                case 'File':
                    $sqlFrom .= "
                        JOIN {$db->Item} items
                            ON records.item_id = items.id";
                    $sqlWhereCollection = 'AND items.collection_id = ?';
                    $bind[] = $this->_collection_id;
                    break;
            }
        }

        $sqlWhereRecordType = 'AND element_texts.record_type = "' . $this->_record_type . '"';

        $sql = "
            SELECT records.id
            $sqlFrom
                JOIN {$db->ElementText} element_texts
                    ON records.id = element_texts.record_id
                        AND element_texts.record_type = '$this->_record_type'
            WHERE element_texts.element_id = '$elementId'
                $sqlWhereText
                $sqlWhereCollection
                $sqlWhereRecordType
            LIMIT 1
        ";
        $id = $db->fetchOne($sql, $bind);

        // Additional check for item identifier: the file should belong to item.
        // TODO Include this in the query.
        if ($id && !empty($this->_item_identifier) && $this->_record_type == 'File') {
            // Check if the found file belongs to the item.
            $file = get_record_by_id('File', $id);
            if (!$this->_checkItemFile($file)) {
                return null;
            }
        }

        return $id;
    }

    /**
     * Checks if a file belongs to a collection.
     *
     * @param File $file File to check.
     *
     * @return boolean
     */
    protected function _checkCollectionFile($file)
    {
        // Get the item.
        $item = $file->getItem();

        // Check if the found file belongs to the collection.
        if (!empty($this->_collection_id)
                && $item->collection_id != $this->_collection_id
            ) {
            return false;
        }

        return true;
    }

    /**
     * Checks if a file belongs to an item.
     *
     * @param File $file File to check.
     *
     * @return boolean
     */
    protected function _checkItemFile($file)
    {
        // Get the item.
        $item = $file->getItem();

        // Check if the found file belongs to the item.
        if (!empty($this->_item_identifier)) {
            // Get the item identifier.
            $item_identifier = $this->view->getRecordIdentifier($item, false);
            // Check identifier and id of item.
            if (strtolower($this->_item_identifier) != strtolower($item_identifier)
                    && $this->_item_identifier != $item->id
                ) {
                return false;
            }
        }

        return true;
    }

    protected function _setCollectionId()
    {
        if ($this->_collection_identifier) {
            $this->_collection_id = $this->view->getRecordFromIdentifier($this->_collection_identifier, false, 'Collection', 'id');
        }
        return $this->_collection_id;
    }

    protected function _setItemId()
    {
        if ($this->_item_identifier) {
            $this->_item_id = $this->view->getRecordFromIdentifier($this->_item_identifier, false, 'Item', 'id');
        }
        return $this->_item_id;
    }

    protected function _setFileId()
    {
        if ($this->_file_identifier) {
            $this->_file_id = $this->view->getRecordFromIdentifier($this->_file_identifier, false, 'File', 'id');
        }
        return $this->_file_id;
    }

    /**
     * Check if this is a route to a plugin.
     *
     * @return string|null The plugin route to use, else null.
     */
    protected function _checkRoutePlugin()
    {
        $routePlugin = $this->getParam('rp');
        if (empty($routePlugin)) {
            return;
        }

        $alloweds = unserialize(get_option('clean_url_route_plugins')) ?: array();
        if (!in_array($routePlugin, $alloweds)) {
            return;
        }

        $this->_routePlugins = apply_filters('clean_url_route_plugins', array());
        if (!isset($this->_routePlugins[$routePlugin])) {
            return;
        }

        $plugin = $this->_routePlugins[$routePlugin];

        if (!plugin_is_active($plugin['plugin'])) {
            return;
        }

        if (!empty($plugin['record_types'])
                && !in_array($this->_record_type, $plugin['record_types'])
            ) {
            return;
        }

        $this->_routePlugin = $routePlugin;

        return $routePlugin;
    }

    /**
     * Forward to a plugin.
     *
     * @return string|null The plugin route to use, else null.
     */
    protected function _forwardToPlugin()
    {
        $route = &$this->_routePlugins[$this->_routePlugin];

        $params = $this->getAllParams();
        unset($params['record_identifier']);
        unset($params['rp']);

        if (isset($route['map']['id'])) {
            $params[$route['map']['id']] = $this->_record_id;
        }
        if (isset($route['map']['type'])) {
            $params[$route['map']['type']] = $this->_record_type;
        }

        $params = array_merge($params, $route['params']);

        return $this->forward(
            $route['params']['action'],
            $route['params']['controller'],
            $route['params']['module'],
            $params);
    }
}
