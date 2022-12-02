<?php
namespace project\models;
class CategoryModel extends AbstractModel
{
 protected static $tableName = 'categories';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name'
 );

}
