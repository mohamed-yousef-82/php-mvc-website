<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\SkillsModel;
class SkillsController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->data['skills'] = SkillsModel::select_items("","fetchAll");
      $this->view();
  }
  public function addAction(){
    if (isset($_POST['submit'])){
     $skills = new SkillsModel();
     $skills->skills_one_name     = $this->filterString($_POST["skills_one_name"]);
     $skills->skills_one_perc     = $this->filterString($_POST["skills_one_perc"]);
     $skills->skills_two_name     = $this->filterString($_POST["skills_two_name"]);
     $skills->skills_two_perc     = $this->filterString($_POST["skills_two_perc"]);
     $skills->skills_three_name   = $this->filterString($_POST["skills_three_name"]);
     $skills->skills_three_perc   = $this->filterString($_POST["skills_three_perc"]);
     $skills->skills_four_name    = $this->filterString($_POST["skills_four_name"]);
     $skills->skills_four_perc    = $this->filterString($_POST["skills_four_perc"]);
     $skills->skills_five_name    = $this->filterString($_POST["skills_five_name"]);
     $skills->skills_five_perc    = $this->filterString($_POST["skills_five_perc"]);
     $skills->skills_six_name     = $this->filterString($_POST["skills_six_name"]);
     $skills->skills_six_perc     = $this->filterString($_POST["skills_six_perc"]);
     $skills->skills_seven_name   = $this->filterString($_POST["skills_seven_name"]);
     $skills->skills_seven_perc   = $this->filterString($_POST["skills_seven_perc"]);
     $skills->skills_eight_name   = $this->filterString($_POST["skills_eight_name"]);
     $skills->skills_eight_perc   = $this->filterString($_POST["skills_eight_perc"]);
     if ($skills->insert("")){
        $_SESSION['message'] = 'Data Added Successfuly';
        $this->redirect('/project/admin/skills');
     }
    }
    $this->view();
}
public function editAction(){
  $id= $this->filterInt($this->params[0]);
  $this->data['skills'] = SkillsModel::select_items($id,"fetch");
  if ($this->data ===false){
      $this->redirect('/project/admin/skills');
  }
  if (isset($_POST['submit'])){
   $skills = new SkillsModel();
   $skills->skills_one_name     = $this->filterString($_POST["skills_one_name"]);
   $skills->skills_one_perc     = $this->filterString($_POST["skills_one_perc"]);
   $skills->skills_two_name     = $this->filterString($_POST["skills_two_name"]);
   $skills->skills_two_perc     = $this->filterString($_POST["skills_two_perc"]);
   $skills->skills_three_name   = $this->filterString($_POST["skills_three_name"]);
   $skills->skills_three_perc   = $this->filterString($_POST["skills_three_perc"]);
   $skills->skills_four_name    = $this->filterString($_POST["skills_four_name"]);
   $skills->skills_four_perc    = $this->filterString($_POST["skills_four_perc"]);
   $skills->skills_five_name    = $this->filterString($_POST["skills_five_name"]);
   $skills->skills_five_perc    = $this->filterString($_POST["skills_five_perc"]);
   $skills->skills_six_name     = $this->filterString($_POST["skills_six_name"]);
   $skills->skills_six_perc     = $this->filterString($_POST["skills_six_perc"]);
   $skills->skills_seven_name   = $this->filterString($_POST["skills_seven_name"]);
   $skills->skills_seven_perc   = $this->filterString($_POST["skills_seven_perc"]);
   $skills->skills_eight_name   = $this->filterString($_POST["skills_eight_name"]);
   $skills->skills_eight_perc   = $this->filterString($_POST["skills_eight_perc"]);
   if ($skills->insert($id)){
      $_SESSION['message'] = 'Data Updated Successfuly';
      $this->redirect('/project/admin/skills');
   }

  }
  $this->view();
}
}

?>
