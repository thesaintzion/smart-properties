
<?php
/**
 * The template for carosel
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

 <section>
	 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="overlay"></div>
    <div class="carousel-item active">
      <img  src="./wp-content/themes/smartproperties/assets/images/2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img  src="./wp-content/themes/smartproperties/assets/images/4.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img  src="./wp-content/themes/smartproperties/assets/images/1.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>