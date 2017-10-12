<?php

/**
 * Todisco News Adminhtml Edit Block
 *
 * Category Edit Block
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cmw
 */
class Todisco_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Todisco_News_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'todisco_news';
        $this->_controller = 'adminhtml_category';
        parent::__construct();
    }

    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}
