<?php

  require_once 'classes/Product.php';
  $product = new Product;

  if (isset($_POST['product-delete'])){

    $product->delete();

  }

  if (isset($_POST['product-update'])) {

    $product->update();

  }

  if (isset($_POST['product-insert'])){


    $product->insert();
  }

  Header("Location:http://localhost:8000/panel");

