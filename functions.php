<?php

if ( ! function_exists( 'ngbrm_setup' ) ) :

    function ngbrm_setup() {
        /**
         * Enable theme support features
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/
         */
        add_theme_support( 'title-tag' );

        // add_theme_support( 'custom-header' );

        add_theme_support( 'post-thumbnails' );

        // add_theme_support( 'custom-background' );

        // add_theme_support( 'post-formats', array(
        //  'aside', 'image', 'video', 'quote', 'link', 'gallery',
        // ) );

        /**
         * Register navigation menus
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        // register_nav_menus( array( 'primary' => 'primary menu' ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

    } // end setup function
endif;
add_action( 'after_setup_theme', 'ngbrm_setup' );

/**
 * Enqueue scripts and styles.
 */
function ngbrm_scripts() {
    // override the shortcode plugin enqueue otherwise bootstrap comes after the site css, making overrides more cumbersome
    wp_enqueue_style( 'bootstrap', plugins_url() . '/bootstrap-4-wordpress-shortcodes/libraries/bootstrap-4.0.0/css/bootstrap.min.css',false );
    wp_enqueue_style( 'ngbrm_main', get_stylesheet_directory_uri() . '/ngbrm.css' );
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
    // wp_enqueue_style( 'ngstack-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'ngbrm_scripts' );



function get_the_post_id() {
  if (in_the_loop()) {
       $post_id = get_the_ID();
  } else {
       global $wp_query;
       $post_id = $wp_query->get_queried_object_id();
         }
  return $post_id;
}



include(STYLESHEETPATH.'/admin/custom_shortcodes.php');
