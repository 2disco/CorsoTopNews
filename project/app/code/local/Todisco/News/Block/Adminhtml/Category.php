<?php

/**
 * Todisco News Category Block
 *
 * Adminhtml block for category grid
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cmw
 */
class Todisco_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     * Todisco_News_Block_Adminhtml_Category constructor.
     */
    public function __construct()
    {
        $this->_blockGroup = 'todisco_news';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = $this->__('News Categories');
        parent::__construct();
    }
}