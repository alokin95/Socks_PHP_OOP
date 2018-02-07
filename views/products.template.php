<?php

// $categoryid = $_GET['category'] ?? 1;

// $get_products = "SELECT * FROM product p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$categoryid;

//$products = mysqli_query($conn, $get_products);
?>

<section class='products-content flex-row'>
  <div class='filter'>
  <form id='form' method='post' action="<?php echo $_SERVER['php_self']?>">
    <input type='radio' name='filter' id='unisex' value='djoka'>Unisex
    <br/>
    <input type='radio' name='filter' id='female' value='pizda'>Female
  </form>
  </div>
  <div class='products'>
    <?php
      
      // while ($product = mysqli_fetch_array($products)){
      //   echo 
      //   "<div class='product'>
      //     <a href='details?productid=".$product['productid']."'>
      //       <img src='/".$product['src']."' alt='".$product['alt']."'>
      //     </a>
      //   </div>";
      // }

      //var_dump($row)

      // while ($row = mysqli_fetch_object($result)) {
      //   echo "
      //     <div class='product'>
      //       <a href='details?productid=".$row->productid."'>
      //         <img src='/".$row->src."' alt='".$row->alt."'>
      //       </a>
      //     </div>
      //   ";
      // }

      ?>
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
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script>

$(document).ready(function(){
  $('[name=filter]').on('click', function(){
    var cat = $(this).val();
    $.ajax({
      type:"POST",
      url:"test.php",
      data:{
        cat: cat
      },
      success: function(response){
        console.log(response);
      }
    })
  })
})


</script>-->