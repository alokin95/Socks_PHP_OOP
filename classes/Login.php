<?php

  class Login extends Connection {
    
    private $email;
    private $password;

    public function __construct($email, $password) {

      parent::__construct();
      $this->email = $email;
      $this->password = $password;

    }

    public function login(){

      $sql = "SELECT * FROM user WHERE email = '$this->email' AND password = '$this->password'";

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

  }