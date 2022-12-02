<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\UsersModel;
class usersController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\UsersModel";
  public function defaultAction(){
      $this->data['users'] = $this->current_model::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $user = new $this->current_model();
     $user->name = $this->filterString($_POST["name"]);
     $user->password = sha1($_POST["password"]);
     $user->email = $this->filterString($_POST["email"]);
     $upload = new Upload();
     $user->file = $upload->filesrc;
     if ($user->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/users');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['users'] = $this->current_model::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/users');
  }
  if (isset($_POST['submit'])){
   $user = new $this->current_model();
   $user->name = $this->filterString($_POST["name"]);
   $user->password = sha1($_POST["password"]);
   $user->password = empty($_POST['password'])?$_POST['oldpassword']:sha1($this->filterInt($_POST["password"]));
   $user->email = $this->filterInt($_POST["email"]);
   $upload = new Upload();
   $user->file = $upload->filesrc;
   if ($user->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/users');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $user = $this->current_model::delete($id);
  if ($user===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/project/admin/users');
   }

}
}

?>
