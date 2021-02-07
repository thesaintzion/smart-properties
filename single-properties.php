<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>


<?php 
get_header();
 ?>

    <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();

                    // the_title();
                    // the_content();

                    get_template_part( 'template-parts/content', 'single-property' );
					// understrap_post_nav();

					
                }
            } else {
                echo `<h1>No Post to Display</h1>`;
            }
            ?>
<?php get_footer(); ?>


