<?php
namespace project\models;
class ArticleModel extends AbstractModel
{
 protected static $tableName = 'articles';
 protected static $tableJoinName = 'categories';
 protected static $primaryKey = 'id';
 protected static $join_id = 'cat_id';
 protected static $tableSchema = array(
           'title',
           'details',
           'file',
           'cat_id'
 );

}
