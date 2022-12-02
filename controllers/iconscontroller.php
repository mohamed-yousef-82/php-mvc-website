<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\IconsModel;
class iconsController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\IconsModel";
  public function defaultAction(){
      $this->data['icons'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->title = $this->filterString($_POST["title"]);
     $current_data->description = $this->filterString($_POST["description"]);
     $current_data->icon = $this->filterString($_POST["icon"]);
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/icons');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['icons'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/icons');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->title = $this->filterString($_POST["title"]);
   $current_data->description = $this->filterString($_POST["description"]);
   $current_data->icon = $this->filterString($_POST["icon"]);
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/icons');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/project/admin/icons');
   }
}
}

?>
