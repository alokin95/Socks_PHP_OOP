<?php

  require_once "classes/User.php";
  $user = new User;

  if (isset($_POST['user-delete'])){
    
    $user->delete();

  }

  if (isset($_POST['user-update'])){

    $user->update();

  }


  if (isset($_POST['user-insert'])){
    
    $user->insert();

  }


  Header("Location:panel");