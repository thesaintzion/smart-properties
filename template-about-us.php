<?php
/*
Template Name: About Us 
*/
/**
 * About Us custom template
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<!-- Page header -->
<?php get_template_part( 'inc/section', 'page-header') ?>

    <!-- content-with-photo4 block -->
    <section class="w3l-content-with-photo-4" id="about">
        <div id="content-with-photo4-block" class="py-5">
            <div class="container py-md-3">
                <div class="cwp4-two row">

                    <div class="cwp4-text col-lg-6">
                    <?php get_template_part( 'inc/section', 'content') ?>
                        <a class="btn btn-secondary btn-theme3 mt-3" href="contact-us">Contact Us</a>
                    </div>
                    
                    <div class="cwp4-image col-lg-6 pl-lg-5 mt-lg-0 mt-5">
                       

                        
    
        <?php if(has_post_thumbnail()) : ?>
        
        <img src="<?php the_post_thumbnail_url(); ?>" class="w-100 rounded img-fluid">
        
      <?php  endif;?>
     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content-with-photo4 block -->



<?php get_footer(); ?>





