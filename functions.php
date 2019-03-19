<?php

/**
 * autoloading avec composer
 */

require get_template_directory() . '/vendor/autoload.php';

/**
 * wp-bootstrap/wp-bootstrap-navwalker
 */

require get_template_directory() . '/vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php';

/**
 * sécurité
 */

// désactive l'édition de fichier dans l'admin
define( 'DISALLOW_FILE_EDIT', true );

/**
 * localisation
 */

// choix du fuseau horaire
date_default_timezone_set( 'Europe/Paris' );
// choix du réglage régional
setlocale( LC_ALL, 'fr', 'fr_FR', 'fr_FR.utf8', 'fr_FR.ISO_8859-1' );

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // chargement de la feuille de style de Bootstrap
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css' );
    // chargement de la feuille de style du thème
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri().'/css/style.css', ['bootstrap'],['carousel']);
    // chargement de la feuille de style pour font
    wp_enqueue_style( 'fonts', get_stylesheet_directory_uri().'/img/fonts/Aleo/fonts.css', ['bootstrap']);
    
    wp_enqueue_style('font-awsome', get_stylesheet_directory_uri() . '/css/all.css');

    wp_enqueue_style('carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.min');

    wp_enqueue_style('animate-css-style', get_stylesheet_directory_uri() . '/css/animate.css');

    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/boostrap.css.map', ['bootstrap']);

    wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/fonts/flaticon/font/flaticon.css' , ['bootstrap']);

    wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/fonts/fontawesome/css/font-awesome.min.css' , ['bootstrap']);

    wp_enqueue_style('ionicons', get_stylesheet_directory_uri() . '/fonts/ionicons/css/ionicons.css' , ['bootstrap']);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script() {
    // chargement du script JS de Popper (une dépendance de Bootstrap)
    wp_enqueue_script( 'popper', get_stylesheet_directory_uri().'/js/popper.min.js', ['jquery'] );
    // chargement du script JS de Bootstrap
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/js/bootstrap.min.js', ['popper'] );
    // chargement du script JS du thème
    wp_enqueue_script( 'my-theme-main', get_stylesheet_directory_uri().'/js/main.js', ['carousel-js'],['jquery'] );

    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery-3.2.1.min.js', ['jquery'] );

    wp_enqueue_script( 'jquery-waypoint', get_stylesheet_directory_uri().'/js/jquery.waypoints.min.js', ['jquery'] );

    wp_enqueue_script( 'carousel-js', get_stylesheet_directory_uri().'/js/owl.carousel.min.js', ['jquery'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_script' );


/**
 * menu 
 */

// déclaration des menus utilisés
register_nav_menus([
    // si vous changez le nom du menu, changez-le aussi dans la configuration du menu WP_Bootstrap_Navwalker dans le fichier `header.php`
    'main-menu' => 'Main menu',
]);

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
    } endif;

/**
 * fonctionnalités du thème
 */

// activation de la fonctionnalité des balises HTML5
add_theme_support( 'html5' );
// activation de la fonctionnalité du titre du site
add_theme_support( 'title-tag' );
// activation de la fonctionnalité des vignettes
add_theme_support( 'post-thumbnails' );

/**
 * configuration des vignettes (thumbnails)
 */

// tailles de vignettes définies par défaut
// thumbnail: 150, 150, ['center', 'center']
// medium: 300, 300
// medium_large: 768, 0
// large: 1024, 1024

// ajout de nouvelles tailles de vignettes
function my_theme_add_image_size() {
    add_image_size( 'my-thumbnail',  150, 150, ['center', 'center'] );
    add_image_size( 'my-medium',  300, 300 );
    add_image_size( 'my-medium_large',  768, 0 );
    add_image_size( 'my-large',  1024, 1024 );
}
add_action( 'after_setup_theme', 'my_theme_add_image_size' );

// rend les nouvelles tailles de vignettes sélectionnables dans l'admin
function my_theme_image_size_names_choose($sizes) {
    return array_merge( $sizes, [
        'my-thumbnail' => __( 'Taille des miniatures' ),
        'my-medium' => __( 'Taille moyenne' ),
        'my-medium-large' => __( 'Taille moyenne large' ),
        'my-large' => __( 'Grande taille' ),
    ]);
}
add_filter( 'image_size_names_choose', 'my_theme_image_size_names_choose' );

// ajout des widget
add_filter('widget_text','do_shortcode');