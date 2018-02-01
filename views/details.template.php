<?php

  // $get_product_by_id = "SELECT productid AS id, p.name as productname, description as productdescription, price as productprice, p.categoryid as catid, subcategoryid as subcatid, p.imageid as imgid, src, alt FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE productid =" .$_GET['productid'];

  //$product = mysqli_query($conn, $get_product_by_id);

  //$product_row = mysqli_fetch_array($product);

  ?>

<div class='flex-row product-details'>
  <div class='product-image'>

    <?= "<img src='/".$result->src."' alt='".$result->alt."'>";?>

    <div class='product-description'>
      <?= "<p>".$result->productdescription."</p>";?>
    </div>

  </div>
  
  <div class='product-right'>

    <?= "<h1>" .$result->productname."</h1>";?>

    <hr>

    <?= "<h1>$".$result->productprice."</h1>";?>
    <h1>ADD TO CART</h1>
  </div>
</div>