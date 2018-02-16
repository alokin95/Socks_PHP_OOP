<?php
  
  
  require_once 'classes/User.php';
  
  if (isset($_POST['login'])) {

    $user = new User;

    $result = $user->login();

    if ($result) {
      
      Header('Location:/index');

    }

  }
