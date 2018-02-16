<?php

  session_start();

  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/Cart.php');

  $productid = $_POST['productid'];

  $cart = new Cart;

  $result = $cart->removeFromCart($productid);

  $output = [];
  while ($row = mysqli_fetch_object($result)) {
    $output [] = $row;
  }
  echo json_encode($output);