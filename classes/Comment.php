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

    public function getAll(){

      $sql = "SELECT * FROM comment";

      return $this->execute($sql);

    }

    public function delete() {

      $delete = implode(', ', $_POST['for-delete-comment']);

      $sql = "DELETE FROM comment WHERE commentid in ($delete)";

      $this->execute($sql);
    }

    public function getSingle($id) {
      
      $sql = "SELECT * FROM comment WHERE commentid=".$id;

      return $this->execute($sql);
    }

    public function update() {

      $id = $_POST['commentid'];
      $head = $_POST['update-heading'];
      $content = $_POST['update-content'];
      $date = $_POST['update-date'];
      $user = $_POST['update-c-userid'];
      $product = $_POST['update-c-productid'];

      $sql = "UPDATE comment SET heading='$head', content='$content', date_created='$date', userid='$user', productid='$product' WHERE commentid='$id'";

      $this->execute($sql);
    }

    public function insert(){

      $head = $_POST['heading'];
      $content = $_POST['content'];
      $user = $_POST['comment-userid'];
      $product = $_POST['comment-productid'];

      $date = date('Y-m-d H:i:s');

      $sql = "INSERT INTO comment VALUES('', '$head', '$content', '$date', '$user', '$product')";

      $this->execute($sql);

    }

  }