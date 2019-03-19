<?php 
/**  
 * Template Name: Template Contact 
 */ 
?>

<?php 
get_header();
?>
<section class="home-slider  inner-page">
        <?php echo do_shortcode('[metaslider id="31"]'); ?>
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="color-contact">Contactez nous</h1>
            </div>
          </div>
        </div>

      </div>


    </section>
    <!-- END slider -->
    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
              <div class="map-responsive">
            <img width="700" src="https://dev.virtualearth.net/REST/V1/Imagery/Map/AerialWithLabels/71%20rue%20Pasteur%2059110%20Lille?mapSize=700,400&format=png&key=AuvKv3MSbuQKeYxU2oT2ov-U2zVZsoKb0DjIuZle1_uhW4RkPjAFU0EmPWSMx6tV" alt="Bing Map of 71 rue Pasteur 59110 Lille">
          </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <h5 class="text-uppercase mb-3">ADRESSE</h5>
            <p class="mb-5">71 Rue Pasteur, <br> 59000 <br> LILLE</p>
            
            <h5 class="text-uppercase mb-3">Email</h5>
            <p class="mb-5"><a href="mailto:jinkau@outlook.com">jinkau@outlook.com</a> </p>
            
            <h5 class="text-uppercase mb-3">Téléphone</h5>
            <p class="mb-5">Fixe: 03 03 03 03 03 <br> Mobile: 06 06 06 06 06</p>
          </div>
        </div>
      </div>
    </section>

<?php 
get_footer();
?>
