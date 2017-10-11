<?php

require_once ('app/Mage.php');
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors','1');
umask(0);
Mage::app();

//create category
$category = Mage::getModel('todisco_news/category');
$category->setCode('top');
$category->setName('Think Open');
$category->setStatus(true);
$category->save();

//load the catogory
$category = Mage::getModel('todisco_news/category')->load(1);
echo 'Category<hr>';
Zend_Debug::dump($category);
echo '<hr>';

//create a story
//$story = Mage::getModel('todisco_news/story');
//$story->setTitle('La mia storia');
//$story->setContent('Lorem Ipsum');
//$story->setStatus(1);
//$story->setCategory($category);
//$story->save();

echo '<hr>eccomi<hr>';

Zend_Debug::dump($category);
