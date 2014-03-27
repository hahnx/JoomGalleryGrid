<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
JLoader::register('hnx_joomgalleryHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'hnx_joomgallery.php');

// import joomla controller library
jimport('joomla.application.component.controller');
 
// Get an instance of the controller prefixed by hnx_joomgallery
$controller = JController::getInstance('hnx_joomgallery');
JFactory::getApplication()->JComponentTitle = "<h1>hnx_joomgallery</h1>";
 
// Perform the Request task
$controller->execute(JRequest::getCmd('task'));
 
// Redirect if set by the controller
$controller->redirect();
