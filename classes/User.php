<?php

  class User extends Connection{


    public function __construct() {

      parent::__construct();

    }

     public function login($pass, $email){

      $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$pass'";

      $result = $this->execute($sql);

      if (mysqli_num_rows($result) == 1){

        $user = mysqli_fetch_object($result);

        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->roleid;
        
        return $result;
        
      }
      else {
        echo "GRESKA";
      }

     }

     public function register($first, $last, $pass, $email) {

      $sql = "INSERT INTO user VALUES ('','$first', '$last', '$pass', '$email','2')";

      $result = $this->execute($sql);

      return $result;

    }

    public function showCart($session) {

      $sql = "SELECT * FROM user INNER JOIN cart ON user.userid = cart.userid INNER JOIN cart_items ON cart.cartid = cart_items.cartid INNER JOIN product ON cart_items.productid = product.productid INNER JOIN image ON image.imageid = product.imageid WHERE user.email ='".$session."'";

      $result = $this->execute($sql);

      return $result;

    }
  }