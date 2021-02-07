<?php
/**
 * The template for displaying all regular pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>

<!-- Page header -->
<?php get_template_part( 'inc/section', 'page-header') ?>


<section class="w3l-content-with-photo-4" id="about">
        <div id="content-with-photo4-block" class="py-5">
            <div class="container py-md-3  ">
<div class="cwp4-text">
  
<?php get_template_part( 'inc/section', 'content') ?>

</div>
</div>
</div>
</section>


<?php get_footer(); ?>

