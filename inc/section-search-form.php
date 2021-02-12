

<?php
/**
 * The template for blog
 *
 * @package smartproperties
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
<!-- <input class="form-control w-100"> -->


<div class="input-group  my-3">

<!-- <div class="input-group-append bt-white">
<span  class="input-group-text bt-white">
    <span class="fa fa-search"></span>
</span>
</div> -->
    
            <input type="text" placeholder="Search properties" class="form-control" (input)="handleSearch(search.value, defaultProperties)" #search>
<div class="input-group-append ">
<button  class="btn btn-success input-group-text bg-success text-white">
<span class="fa fa-search"></span> <span class="ml-2">Search</span>
</button>
</div>
        </div>
</div>
