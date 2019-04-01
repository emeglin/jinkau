<?php 
/**  
 * Template Name: Template Projet
 */ 
?>
<?php
get_header();
?>

<section class="home-slider  inner-page">
    <?php echo do_shortcode('[metaslider id="64"]'); ?>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h1 class="color-projet">Nos projets</h1>
        </div>
      </div>
    </div>



    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-blueprint icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black"> Exemple 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-outline-primary btn-sm">Voir plus</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-building-1 icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black">Exemple 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-outline-primary btn-sm">Voir plus</a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 mb-3">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-crane icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black">Exemple 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <p><a href="#" class="btn btn-outline-primary btn-sm">Voir plus</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 ">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Nos Projets (triés par : les plus récents)</h2>
          </div>
        </div>
        <?php the_content(); ?>
      </div>
    </section>




<?php
get_footer();
?>