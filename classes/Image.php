<?php

  class Image extends Connection {

    public function __construct() {

      parent::__construct();

    }

    public function single($id) {

      $imageid = $_POST['imageid'];

      $sql = "SELECT * FROM image WHERE imageid ='$imageid'";

      return $this->execute($sql);

    }

    public function getAll() {

      $sql = "SELECT * FROM image";

      return $this->execute($sql);

    }

    public function insert() {
      
      $alt = $_POST['alt'];

      $image=$_FILES['src']['name'];
		  $tmp=$_FILES['src']['tmp_name'];
		  $file=$_FILES['src']['type'];
    
      $path = "assets/img/products/".$image;
      
        if (move_uploaded_file($tmp, $path)){
          $sql = "INSERT INTO image VALUES ('','$path', '$alt')";

        $this->execute($sql);
        }
    }
      
        public function update() {

          $id = $_POST['imageid'];
          $src = $_POST['update-src'];
          $alt = $_POST['update-alt'];

          $sql = "UPDATE image SET src='$src', alt='$alt' WHERE imageid='$id'";

          $this->execute($sql);

        }
      

    

    public function delete() {

      $delete = implode(', ', $_POST['for-delete-image']);

      $sql = "DELETE FROM image WHERE imageid IN  ($delete)";

      $this->execute($sql);

    }
  }