<?php

// $categoryid = $_GET['category'] ?? 1;

// $get_products = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$categoryid;

//$products = mysqli_query($conn, $get_products);
?>
<div class='shop-cover'>

</div>
<section class='products-content flex-row'>
  <div class='filter'>
    <h5>Filter <br/> options</h5>
    <hr>
    <p>Gender</p>
  <form action="#">
  <p>
    <input type="radio" id="unisex" value='1' name="radio-filter">
    <label for="unisex">Unisex</label>
  </p>
  <p>
    <input type="radio" value='2' id="female" name="radio-filter"  checked>
    <label for="female" >Female</label>
  </p>
  <p>
    <input type="radio" value='3' id="male" name="radio-filter">
    <label for="male">Male</label>
  </p>
</form>
  </div>
  <div class='products'>
    <?php  while ($row = mysqli_fetch_object($result)) : ?>
    
      <div class='product'>
        <a href='details?productid=<?=$row->productid?>'>
          <img src='/<?=$row->src?>' alt='<?=$row->alt?>'>
          <div class='product-name'>
            <?=$row->name ?>
          </div>
        </a>
        <p>$<?=$row->price?></p>
      </div>
      <?php endwhile; ?>
    
  
  </div>
</section>