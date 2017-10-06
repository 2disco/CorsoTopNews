<?php
/**
 * Created by PhpStorm.
 * User: Markozu
 * Date: 06/10/17
 * Time: 10:08
 *
 * Todisco News Model Story
 *
 * Story Model
 *
 * @method Todisco_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Todisco_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Todisco_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method Todisco_News_Model_Story getCategoryId()
 * @method setCategoryId(int $categoryid)
 * @method Todisco_News_Model_Story getCreatedAt()
 * @method Todisco_News_Model_Story getUpdatedAt()
 * @method setUpdatedAt(string $updatedat)
 * @method
 * @author Marco Todisco
 * @version 0.2.0
 * @package Cms
 */

class Todisco_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('todisco_news/story');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/data')->gmtDate());
        return $this;
    }
}
