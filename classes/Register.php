<?php

  class Register extends Connection {

    private $first;
    private $last;
    private $pass;
    private $mail;

    public function __construct($first, $last, $pass, $mail) {

      parent::__construct();
      $this->first = $first;
      $this->last = $last;
      $this->pass = $pass;
      $this->mail = $mail;

    }

    public function registerUser() {

      $sql = "INSERT INTO user VALUES ('','$this->first', '$this->last', '$this->pass', '$this->mail')";

      $result = $this->execute($sql);

      return $result;

    }
  }