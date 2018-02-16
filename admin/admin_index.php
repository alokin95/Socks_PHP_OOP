<?php 

  if ($_SESSION['role']!=1){
    header("Location:index");
  }
  
  require 'classes/Cart.php';
  require 'classes/User.php';
  require 'classes/Product.php';
  require 'classes/Image.php';
  require 'classes/Comment.php';

  //CART
  $cart = new Cart;

  $result = $cart->getAll();

  $data['cart'] = [];

  while ($row = mysqli_fetch_object($result)) {
    $data['cart'][] = $row;
  }

  //USER
  $user = new User;

  $result = $user->getAll();

  $data['user'] = [];

  while ($row = mysqli_fetch_object($result)){
    $data['user'][] = $row;
  }
  

  //PRODUCT
  $product = new Product;

  $result = $product->getAll();

  $data['product'] = [];

  while ($row = mysqli_fetch_object($result)){
    $data['product'][] = $row;
  }

  
  //IMAGE 
  $image = new Image;

  $result = $image->getAll();

  $data['image'] = [];

  while ($row = mysqli_fetch_object($result)) {
    $data['image'][] = $row;
  }


  //COMMENT 

  $comment = new Comment;

  $result = $comment->getAll();

  $data['comment'] = [];

  while ($row = mysqli_fetch_object($result)) {
    $data['comments'][] = $row;
  }

  require view('admin/admin', extract($data));

  //header("Refresh:0");