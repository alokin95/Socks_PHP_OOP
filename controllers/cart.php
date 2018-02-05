<?php

  // require_once 'classes/Cart.php';

  // $cart = new Cart;

  // $result = $cart->showCart($_SESSION['email']);

  // require_once view('account', $result);

  require_once 'classes/User.php';

  $user = new User;

  $result = $user->showCart($_SESSION['email']);

  require_once view('account', $result);
