<?php
namespace project\models;
class LoginModel extends AbstractModel
{
 protected static $tableName = 'users';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name',
           'password'
 );
}