<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A2Life
 */

?>

	</div><!-- #content -->

	<footer style="margin-botton:-24px;" id="colophon" class="site-footer">


	<section class="footer ">
  <div  class="container-fluid">
    <div class="row">
      <div   class="col-md-4 vl" >
        <img src="<?php echo get_template_directory_uri(); ?>/img/foooter_logo.png" class="img-fluid float-right"  width="320" alt="img1">
      </div>
    
      <div  class="col-md-2 vl">
        <h3 class="heading">Quick Links</h3>
        <ul class="quick-links">
          <li>Home</li>
          <li>About us</li>
          <li>Contact us</li>
          <li>Login/Register</li>
          <li>Reviewer</li>
          <li>advertiser</li>
        </ul>
      </div>
      <div  class="col-md-2 vl">
        <h3 class="heading">Follow Us</h3>
        <i class="fa fa-twitter"></i>&nbsp;&nbsp;
        <i class="fa fa-linkedin-in"></i> &nbsp;&nbsp;
        <i class="fa fa-instagram"></i>&nbsp;&nbsp;
        <i class="fa fa-facebook-f"></i>
      </div>
      
      <div   class="col-md-3">
        <h3 class="heading">Email Us</h3>
        <div class="input-group mb-3">
           <input type="text" class="form-control" placeholder="Enter Email" aria-label="" aria-describedby="basic-addon2">
        <div class="input-group-append ">
          <button class="btn " type="button">&nbsp;send &nbsp;</button>
        </div>
      </div>
        
      </div>
      <div class="col-md-1"></div>
    </div>
    <hr class="add-line">
    <p class="copyright">Copyright &copy; 2020. All rights reserved ! This template was designed by RedxSoft</p>
  </div>

</section>


		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
