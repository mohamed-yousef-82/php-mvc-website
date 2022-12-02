<?php
namespace project\models;
class SkillsModel extends AbstractModel
{
 protected static $tableName = 'skills';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'skills_one_name',
           'skills_one_perc',
           'skills_two_name',
           'skills_two_perc',
           'skills_three_name',
           'skills_three_perc',
           'skills_four_name',
           'skills_four_perc',
           'skills_five_name',
           'skills_five_perc',
           'skills_six_name',
           'skills_six_perc',
           'skills_seven_name',
           'skills_seven_perc',
           'skills_eight_name',
           'skills_eight_perc'
 );

}
