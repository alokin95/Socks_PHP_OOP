<?php

  class User extends Connection{

    private $first;
    private $last;
    private $pass;
    private $mail;

    // public function __construct($first, $last, $pass, $mail) {

    //   $this->first = $first;
    //   $this->last = $last;
    //   $this->pass = $pass;
    //   $this->email = $email;

    // }

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
      $this->pass = $pass;
      $this->last = $last;
      $this->email = $email;

      $sql = "INSERT INTO user VALUES ('','$this->first', '$this->last', '$this->pass', '$this->mail','2')";

      $result = $this->execute($sql);

      return $result;

    }
  }