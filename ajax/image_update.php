<?php

  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/Image.php');
  
  $image = new Image;
  $id = $_POST['imageid'];
  $result = $image->single($id);
  
  $output = [];

  while ($row = mysqli_fetch_object($result)){
    $output[] = $row;
  }

  echo json_encode($output);

