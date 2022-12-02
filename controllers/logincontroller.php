<?php
namespace project\controllers;
use project\lib\FrontController;
use project\lib\InputFilter;
use project\lib\Helper;
use project\models\LoginModel;
class loginController extends abstractController
{
  use InputFilter;
  use Helper;
  public function defaultAction(){
      $this->view();
      if (isset($_POST['submit'])){
     $this->loginAction();
    }
  }

  public function loginAction(){
    $login_user = $this->filterString($_POST['user']);
    $login_pass = sha1($this->filterString($_POST['pass']));
    $login = new LoginModel();
    $login->Login($login_user,$login_pass);
}
}

?>
