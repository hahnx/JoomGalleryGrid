<?php
// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * hnx_joomgallery component helper.
 */
abstract class hnx_joomgalleryHelper
{
        /**
         * Configure the Linkbar.
         */
        public static function addSubmenu($submenu) 
        {
                JSubMenuHelper::addEntry(JText::_('COM_HNX_JOOMGALLERY_SUBMENU_MESSAGES'),
                                         'index.php?option=com_hnx_joomgallery', $submenu == 'messages');
                JSubMenuHelper::addEntry(JText::_('COM_HNX_JOOMGALLERY_SUBMENU_CATEGORIES'),
                                         'index.php?option=com_categories&view=categories&extension=com_hnx_joomgallery',
                                         $submenu == 'categories');
                // set some global property
                $document = JFactory::getDocument();
                if ($submenu == 'categories') 
                {
                        $document->setTitle(JText::_('COM_HNX_JOOMGALLERY_ADMINISTRATION_CATEGORIES'));
                }
        }
}