<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\PageModel;
class PageController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\PageModel";
  public function defaultAction(){
      $this->data['page'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->title = $this->filterString($_POST["title"]);
     $current_data->details = $this->filterString($_POST["details"]);
     $upload = new Upload();
     $current_data->file = $upload->filesrc;
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/page');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['page'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/page');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->title = $this->filterString($_POST["title"]);
   $current_data->details = $this->filterString($_POST["details"]);
   $upload = new Upload();
   $current_data->file = $upload->filesrc;
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/page');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/project/admin/page');
   }

}
}

?>
