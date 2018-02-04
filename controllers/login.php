<?php

  require_once 'classes/Login.php';

  if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $user = new Login($email, $pass);

    $user->login();

    if ($user){
      var_dump($_SESSION);
    }

  }