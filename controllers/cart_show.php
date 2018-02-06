<?php

  // require_once 'classes/Cart.php';

  // $cart = new Cart;

  // $result = $cart->showCart($_SESSION['email']);

  // require_once view('account', $result);

  require_once 'classes/Cart.php';

  $cart = new Cart;

  $cart_session = $_SESSION['cart'];

  $result = $cart->show($cart_session);

  require_once view('account', $result);
