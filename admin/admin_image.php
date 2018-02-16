<?php

  require_once 'classes/Image.php';
  $image = new Image;

  if (isset($_POST['image-delete'])){

    $image->delete();

  }

  if (isset($_POST['image-update'])) {

    $image->update();

  }

  if (isset($_POST['image-insert'])){

    $image->insert();
    
  }

  Header("Location:panel");

