<?php
    /**
    * Template Name: Main Advertiser
    */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/mainadvertiser.css">

	<div id="primary" class="content-area">
        
    
    
<!-- Section Advertiser -->
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
        <div class="col-md-9">
          <div class="row">

          
      <div class="col-md-4 business">
        <div class="b-info">
            <h3 class="underline-green signup-h">Business</h3>
            <button class="blue-back-btn btn btn-primary">WATCH VIDEO</button>
            <br><a href="#">0 points</a>
            <hr>

            <p>Spend All Time <a href="#">0 points</a></p>
            <p>Payments from customer <a href="#">0 points</a></p>
            <p>Profit <a href="#">0 points</a></p>

            <hr>
            <a href="#">1 bonus point = 1 USD</a>
        </div>
      </div>
      <div class="col-md-8 graph">
       
        <div class="graph-info">
          <h3 class="underline-green">Weekly Expense Report</h3>
          <button class="hamburger">&#9776;</button>
      </div>
    </div>
          </div>
    <div class="row">
      <div class="col-md-12">
        <div class="notice">
          <h3 class="underline-green mb-4">Notice</h3>
          <p>You can decrease your expance by implementing these things so that you have mure balance.</p>
        </div>
      </div>
    </div>
  </div>

</div>
    
  </div>
</section>






	</div><!-- #primary -->
    
<?php

get_footer();
