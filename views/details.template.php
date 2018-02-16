<div class='flex-row product-details'>
  <div class='product-image'>

    <?= "<img src='/".$product->src."' alt='".$product->alt."'>";?>
      <div class="rating">
        <?php if (!isset($_SESSION['email'])){
          echo "Please login to vote";
        }else {
        ?>
        <button class='vote' id='<?=$product->id?>' value='5'>☆</button>
        <button class='vote' id='<?=$product->id?>' value='4'>☆</button>
        <button class='vote' id='<?=$product->id?>' value='3'>☆</button>
        <button class='vote' id='<?=$product->id?>' value='2'>☆</button>
        <button class='vote' id='<?=$product->id?>' value='1'>☆</button>
        <?php }  ?>
      </div>
      <p>Users rating:&nbsp;&nbsp;<span id='user-rating'><?=$ratings->rating?></span>&nbsp;/&nbsp;5.0</p><br/><span id='denied'></span>
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
          <input type="number" min='1' max='5' value='1' name='quantity'>
          <br/>
          <input type='hidden' name='price' id='price' value='<?=$product->productprice?>' readonly>
          <input type='hidden' name='productid' id='productid' value='<?=$product->id?>' readonly>
          <?php if (!isset($_SESSION['userid'])){ ?>
          <a href='login'>Login to add to cart</a>
          <?php ;} else {?>
          <button name='add'>Add to cart</button>
          <?php } ?>
      </form>
  </div>
</div>

<div class="flex-row more">
  <?php if(!isset($_SESSION['userid'])){?>

  <a href="/login">Login to leave a review</a>

  <?php } else {?>
  <form action='/products' method="POST" class='review'>
    <label for='heading'>Heading:</label>
    <br/>
    <input type='text' id='heading' name='heading' required/>
    <br/>
    <label for='content'>Review:</label>
    <br/>
    <textarea rows="4" cols="50" name='content' id='content' required></textarea>
    <br/>
    <input type='hidden' name='productid' value='<?=$product->id?>' readonly>
    <button type='submit' name='review'>Send</button>
  </form>
  <?php } ?>
  <div class='comments'>


    <?php while ($comm =  mysqli_fetch_object($comment)):?>
    <div class='comment'>
      <span>
        <?=$comm->first_name ." ". $comm->last_name ." ". $comm->date_created?>
      </span>
      <p>
        <?=$comm->heading?>
      </p>
      <p>
        <?=$comm->content?>
      </p>
    </div>
    <?php endwhile; ?>


  </div>
</div>