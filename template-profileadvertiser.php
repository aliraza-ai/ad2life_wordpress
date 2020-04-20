<?php
    /**
    * Template Name: Profile Advertiser
    */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/profileadvertiser.css">

	<div id="primary" class="content-area">
        
    

<!-- Section Profile Advertiser -->
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
      <div class="col-md-4">
        <div class="p-info">
          <h3  class="underline-green signup-h">Personal Information</h3>
          <form>
              <div class="form-row">
                <label class="names">Business Name</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-row">
                <label class="names">Business Address</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-row">
                <label class="names">ID</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="form-row">
                  <label class="names">Tel</label>
                  <input  type="number" class="form-control" placeholder="">
              </div>
                <div class="form-row">
                  <label class="names">Email</label>
                  <input type="email" class="form-control" placeholder="">
                </div>
                <div class="form-row">
                  <label class="names">Password</label>
                  <input type="password" class="form-control" placeholder="">
                </div>
                <div class="form-row">
                    <label class="names">Credit Card</label>
                    <input  type="text" class="form-control" placeholder="">
                  </div>
          </form>
        </div>
      </div>
      <div class="col-md-4">
       
        <div class="upload-f">
          <p>Drag file to upload</p>
          <div class="upload-btn-wrapper">
            <button class="btn plus radius"></button>
            <input type="file" name="myfile" />
          </div>
          <br>
          <a href="#">Delete Phote?</a>
        </div>
      </div>
      <div class="col-md-1"></div>

      
    </div>
    
  </div>
</section>





	</div><!-- #primary -->
    
<?php

get_footer();
