

<?php
/**
 * The template for blog
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



?>



<div class="col-md-4 mb-3 col-sm-6">
<a href="<?php the_permalink(); ?>">
    <div class="box16">
        <img  src="<?php the_post_thumbnail_url(); ?>"  alt="">
        <div class="box-content">
            <h3 class="title"><?php the_title(); ?></h3>
          
            <span class="post"><?php the_date(); ?></span>
        </div>
    </div>
    </a>
</div>
