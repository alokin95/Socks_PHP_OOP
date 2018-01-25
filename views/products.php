<?php

$categoryid = $_GET['category'] ?? 1;
if (empty($categoryid) || $categoryid > 3){

  $categoryid = 1;
}

$get_products = "SELECT * FROM products p JOIN category c ON p.categoryid = c.categoryid JOIN image i ON p.imageid = i.imageid WHERE p.categoryid = ".$categoryid;

$products = mysqli_query($conn, $get_products);

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
      
      while ($product = mysqli_fetch_array($products)){
        echo 
        "<div class='product'>
          <a href='index.php?page=4&productid=".$product['productid']."'>
            <img src='".$product['src']."' alt='".$product['alt']."'>
          </a>
        </div>";
      }
    ?>
  
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