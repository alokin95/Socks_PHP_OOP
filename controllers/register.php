<?php

  require_once 'classes/User.php';

  if (isset($_POST['register'])){
    
    
   
    $user = new User;

    $user->register();

    //require_once 'views/register.template.php';

    require_once view('register');

  }