<?php

  class Product extends Connection{
    
    private $categoryid;
    private $productid;

    public function __construct() {

      parent::__construct();
      $this->categoryid = $_GET['category'] ?? 1;
      $this->id = $_GET['productid'] ?? 1;

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

  }

  