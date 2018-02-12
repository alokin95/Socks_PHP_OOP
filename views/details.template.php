<?php

  // $get_product_by_id = "SELECT productid AS id, p.name as productname, description as productdescription, price as productprice, p.categoryid as catid, subcategoryid as subcatid, p.imageid as imgid, src, alt FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE productid =" .$_GET['productid'];

  //$product = mysqli_query($conn, $get_product_by_id);

  //$product_row = mysqli_fetch_array($product);
  ?>

 
<div class='flex-row product-details'>
  <div class='product-image'>

    <?= "<img src='/".$product->src."' alt='".$product->alt."'>";?>

  </div>

  
  <div class='product-description'>
        <h1>Description:</h1>
        <?= "<p>".$product->productdescription."</p>";?>
  </div>
  
  <div class='product-right'>

    <?= "<h1>" .$product->productname."</h1>";?>

    <hr>
    <form method='POST' action='/account' id='add'>
      <?= "<h1>$".$product->productprice."</h1>";?>
      <input type="number" min='1' value='1' name='quantity'><br/>
      <input type='hidden' name='price' id='price' value='<?=$product->productprice?>' readonly>
      <input type='hidden' name='productid' id='productid' value='<?=$product->id?>' readonly>
      <button name='add' <?php if (!isset($_SESSION['userid'])){ echo "disabled";}?>>Add to cart</button>
    </form>
  </div>
</div>


<div class="flex-row more">
  <?php if(!isset($_SESSION['userid'])){?>

    <a href="/login">Login to leave a review</a>

  <?php } else {?>
    <form action='/products' method="POST" class='review'>
     <label for='heading'>Heading:</label><br/>
      <input type='text' id='heading' name='heading'/><br/>
      <label for='content'>Review:</label><br/>
      <textarea rows="4" cols="50" name='content' id='content'></textarea><br/>
      <input type='hidden' name='productid' value='<?=$product->id?>' readonly>
      <button type='submit' name='review'>Send</button>
    </form>
  <?php } ?>
    <div class='comments'>
      

        <?php while ($comm =  mysqli_fetch_object($comment)):?>
          <div class='comment'>
            <span><?=$comm->first_name ." ". $comm->last_name ." ". $comm->date_created?></span>
            <p><?=$comm->heading?></p>
            <p><?=$comm->content?></p>
          </div>
        <?php endwhile; ?>
      

    </div>
</div>
  
 