<?php
    /**
    * Template Name: Final Screen
    */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/finalscreen.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/media-queries.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/carousel.css">

	<div id="primary" class="content-area">
        
    
    

<!-- Section Final Screen -->
<section class="main-ad">
  <div class="container-fluid">
    <div class="row">
      <div  class="col-md-3">
        <div class="loc-button">
          <div class="btn-white-shadows">
              <button class="btn btn-primary btn white-back-btn" type="btn"><i class="fa fa-angle-left"></i> BACK</button>
          </div>
           <button class="btn btn-success stat-watch green-back-btn" type="btn">NEXT <i class="fa fa-angle-right"></i></button>
        </div>
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
      <div class="col-md-4">
        <div class="m-info">
          <div class="loc-button">
            <div class="btn-white-shadows">
                <button class="btn btn-primary btn white-back-btn" type="btn"><i class="fa fa-angle-left"></i> BACK</button>
            </div>
             <button class="btn btn-success green-back-btn stat-watch" type="btn">NEXT <i class="fa fa-angle-right"></i></button>
          </div>
          <h3  class="underline-green">Live Mobile View Add</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/img/mobile1.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-md-5 buttons p-5">
          <button class="btn btn-light">Text</button>
          <button class="btn btn-light">Icons</button>
          <button class="btn btn-light">Images</button>
          <button class="btn btn-light">Templates</button>
          <button class="btn btn-light">Add Multimedia</button>
          <button class="btn btn-light">Advertising</button>

          <img src="<?php echo get_template_directory_uri(); ?>/img/text.png" alt="">
        <div class="add-f">
    <h2>Leckerli One<i class="fa fa-angle-down"></i></h2>
    <hr>
    <p>Text Size</p>
    <div class="slidecontainer">
      <input type="range" min="1" max="100" value="20" class="slider">
    </div>
    <hr>
      <div class="row">
        <div class="col-sm-6"><p>Line Height</p>
          <div class="slidecontainer">
            <input type="range" min="1" max="100" value="20" class="slider">
          </div></div>
        <div class="col-sm-6"><p>Drop Shadow</p>
          <div class="slidecontainer">
            <input type="range" min="1" max="100" value="20" class="slider">
          </div></div>
      </div>
      <hr>
        
          <span><b>B</b></span>
          <span><b><i>I</i> </b></span>
          <span><b><u>U</u></b></span>
          <span><i class="fa fa-align-left" aria-hidden="true"></i></span>
          <span><i class="fa fa-align-center" aria-hidden="true"></i></span>
          <span><i class="fa fa-align-right" aria-hidden="true"></i></span>
        <hr>
        <label for="color">Text Color</label>
        <input type="text" value="#000000" class="form-control">
        <div class="row">
          <div class="col-sm-5 outline">Outline Color<br>
            <div class="out-color"> 
              #f8c7c7c<span></span>
            </div>
        
        </div>
        <div class="col-sm-5 outline">Background Color<br>
          <div class="out-color"> 
            #009eec<span class="blue-c"></span>
          </div>
          </div>
      
      </div>


        
        
      </div>
      <div class="ml-5">
        <button class="green-back-btn btn btn-primary ">SAVE</button>
      <button class="green-back-btn btn btn-primary ml-5">ADD NEW</button>
      </div>
      
    </div>
    
  </div>
</section>

 <section>
          <div  class="top-content">
          <div class="container-fluid pb-5">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
              <div  class="carousel-inner row w-100 mx-auto" role="listbox">
                  <div  class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
              <img  src="<?php echo get_template_directory_uri(); ?>/img/mobile1.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div  class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile2.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile1.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile2.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile1.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile2.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile1.jpg" width ="180" class="img-fluid mx-auto d-block image-border" alt="img1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
              <img src="<?php echo get_template_directory_uri(); ?>/img/mobile2.jpg" width ="180" class=" mx-auto d-block image-border" alt="img1">
            </div>
              </div>
              <a  class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
            
            <div   class="arrows-border">
              <span  class="carousel-control-prev-icon" aria-hidden="true"></span>
            </div>
            <span  class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
            <div  class="arrows-border">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </div>
            <span class="sr-only">Next</span>
          </a>
            </div>
          </div>
        </div>
        </section>





	</div><!-- #primary -->
  <!-- Javascript -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>  

</div>

<?php

get_footer();
