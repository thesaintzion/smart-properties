
<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div>

<?php 
if (have_posts()) :
 while(have_posts()) :
    the_post();
    the_content();
endwhile;
endif;
?>

</div>