<?php
    /**
    * Template Name: Replenish
    */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/replenish.css">

	<div id="primary" class="content-area">
        
    
    

<!-- Section Replenish -->
<section class="main-ad">
  <div class="container-fluid">
    <div class="row">
      <div  class="col-md-3">
        <div class="item-list">         
              <ul class="m-0">
                <li class="user_image"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/amir.png" alt=" "><br><h2>AMIR MEHMOOD</h2><span>Advertiser</span></li>
               <li><i class="fa fa-user"></i><a href="#">Main</a></li>
                <li><i class="fa fa-user"></i><a href="#">Profile</a></li>
                <li><i class="fa fa-user"></i><a href="#">Replenish</a></li>
               <li><i class="fa fa-user"></i><a href="#">Ad Master</a></li>
               <li><i class="fa fa-user"></i><a href="#">My Banners</a></li>
               <li class="barcode"><span>Your QR Code:</span><br><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/barcode.png" alt=" "></li>

              </ul>
           </div>

        </div>
      <div class="col-md-4 y-card">
        <div class="card-info">
          <h3 class="underline-green signup-h">Your Card</h3>

          <p>Commision on the withdrawal of funds from the system -5%! in stock balance: 0.00 coin.</p>
          <hr>
 
          <input class="form-control" type="number" value="10"><span>Points</span>
          <input class="form-control" type="number" value="20"><span>USD</span>
      </div>
      <button class="blue-back-btn btn btn-primary">REPLENSIH BALANCE</button>
      </div>
      <div class="col-md-4 history">
       
        <div class="history-info">
          <h3 class="underline-green signup-h">Replenish history</h3>

          <div class="main-data">
            <span class="date">DATE</span>
            <span class="amount">AMOUNT</span>
          </div>
      </div>
      </div>
      <div class="col-md-1"></div>

      
    </div>
    
  </div>
</section>

    
  </div>
</section>






	</div><!-- #primary -->
    
<?php

get_footer();
