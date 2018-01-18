<?php

$categoryid = $_GET['category'] ?? 1;
if (empty($categoryid)){
  //header("Location:index.php?page=1");
  $categoryid = 1;
}
$get_products = "SELECT * FROM products p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$categoryid;

$products = mysqli_query($conn, $get_products);
?>

<section class='products-content flex-row'>
  <div class='filter'>
  </div>
  <div class='products'>
    <?php
      
      while ($product = mysqli_fetch_array($products)){
        echo 
        "<div class='product'>
         <a href='index.php?page=4&productid=".$product['productid']."'><img src='".$product['src']."' alt='".$product['alt']."'></a>
        </div>";
      }
    ?>
  
  </div>
</section>