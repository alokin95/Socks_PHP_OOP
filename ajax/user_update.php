<?php

  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/User.php');
  
  $user = new User;
  $id = $_POST['userid'];
  $result = $user->getUser($id);
  
  $output = [];

  while ($row = mysqli_fetch_object($result)){
    $output[] = $row;
  }

  echo json_encode($output);

