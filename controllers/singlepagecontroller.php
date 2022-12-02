<?php
namespace project\controllers;
use project\models\SinglepageModel;
class SinglepageController extends abstractController
{
  public function article_details($current_page,$current_page_id){
  $page_data = SinglepageModel::getArticle($current_page,$current_page_id);
  return $page_data;
  }
}

?>
