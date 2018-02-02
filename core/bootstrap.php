<?php


  // $config = require_once 'config.php';

  require_once 'Connection.php';

  $conn = new Connection();

  function view($template, $data) {

    $result = $data;
    return 'views/'.$template.'.template.php';
    
  }