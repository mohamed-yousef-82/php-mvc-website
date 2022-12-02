<?php
namespace project\models;
class UsersModel extends AbstractModel
{
 protected static $tableName = 'users';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name',
           'password',
           'email',
           'file'
 );

}