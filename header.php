<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// $container = get_theme_mod( 'understrap_container_type' );
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="St. Stephen (https://saint-portfolio.herokuapp.com)">  

    <meta name="apple-mobile-web-app-status-bar-style" content="#02ad88" />
    <meta data-rh="true" name="theme-color" content="#02ad88 ">
 
    <?php  wp_head(); ?>

</head> 

<bod class="main-body">
    
<!-- Top Menu 1 -->
<section class="w3l-top-menu-1 d-none d-xl-block">
	<div class="top-hd">
		<div class="container">
	<header class="row">
		<div class="social-top col-lg-3 col-6">
			<li>Follow Us</li>
			<li><a href="#"><span class="fa fa-facebook"></span></a></li>
			<li><a href="#"><span class="fa fa-instagram"></span></a> </li>
				<li><a href="#"><span class="fa fa-twitter"></span></a></li>
				<li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
		</div>
		<div class="accounts col-lg-9 col-6">
                <li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+142 5897555">+234 9055175876</a> </li>
                <li class="top_li"><span class="fa fa-envelope-o"></span><a href="tel:+142 5897555">hello@smartproperties.com.ng</a> </li>
				<!-- <li class="top_li1"><a href="#">Login</a></li>
				<li class="top_li2"><a href="#">Register</a></li> -->
		</div>
		
	</header>
</div>
</div>
</section>

<!-- //Top Menu 1 -->


<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-0">
  <div class="container py-0">
  <a class="navbar-brand text-success text-uppercase" href="<?php echo esc_url( home_url( '/' )); ?>"><span class="fa fa-home  text-bold "></span>
  <strong> <?php bloginfo( 'name' ); ?> </strong>

</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    
  <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

</div>
</nav>



