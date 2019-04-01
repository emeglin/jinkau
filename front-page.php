<?php
get_header();
?>

<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
}
?>
    <section>

    <?php 
      echo do_shortcode('[metaslider id="18"]'); 
    ?>
    

    </section>
    
    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Nos projets</h2>
            <p><a href="http://glinkowski-emeric.fr/jinkau/projet/" class="btn btn-primary">Voir tout les projets</a></p>
          </div>
        </div>
        <?php the_content(); ?>
      </div>
    </section>

<?php
get_footer();
?>