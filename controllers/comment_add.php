<?php

  require_once 'classes/Comment.php';

    
    
    if (isset($_POST['review'])){
      $userid = $_SESSION['userid'];
      $heading = $_POST['heading'];
      $content = $_POST['content'];
      $productid = $_POST['productid'];

      $comm = new Comment;

      $comm->addComment($heading, $content, $userid, $productid);

  }



require_once view('home');