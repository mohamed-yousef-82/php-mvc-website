<?php
namespace project;
class  Autoload
{
public static function load($className){
    $className = str_replace('project','',$className);
    $className = strtolower($className);
    if(file_exists(APP_PATH."\\".$className.".php")){
    require_once APP_PATH."\\".$className.".php";
}
}
}
spl_autoload_register(__NAMESPACE__."\Autoload::load");
