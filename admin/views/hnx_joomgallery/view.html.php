<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * hnx_joomgallery View
 */
class hnx_joomgalleryViewhnx_joomgallery extends JView
{
    /**
     * display method of hnx_joomgallery view
     * @return void
     */
    public function display($tpl = null) 
    {
        // get the Data
        $form = $this->get('Form');
        $item = $this->get('Item');
        $script = $this->get('Script');
        // Check for errors.
        if (count($errors = $this->get('Errors'))) 
        {
                JError::raiseError(500, implode('<br />', $errors));
                return false;
        }
        // Assign the Data
        $this->form = $form;
        $this->item = $item;
        $this->script = $script;
        // Set the toolbar
        $this->addToolBar();

        // Display the template
        parent::display($tpl);
        $this->setDocument();
    }

    /**
     * Setting the toolbar
     */
    protected function addToolBar() 
    {
        $input = JFactory::getApplication()->input;
        $input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
        JToolBarHelper::title($isNew ? JText::_('COM_HNX_JOOMGALLERY_MANAGER_HNX_JOOMGALLERY_NEW')
                                     : JText::_('COM_HNX_JOOMGALLERY_MANAGER_HNX_JOOMGALLERY_EDIT'));
        JToolBarHelper::save('hnx_joomgallery.save');
        JToolBarHelper::cancel('hnx_joomgallery.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                           : 'JTOOLBAR_CLOSE');
    }

    protected function setDocument() 
    {
        $isNew = ($this->item->id < 1);
        $document = JFactory::getDocument();
        $document->setTitle($isNew ? JText::_('COM_HNX_JOOMGALLERY_HNX_JOOMGALLERY_CREATING')
                                : JText::_('COM_HNX_JOOMGALLERY_HNX_JOOMGALLERY_EDITING'));

        $document->addScript(JURI::root(). $this->script);
        $document->addScript(JURI::root()."administrator/components/com_hnx_joomgallery"
                                         ."views/hnx_joomgallery/submibutton.js");
        JText::script('COM_HNX_JOOMGALLERY_HNX_JOOMGALLERY_ERROR_UNACCEPTABLE');
    }
}