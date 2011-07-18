<?php

/**
 * BasePostCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property Doctrine_Collection $Posts
 * 
 * @method string              getName()  Returns the current record's "name" value
 * @method Doctrine_Collection getPosts() Returns the current record's "Posts" collection
 * @method PostCategory        setName()  Sets the current record's "name" value
 * @method PostCategory        setPosts() Sets the current record's "Posts" collection
 * 
 * @package    site
 * @subpackage model
 * @author     Juan Manuel Aguero
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePostCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('post_category');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Post as Posts', array(
             'local' => 'id',
             'foreign' => 'category_id'));
    }
}