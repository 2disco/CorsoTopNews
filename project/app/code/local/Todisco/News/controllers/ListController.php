<?php
/**
 * Todisco News Controller
 *
 * Stories Controller
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cms
 *
 */

class Todisco_News_ListController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

}