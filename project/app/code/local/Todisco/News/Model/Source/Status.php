<?php

/**
 * Todisco News Status Model
 *
 * Option to Status
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cmw
 */

class Todisco_News_Model_Source_Status
{
    public function toOptionArray()
    {
        return array(
            array('value' => 0,'label' => Mage::helper('todisco_news')->__('Disabled')),
            array('value' => 1,'label' => Mage::helper('todisco_news')->__('Enabled')),
        );
    }
}
