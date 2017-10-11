<?php
/**
 * Created by PhpStorm.
 * User: Markozu
 * Date: 06/10/17
 * Time: 10:08
 *
 * Todisco News Model Category
 *
 * Category Model
 *
 * @method Todisco_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Todisco_News_Model_Category getName()
 * @method setName(string $name)
 * @method Todisco_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Todisco_News_Model_Category getCreatedAt()
 * @method Todisco_News_Model_Category getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @method
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cms
 */

class Todisco_News_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'todisco_news_category';

    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'category';


    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('todisco_news/category');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }
}
