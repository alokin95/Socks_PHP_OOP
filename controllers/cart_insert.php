<?php

  require_once 'classes/Cart.php';

  if (!isset($_SESSION['cart'])){
    echo "You must login first";
  }
  else {
  $cart_session = $_SESSION['cart'];

  $cart = new Cart;

  $cart->insert($cart_session, $_POST['productid'], $_POST['quantity']);


  $result = $cart->show($cart_session);
  
  require_once view('account', $result);
}