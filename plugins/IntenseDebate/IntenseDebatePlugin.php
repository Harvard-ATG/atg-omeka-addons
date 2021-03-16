<?php
class IntenseDebatePlugin extends Omeka_Plugin_AbstractPlugin
{

	protected $_hooks = array(
		'install',
		'uninstall',
		'config_form',
		'config',
		'public_items_show',
		'public_collections_show',
	);


	protected $_options = array(
		'id_account'=>null,
		'id_items'=>1,
		'id_collections'=>0,
	);


	/*
    ** Plugin options
    */

	public function hookConfigForm()
	{
		require dirname(__FILE__) . '/config_form.php';
	}

	public function hookConfig()
	{
		set_option('id_account', $_POST['id_account']);
		set_option('id_items', (bool)(int)$_POST['id_items']);
		set_option('id_collections', (bool)(int)$_POST['id_collections']);
	}

	/*
	** Public display
	*/

	public function hookPublicItemsShow()
	{

		echo id_display_comments(get_option('id_items'));

	}

	public function hookPublicCollectionsShow(){

		echo id_display_comments(get_option('id_collections'));

	}


	/**
	 * Install the plugin.
	 */
	public function hookInstall()
	{
		$this->_installOptions();

	}

	/**
	 * Uninstall the plugin.
	 */
	public function hookUninstall()
	{
		$this->_uninstallOptions();

	}
}

function id_display_comments($option=null)
{
	if( ($id=get_option('id_account')) && ($option==1) ){
		$html  = '<div id="id_comments">';
		$html .= '<script>';
		$html .= 'var idcomments_acct = "'.$id.'";';
		$html .= 'var idcomments_post_id;';
		$html .= 'var idcomments_post_url;';
		$html .= '</script>';
		$html .= '<span id="IDCommentsPostTitle" style="display:none"></span>';
		$html .= '<script type="text/javascript" src="http://www.intensedebate.com/js/genericCommentWrapperV2.js"></script>';
		$html .= '</div>';

		return $html;
	}
}