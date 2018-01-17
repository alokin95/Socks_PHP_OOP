<?php

  $get_product_by_id = "SELECT productid AS id, p.name as productname, description as productdescription, price as productprice, p.categoryid as catid, subcategoryid as subcatid, p.imageid as imgid, src, alt FROM products p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE productid =" .$_GET['productid'];

  $product = mysqli_query($conn, $get_product_by_id);

  $product_row = mysqli_fetch_array($product);

 
  ?>

<div class='flex-row product-details'>
  <div class='product-image'>

    <?= "<img src='".$product_row['src']."' alt='".$product_row['alt']."'>";?>

    <div class='product-description'>
      <?= "<p>".$product_row['productdescription']."</p>";?>
    </div>

  </div>
  
  <div class='product-right'>

    <?= "<h1>" .$product_row['productname']."</h1>";?>

    <hr>

    <?= "<h1>$".$product_row['productprice']."</h1>";?>
    <h1>ADD TO CART</h1>
  </div>
</div>