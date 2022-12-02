<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\HomepageModel;
class HomepageController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['homepage'] = HomepageModel::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $Homepage = new HomepageModel();
     $Homepage->counter_title      = $this->filterString($_POST["counter_title"]);
     $Homepage->counter_desc       = $this->filterString($_POST["counter_desc"]);
     $Homepage->photos_title       = $this->filterString($_POST["photos_title"]);
     $Homepage->photos_desc        = $this->filterString($_POST["photos_desc"]);
     $Homepage->skills_title       = $this->filterString($_POST["skills_title"]);
     $Homepage->skills_desc        = $this->filterString($_POST["skills_desc"]);
     $Homepage->team_title         = $this->filterString($_POST["team_title"]);
     $Homepage->team_desc          = $this->filterString($_POST["team_desc"]);
     $Homepage->clients_title      = $this->filterString($_POST["clients_title"]);
     $Homepage->clients_desc       = $this->filterString($_POST["clients_desc"]);
     $Homepage->copyright          = $this->filterString($_POST["copyright"]);
     if ($Homepage->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/homepage');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['homepage'] = HomepageModel::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/homepage');
  }
  if (isset($_POST['submit'])){
   $Homepage = new HomepageModel();
   $Homepage->counter_title      = $this->filterString($_POST["counter_title"]);
   $Homepage->counter_desc       = $this->filterString($_POST["counter_desc"]);
   $Homepage->photos_title       = $this->filterString($_POST["photos_title"]);
   $Homepage->photos_desc        = $this->filterString($_POST["photos_desc"]);
   $Homepage->skills_title       = $this->filterString($_POST["skills_title"]);
   $Homepage->skills_desc        = $this->filterString($_POST["skills_desc"]);
   $Homepage->team_title         = $this->filterString($_POST["team_title"]);
   $Homepage->team_desc          = $this->filterString($_POST["team_desc"]);
   $Homepage->clients_title      = $this->filterString($_POST["clients_title"]);
   $Homepage->clients_desc       = $this->filterString($_POST["clients_desc"]);
   $Homepage->copyright          = $this->filterString($_POST["copyright"]);
   if ($Homepage->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/homepage');
   }

  }
  $this->view();
}
}

?>
