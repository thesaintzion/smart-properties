<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;


$price = get_post_meta( $post->ID, 'Price',  true);
$type = get_post_meta( $post->ID, 'Type',  true);
$purpose = get_post_meta( $post->ID, 'Purpose', true);
$payment_status = get_post_meta( $post->ID, 'Payment Status', true);
$land_size = get_post_meta( $post->ID, 'Land Size', true);
$land_unit = get_post_meta( $post->ID, 'Land Unit', true);
$status = get_post_meta( $post->ID, 'Status', true) ?  get_post_meta( $post->ID, 'Status', true) : 'Available';
$document_type = get_post_meta( $post->ID, 'Document Title',  true);
$location = get_post_meta( $post->ID, 'Location',  true);
$features = get_post_meta( $post->ID, 'Features',  true);
$features  = preg_replace('/\s+/', '', $features);
$features_array = preg_split ("/\,/", $features);  
// print_r($post);

// print_r($features)



?>
<div class="container">
<div class="row py-5">
  
<div class="col-lg-8 over-flow-scroll">
<article class="content">
		
    <header class="content-header">
		<h1><?php the_title() ?> </h1>
			<div class="meta mb-3  mt-2 text-bold d-flex justify-content-between align-items-center">

            <?php if($price) : ?>
                <h4 class="text-bold text-success">&#8358;<?php echo $price;  ?> <?php if($land_unit) : echo '/'  .' ' .$land_unit; endif; ?> </h4>
            <?php endif;  ?>

            <!-- <?php if($type) : ?>
            <span class="btn btn-sm btn-outline-success  py-0"> <i class="fa fa-star"></i> <?php echo $type; ?></span>
            <?php endif;  ?> -->

            </div>

            <div class="meta mb-3  mt-2 text-bold d-flex justify-content-between">
            <?php if($location) : ?>
            <p class="mb-0"> <i class="fa fa-map-marker text-success"></i> <span class="text-muted"> <?php echo $location; ?> </span> </p>
            <?php endif;  ?>
            </div>
    </header>
    <?php if($status === 'Sold' || $status === 'sold') : ?><div class="alert alert-danger text-white bg-danger"> <span class="fa fa-warning"></span> Property has been sold</div> <?php  endif; ?>
        <div>
        <?php if(has_post_thumbnail()) : ?>
        
        <img src="<?php the_post_thumbnail_url(); ?>" class="w-100 rounded mb-4 shadow-sm">
        
      <?php  endif;?>
        </div>

    <button  data-toggle="modal" data-target="#enquiryModal" class="btn btn-lg btn-success w-100 mb-4"> 
    <div class="d-flex justify-content-between align-items-center">
    <span class="fa fa-whatsapp"></span>
    <span class="w-100"> Make Enquiry </span>
    </div>
   
    </button>
        
<div class="mb-4">
<h5 class="mb-3">Description</h5>
	<?php  the_content(); ?>
</div>
</article><!-- #post-## -->
</div>

<div class="col-lg-4">
<article class="content mt-lg-4">
  <button  data-toggle="modal" data-target="#enquiryModal" class="btn btn-lg btn-success w-100 mb-4 d-none d-lg-block"> 
    <div class="d-flex justify-content-between align-items-center">
    <span class="fa fa-whatsapp"></span>
    <span class="w-100"> Make Enquiry </span>
    </div>
    </button>

<!-- <h5 class="mb-3 mt-4">Details</h5> -->
  
  <ul class="list-group">
  
<?php if($status) : ?>
   <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6">Status</div> <div class="col-6 text-right <?php if($status === 'Sold' || $status === 'sold') : echo 'text-danger';  else: echo 'text-success' ; endif; ?>"><?php  echo $status; ?></div></div></li>
  <?php endif; ?>

  <?php if($type) : ?>
   <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6">Type</div> <div class="col-6 text-right text-success "><?php  echo $type; ?></div></div></li>
  <?php endif; ?>

  <?php if($purpose) : ?>
   <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6">Purpose</div> <div class="col-6 text-right text-success "><?php  echo $purpose; ?></div></div></li>
  <?php endif; ?>

  <?php if($land_size) : ?>
   <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6">Size</div> <div class="col-6 text-right text-success "><?php  echo $land_size; ?>  <?php echo $land_unit; ?></div></div></li>
  <?php endif; ?>

  <?php if($payment_status) : ?>
   <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6">Payment Status</div> <div class="col-6 text-right text-success "><?php  echo $payment_status; ?></div></div></li>
  <?php endif; ?>

  <?php if($document_type) : ?>
   <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6">Title</div> <div class="col-6 text-right text-success "><?php  echo $document_type; ?></div></div></li>
  <?php endif; ?>

  </ul>

    <h5 class="mb-3 mt-4 ">Features</h5>
  
    <ul class="list-group">
    <?php if(count($features_array) > 1) :  foreach($features_array as $f_array) { ?>
     
     <li class="list-group-item border-right-0 border-left-0  px-0 "> <div class="row"><div class="col-6"><?php  echo $f_array; ?></div> 
     <div class="col-6 text-right text-success "><span class="fa fa-check text-success"></span></div></div></li>


    <?php } endif; ?>
    </ul>

    <button  data-toggle="modal" data-target="#enquiryModal" class="btn btn-lg btn-success w-100 mt-4 d-lg-none d-sm-block"> 
    <div class="d-flex justify-content-between align-items-center">
    <span class="fa fa-whatsapp"></span>
    <span class="w-100"> Make Enquiry </span>
    </div>
    </button>



    <div class="bg-light  mt-3 p-5 d-flex justify-content-end">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>


</article>
    </div>

</div>
</div>



<!-- Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content  bg-success text-white">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     <h5 class="mb-4">  <span class="fa fa-whatsapp mr-3"></span> 08069682665</h5>
     <h5  class="mb-5">  <span class="fa fa-envelope mr-3"></span> saint@gmail.com</h5>
     <p>Integer venenatis metus erat, ac sagittis nunc maximus ut. Praesent semper tincidunt eros, in bibendum risus sollicitudin non. Curabitur commodo dictum dui, at aliquam nisi placerat id.</p>
      </div>
      <div class="modal-footer d-none">
        <button type="button" class="btn  w-100" data-dismiss="modal">Dismiss</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
