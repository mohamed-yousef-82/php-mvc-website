<?php
define('DS',DIRECTORY_SEPARATOR);
define('APP_PATH',realpath(dirname(__FILE__)));
define('PATH',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
define('VIEWS_ADMIN_PATH',APP_PATH.DS.'views'.DS.'admin'.DS);
define('VIEWS_UI_PATH',APP_PATH.DS.'views'.DS.'ui'.DS);
define('VIEWS_NOTFOUND_PATH',APP_PATH.DS.'views'.DS);
define('DOMAINNAME',parse_url($_SERVER['REQUEST_URI'],PHP_URL_HOST));
define('SERVER_NAME',$_SERVER['SERVER_NAME']);
define('FOLDER_NAME','project');
define('BASE_URL','http://'.SERVER_NAME.'/project/');
// Database Credentials
// defined('DATABASE_HOST_NAME')       ? null : define ('DATABASE_HOST_NAME', 'localhost');
// defined('DATABASE_USER_NAME')       ? null : define ('DATABASE_USER_NAME', 'root');
// defined('DATABASE_PASSWORD')        ? null : define ('DATABASE_PASSWORD', '');
// defined('DATABASE_DB_NAME')         ? null : define ('DATABASE_DB_NAME', 'training');
// defined('DATABASE_PORT_NUMBER')     ? null : define ('DATABASE_PORT_NUMBER', 3306);
// defined('DATABASE_CONN_DRIVER')     ? null : define ('DATABASE_CONN_DRIVER', 1);
define('ADMINCSS','http://localhost/project/layout/admin/css');
define('ADMINIMG','http://localhost/project/layout/admin/img');
define('ADMINJS','http://localhost/project/layout/admin/js');
define('UICSS','http://localhost/project/layout/ui/css');
define('UIIMG','http://localhost/project/layout/ui/img');
define('UIJS','http://localhost/project/layout/ui/js');
define('UPLOAD_PATH','http://localhost/project/upload');
 ?>
