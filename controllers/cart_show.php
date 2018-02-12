<?php

  if (!isset($_SESSION['cart'])){

    require view('login');
    
  }
  else {
  
  require_once 'classes/Cart.php';

  $cart = new Cart;

  $result = $cart->show();
  
  require_once view('account', $result);
}