

<section class="py-5 bg-white">
    <div class="container">
<div class="d-flex justify-content-between align-items-center">

<div class="heading">
                    <h3 class="head">Properties</h3>
                </div>
<ul class="nav nav-pills  justify-content-end ">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#all">All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#houses">Houses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#lands">Lands</a>
  </li>
</ul>
</div>

<!-- Tab panes -->
<div class="tab-content bg-white">
  <div class="tab-pane  active" id="all">
  <section class="grids-4 mb-5" id="properties">
        <div class="bg-white py-3">
            <div class="containe">
                
                <div class="row mt-5 pt-3">


                <?php
            if ( have_posts() ) {
            while ( have_posts() ) {
            the_post();
            get_template_part( 'inc/section', 'property' );

            }
            } else {
            echo `<h1>No Post to Display</h1>`;
            }
            ?>


                
</div>
            </div>
        </div>
    </section>

  </div>

  <div class="tab-pane fade" id="houses">
  <h3>Houses</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
  <div class="tab-pane fade" id="lands">
  <h3>Lands</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</div>
</div>
</section>