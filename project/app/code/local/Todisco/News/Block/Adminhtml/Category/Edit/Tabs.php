<?php

/**
 * Todisco News Adminhtml Edit Tabs Block
 *
 * Category Edit Tabs Block
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cmw
 */

class Todisco_News_Block_Adminhtml_Category_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
    /**
     * Todisco_News_Block_Adminhtml_Category_Edit_Tabs constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->setId('category_edit_tabs');
        $this->setDestElementId('category_edit_form');
    }

    /**
     * _beforeToHtml
     */
    protected function _beforeToHtml()
    {
        $this->addTab('Category Details',
            array(
                'label' => $this->__('Details'),
                'title' => $this->__('Details'),
            )
        );
        parent::_beforeToHtml();
    }
}
