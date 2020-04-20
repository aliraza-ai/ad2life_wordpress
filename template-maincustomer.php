<?php
    /**
    * Template Name: Main Customer
    */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/maincustomer.css">

	<div id="primary" class="content-area">
        
    

<!-- Section customer-->
<section class="main-ad">
  <div class="container-fluid">
    <div class="row">
      <div  class="col-md-3">
        <div class="item-list">         
              <ul  class="m-0">
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
          
      <div class="col-md-3 business">
        <div class="b-info">
            <h3 class="underline-green signup-h">Business</h3>
            <button class="blue-back-btn btn btn-primary">REPLENISH</button>
            <br><a href="#">0 points</a>
            <hr>

            <p>Spend on services <a href="#">0 points</a></p>
            <p>Cashback<a href="#">0 points</a></p>
            <p>Eared all the time <a href="#">0 points</a></p>
            <p>Eared per last month <a href="#">0 points</a></p>
            <p>Eared per last week<a href="#">0 points</a></p>
            <p>Viewed banners in 30 days<a href="#">0 points</a></p>

            <hr>
            <a href="#">1 bonus point = 1 USD</a>
        </div>
      </div>
      <div class="col-md-6 graph">
       
        <div class="graph-info">
          <h3 class="underline-green">Weekly Expense Report</h3>
          <button class="hamburger">&#9776;</button>
      </div>
      
      <button class="blue-back-btn btn btn-primary">REPLENSIH BALANCE</button>
    </div>

</div>
    
  </div>
</section>






	</div><!-- #primary -->
    
<?php

get_footer();
