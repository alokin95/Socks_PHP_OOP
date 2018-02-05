<?php

echo "WELCOME ". $_SESSION['email'];

   $sql = "SELECT * FROM user INNER JOIN cart ON user.userid = cart.userid INNER JOIN cart_items ON cart.cartid = cart_items.cartid INNER JOIN product ON cart_items.productid = product.productid INNER JOIN image ON image.imageid = product.imageid WHERE user.email = ".$_SESSION['email'];

   $result = new Connection;

   var_dump($result);
  //  while ($r = mysqli_fetch_object($rows)){
  //    echo "<img src='".$r->src."'>";
  //  }

   