<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 
  get_header();
 
	 ?>

  <!-- Slide -->
  <?php get_template_part( 'inc/section', 'carosel') ?>

   
		<section class="content px-3 py-5 p-md-5">
    

	<h1><?php the_title(); ?></h1>
      
  <?php get_template_part( 'inc/section', 'content') ?>
         
        
</section>

	

   <?php get_footer(); ?>

