<?php
namespace project\models;
class SocialModel extends AbstractModel
{
 protected static $tableName = 'socialmedia';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'link',
           'icon'
 );

}