<?php
/* TREVOR BICE WEBDESIGN - webdesign.trevorbice.com */
defined('JPATH_BASE') or die;

class plgSystemIconmoon extends JPlugin {
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onAfterInitialise()	{

	}
	function onBeforeCompileHead()	{
		$document =& JFactory::getDocument();
		$document->addStyleSheet(JURI::root(true)."/plugins/iconmoon/assets/font-awesome/css/font-awesome.min.css");
	}
}
?>