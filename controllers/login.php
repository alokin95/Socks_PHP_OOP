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
  
  if (isset($_POST['login'])) {


    $user = new User;

    $result = $user->login();

    if ($result) {
      
      // require view('home');

      Header('Location:/index');

    }

  }