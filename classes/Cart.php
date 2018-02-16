<?php

  class Cart extends Connection {

    private $session;

    public function __construct() {

      parent::__construct();
      $this->session = $_SESSION['cart'] ?? null;

    }

    public function getAll(){

      $sql = "SELECT * FROM cart";

      return $this->execute($sql);

    }

    public function singleCart($id){

      $sql = "SELECT * FROM cart WHERE cartid=".$id;

      return $this->execute($sql);
    }

    public function delete(){
      
      $delete = implode(', ' ,$_POST['for-delete-cart']);
      
      $sql = "DELETE FROM cart WHERE cartid in ($delete)";

      $this->execute($sql);

    }

    public function insertCart(){

      $cartid = $_POST['cartid'];
      $userid = $_POST['userid'];

      $sql = "INSERT INTO cart VALUES('$cartid', '$userid')";

      $this->execute($sql);
    }

    public function show() {

      // $this->session = $session;

      // $sql = "SELECT * FROM user INNER JOIN cart ON user.userid = cart.userid INNER JOIN cart_items ON cart.cartid = cart_items.cartid INNER JOIN product ON cart_items.productid = product.productid INNER JOIN image ON image.imageid = product.imageid WHERE user.email ='".$this->session."'";

      $sql = "SELECT * FROM `cart_items` INNER JOIN product ON cart_items.productid=product.productid INNER JOIN image ON image.imageid=product.imageid WHERE cart_items.cartid ='".$this->session."'";

      $result = $this->execute($sql);

      return $result;

    }

    public function insert($session, $productid, $quantity){


      // $this->session = $session;

      $insert_cart = "INSERT INTO cart_items VALUES ('','$session', '$productid', '$quantity')";

      $inserted = $this->execute($insert_cart);

    }

    public function update(){

      $cartid = $_POST['cartid'];
      $updated_cartid = $_POST['update-cartid'];
      $userid = $_POST['update-userid'];

      $sql = "UPDATE cart SET cartid='$updated_cartid', userid='$userid' WHERE cartid='$cartid'";

      return $this->execute($sql);

    }

    public function removeFromCart($id) {

      $sql = "DELETE FROM cart_items WHERE cartid='$this->session' AND id='$id'"; 

      $this->execute($sql);

      return $this->show();

    }
  }