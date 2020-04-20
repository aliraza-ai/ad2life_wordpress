<?php
    /**
    * Template Name: Profile Customer
    */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/profilecustomer.css">

	<div id="primary" class="content-area">
        
    
<!-- Section customer profile-->
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
            <p>Drag file to upload</p>
            <div class="upload-btn-wrapper">
              <button class="btn plus radius"></button>
              <input type="file" name="myfile" />
            </div>
            <br>
            <a href="#">Delete Phote?</a><br>
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
       
        <div class="add-f">
          <h3  class="underline-green">Additional Information</h3>
          <p>These questions are very important to show you the actual advertising.</p>

          <div class="row radio-items">
            <div class="col-md-3">
              <span> <b>Birthday*</b></span>
            </div>
            <div class="col-md-3">
              <!-- <label class="control"> -->
                <select class="birthday" name="color" class="form-control">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>

                  </select>
              <!-- </label> -->
          </div>
            <div class="col-md-3">
              <select class="birthday" name="color" class="form-control">
                <option>7</option>
                <option>11</option>
                <option>2</option>

                </select>
            </div>
            <div class="col-md-3">
              <select class="birthday" name="color" class="form-control">
                <option>1994</option>
                <option>1995</option>
                <option>1996</option>

                </select>
            </div>
          </div>


          <div class="row radio-items">
            <div class="col-md-3">
              <span> <b>Gender*</b></span>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="color" checked class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
                &nbsp;Male
              </label>
          </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="color" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;Female
              </label>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="color" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;Other
              </label>
            </div>
          </div>
          <div class="row radio-items">
            <div class="col-md-3">
              <span> <b>Status*</b></span>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="status" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
                &nbsp;Marriage
              </label>
          </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="status"  checked class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;Single
              </label>
            </div>
            <div class="col-md-3">
            </div>
          </div>
          <div class="row radio-items">
            <div class="col-md-3">
              <span> <b>Children*</b></span>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="child" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
                &nbsp;0-5
              </label>
          </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="child"  checked class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;5-12
              </label>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="child" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;12-17
              </label>
            </div>
          </div>
          <div class="row radio-items">
            <div class="col-md-3">
              <span> <b>Car*</b></span>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="car"  checked class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
                &nbsp;Have
              </label>
          </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="car" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;Haven't
              </label>
            </div>
          </div>
          <div class="row radio-items">
            <div class="col-md-3">
              <span> <b>Housing*</b></span>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="house" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
                &nbsp;Rent
              </label>
          </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="house"  checked class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;Flat
              </label>
            </div>
            <div class="col-md-3">
              <label class="control">
                <input type="radio" name="house" class="control__input visually-hidden">
                <span class="control__indicator control__indicator--radio"></span>
               &nbsp;House
              </label>
            </div>
          </div>
          
              <!-- <form class="banner-colour"> -->
             <!-- radio -->
              
              
              
        </div>
        <button class="blue-back-btn btn btn-primary">SAVE</button>
      </div>
      <div class="col-md-1"></div>

      
    </div>
    
  </div>
</section>




	</div><!-- #primary -->
    
<?php

get_footer();
