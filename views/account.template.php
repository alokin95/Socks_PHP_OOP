
<section id='items'>
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
     <button class='delete' value='<?=$row->productid?>'>Remove</button>
     </div>
   </div>
    
  
  <?php endwhile; ?>
</section>

 


   

   