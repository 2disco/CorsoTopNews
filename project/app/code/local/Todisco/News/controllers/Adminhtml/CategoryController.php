<?php
/**
 * Todisco News Adminhtml Controller
 *
 * Backend Category Controller
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cms
 *
 */
class Todisco_News_Adminhtml_CategoryController extends Mage_Adminhtml_Controller_Action
{
    /**
     *  indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    /**
     * _isAllowed
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')->isAllowed('todisco_news');
    }
}