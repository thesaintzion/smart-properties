 <?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

 
  get_header();

 
    $property_args = array(
      'post_type' => 'properties',
      'posts_per_page' => 3
      );
    $home_properties = new WP_Query ($property_args);

    $blog_args = array(
      'post_type' => 'post',
      'posts_per_page' => 3
      );
    $home_blogs = new WP_Query ($blog_args);
  

	 ?>

  <div class="bg-light  p-5 d-flex justify-content-end">
<small>Ads X</small>
  </div>

  <!-- <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div> -->



  
<section class="py-5 bg-white">
    <div class="container">
<div class="d-flex justify-content-between align-items-center">

<div class="heading">
                    <h3 class="head">Properties</h3>
                </div>
<ul class="nav nav-pills  justify-content-end ">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#all"><span class="fa fa-sort"></span> All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#house"><span class="fa fa-sort"></span> Houses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#land"><span class="fa fa-sort"></span> Lands</a>
  </li>
</ul>
</div>

<!-- Tab panes -->
<div class="tab-content bg-white">
 
  <div class="tab-pane  active" id="all">
  <section class="grids-4" id="properties">
        <div class="bg-white py-3">
                <div class="row pt-3">
                <?php if (  $home_properties->have_posts() ) :  while ($home_properties->have_posts()) : $home_properties->the_post(); ?>
                <div class="grids4-info   col-lg-4 col-md-6 mb-4">
                          <?php get_template_part( 'inc/section', 'property-all' ); ?>
                    </div>
                  <?php endwhile; else : echo '<h1>No Post to Display</h1>'; endif; ?>     
              </div>
        </div>
    </section>
  </div>

  <div class="tab-pane fade" id="house">
  <section class="grids-4">
        <div class="bg-white py-3">
                <div class="row pt-3">
             
                <?php if (  $home_properties->have_posts() ) :  while ($home_properties->have_posts()) : $home_properties->the_post(); ?>

                   <?php 
                     $type = get_post_meta( $post->ID, 'Type',  true); 
                   if($type && ($type == 'House' || $type == 'house')) : ?>   
                    <div class="grids4-info   col-lg-4 col-md-6 mb-4">
                          <?php get_template_part( 'inc/section', 'property-all' ); ?>
                    </div>
                    <?php endif; ?>  

                  <?php endwhile; else : echo '<h1>No Post to Display</h1>'; endif; ?>  
            </div>
        </div>
    </section>
  </div>
  <div class="tab-pane fade" id="land">
  <section class="grids-4">
        <div class="bg-white py-3">
                <div class="row pt-3">
                  
                <?php if (  $home_properties->have_posts() ) :  while ($home_properties->have_posts()) : $home_properties->the_post(); ?>
                    <?php 
                     $type = get_post_meta( $post->ID, 'Type',  true); 
                   if($type && ($type == 'Land' || $type == 'land')) : ?>   
                    <div class="grids4-info   col-lg-4 col-md-6 mb-4">
                          <?php get_template_part( 'inc/section', 'property-all' ); ?>
                    </div>
                    <?php endif; ?>  
                  <?php endwhile; else : echo '<h1>No Post to Display</h1>'; endif; ?> 


            </div>
        </div>
    </section>
  </div>
</div>

<a href="properties" class="btn btn-outline-success w-100 mb-4"> 
<div class="d-flex justify-content-center align-items-center">
<span> More Properties </span>
<span class="fa fa-long-arrow-right ml-3"></span>
</div>
</a>

</div>
</section>



    <section class="locations-1 bg-light " id="locations">
                <div class="locations pb-5">
                <div class="container py-5">  

                    <div class="heading text-center  mx-auto mb-5">
                            <h3 class="head">Blog <span class="text-success">Articles</span></h3>
                    </div>
              
                
                    <div class="content">
                      <div class="row">

                      <?php
                      if (   $home_blogs->have_posts() ) { 
                      while (  $home_blogs->have_posts() ) {
                        $home_blogs->the_post();
                        get_template_part( 'inc/section', 'blog' );
                      }
                      } else {
                      echo '<h1>No Post to Display</h1>';
                      }
                      ?>
                    </div>
                  </div>


                  <a href="blog" class="btn btn-outline-success w-100 mt-3 mb-4"> 
                    <div class="d-flex justify-content-center align-items-center">
                    <span> More Articles </span>
                    <span class="fa fa-long-arrow-right ml-3"></span>
                    </div>
                </a>

          </div>
        </div>

    </section>



<?php
  wp_reset_postdata();
 get_footer(); ?>


