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
						
						<form action="https://sendmail.w3layouts.com/submitForm" method="post" class="main-input">
							<div class="top-inputs d-grid">
								<input type="text" placeholder="Name" name="w3lName" id="w3lName" required="">
								<input type="email" name="email" placeholder="Email" id="w3lSender" required="">
							</div>
							<input type="text" placeholder="Phone Number" name="w3lName" id="w3lName" required="">
							<textarea placeholder="Message" name="w3lMessage" id="w3lMessage" required=""></textarea>
							<div class="text-right">
								<button type="submit" class="btn btn-theme3">Send Now</button>
							</div>
						</form>
					</div>
					
					<div class="contact-right">
						<img src="assets/images/ab-2.jpg" class="img-fluid" alt="">
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
							<p>485 Pretty View Lane, Lorem ipsum, London, England</p>
						</div>
						<div class="contact-info">
							<span class="fa fa-phone" aria-hidden="true"></span>
							<h4>Phone</h4>
							<p><a href="tel:+44 7834 857829">+44 7834 857829</a></p>
							<p><a href="tel:+44 987 654 321">+44 987 654 321</a></p>
						</div>
						<div class="contact-info">
							<span class="fa fa-envelope-open-o" aria-hidden="true"></span>
							<h4>Mail</h4>
							<p><a href="mailto:mail@example.com" class="email">mail@example.com</a></p>
							<p><a href="mailto:mail@example.com" class="email">mail@example.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="map border">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.7281066703!2d-0.24168144921176335!3d51.5287718408761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1569921526194!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
</section>
<!-- //contact form -->
 




<?php get_footer(); ?>





