<?php
    /**
    * Template Name: Sign Up
    */

get_header();

?>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/signup.css">

	<div id="primary" class="content-area">
        
    
    

<!-- Section Signup -->
<section class="sign-bg">
  <div class="container-fluid">

      <div  class="row">
       <div class="col-md-4 main-div ">
            <div class="sign-button">
          <div class="btn-white-shadows">
              <button class="btn btn-primary btn white-back-btn" type="btn">Advertiser</button> 
          </div>
           <button class="btn btn-success green-back-btn stat-watch" type="btn">Customer</button>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/signman.png" class="img-fluid ml-4 " width="250"  alt="signup">

       </div>
         <div class="col-md-7 sign-up">
          <h3  class="underline-green signup-h">Sign up</h3>
          <form>
  <div class="form-row mt-5">
    <div class="col">
      <label class="names">First name</label>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label class="names">password</label>
      <input type="password" class="form-control" placeholder="">
    </div>

  </div>
  <div class="form-row mt-4">
    <div class="col">
      <label class="names">Last name</label>
      <input type="text" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label class="names">Confirm password</label>
      <input type="password" class="form-control" placeholder="">
    </div>
    
  </div>
  <div class="form-row mt-4">
    <div class="col">
      <label class="names">Email</label>
      <input  type="email" class="form-control" placeholder="">
    </div>
    <div class="col">
      <label></label>
    </div>
     
  </div>
  <div style="margin-top: 5%; margin-left: 2%;" class="custom-control custom-checkbox mb-3">
    <label class="cont">I agree Terms & Services
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

    </div>
        <div class="text-center">
          <button class="btn btn-success next green-back-btn" type="btn">Next</button>
      <p class="have-acc">already have an Account ? <a href="">Sign in</a></p>
        </div>
      
</form>
      </div>
    
       </div>
  </div>
</section>






	</div><!-- #primary -->
    
<?php

get_footer();
