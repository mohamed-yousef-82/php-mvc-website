<?php
namespace project\controllers;
// use project\models\LogoModel;
// use project\models\MenuModel;
// use project\models\contactsModel;
// use project\models\socialModel;
// use project\models\sliderModel;
class pagesController extends abstractController
{
  public function defaultAction(){
    // $this->data['contacts'] = ContactsModel::select_items("","fetch");
    // $this->data['logo'] = LogoModel::select_items("","fetch");
    // $this->data['menu'] = MenuModel::select_items("","fetch");
    // $this->data['social'] = SocialModel::select_items("","fetchAll");
    $this->view();
  }
  public function contactAction(){
    $this->view();
  }
  public function aboutAction(){
    $this->view();
  }
}

?>
