<?php
namespace project;
use project\lib\frontController;
require_once "database.php";  
require_once "config.php";  
require_once "autoload.php";  
ob_start();
session_start();
// if(isset($_SESSION['username'])){
//     header('Location:users');
//   }else{
//       }
$frontcontroller = new FrontController();
$frontcontroller -> dispatch();
