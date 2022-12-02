<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\AboutModel;
class AboutController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\AboutModel";
  public function defaultAction(){
      $this->data['about'] = $this->current_model::select_items("","fetch");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->name = $this->filterString($_POST["name"]);
     $current_data->details = $this->filterString($_POST["details"]);
     $current_data->video = $_POST["video"];
     $upload = new Upload();
     $current_data->file = $upload->filesrc;
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/about');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['about'] = $this->current_model::select_items("","fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/about');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->name = $this->filterString($_POST["name"]);
   $current_data->details = $this->filterString($_POST["details"]);
   $current_data->video = $_POST["video"];
   $upload = new Upload();
   $current_data->file = $upload->filesrc;
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated successfuly';
      $this->redirect('/project/admin/about');
   }

  }
  $this->view();
}

}

?>
