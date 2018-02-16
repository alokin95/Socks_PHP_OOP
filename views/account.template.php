
<section id='items'>
  <h3> This is your cart! Get back to <a href="products?category=1">shopping!</a></h3>
<?php

  // if (!isset($_SESSION['email'])){
  //   Header("Location:index");
  // }
  while ($row = mysqli_fetch_object($result)) :?>
    <div class='item flex-row'>
     <div class='item-left'>
       <img src='<?=$row->src?>' alt='<?=$row->alt?>'>
     </div> 
     <div class='item-mid'><?=$row->name?><br/>
       $<?=$row->price?>
     </div>
     <div class='item-right'>
     <button class='delete' value='<?=$row->id?>'>Remove</button>
     </div>
   </div>
    
  
  <?php endwhile; ?>
</section>