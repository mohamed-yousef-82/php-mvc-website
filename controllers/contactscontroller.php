<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\ContactsModel;
class ContactsController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['contacts'] = ContactsModel::select_items("","fetch");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $contacts = new ContactsModel();
     $contacts->phone = $this->filterString($_POST["phone"]);
     $contacts->email = $this->filterString($_POST["email"]);
     $contacts->address = $this->filterString($_POST["address"]);
     $contacts->googlemap = $_POST["googlemap"];
     $upload = new Upload();
     $contacts->file = $upload->filesrc;
     if ($contacts->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/contacts');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['contacts'] = ContactsModel::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/contacts');
  }
  if (isset($_POST['submit'])){
   $contacts = new ContactsModel();
   $contacts->phone = $this->filterString($_POST["phone"]);
   $contacts->email = $this->filterString($_POST["email"]);
   $contacts->address = $this->filterString($_POST["address"]);
   $contacts->googlemap = $_POST["googlemap"];
   $upload = new Upload();
   $contacts->file = $upload->filesrc;
   if ($contacts->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/contacts');
   }

  }
  $this->view();
}

}

?>
