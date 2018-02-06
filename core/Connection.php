<?php

  class Connection {
    
    private $conn;

    public function __construct() {
      
      $this->conn = mysqli_connect("localhost", "root", "", "socks");
    
    }

    public function getConnection() {

      return $this->conn;

    }

    public function execute($query) {

      $result = mysqli_query($this->conn, $query);

      return $result;

    }
  }