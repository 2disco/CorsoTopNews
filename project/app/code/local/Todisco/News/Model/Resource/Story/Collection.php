<?php
/**
 * Created by PhpStorm.
 * User: Markozu
 * Date: 06/10/17
 * Time: 10:08
 *
 * Todisco News Model Resource Category Collection
 *
 * Category Resource Collection Model
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cms
 */

class Todisco_News_Model_Resource_Story_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('todisco_news/story');
    }
}
