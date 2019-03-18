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
      <?php echo do_shortcode('[metaslider id="18"]'); ?>

    </section>
    
    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Projets récent</h2>
            <p><a href="projets.html" class="btn btn-primary">Voir tout les projets</a></p>
          </div>
        </div>

        <div class="row no-gutters">
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 1</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_02.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 2</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_03.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 3</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_04.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 1</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_02.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 2</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_03.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 3</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_04.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 1</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_02.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 2</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_03.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4">
            <a href=" " class="link-thumbnail">
              <h3>Projet 3</h3>
              <img src="<?= get_stylesheet_directory_uri(); ?>/img/Capture JINKAU_04.PNG" alt="Image placeholder" class="img-fluid">
            </a>
          </div>
          
        </div>
      </div>
    </section>

<?php
get_footer();
?>