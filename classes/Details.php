<?php

  class Details extends Connection{

    private $id;

    public function __construct() {

      parent::__construct();
      $this->id = $_GET['productid'] ?? 1;

    }

    public function getInfo() {

      $sql = "SELECT productid AS id, p.name as productname, description as productdescription, price as productprice, p.categoryid as catid, genderid as genderid, p.imageid as imgid, src, alt FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE productid =".$this->id;

      $result = $this->execute($sql);

      $r = mysqli_fetch_object($result);

      return $r;

    }
  }