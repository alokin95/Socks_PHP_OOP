<?php

  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/Product.php');
  // require __DIR__ . "/classes/Product.php";
  // require __DIR__ . "/core/bootstrap.php";

  $product = new Product;

  $gender = $_POST['gender'];

  $result = $product->getProductByGender($gender);;

  $output=[];
  while ($r = mysqli_fetch_object($result)){
   $output[]=$r;
  }
  echo json_encode($output);