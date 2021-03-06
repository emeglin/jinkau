<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?php wp_title(); ?>Jinkau</title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header role="banner">
      <nav class="nav navbar navbar-expand-lg navbar-light bg-light">

        <div class="container">
          
          <a href="http://localhost/jinkau/image-fun/"><img src="<?= get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="logo"/></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav mr-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="http://localhost/jinkau/accueil">Accueil</a>
              </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/jinkau/projet/">Projets</a>
            </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Collectif</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="http://localhost/jinkau/qui-sommes-nous/">Qui sommes nous ?</a>
                  <a class="dropdown-item" href="http://localhost/jinkau/organigramme/">Organigramme</a>
                  <a class="dropdown-item" href="http://localhost/jinkau/nos-specialites/">Nos spécialités</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/jinkau/atelier-collaboratif/">Ateliers collaboratifs</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Médias</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="http://localhost/jinkau/videos/">Vidéos</a>
                  <a class="dropdown-item" href="http://localhost/jinkau/conferences/">Conférences</a>
                  <a class="dropdown-item" href="http://localhost/jinkau/newsletter/">Newsletter</a>
                  <a class="dropdown-item" href="http://localhost/jinkau/revuepresse/">Revue de Presse</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/jinkau/contact/">Contact &amp; Liens</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item">
                <a href="#" class="btn btn-outline-primary btn-sm">Télécharger notre book</a>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>        
        



<?php
// configuration du menu WP_Bootstrap_Navwalker
wp_nav_menu([
    'theme_location'    => 'primary', // le nom de l'emplacement du menu doit être défini dans le fichier `functions.php`
    'depth'             => 2, // 1 = sans menu déroulant, 2 = avec menu déroulant
    'container'         => 'div',
    'container_class'   => 'collapse navbar-collapse',
    'container_id'      => 'my-theme-navbar-collapse', // si vous changez ce `container_id`, changez-le aussi change les attributs `data-target` et `aria-controls` de la balise `button` ci-dessus
    'menu_class'        => 'nav navbar-nav',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
]);
?>
            </div>
        </nav>

        <section class="content">
