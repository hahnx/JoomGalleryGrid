<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * General Controller of hnx_joomgallery component
 */
class hnx_joomgalleryController extends JController
{
    /**
     * display task
     *
     * @return void
     */
    function display($cachable = false, $urlparams = false) 
    {
        // set default view if not set
        JRequest::setVar('view', JRequest::getCmd('view', 'hnx_joomgallerys'));

        // call parent behavior
        parent::display($cachable);

        hnx_joomgalleryHelper::addSubmenu('messages');
    }
}