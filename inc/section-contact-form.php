<?php
/**
 * contact us form
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<form  id="enquiry" action="POST" class="main-input">
    <div class="top-inputs d-grid">
        <input type="text" placeholder="Name" name="name">
        <input type="email" name="email" placeholder="Email">
    </div>
    <input type="text" placeholder="Phone Number" name="phone" >
    <textarea placeholder="Message" name="message"> </textarea>
    <div class="w-100">
        <button type="submit" class="btn btn-theme3 w-100">Send Now</button>
    </div>
</form>


<script>

(function($) {

  $(document).ready(function(){
//   function handleContactForm(){
   
    $('#enquiry').submit( function(e){
        e.preventDefault(); 
        var form = $('#enquiry').serialize();
      
        var endPoint = '<?php echo admin_url('admin-ajax.php'); ?>';
        var formData = new FormData;

        formData.append('action', 'enquiry');
        formData.append('enquiry', form);

        $.ajax(endPoint, {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res){
            console.log('RES', res.data);
            },
            error: function(err){
                console.log('Woo Error', err);
            }
        }) 
    });


// handleContactForm();
 });
}(jQuery));


    </script>
