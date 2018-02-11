<?php

  class Comment extends Connection {

    private $productid;

    public function __construct(){

      parent::__construct();

      $this->productid = $_GET['productid'] ?? 1;

    }

    public function addComment($heading, $content, $userid){

      $insert_comment = "INSERT INTO comment VALUES('', '$heading', '$content', '', '$userid', '$this->productid')";
      $this->execute($insert_comment);

    }

    public function showComment(){

      $sql = "SELECT *FROM comment WHERE productid =".$this->productid;
      $result = $this->execute($sql);

      $row = mysqli_fetch_object($result);

      return $row;

    }
  }