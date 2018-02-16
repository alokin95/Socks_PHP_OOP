<?php

  if (!isset($_SESSION['cart'])){

    Header("Location:login");
    
  }
  else {
  
  require_once 'classes/Cart.php';

  $cart = new Cart;

  $result = $cart->show();
  
  require_once view('account', $result);
}