<?php

  require_once 'classes/Register.php';
  
  if (isset($_POST['register'])){
    
    $first= $_POST['firstName'];
    $last = $_POST['lastName'];
    $password = md5($_POST['password']);
    $mail = $_POST['email'];
   
    $register = new Register($first, $last, $password, $mail);

    $reult = $register->registerUser();



  }