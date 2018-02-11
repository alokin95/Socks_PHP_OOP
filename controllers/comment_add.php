<?php

  require_once 'classes/Comment.php';

  if (isset($_SESSION['userid'])){

    $productid = $_GET['productid'];
    
    if (isset($_POST['review'])){

      $heading = $_POST['heading'];
      $content = $_POST['content'];

      $comm = new Comment;

      $comm->addComment($heading, $content, $productid, $userid);

  }

}

  require_once view('home');