<?php
namespace project\models;
class AboutModel extends AbstractModel
{
 protected static $tableName = 'about';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name',
           'details',
           'video',
           'file'
 );
}
