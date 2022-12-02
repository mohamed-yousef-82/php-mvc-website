<?php
namespace project\models;
class IconsModel extends AbstractModel
{
 protected static $tableName = 'icons';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'title',
           'description',
           'icon'
 );
}
