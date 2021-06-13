<?php include 'inc/header.php';?>

 <div class="main">
    <div class="content">


      <div class="header_bottom">
        <div class="header_bottom_left">
          <div class="section group">
            <?php
                $getApple = $pd->latestFromApplee();
                if ($getApple) {
                  while($result = $getApple->fetch_assoc())
                  {


             ?>

             <div class="grid_1_of_4 images_1_of_4">
               <a href="details.php?proid=<?php echo $result['productId'];?>">
                 <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
     					 <h2><?php echo $result['productName'];?> </h2>
     					 <p><span class="price">$<?php echo $result['price'];?></span></p>
     				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
                    class="details">Details</a></span></div>
     				</div>
             <?php
                    }
                           }
              ?>




              <?php
                  $getSam = $pd->latestFromSamsungg();
                  if ($getSam) {
                    while($result = $getSam->fetch_assoc())
                    {


               ?>
               <div class="grid_1_of_4 images_1_of_4">
                 <a href="details.php?proid=<?php echo $result['productId'];?>">
                   <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
       					 <h2><?php echo $result['productName'];?> </h2>
       					 <p><span class="price">$<?php echo $result['price'];?></span></p>
       				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
                      class="details">Details</a></span></div>
       				</div>
            <?php
                   }
                          }
             ?>
      </div>


          <div class="section group">
            <?php
                $getRolex = $pd->latestFromRolexx();
                if ($getRolex) {
                  while($result = $getRolex->fetch_assoc())
                  {


             ?>
             <div class="grid_1_of_4 images_1_of_4">
               <a href="details.php?proid=<?php echo $result['productId'];?>">
                 <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
     					 <h2><?php echo $result['productName'];?> </h2>
     					 <p><span class="price">$<?php echo $result['price'];?></span></p>
     				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
                    class="details">Details</a></span></div>
     				</div>
             <?php
                    }
                           }
              ?>

              <?php
                  $getRado = $pd->latestFromRadoo();
                  if ($getRado) {
                    while($result = $getRado->fetch_assoc())
                    {


               ?>
               <div class="grid_1_of_4 images_1_of_4">
                 <a href="details.php?proid=<?php echo $result['productId'];?>">
                   <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
       					 <h2><?php echo $result['productName'];?> </h2>
       					 <p><span class="price">$<?php echo $result['price'];?></span></p>
       				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
                      class="details">Details</a></span></div>
       				</div>
            <?php
                   }
                          }
             ?>

             <?php
                 $getTitan = $pd->latestFromTitann();
                 if ($getTitan) {
                   while($result = $getTitan->fetch_assoc())
                   {


              ?>
              <div class="grid_1_of_4 images_1_of_4">
                <a href="details.php?proid=<?php echo $result['productId'];?>">
                  <img src="admin/<?php echo $result['image'];?>" alt="" /></a>
      					 <h2><?php echo $result['productName'];?> </h2>
      					 <p><span class="price">$<?php echo $result['price'];?></span></p>
      				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId'];?>"
                     class="details">Details</a></span></div>
      				</div>
           <?php
                  }
                         }
            ?>




          </div>

          <div class="clear"></div>
        </div>

        <div class="clear"></div>
      </div>

    </div>
 </div>

 <?php include 'inc/footer.php';?>
