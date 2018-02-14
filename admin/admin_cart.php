<?php

  require_once 'classes/Cart.php';
  $cart = new Cart;

  if (isset($_POST['cart-delete'])){
    
    $cart->delete();

  }
  
  if (isset($_POST['cart-insert'])){
    
    $cart->insertCart();

  }

  if (isset($_POST['cart-update'])) {
    
    $cart->update();

  }


  Header("Location:http://localhost:8000/panel");

  
