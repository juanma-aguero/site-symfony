<?php

/**
 * BaseUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property string $password
 * 
 * @method string getName()     Returns the current record's "name" value
 * @method string getPassword() Returns the current record's "password" value
 * @method User   setName()     Sets the current record's "name" value
 * @method User   setPassword() Sets the current record's "password" value
 * 
 * @package    site
 * @subpackage model
 * @author     Juan Manuel Aguero
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('password', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}