<?php
namespace project\models;
class ContactsModel extends AbstractModel
{
 protected static $tableName = 'contacts';
 protected static $primaryKey = 'id';
 protected static $tableSchema = array(
           'phone',
           'email',
           'address',
           'googlemap',
           'file'
 );
}