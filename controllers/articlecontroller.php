<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\lib\Upload;
use project\models\ArticleModel;
use project\models\CategoryModel;
class ArticleController extends abstractController
{
  use InputFilter;
  use Helper;
  public $current_model = "project\models\ArticleModel";
  public function defaultAction(){
      $this->data['article'] = $this->current_model::select_join_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    $this->data['category'] = CategoryModel::select_items("","fetchAll");
    if (isset($_POST['submit'])){
     $current_data = new $this->current_model();
     $current_data->title = $this->filterString($_POST["title"]);
     $current_data->details = $_POST["details"];
     $current_data->cat_id = $this->filterString($_POST["cat_id"]);
     $upload = new Upload();
     $current_data->file = $upload->filesrc;
     if ($current_data->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/article');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['article'] = $this->current_model::select_items($id,"fetch");
  $this->data['category'] = CategoryModel::select_items("","fetchAll");
  if ($this->data ===false){
      $this->redirect('/project/admin/article');
  }
  if (isset($_POST['submit'])){
   $current_data = new $this->current_model();
   $current_data->title = $this->filterString($_POST["title"]);
   $current_data->details = $_POST["details"];
   $current_data->cat_id = $this->filterString($_POST["cat_id"]);
   $upload = new Upload();
   $current_data->file = $upload->filesrc;
   if ($current_data->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/article');
   }

  }
  $this->view();
}
public function deleteAction(){
  $id= $this->filterInt($this->params[0]);
  $current_data = $this->current_model::delete($id);
  if ($current_data===true){
      $_SESSION['message'] = 'Data Deleted Successfuly';
      $this->redirect('/project/admin/article');
   }

}
}

?>
