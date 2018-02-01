<?php
  require_once 'classes/Product.php';

  $product = new Product($conn);
  
  $result = $product->getProducts();

 // $row = mysqli_fetch_object($result);

  require_once view('products',$result);