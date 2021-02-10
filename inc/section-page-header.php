
<?php
/**
 * The template for page-header
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<section class="w3l-about-breadcrum">
  <div class="breadcrum-bg breadcrum py-sm-5 py-4">
    <div class="container py-lg-3">
      
      <h2><?php the_title() ?></h2>
      <p><a href="<?php  echo get_home_url(); ?>">Home</a> &nbsp; / &nbsp; <?php the_title() ?> </p>
  
    </div>
  </div>
</section>