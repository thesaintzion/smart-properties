<?php
/**
 * The template for properties
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
                   
                   
                   
<div class="grids4-info  col-lg-4 col-md-6">
    <div class="custom-rounded">
    <a href="<?php the_permalink(); ?>" >
        <div class="card-img-con">
        <img  src="<?php the_post_thumbnail_url(); ?>" class="img-fluid"  alt="<?php  the_title(); ?>">
        </div>
    </a>
    <ul class="location-top">
        <li class="rent bg-success text-white">House</li>
    </ul>
    <div class="info-bg">
        <h3><a href="#"><?php the_title(); ?></a></h3>
        <p>$ 450,000 $777 / sqft</p>
        <ul>
            <li><span class="fa fa-bed"></span> 4 Beds</li>
            <li><span class="fa fa-bath"></span> 3 Baths</li>
            <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
        </ul>
    </div>
</div>
</div>


