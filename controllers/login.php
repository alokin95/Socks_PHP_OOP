<?php
  
  require_once 'classes/User.php';
  // require_once 'classes/Login.php';

  // if (isset($_POST['register'])) {

  //   $email = $_POST['email'];
  //   $pass = md5($_POST['password']);

  //   $user = new Login($email, $pass);

  //   $login = $user->login();

  //   if ($login) {
      
  //     require view('account', $login);

  //   }

  // }
  
  if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $user = new User;

    $result = $user->login($pass, $email);

    if ($result) {
      
      require view('account', $result);

    }

  }