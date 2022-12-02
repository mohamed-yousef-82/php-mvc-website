<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\LogoModel;
class logoController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['logo'] = LogoModel::select_items("","fetch");
      $this->view();  
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $logo = new LogoModel();
     $logo->name = $this->filterString($_POST["name"]);
     $logo->slogan = $this->filterString($_POST["slogan"]);
     $upload = new Upload();
     $logo->file = $upload->filesrc;
     if ($logo->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/logo');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['logo'] = LogoModel::select_items("","fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/logo');
  }
  if (isset($_POST['submit'])){
   $logo = new LogoModel();
   $logo->name = $this->filterString($_POST["name"]);
   $logo->slogan = $this->filterString($_POST["slogan"]);
   $upload = new Upload();
   $logo->file = $upload->filesrc;
   if ($logo->insert($id)){
      $_SESSION['message'] = 'Data Updated successfuly';
      $this->redirect('/project/admin/logo');
   }
 
  }
  $this->view();
}

}

?>