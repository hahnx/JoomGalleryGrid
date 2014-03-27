<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * hnx_joomgallerys View
 */
class hnx_joomgalleryViewhnx_joomgallerys extends JView
{
    /**
     * hnx_joomgallerys view display method
     * @return void
     */
    function display($tpl = null) 
    {
        // Get data from the model
        $items = $this->get('Items');
        $pagination = $this->get('Pagination');

        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
                JError::raiseError(500, implode('<br />', $errors));
                return false;
        }
        // Assign data to the view
        $this->items = $items;
        $this->pagination = $pagination;

        $this->addToolBar($this->pagination->total);
        // Display the template
        parent::display($tpl);

        $this->setDocument();
    }

    protected function addToolBar($total = null)
    {
        JToolbarHelper::title(JText::_('COM_HNX_JOOMGALLERY_MANAGER_HNX_JOOMGALLERYS').
            ($total?' <span style="font-size: 0.5em; vertical-align: middle;">('.$total.')</span>':'')
                        , 'hnx_joomgallery');
        JToolbarHelper::deleteList('','hnx_joomgallery.delete');
        JToolbarHelper::editList('hnx_joomgallery.edit');
        JToolbarHelper::addNew('hnx_joomgallery.add');
    }

    protected function setDocument()
    {
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_HNX_JOOMGALLERY_ADMINISTRATION'));
    }
}
?>