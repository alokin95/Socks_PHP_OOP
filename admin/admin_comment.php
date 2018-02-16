<?php

  require_once 'classes/Comment.php';

  $comment = new Comment;

  if (isset($_POST['comment-delete'])){

    $comment->delete();

  }

  if (isset($_POST['comment-update'])) {

    $comment->update();

  }

  if (isset($_POST['comment-insert'])){


    $comment->insert();
  }

  Header("Location:panel");