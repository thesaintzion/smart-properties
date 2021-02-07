<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>


        <h2 class="comment-reply-title">
           <?php
            if(have_comments()){

             echo get_comments_number() . "Comments";

           } else{
               
            echo  "Leave a comment";
           }
           ?>
        </h2>
        <!-- .comments-title -->


			<?php
			wp_list_comments(
				array(
					'style'      => '<div></div>',
                    // 'short_ping' => true,
                    'avatar_size' => 120
				)
			);
            ?>
 

	


<?php comment_form(
    array(
        'class_form' => ''
    )
); // Render comments form. ?>
<!-- #respond

</div>




