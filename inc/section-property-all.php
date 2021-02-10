<?php
/**
 * The template for properties
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



// $price = get_post_meta( $post->ID, 'Price',  true);
// $type = get_post_meta( $post->ID, 'Type',  true);
// $purpose = get_post_meta( $post->ID, 'Purpose', true);
// $payment_status = get_post_meta( $post->ID, 'Payment Status', true);
// $land_size = get_post_meta( $post->ID, 'Land Size', true);
// $land_unit = get_post_meta( $post->ID, 'Land Unit', true);
// $status = get_post_meta( $post->ID, 'Status', true) ?  get_post_meta( $post->ID, 'Status', true) : 'Available';
// $document_type = get_post_meta( $post->ID, 'Document Title',  true);
// $location = get_post_meta( $post->ID, 'Location',  true);
// $features = get_post_meta( $post->ID, 'Features',  true);
// $features  = preg_replace('/\s+/', '', $features);
// $features_array = preg_split ("/\,/", $features);  



$price = number_format(get_field('price'));
$location =   get_field('location');
$type = get_field('type');
$purpose = get_field('purpose');
$payment_status = get_field('payment_status');
$land_size =  get_field('land_size');
$land_unit =  get_field('land_unit');
$status = get_field('status') ?   get_field('status') : 'Available';
$document_type = get_field('document_title');
$features = get_field('features');
$features  = preg_replace('/\s+/', '', $features);
$features_array = preg_split ("/\,/", $features); 
?>
                   
                   
        
    <div class=" h-100 <?php if($status == 'Sold' || $status == 'sold') : echo 'sol custom-rounded';  else: echo 'custom-rounded' ; endif; ?>">
    <a href="<?php the_permalink(); ?>" >
        <div class="card-img-con ">
        <img  src="<?php the_post_thumbnail_url(); ?>" class="img-fluid"  alt="<?php  the_title(); ?>">

        <?php if( $status === 'sold' || $status === 'Sold') : ?>
        <div class="sold-con d-flex  align-items-center">
        <p class="mb-0 shadow w-100 text-center bg-danger"> <span class="fa fa-warning"></span>  Property Sold</p>
        </div>
        <?php endif; ?>

        </div>
    </a>
    <ul class="location-top">
    <?php if($type) : ?> <li><span class="btn btn-sm btn-success  py-0"> <i class="fa fa-star  text-white"></i> <?php echo $type; ?></span></li> <?php endif; ?>
    <?php if($payment_status) : ?> <li><span class="btn btn-sm btn-success  py-0"> <i class="fa fa-star  text-white"></i> <?php echo $payment_status; ?></span></li> <?php endif; ?>
        
    </ul>
    <div class="info-bg">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p class="mb-1 text-success text-bold">&#8358;<?php echo $price;  ?>  <?php if($type === 'Land' || $type === 'land') : echo '/ per plot'; endif; ?> </p>
        <hr class="my-0">
        <?php if($location) : ?>
            <p class="mb-0"> <i class="fa fa-map-marker text-success"></i> <span class="text-muted"> <?php echo $location; ?> </span> </p>
    <?php endif;  ?>
        <ul>
        <?php if($land_size) : ?> <li><span class="fa fa-bolt "></span><?php echo $land_size; ?><?php if($land_unit) : echo $land_unit; endif; ?></li> <?php endif; ?>
        <?php if($purpose) : ?> <li><span class="fa fa-bolt "></span><?php echo $purpose; ?></li> <?php endif; ?>
        <?php if($status) : ?> <li><span class="fa fa-bolt "></span><?php echo $status; ?></li> <?php endif; ?>
        </ul>
    </div>
</div>



