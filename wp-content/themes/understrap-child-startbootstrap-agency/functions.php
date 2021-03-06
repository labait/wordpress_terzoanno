<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();

  //wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'child-understrap-styles', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ) );

  // AGENCY STYLE AND CUSTOM CSS
  wp_enqueue_style( 'font-montserrat-styles', "https://fonts.googleapis.com/css?family=Montserrat:400,700", array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'font-kaushan-script-styles', "https://fonts.googleapis.com/css?family=Kaushan+Scriptogleapis.com/css?family=Kaushan+Script", array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'font-droid', "https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic", array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'font-roboto', "https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700", array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'agency-styles', get_stylesheet_directory_uri() . '/css/agency.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'fontawesome-styles', get_stylesheet_directory_uri() . '/vendor/font-awesome/css/font-awesome.css', array(), $the_theme->get( 'Version' ) );
  wp_enqueue_style( 'custom-styles', get_stylesheet_directory_uri() . '/css/custom.css', array(), $the_theme->get( 'Version' ) );

  wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );

  // FREELANCER SCRIPTS AND CUSTOM JS
  wp_enqueue_script( 'agency-scripts', get_stylesheet_directory_uri() . '/js/agency.js', array(), $the_theme->get( 'Version' ), true );
  wp_enqueue_script( 'jqBootstrapValidation-scripts', get_stylesheet_directory_uri() . '/js/jqBootstrapValidation.js', array(), $the_theme->get( 'Version' ), true );
  wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/custom.js', array(), $the_theme->get( 'Version' ), true );


}
