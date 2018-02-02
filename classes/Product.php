<?php

  class Product extends Connection{
    
    private $id;

    public function __construct() {

      parent::__construct();
      $this->id = $_GET['category'] ?? 1;

    }

    public function getProducts() {

      $sql = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$this->id;
      $result = $this->execute($sql);
      //$result = mysqli_query($this->conn, $sql);

      return $result;

    }

  }

  