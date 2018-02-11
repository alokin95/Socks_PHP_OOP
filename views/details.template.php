<?php

  // $get_product_by_id = "SELECT productid AS id, p.name as productname, description as productdescription, price as productprice, p.categoryid as catid, subcategoryid as subcatid, p.imageid as imgid, src, alt FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE productid =" .$_GET['productid'];

  //$product = mysqli_query($conn, $get_product_by_id);

  //$product_row = mysqli_fetch_array($product);
  ?>

 
<div class='flex-row product-details'>
  <div class='product-image'>

    <?= "<img src='/".$product->src."' alt='".$product->alt."'>";?>

  </div>
  
  <div class='product-right'>

    <?= "<h1>" .$product->productname."</h1>";?>

    <hr>
    <form method='POST' action='/account'>
      <?= "<h1>$".$product->productprice."</h1>";?>
      <input type="number" min='1' value='1' name='quantity'><br/>
      <input type='hidden' name='price' value='<?=$product->productprice?>' readonly>
      <input type='hidden' name='productid' value='<?=$product->id?>' readonly>
      <button name='add'><h1>Add to cart</h1></button>
    </form>
  </div>
</div>



<div class='product-description'>
      <h1>Product description</h1>
      <?= "<p>".$product->productdescription."</p>";?>
    </div>
  <form action='/products' method="POST">
    <input type='text' name='heading'/>
    <textarea rows="4" cols="50" name='content'></textarea>
    <button type='submit' name='review'>Send</button>
  </form>
  <?=$comment->heading?>