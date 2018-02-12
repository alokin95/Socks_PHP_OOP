<?php

  class Comment extends Connection {

    private $productid;

    public function __construct(){

      parent::__construct();

      $this->productid = $_GET['productid'] ?? 1;

    }

    public function addComment($heading, $content, $userid, $productid){

      $date = date('Y-m-d H:i:s');

      $insert_comment = "INSERT INTO comment VALUES('', '$heading', '$content', '$date', '$userid', '$productid')";

      $this->execute($insert_comment);

    }

    public function showComment(){

      $sql = "SELECT * FROM comment INNER JOIN user ON comment.userid = user.userid WHERE productid =".$this->productid;
      $result = $this->execute($sql);

      return $result;

    }
  }