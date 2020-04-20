<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package A2Life
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
<link rel="stylesheet" type="text/css" href="css/all.css">
	<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
<div class="row top-nav">
<div class="col-md-6 top-menu">
<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'small-menu',
			'container'      => '',
		) );
		?>
</div>

<div class="col-md-6 right-top">
  <i class="fa fa-twitter" aria-hidden="true"></i>
  <i class="fa fa-facebook" aria-hidden="true"></i>
  <i class="fa fa-youtube-play" aria-hidden="true"></i>
  <i class="fa fa-linkedin" aria-hidden="true"></i>
  <i class="fa fa-instagram" aria-hidden="true"></i>
  <i class="fa fa-apple" aria-hidden="true"></i>
  <i class="fa fa-android" aria-hidden="true"></i>
  <img src="<?php echo get_template_directory_uri(); ?>/img/us.png" >
  <span>ENG</span>    

</div>

</div>
<hr style="margin-top:6px;" class="top-nav">

	<header id="masthead" class="site-header">
		<div class="site-branding row">
			<div  class="col-md-12 text-center logo">
			<?php
			the_custom_logo();
			 ?>
			 </div>
		</div><!-- .site-branding -->

    <nav class="main-manu navbar navbar-expand-lg navbar-light ">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar-content">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'depth'          => 2,
			'menu_class'     => 'navbar-nav mx-auto',
			'walker'         => new Bootstrap_NavWalker(),
			'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
		) );
		?>
	</div>
</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
