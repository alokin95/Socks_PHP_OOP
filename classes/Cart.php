<?php

  class Cart extends Connection {

    private $session;

    public function __construct() {

      parent::__construct();

    }

    public function show($session) {

      $this->session = $session;

      $sql = "SELECT * FROM user INNER JOIN cart ON user.userid = cart.userid INNER JOIN cart_items ON cart.cartid = cart_items.cartid INNER JOIN product ON cart_items.productid = product.productid INNER JOIN image ON image.imageid = product.imageid WHERE user.email ='".$this->session."'";

      $result = $this->execute($sql);

      return $result;

    }

    public function insert(){

      

    }
  }