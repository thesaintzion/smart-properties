<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>



<section class="locations-1" id="locations">

        <div class="locations pb-5">
            <div class="container py-5">
                
        <div class="container">     

<div class="mb-4">

<!-- <?php wp_get_archives(); ?> -->

<!-- 
<?php 

$categories = get_categories();
foreach($categories as $category) {
   echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
}

?> -->


                <!-- <ul class="nav nav-pills  justify-content-center mb-t">
                <li class="nav-item">
                     <a class="nav-link active border py-1" data-toggle="pill" href="#all">All</a>
                    </li>
                
                    <li class="nav-item">
                     <a class="nav-link  border py-1 ml-2" data-toggle="pill" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link border ml-2 py-1" data-toggle="pill" href="#houses">Gossip</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link border ml-2 py-1" data-toggle="pill" href="#lands">Real Estate</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link border ml-2 py-1" data-toggle="pill" href="#lands">Covid-19</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link border ml-2 py-1" data-toggle="pill" href="#lands">Football</a>
                    </li>
                </ul> -->

				<?php echo bootstrap_pagination(); ?>
            
            <!-- Tab panes -->
            <div class="ta-content bg-white mt-4">
                <div class="ta-pane  active" id="all">
            
            <div class="content">
            <div class="row">

            <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            get_template_part( 'inc/section', 'blog' );

            }
            } else {
            echo `<h1>No Post to Display</h1>`;
            }
            ?>

            </div>
            </div>
                </div>
            </div>
        </div>

<?php echo bootstrap_pagination(); ?>
               
            </div>


 
        </div>
    </section>