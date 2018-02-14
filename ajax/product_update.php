<?php

  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/Product.php');
  
  $product = new Product;
  $id = $_POST['productid'];
  $result = $product->single($id);
  
  $output = [];

  while ($row = mysqli_fetch_object($result)){
    $output[] = $row;
  }

  echo json_encode($output);

