<?php

  require_once 'classes/User.php';
  // require_once 'classes/Register.php';
  
  if (isset($_POST['register'])){
    
    $first= $_POST['firstName'];
    $last = $_POST['lastName'];
    $password = md5($_POST['password']);
    $mail = $_POST['email'];
   
    $register = new User();

    $register->register($first, $last, $password, $mail);

    //require_once 'views/register.template.php';

    require_once view('register');

  }