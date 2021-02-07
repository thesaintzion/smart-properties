<?php
/*
Template Name: Properties
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
<?php 
// get_template_part( 'inc/section', 'page-header')
 ?>

<section class="py-5 bg-white">
    <div class="container">
<div class="d-flex justify-content-between align-items-center">

<div class="heading">
                    <h3 class="head">Properties</h3>
                </div>
<ul class="nav nav-pills  justify-content-end ">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#all">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#houses">Houses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#lands">Lands</a>
  </li>
</ul>
</div>

<!-- Tab panes -->
<div class="tab-content bg-white">
  <div class="tab-pane  active" id="all">
  <section class="grids-4 mb-5" id="properties">
        <div class="bg-white py-3">
            <div class="containe">
                
                <div class="row mt-5 pt-3">

                    <div class="grids4-info  col-lg-4 col-md-6">
                        <div class="custom-rounded">
                        <a href="#" >
                            <div class="card-img-con">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/smartproperties/assets/images/1.jpg" ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <ul class="location-top">
                            <li class="rent bg-success text-white">Land</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Luxury Apartment In chelsea</a></h5>
                            <p>$ 450,000 $777 / sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                </div>
                    </div>

                    <div class="grids4-info col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="custom-rounded">
                        <a href="#">
                        <div class="card-img-con">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/smartproperties/assets/images/2.jpg" ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <ul class="location-top">
                            <li class="rent bg-success text-white">House</li>
                            <li class="rent bg-dark shadow-sm text-white">For Sale</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Nature-Friendly Family Houses</a></h5>
                            <p>$ 1,350 / per month</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 3 Beds</li>
                                <li><span class="fa fa-bath"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="grids4-info col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="custom-rounded">
                        <a href="#">
                         <div class="card-img-con">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/smartproperties/assets/images/5.jpg" ?>" class="img-fluid" alt="">
                        </div>
                        </a>
                        <ul class="location-top">
                            <li class="rent bg-success text-white">House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">House Rent in Hydepark</a></h5>
                            <p>$ 2,500 /per month</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                    <div class="custom-rounded">
                        <a href="#">
                        <div class="card-img-con">
                        <img src="<?php echo get_home_url() . "/wp-content/themes/smartproperties/assets/images/4.jpg" ?>" class="img-fluid" alt="">
                        </div>
                        </a>
                        <ul class="location-top">
                            <li class="rent bg-success text-white">Land</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Apartment in Memorial Texas</a></h5>
                            <p>$ 220,000 550 / Sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 5 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
</div>
                    <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                    <div class="custom-rounded">
                        <a href="#">
                        <div class="card-img-con">
                        <img src="<?php echo get_home_url() . "/wp-content/themes/smartproperties/assets/images/5.jpg" ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <ul class="location-top">
                            <li class="rent bg-success text-white">Land</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Villa in Miami beach Florida</a></h5>
                            <p>$ 150,000 500 / Per Sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 2 Beds</li>
                                <li><span class="fa fa-bath"></span> 1 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
</div>

                    <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                    <div class="custom-rounded">
                        <a href="#">
                        <div class="card-img-con">
                        <img src="<?php echo get_home_url() . "/wp-content/themes/smartproperties/assets/images/2.jpg" ?>" class="img-fluid" alt="">
                            </div>
                        </a>
                        <ul class="location-top">
                            <li class="rent bg-success text-white">House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Apartment Jacksonville</a></h5>
                            <p>$ 750 /per month</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
                </div>
</div>
            </div>
        </div>
    </section>

  </div>

  <div class="tab-pane fade" id="houses">
  <h3>Houses</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="tab-pane fade" id="lands">
  <h3>Lands</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
</div>
</section>

 




<?php get_footer(); ?>



