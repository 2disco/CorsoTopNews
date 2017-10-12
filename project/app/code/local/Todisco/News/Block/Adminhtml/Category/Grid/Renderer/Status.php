<?php

/**
 * Todisco News Category Grid Status Renderer
 *
 * Status Renderer for category grid
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cmw
 */

class Todisco_News_Block_Adminhtml_Category_Grid_Renderer_Status extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row)
    {
        if ($row->getData('status') == 0){
            return '<span class="grid-severity-minor"><span>' . $this->__('Disabled') . '</span></span>';
        }
        if ($row->getData('status') == 1){
            return '<span class="grid-severity-notice"><span>' . $this->__('Enabled') . '</span></span>';
        }
            return '<span class="grid-severity-major"><span>' . $this->__('Error') . '</span></span>';
    }

    public function toGridArray()
    {
        $array = array();
        foreach ($this->toOptionArray() as $option) {
            $array[$option['value']] = $option['label'];
        }
        return $array;
    }
}