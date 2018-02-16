<?php

  require_once 'classes/Product.php';

  $product = new Product;

  $row = $product->top();

  require_once view('home', $row);