<?php
namespace project\models;
class SliderModel extends AbstractModel
{
 protected static $tableName = 'slider';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'title',
           'description',
           'file'
 );

}