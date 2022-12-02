<?php
namespace project\Controllers;
use project\lib\FrontController;

/**
 * AbstractController Class
 */
class AbstractController
{

protected $controller;
protected $action;
protected $params;
protected $default_lang = "en";
private $lang;
private $cat="categories";
private $page="singlepage";
private $current_cat;
protected $current_cat_id;
private $current_article;
protected $current_article_id;
private $current_page;
private $current_page_id;
protected $data = [];
  public function notFoundAction()
  {
       $this->view();
  }
  public function setController($controllerName)
  {
       $this->controller = $controllerName;
  }
  public function setAction($classaction)
  {
       $this->action = $classaction;
  }
  public function setCategory($category)
  {
    $this->current_cat = $category;
  }
  public function setCategoryId($category_id)
  {
    $this->current_cat_id = $category_id;
  }
  public function setArticle($article)
  {
    $this->current_article = $article;
  }
  public function setArticleId($articleId)
  {
    $this->current_article_id = $articleId;
  }
  public function setPage($page)
  {
    $this->current_page = $page;
  }
  public function setPageId($pageId)
  {
    $this->current_page_id = $pageId;
  }
  public function setParams($params)
  {
       $this->params = $params;
  }
  public function setLang($lang)
  {
       $this->lang = $lang;
  }
  protected function view()
  {
       if($this->action == FrontController::NOT_FOUND_ACTION){
        require_once VIEWS_NOTFOUND_PATH . 'notfound' . "\\" . 'notfound.view.php';
    }else{
      $path = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
      $path = explode("/",trim($path,"/"));
      if (in_array("admin", $path) || in_array("login", $path)){
        if (end($path) == "admin"){
          $this->controller ="admin";
        }

          $view = VIEWS_ADMIN_PATH . $this->controller . "\\" . $this->action . '.view.php';
  }else{
    $view = VIEWS_UI_PATH . $this->controller . "\\" . $this->action . '.view.php';
  }
    if(file_exists($view)){
      extract($this->data);
      if ($this->lang == ""){
        $this->lang = $this->default_lang;
      }
        require_once "languages/$this->lang.php";

      if (in_array("admin", $path)){
        if(isset($_SESSION['username'])){
          require_once "views/admin/admin/header.php";
          require_once "views/admin/admin/nav.php";
            require_once $view;
          require_once "views/admin/admin/footer.php";
          }else{
            header('Location:'.DOMAINNAME.'/project/login');
          }
          }elseif (end($path) == "login"){
            require_once $view;
          }else{

            require_once "views/ui/index/header.php";

            // if ($this->controller = "category"){
            //   echo $this->action;
            //   $this->action = "article";
            //   echo $this->action;
            //   }
            // if (end($path) == $this->current_page){
            //   $current_page = $this->current_page;
            //   require_once "controllers/singlepagecontroller.php";
            //   $page_controller = new singlepageController();
            //   $current_page_id = $this->current_page_id;
            //   $page_controller = $page_controller->article_details($current_page,$current_page_id);
            //    require_once "views/ui/singlepage/singlepage.view.php";
            //  }
            //  elseif (end($path) == "categories"){
            //    require_once "views/ui/categories/default.view.php";
            // }elseif (end($path) == $this->current_cat){
            //   $current_category = urldecode($this->current_cat);
            //   // require_once "controllers/categorycontroller.php";
            //   // $cats_controller = new CategoryController();
            //   // $cats_controller = $cats_controller->category_articles($current_category);
            //   //  require_once "views/ui/category/category.view.php";
            //    require_once $view;
            //  }elseif (end($path) == $this->current_article){
            //    $current_article = urldecode($this->current_article);
            //    $current_article = explode("-",$current_article);
            //    $current_article_id = $this->current_article_id;
            //    // require_once "controllers/categoriescontroller.php";
            //    // $cats_controller = new CategoriesController();
            //    // $cats_controller = $cats_controller->article_details($current_article,$current_article_id);
            //    //  require_once "views/ui/categories/article.view.php";
            //    require_once $view;
            //   }else{
               require_once $view;

             // }




            require_once "views/ui/index/footer.php";
          }


       }else{
         require_once VIEWS_NOTFOUND_PATH . 'notfound' . "\\" . 'noview.view.php';
       }

  }

}
}

 ?>
