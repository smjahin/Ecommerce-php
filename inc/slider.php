<div class="header_bottom">
  <div class="header_bottom_left">
    <div class="section group">
      <?php
          $getApple = $pd->latestFromApple();
          if ($getApple) {
            while($result = $getApple->fetch_assoc())
            {


       ?>

      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">
           <a href="details.php?proid=<?php echo $result['productId'];?>">
              <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
        </div>
          <div class="text list_2_of_1">
          <h2>Apple</h2>
          <p><?php echo $result['productName'];?></p>
          <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
            >Add to cart</a></span></div>
         </div>
       </div>
       <?php
              }
                     }
        ?>




        <?php
            $getSam = $pd->latestFromSamsung();
            if ($getSam) {
              while($result = $getSam->fetch_assoc())
              {


         ?>
      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">
           <a href="details.php?proid=<?php echo $result['productId'];?>">
              <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
        </div>
          <div class="text list_2_of_1">
          <h2>Samsung</h2>
          <p><?php echo $result['productName'];?></p>
          <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
            >Add to cart</a></span></div>
         </div>
      </div>
      <?php
             }
                    }
       ?>
</div>


    <div class="section group">
      <?php
          $getRolex = $pd->latestFromRolex();
          if ($getRolex) {
            while($result = $getRolex->fetch_assoc())
            {


       ?>
      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">
           <a href="details.php?proid=<?php echo $result['productId'];?>">
              <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
        </div>
          <div class="text list_2_of_1">
          <h2>Rolex</h2>
          <p><?php echo $result['productName'];?></p>
          <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
            >Add to cart</a></span></div>
         </div>
       </div>
       <?php
              }
                     }
        ?>

        <?php
            $getRado = $pd->latestFromRado();
            if ($getRado) {
              while($result = $getRado->fetch_assoc())
              {


         ?>
      <div class="listview_1_of_2 images_1_of_2">
        <div class="listimg listimg_2_of_1">
           <a href="details.php?proid=<?php echo $result['productId'];?>">
              <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
        </div>
          <div class="text list_2_of_1">
          <h2>Rado</h2>
          <p><?php echo $result['productName'];?></p>
          <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
            >Add to cart</a></span></div>
         </div>
      </div>
      <?php
             }
                    }
       ?>

       <?php
           $getTitan = $pd->latestFromTitan();
           if ($getTitan) {
             while($result = $getTitan->fetch_assoc())
             {


        ?>
     <div class="listview_1_of_2 images_1_of_2">
       <div class="listimg listimg_2_of_1">
          <a href="details.php?proid=<?php echo $result['productId'];?>">
             <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
       </div>
         <div class="text list_2_of_1">
         <h2>Titan</h2>
         <p><?php echo $result['productName'];?></p>
         <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
           >Add to cart</a></span></div>
        </div>
     </div>
     <?php
            }
                   }
      ?>




    </div>

    <div class="clear"></div>
  </div>
     <div class="header_bottom_right_images">
     <!-- FlexSlider -->

    <section class="slider">
        <div class="flexslider">
        <ul class="slides">
          <li><img src="images/1.jpg" alt=""/></li>
          <li><img src="images/2.jpg" alt=""/></li>
          <li><img src="images/3.jpg" alt=""/></li>
          <li><img src="images/4.jpg" alt=""/></li>
          </ul>
        </div>
      </section>
<!-- FlexSlider -->
    </div>
  <div class="clear"></div>
</div>
