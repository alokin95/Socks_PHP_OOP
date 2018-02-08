<?php
  session_start();
  $kon = mysqli_connect("localhost", "root", "", "socks");
  $cart_session = $_SESSION['cart'];
  $productid = $_POST['productid'];
  $delete = "DELETE FROM cart_items WHERE cartid='$cart_session' AND id='$productid'";
  mysqli_query($kon, $delete);
  $sql = "SELECT * FROM `cart_items` INNER JOIN product ON cart_items.productid=product.productid INNER JOIN image ON image.imageid=product.imageid WHERE cart_items.cartid ='".$_SESSION['cart']."'";
  $result = mysqli_query($kon, $sql);
  $output = '';
  while ($row = mysqli_fetch_object($result)) {
    $output.="<div class='item flex-row'>
    <div class='item-left'>
      <img src='".$row->src."' alt='".$row->alt."'>
    </div> 
    <div class='item-mid'>".$row->name."<br/>
      $".$row->price."
    </div>
    <div class='item-right'>
    <button class='delete'      value='".$row->id."'>Remove</button>
    </div>
  </div>";
  }
  echo $output;