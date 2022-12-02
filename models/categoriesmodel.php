<?php
namespace project\models;
class CategoriesModel extends AbstractModel
{
 protected static $tableName = 'categories';
 protected static $articlestableName = 'articles';
 protected static $primaryKey = 'cat_id';
 protected static $id = 'id';
 protected static $name = 'name';

}
