<?php

  class User extends Connection{

    private $first;
    private $last;
    private $pass;
    private $email;
    // private $session;

    public function __construct() {

      parent::__construct();

    }

     public function login($pass, $email){

      $this->email = $email;
      $this->pass = $pass;

      $sql = "SELECT * FROM user WHERE email = '$this->email' AND password = '$this->pass'";

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

      $this->first = $first;
      $this->last = $last;
      $this->pass = $pass;
      $this->email = $email;

      $check_existing = "SELECT * FROM user WHERE email ='$this->email'";

      $checked = $this->execute($check_existing);

      if ($checked){
        echo "Email already in use";
      }
      else {

        $register = "INSERT INTO user VALUES ('','$this->first', '$this->last', '$this->pass', '$this->email','2')";
        // $sql = "INSERT INTO user VALUES ('','$first','$last','$pass','$email','2')";

        $registered = $this->execute($register);

        $last_id = mysqli_insert_id($this->getConnection());

        if ($registered) {

        $cart_sql = "INSERT INTO cart VALUES ('','$last_id')";
        $this->execute($cart_sql);

      }

      }
      

    }

    // public function showCart($session) {

    //   $this->session = $session;

    //   $sql = "SELECT * FROM user INNER JOIN cart ON user.userid = cart.userid INNER JOIN cart_items ON cart.cartid = cart_items.cartid INNER JOIN product ON cart_items.productid = product.productid INNER JOIN image ON image.imageid = product.imageid WHERE user.email ='".$this->session."'";

    //   $result = $this->execute($sql);

    //   return $result;

    // }
  }