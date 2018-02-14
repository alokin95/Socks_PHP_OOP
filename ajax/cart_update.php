<?php

  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/bootstrap.php');
  require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/classes/Cart.php');

  $cart = new Cart;
  $id = $_POST['cartid'];
  $result = $cart->singleCart($id);

  $output = [];

  while ($row = mysqli_fetch_object($result)){
    $output[] = $row;
  }

  echo json_encode($output);