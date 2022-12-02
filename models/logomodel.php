<?php
namespace project\models;
class LogoModel extends AbstractModel
{
 protected static $tableName = 'logo';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name',
           'slogan',
           'file'
 );
}