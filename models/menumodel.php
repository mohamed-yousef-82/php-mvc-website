<?php
namespace project\models;
class MenuModel extends AbstractModel
{
 protected static $tableName = 'menu';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'menu_one',
           'menu_two',
           'menu_three',
           'menu_four',
           'menu_five',
           'menu_six'
 );

}