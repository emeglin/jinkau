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
            <div class="col-md-7 col-sm-12">
              <h1 class="color-contact">Contactez nous</h1>
            </div>
          </div>
        </div>

      </div>


    </section>
    <!-- END slider -->
<?php the_content(); ?>  

<?php 
get_footer();
?>
