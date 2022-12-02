<?php
namespace project\models;
class HomepageModel extends AbstractModel
{
 protected static $tableName = 'homepage';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'counter_title',
           'counter_desc',
           'photos_title',
           'photos_desc',
           'skills_title',
           'skills_desc',
           'team_title',
           'team_desc',
           'clients_title',
           'clients_desc',
           'copyright'
 );
}
