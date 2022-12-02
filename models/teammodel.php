<?php
namespace project\models;
class TeamModel extends AbstractModel
{
 protected static $tableName = 'team';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'name',
           'job',
           'file'
 );

}
