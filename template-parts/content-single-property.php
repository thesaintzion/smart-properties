<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="container">
<div class="row py-5">
  
<div class="col-lg-8 over-flow-scroll">
<article class="content">
		
<header class="content-header">
		<h1><?php the_title() ?> </h1>
			<div class="meta mb-3  mt-2 text-bold d-flex justify-content-between">
            	<span class="btn  btn-lg btn-success  py-0 shadow-sm"> &#8358;20,000,000 </span>
                <span class="text-muted d-none">
                    <!-- Type: <span class="text-success">House </span> -->
                    <i class='fa fa-history'></i> <?php the_date(); ?>
            </span> 
			</div>
           
		</header>


        <div>
        <?php if(has_post_thumbnail()) : ?>
        
        <img src="<?php the_post_thumbnail_url(); ?>" class="w-100 rounded mb-5">
        
      <?php  endif;?>
        </div>
        
<div class="text-muted">
	<?php  the_content(); ?>
</div>

<div class="my-4">

<?php 
$tags = get_the_tags();
if($tags){

foreach($tags as $tag) {

    ?>
  
<small href="<?php echo get_tag_link($tag->term_id); ?>" class='btn btn-sm border btn-outline-success mr-2 py-0'>#<?php echo $tag->name; ?></small>
<?php } } ?>

    <?php 
// the_tags( "<button class='btn btn-sm border mr-2 py-0'>#", "</button><button class='btn btn-sm border mr-2 py-0'>#", '</button>' );
?>


<br>
<br>

<?php 
$cats = get_the_category();
if($cats){

foreach($cats as $cat) {

    ?>
Category: <button class='btn btn-sm border btn-outline-dark mr-2 py-0'><?php echo $cat->name; ?></button>
<?php } } ?>


<div>

<?php 
// comments_template();
?>
	
</article><!-- #post-## -->
</div>

<div class="col-lg-4">
<article class="content mt-lg-4  bg-light">
    <h6>More info</h6>
</article>
    </div>

</div>
</div>
