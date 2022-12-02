<?php
namespace project\controllers;
class logoutController
{
public function __construct(){
    session_destroy();
    header('Location:login');
}

}

 ?>
