<?php


  // $config = require_once 'config.php';

  require_once 'Connection.php';

  $conn = new Connection();

  require_once 'Route.php';

  function view($template, $data = '1') {

    $result = $data;
    return 'views/'.$template.'.template.php';
    
  }