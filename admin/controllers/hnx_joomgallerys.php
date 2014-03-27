<?php 
defined ('_JEXEC') or die;
jimport('joomla.application.component.controlleradmin');

class hnx_joomgalleryControllerhnx_joomgallerys extends JControllerAdmin
{
    public function getModel($name='hnx_joomgallery', $prefix='hnx_joomgalleryModel')
    {
        $model = parent::getModel($name, $prefix, array('ignore_request' => true));
    }
}    