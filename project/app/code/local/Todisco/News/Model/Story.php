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
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'todisco_news_story';

    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'story';

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
        /**
         * getCategory
         *
         * Get Category object
         * @return bool/Todisco_News_Model_Category/Mage_Core_Model_Abstract
         */
    public function getCategory()
    {
            $category = Mage::getModel('todisco_news/category')->load($this->getData('category_id'));

            if ($category && $category->getId()) {
                return $category;
            }
            return false;
    }

    /**
     * setCategory
     *
     * Set Category Id from Category object
     * @param Todisco_News_Model_Category $category
     */
    public function setCategory(Todisco_News_Model_Category $category)
    {
        $this->setData('category_id', $category->getId());
    }
}
