<?php
namespace project\controllers;
use project\models\CategoriesModel;
class ArticlesController extends abstractController
{
  public function selectCatId($current_category){
  $cat_id = CategoriesModel::getCatId($current_category);
  }
  public function category_articles($current_category){
  $cat_data = CategoriesModel::getCatArticles($current_category);
  return $cat_data;
  }
//   public function defaultAction(){
//     $this->data['category'] = CategoriesModel::getCatId("");
//     echo "dcsddsd";
//     $this->view();
//     require_once "views/cateories/default.view.php";
//   }
//   public function articleAction(){
//     $this->view();
//   }
}
// global $connection;
// $sql = 'SELECT * FROM categories WHERE name ="'.$this->current_cat.'"';
// $stmt = $connection->prepare($sql);
// $stmt -> execute();
// $catid = $stmt->fetch();
// //return $catid["id"];
// $sql = 'SELECT * FROM articles WHERE cat_id ="'.$catid["id"].'"';
// $stmt = $connection->prepare($sql);
// $stmt -> execute();
// $results = $stmt->fetchAll();
?>
