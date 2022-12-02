<?php
use project\models\LogoModel;
use project\models\MenuModel;
use project\models\contactsModel;
use project\models\socialModel;
use project\models\sliderModel;
use project\models\aboutModel;
use project\models\categoryModel;
use project\models\IconsModel;
use project\models\CounterModel;
use project\models\ClientsModel;
use project\models\SkillsModel;
use project\models\PhotosfilterModel;
use project\models\PhotosModel;
use project\models\TeamModel;
use project\models\PageModel;
use project\models\HomepageModel;
use project\controllers\abstractController;
class header extends abstractController
{
  protected $data = [];
  public function __construct(){
    $this->data['contacts'] = ContactsModel::select_items("","fetch");
    $this->data['logo'] = LogoModel::select_items("","fetch");
    $this->data['menu'] = MenuModel::select_items("","fetch");
    $this->data['social'] = SocialModel::select_items("","fetchAll");
    $this->data['slider'] = SliderModel::select_items("","fetchAll");
    $this->data['about'] = AboutModel::select_items("","fetch");
    $this->data['category'] = CategoryModel::select_items("","fetchAll");
    $this->data['icons'] = IconsModel::select_items("","fetchAll");
    $this->data['counter'] = CounterModel::select_items("","fetchAll");
    $this->data['clients'] = ClientsModel::select_items("","fetchAll");
    $this->data['skills'] = SkillsModel::select_items("","fetch");
    $this->data['photosfilter'] = PhotosfilterModel::select_items("","fetchAll");
    $this->data['photos'] = PhotosModel::select_join_items("","fetchAll");
    $this->data['team'] = TeamModel::select_items("","fetchAll");
    $this->data['page'] = PageModel::select_items("","fetchAll");
    $this->data['homepage'] = HomepageModel::select_items("","fetch");
  }

}

?>
