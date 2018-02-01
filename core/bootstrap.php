<?php


$config = require_once 'config.php';

require_once 'Connection.php';

$conn = Connection::make($config['database']);

function view($template, $data) {

  $result = $data;
  require 'views/'.$template.'.template.php';
}