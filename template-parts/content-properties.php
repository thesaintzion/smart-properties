

<?php $type = get_field('type'); ?>

<section class="py-5 bg-white">
    <div class="container ">
<div class="row">

<div class="col-lg-9">
<div class="d-block d-lg-flex  text-lg-left justify-content-between  align-items-center">
<div class="heading">
                    <h3 class="head mb-4 mb-lg-0">Properties</h3>
                </div>
<ul class="nav nav-pills  justify-content-between justify-lg-content-end ">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="pill" href="#all"><span class="fa fa-sort"></span> All</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#house"><span class="fa fa-sort"></span> Houses</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="pill" href="#land"><span class="fa fa-sort"></span> Lands</a>
  </li>
</ul>
</div>

<!-- Tab panes -->
<div class="tab-content bg-white">
      <div class="tab-pane  active" id="all">
      <section class="grids-4 mb-5" id="properties">
            <div class="bg-white py-3">
                    <div class="row  pt-3">

                    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                    
                    <div class="grids4-info  col-lg-6 col-md-6 mb-4">
                          <?php get_template_part( 'inc/section', 'property-all' ); ?>
                    </div>
                  <?php endwhile; else : echo '<h1>No Post to Display</h1>'; endif; ?>
                  
                </div>
            </div>
        </section>
      </div>

      <div class="tab-pane fade" id="house">
      <section class="grids-4 mb-5">
            <div class="bg-white py-3">
                    <div class="row mt-5 pt-3">
                    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                
                        <?php  $type = get_field('type');

                        if($type && ($type == 'House' || $type == 'house')) : ?>   
                        <div class="grids4-info  col-lg-6 col-md-6 mb-4">
                        <?php get_template_part( 'inc/section', 'property-all' ); ?>
                        </div>

                        <?php endif; ?> 

                  <?php endwhile; else : echo '<h1>No Post to Display</h1>'; endif; ?>
        
                </div>
            </div>
        </section>
      </div>

    <div class="tab-pane fade" id="land">
    <section class="grids-4 mb-5">
          <div class="bg-white py-3">
                  <div class="row mt-5 pt-3">
                  <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
                 

                      <?php $type = get_field('type');

                      if($type && ($type == 'Land' || $type == 'land')) : ?>   
                      <div class="grids4-info  col-lg-6 col-md-6 mb-4">
                      <?php get_template_part( 'inc/section', 'property-all' ); ?>
                      </div>

                      <?php endif; ?> 


                <?php endwhile; else : echo '<h1>No Post to Display</h1>'; endif; ?>
              </div>
          </div>
      </section>
    </div>
</div>
</div>

<div class="col-lg-3">
<div class="bg-light  p-5 d-flex justify-content-end">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

  <div class="bg-light  p-5 d-flex justify-content-end mt-1">
<small>Ads X</small>
  </div>

</div>


</div>
</div>
</section>