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
        register_nav_menus( array( 'services' => 'Service Pages' ) );

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
    wp_enqueue_script( 'ngacustom', get_stylesheet_directory_uri() . '/js/ngbrm.js', 'jquery', '1.0', true );
    // override the shortcode plugin enqueue otherwise bootstrap comes after the site css, making overrides more cumbersome
    wp_enqueue_style( 'bootstrap', plugins_url() . '/netstrap/libraries/bootstrap-4.0.0/css/bootstrap.min.css',false );
    wp_enqueue_style( 'ngbrm_main', get_stylesheet_directory_uri() . '/ngbrm.css' );
    wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'ngbrm_scripts' );

function ld_new_excerpt_more($more) {
    global $post;
    return '...<a class="more-link" href="'. get_permalink($post->ID) . '"><em>More</em></a>';
}
add_filter('excerpt_more', 'ld_new_excerpt_more');

/**
 * Register widgetized areas.
 *
 */
function ngbrm_widget_init() {

    register_sidebar( array(
        'name'          => 'Page Sidebar',
        'id'            => 'page_sidebar_1',
        'before_widget' => '<div class="sb-widget-area">',
        'after_widget'  => '</div>'
    ) );

}
add_action( 'widgets_init', 'ngbrm_widget_init' );


/**
 * Meta Box
 *
 */

function add_page_mast_meta_box($post) {
    add_meta_box('page_mast_meta_box', 'Page Mast Titles', 'page_mast_metabox_html_function', array('page','post'), 'normal', 'default');
}
add_action('admin_init','add_page_mast_meta_box');

function page_mast_metabox_html_function($post){
    $field1 = get_post_meta($post->ID, 'mast_page_title', true);
    $field2 = get_post_meta($post->ID, 'mast_section_title', true);
?>
    <p><em>These are the titles that are displayed in the header banner with the contact button</em></p>
    <table width="100%" border="0" cellspacing="4" cellpadding="0">
        <tr>
            <td width="16%" valign="top">
                <strong>Primary Title</strong>
            </td>
            <td width="84%">
                <input type="text" name="mast_page_title" id="mast_page_title" size="72%" value="<?php echo $field1; ?>" />
                <br />
                <small><em>Leave empty to use default</em></small>
            </td>
        </tr>
        <tr>
            <td width="16%" valign="top">
                <strong>Section Title</strong>
            </td>
            <td width="84%">
                <input type="text" name="mast_section_title" id="mast_section_title" size="72%" value="<?php echo $field2; ?>" />
                <br />
                <small><em>Leave empty to use default</em></small>
            </td>
        </tr>
    </table>
    <input type="hidden" name="mast_meta_flag" value="true" />
<?php
}

add_action('save_post','save_page_mast_meta', 10, 2);

function save_page_mast_meta($post_id, $post){
    if ( $post->post_type == 'page' || $post->post_type == 'post' ) {
        if (isset($_POST['mast_meta_flag'])) {
            updateifstatement('mast_page_title', $post_id);
            updateifstatement('mast_section_title', $post_id);
        }
    }
}

function updateifstatement($fieldname, $postid) {
    if ( isset( $_POST[$fieldname] ) && $_POST[$fieldname] != '' ) {
        update_post_meta( $postid, $fieldname, $_POST[$fieldname] );
    }else{
        update_post_meta( $postid, $fieldname, '');
    }
}

/*
* Utility Function
*
* Mainly used to get the post id of a page outside of the loop in a page template
 */
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
