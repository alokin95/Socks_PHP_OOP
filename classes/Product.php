<?php

  class Product {
    
    private $conn;
    private $id;

    public function __construct($conn) {

      $this->conn = $conn;
      $this->id = $_GET['category'] ?? 1;

    }

    public function getProducts() {

      $sql = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$this->id;

      $result = mysqli_query($this->conn, $sql);

      return $result;

    }

  }