<?php
namespace project\lib;
use project\lib\Helper;
// use project\models\UsersModel;
class FrontController
{
use Helper;
const NOT_FOUND_ACTION = 'notFoundAction';
const NOT_FOUND_CONTROLLER  ='project\controllers\\NotFoundController';
private $controller = 'index';
private $action = 'default';
private $params;
// private $users;
// private $route;
// private $method_perfix;
private $lang;
private $cat="categories";
private $singlepage="singlepage";
private $current_cat;
private $current_cat_id;
private $current_article;
private $current_article_id;
private $current_page;
private $current_page_id;
private $languages = array(
    'ar',
    'en'
);
private $ui_routes = array(
    'categories',
    'singlepage'
);
private $routes = array(
    'default' => '',
    'admin' => 'admin'
);
// private $default_route ="default";
// private $default_lang ="ar";
public function __construct(){
$this->routing();
}
public function routing(){
    $path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
    $path = explode("/",trim($path,"/"));
    if (in_array("admin", $path)){
       $scope = "admin";
     }else {
       $scope = "ui";
     }
    array_shift($path);
    if (count($path)){

        if ($scope == "admin"){
array_shift($path);
        }elseif (in_array(current($path),$this->languages)){
                $this->lang = current($path);
                array_shift($path);
        }
         if(current($path)){
             $this->controller = current($path);
             array_shift($path);
         }
         if(current($path)){
             $this->action = current($path);
             array_shift($path);

         }
             $this->params =$path;
         if ($scope == "ui"){


           if (($this->controller == "category") && ($this->action != "default")){
           $this->current_cat_id = $this->action;
          $this->current_cat= urldecode(current($path));
            $this->action = "category";
             array_shift($path);
             $this->current_article_id = current($path);
            if ($this->current_article_id !=""){
              $this->action = "article";
            }
             }
             }
         if(current($path)){

      $this->current_article_id = urldecode(current($path));
         }

    }
}

public function dispatch(){
 $classcontroller = "project\controllers\\".ucfirst($this->controller)."Controller";
 $classaction = $this->action."Action";
 if (!class_exists($classcontroller)){
 $classcontroller = self::NOT_FOUND_CONTROLLER;
}
 $controller = new $classcontroller;
if (!method_exists($controller,$classaction)){
    $this->action = $classaction = self::NOT_FOUND_ACTION;
}
$controller->setController($this->controller);
$controller->setAction($this->action);
$controller->setParams($this->params);
$controller->setCategory($this->current_cat);
$controller->setCategoryId($this->current_cat_id);
$controller->setArticle($this->current_article);
$controller->setArticleId($this->current_article_id);
$controller->setPage($this->current_page);
$controller->setPageId($this->current_page_id);
$controller->setLang($this->lang);
$controller->$classaction();
}
}
