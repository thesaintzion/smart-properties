<?php
/*
Template Name: Contact Us 
*/
/**
 * About Us custom template
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$address =   get_field('address');
$email   = preg_replace('/\s+/', '', get_field('email'));
$email_array = preg_split ("/\,/", $email);
$phone  = preg_replace('/\s+/', '', get_field('phone'));
$phone_array = preg_split ("/\,/", $phone);
// $map =   get_field('map');

?>

<!-- Page header -->
<?php get_template_part( 'inc/section', 'page-header') ?>


<!-- contact form -->
<section class="w3l-contacts-2" id="contact">
	<div class="contacts-main">
		
		<div class="form-41-mian py-5">
			<div class="container py-md-3">
				<h3 class="cont-head">Get in touch</h3>
				<div class="d-grid align-form-map">
					<div class="form-inner-cont">
					
						<?php get_template_part( 'inc/section', 'contact-form') ?>

					</div>
					
					<div class="contact-right border">
						<?php if(has_post_thumbnail()) : ?>
						<img src="<?php the_post_thumbnail_url(); ?>" class="w-100 rounded img-fluid">
						<?php  endif;?>
					</div>
				</div>
			</div>
		</div>
		<div class="contant11-top-bg py-5">
			<div class="container py-md-3">
				
				<div class="d-grid contact section-gap">
					<div class="contact-info-left d-grid text-center">
						<div class="contact-info">
							<span class="fa fa-location-arrow" aria-hidden="true"></span>
							<h4>Address</h4>
							<p><?php echo $address ?></p>
						</div>
						<div class="contact-info">
							<span class="fa fa-phone" aria-hidden="true"></span>
							<h4>Phone</h4>
						
							<?php if(count($phone_array) > 1) :  foreach($phone_array as $p) { ?>
								<p><a href="tel:<?php echo $p; ?>"><?php echo $p; ?></a></p>
							<?php } endif; ?>

						</div>
						<div class="contact-info">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
							<h4>Mail</h4>
							<?php if(count($email_array) > 1) :  foreach($email_array as $e) { ?>
								<p><a class="email" href="mailto:<?php echo $e; ?>"><?php echo $e; ?></a></p>
							<?php } endif; ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<!-- <div class="map border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div> -->
</section>
<!-- //contact form -->
 




<?php get_footer(); ?>





