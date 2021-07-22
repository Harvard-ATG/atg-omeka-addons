<?php
/**
 * Custom plugin for the Eileen Southern project with functionality that didn't fit into the theme
 */

/**
 * The plugin.
 * 
 * @package Omeka\Plugins\EileenSouthern
 */
class EileenSouthernPlugin extends Omeka_Plugin_AbstractPlugin {

    protected $_filters = array(
        'exhibit_layouts',
    );

    public function filterExhibitLayouts($layouts)
    {
        $layouts['southern'] = array(
            'name' => __('Southern YouTube'),
            'description' => __('Show attached items as videos')
        );
        return $layouts;
    }
}