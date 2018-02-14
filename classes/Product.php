<?php

  class Product extends Connection{
    
    private $categoryid;
    private $productid;

    public function __construct() {

      parent::__construct();
      $this->categoryid = $_GET['category'] ?? 1;
      $this->id = $_GET['productid'] ?? 1;

    }

    public function single($id) {
      
      $sql = "SELECT * FROM product WHERE productid=".$id;

      return $this->execute($sql);
    }

    public function getAll(){

      $sql = "SELECT * FROM product";

      return $this->execute($sql);
    }

    public function getProducts() {

      $sql = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$this->categoryid;
      $result = $this->execute($sql);
      //$result = mysqli_query($this->conn, $sql);

      return $result;

    }

    public function getProductByGender($gender){


      $sql = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.genderid ='$gender' AND p.categoryid='$this->categoryid'";

      $result = $this->execute($sql);

      return $result;
    }

    public function getInfo() {

      

      $sql = "SELECT productid AS id, p.name as productname, description as productdescription, price as productprice, p.categoryid as catid, genderid as genderid, p.imageid as imgid, src, alt FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE productid =".$this->id;

      $result = $this->execute($sql);

      $r = mysqli_fetch_object($result);

      return $r;

    }

    public function insert(){

      $name = $_POST['product'];
      $desc = $_POST['desc'];
      $price = $_POST['price'];
      $cat = $_POST['cat'];
      $gender = $_POST['gender'];
      $image = $_POST['image'];

      $sql = "INSERT INTO product VALUES ('','$name', '$desc', '$price', '$cat', '$gender', '$image')";

      $this->execute($sql);

    }

    public function delete() {

      $delete = implode(', ', $_POST['for-delete-product']);

      $sql = "DELETE FROM product WHERE productiD IN ($delete)";

      $this->execute($sql);

    }

    public function update() {

      $id = $_POST['productid'];
      $name = $_POST['update-name'];
      $desc = $_POST['update-desc'];
      $price = $_POST['update-price'];
      $cat = $_POST['update-cat'];
      $gender = $_POST['update-gender'];
      $image = $_POST['update-image'];

      $sql = "UPDATE product SET name='$name', description='$desc', price='$price', categoryid='$cat', genderid='$gender', imageid='$image' WHERE productid='$id'";

      $this->execute($sql);

    }

  }

  