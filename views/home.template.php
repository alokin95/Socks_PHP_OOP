<section class='cover'>
      <div class='hero'>
        <h1>Conquer Every<br/> Trail</h1>
        <p>
            Grab a pair of our socks to help you keep going step<br/> after step! Every pair of toesocks provides blister<br/> protection, total foot utilization and moisture<br/> management.
        </p>
        <a href='products?category=1'><button class='shop-now-btn'>Shop now</button></a>
      </div>
    </section>
    <section class='arrivals flex-row'>
      <?php while ($r = mysqli_fetch_object($row)) :?>
      <div class='arrival'>
      <a href="details?productid=<?=$r->productid?>"><img src='<?=$r->src?>' alt='<?=$r->alt?>'></a>
</div>

      <?php endwhile;?>
    </section>
    <section class='trail'>
      <div class='trail-bg'>
      </div>
      <div class='trail-socks' id='trailSocks'>
      </div>
      <div class='trail-text' id='trailText'>
          <h1 class='trail-heading'>To the trail</h1>
          <p>
            Tackle the trails blister-free while keeping dirt and debris out so you can keep going mile after mile.  
          </p>
          <a href='products?category=1'><button class='shop-now-btn'>Shop now</button></a>
    </div>
    </section>
    <section class='mountain'>
      <div class='mountain-bg'>
      </div>
      <div class='mountain-socks' id='mountainSocks'>
      </div>
      <div class="mnt-text" id='mountainText'>
          <h1>To the mountain</h1>
          <p>
            Support for every adventure, big or small—not to<br/> mention protection from unpredictable elements and terrain.
          </p>
          <a href='products?category=2'><button class='shop-now-btn'>Shop now</button></a>
        </div>
    </section>
    <section class='road'>
      <div class='road-bg'>
      </div>
      <div class='road-socks'  id='roadSocks'>
      </div>
      <div class='trail-text' id='roadText'>
        <h1 class='road-heading'>To the road</h1>
        <p>
          Take your run to the next level with our patented five-toe advantage and experience blister-free comfort. 
        </p>
        <a href='products?category=3'><button class='shop-now-btn'>Shop now</button></a>
      </div>
    </section>
    <section class='shop-now flex-row'>
      <div class="shop-now-text">
        <h2>Compare product lines</h2>
        <h1>Find Your Sock</h1>
        <a href='products?category=1'><button class='btn-white'>Shop now</button></a>
      </div>
    </section>
    <section class='benefits'>
      <div class='left'>
        <h1>Discover the benefits</h1>
        <div class='benefits-buttons flex-row'>
          <div class='benefit-btn util-btn dark' id='util'>
          </div>
          <div class='benefit-btn blister-btn' id='blister'>
          </div>
          <div class='benefit-btn manage-btn' id='manage'>
          </div>
        </div>
      </div>
      <div class='benefit-bg util fade'>
        <div class='description'>
          <h1>Total Foot Utilization</h1>
          <p>
            Injinji toesocks keep your toes separated, supporting proper alignment and toe splay. This distributes your weight evenly on your foot, keeping it fully engaged in any athletic activity.
          </p>
        </div>
      </div>
     <div class='benefit-bg blister fade'>
        <div class='description'>
          <h1>Blister Prevention</h1>
          <p>
           With each toe protected, skin-on-skin friction is completely eliminated, making those painful blisters and hot spots a thing of the past. 
          </p>
        </div>
     </div>
     <div class='benefit-bg manage fade'>
        <div class='description'>
            <h1>Moisture Management</h1>
            <p>
              Keeping your toes individually wrapped in sweat-wicking material means your toes and feet are drier and therefore more comfortable than in a traditional sock. 
            </p>
          </div>
    </div>
    </section>