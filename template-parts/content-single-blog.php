<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// print_r($post);
?>

<div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

<div class="container">
<div class="row">
<div class="col-lg-8">
<article class="content py-5">
		
<header class="content-header">
		<h1><?php the_title() ?>   </h1>
			<div class="meta mb-3  text-bold">
                <span class="btn btn-sm  btn-success  py-0 shadow-sm">
                <i class='fa fa-user'></i>
                 <?php 
            $fname = get_the_author_meta('first_name');
            $lname = get_the_author_meta('last_name'); 
            echo 'By:' . ' ' . $fname . ' ' . $lname;
            ?></span> |
            	<span class="btn btn-sm  btn-success  py-0 shadow-sm"> <i class='fa fa-history'></i> <?php the_date(); ?></span> |
				<span class="btn btn-sm  btn-success  py-0 shadow-sm "> <i class='fa fa-comment'></i> <?php comments_number();  ?></a></span> 
                <!-- <span class="comment text-muted text-success"> <i class='fa fa-envelop'></i> <?php echo get_the_date('l jS , Y');  ?></a></span> -->
			</div>

            <!-- <p><?php echo $post->post_date;  ?></p> -->
           
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

<aside class="content py-5">
<div class="bg-light p-5 d-flex justify-content-end">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>
  <div class="bg-light  p-5 d-flex justify-content-end">
  </div>
</aside>

</div>
</div>
</div>
