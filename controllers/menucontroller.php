<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\MenuModel;
class menuController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['menu'] = MenuModel::select_items("","fetchAll");
      $this->view();  
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $menu = new MenuModel();
     $menu->menu_one   = $this->filterString($_POST["menu_one"]);
     $menu->menu_two   = $this->filterString($_POST["menu_two"]);
     $menu->menu_three = $this->filterString($_POST["menu_three"]);
     $menu->menu_four  = $this->filterString($_POST["menu_four"]);
     $menu->menu_five  = $this->filterString($_POST["menu_five"]);
     $menu->menu_six   = $this->filterString($_POST["menu_six"]);
     if ($menu->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/menu');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['menu'] = menuModel::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/menu');
  }
  if (isset($_POST['submit'])){
   $menu = new menuModel();
   $menu->menu_one   = $this->filterString($_POST["menu_one"]);
   $menu->menu_two   = $this->filterString($_POST["menu_two"]);
   $menu->menu_three = $this->filterString($_POST["menu_three"]);
   $menu->menu_four  = $this->filterString($_POST["menu_four"]);
   $menu->menu_five  = $this->filterString($_POST["menu_five"]);
   $menu->menu_six   = $this->filterString($_POST["menu_six"]);
   if ($menu->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/menu');
   }
 
  }
  $this->view();
}
}

?>