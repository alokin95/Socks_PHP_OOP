<?php
  
  if(empty($_REQUEST['category']))
   {
     $_GET['category'] = 1;
   }

  require_once 'classes/Product.php';

  $product = new Product();
  
  $result = $product->getProducts();

  require view('products', $result);
