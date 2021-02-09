<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
print_r($post)
?>

<article class="content px-3 py-5 p-md-5">
		<div class="container">
		<header class="content-header">
		<h1><?php the_title() ?> </h1>
			<div class="meta mb-3 text-warning text-bold">
				<span class="date"><?php the_date(); ?></span>
				<?php the_tags( "<span class='tag'><i class='fa fa-tag'></i>", "</span><span class='tag'><i class='fa fa-tag'></i>", '</span>' ) ?>
				<span class="comment"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number();  ?></a></span>
			</div>
		</header>

<div class="text-muted">
	<?php  the_content(); ?>
</div>

<?php 
// comments_template();
?>
	
</article><!-- #post-## -->
