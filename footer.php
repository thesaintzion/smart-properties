<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

 <section class="w3l-footer-29-main" id="footer">

  <div class="footer-29">
    <div class="grids-forms-1 pb-5">

<div class="container">
  <div class="grids-forms">
      <div class="main-midd">
          <h4 class="title-head">Newsletter – Get Updates & Latest News</h4>
          
      </div>
      <div class="main-midd-2">
          <form action="#" method="post" class="rightside-form">
              <input type="email" name="email" placeholder="Enter your email">
              <button class="btn" type="submit">Subscribe</button>
          </form>
      </div>
    </div>
  </div>
  </div>


      <div class="container pt-5">
          <div class="row ">

              <div class="footer-list-29  col-xl-5  col-sm-12 mb-5">
                  <h6 class="footer-title-29">About Us</h6>
                  <ul>
                     <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                  </ul>
                  <div class="main-social-footer-29">
                    <h6 class="footer-title-29">Social Links</h6>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>

              <div class="footer-list-29  col-xl-3 col-sm-6 mr-auto col-sm-6 mb-5">
                  <ul>
                      <h6 class="footer-title-29">Useful Links</h6>
                      <li><a href="services.html">Management</a></li>
                      <li><a href="services.html">Reporting</a></li>
                      <li><a href="services.html">Tracking</a></li>
                      <li><a href="services.html">All Users</a></li>
                      <li><a href="contact.html">Support</a></li>
                  </ul>
              </div>
         
              <div class="footer-list-29 col-xl-3 col-sm-6 mr-auto mb-5">
              <h6 class="footer-title-29">Quick Links</h6>
                  
                  <?php 
				wp_nav_menu( array(
					// 'menu' => 'primary',
					'theme_location' => 'footer',
					'container' => '',
					'items_wrap' => '<ul class="navbar-nav flex-column text-sm-center text-md-left" id="">%3$s</ul>',
					// 'items_wrap' => '<ul class="navbar-nav flex-column text-sm-center text-md-left">%3$s</div>'
				) )
				
				?>
              </div>
          </div>
          <div class="bottom-copies text-center">
              <p class="copy-footer-29"> &copy; <a href="<?php echo get_bloginfo('url'); ?>" class="text-success"><?php echo get_bloginfo('name'); ?></a>  <date class="main-date">2020</date>, All rights reserved</p>
              <a href="https://w3layouts.com"></a>
               
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
</button>
</section>

   <?php  wp_footer(); ?>

<script>
   function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html> 

