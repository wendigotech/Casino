<?php
if ( ! function_exists( 'casino2_setup' ) ) :

function casino2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'casino2', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'casino2' ),
        'social'  => __( 'Social Links Menu', 'casino2' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // casino2_setup

add_action( 'after_setup_theme', 'casino2_setup' );


if ( ! function_exists( 'casino2_init' ) ) :

function casino2_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // casino2_setup

add_action( 'init', 'casino2_init' );


if ( ! function_exists( 'casino2_widgets_init' ) ) :

function casino2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'casino2_widgets_init' );
endif;// casino2_widgets_init



if ( ! function_exists( 'casino2_customize_register' ) ) :

function casino2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'casino2_customize_register' );
endif;// casino2_customize_register


if ( ! function_exists( 'casino2_enqueue_scripts' ) ) :
    function casino2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.9.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'cbmain' );
    wp_enqueue_script( 'cbmain', get_template_directory_uri() . '/js/cb-main.js', false, null, true);

    wp_deregister_script( 'jquerytouchswipe' );
    wp_enqueue_script( 'jquerytouchswipe', get_template_directory_uri() . '/js/jquery.touchSwipe.js', false, null, true);

    wp_deregister_script( 'owlcarousel' );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);

    wp_deregister_script( 'jqueryeasypiechart' );
    wp_enqueue_script( 'jqueryeasypiechart', get_template_directory_uri() . '/js/jquery.easy-pie-chart.js', false, null, true);

    wp_deregister_script( 'animatorpro' );
    wp_enqueue_script( 'animatorpro', 'https://cdn.rawgit.com/MhdAljuboori/fc08b6eb45fbc2e724b4/raw/animator-pro.js', false, null, true);

    wp_deregister_script( 'jquerywaypoints' );
    wp_enqueue_script( 'jquerywaypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, null, 'all');

    wp_deregister_style( 'cbstyle' );
    wp_enqueue_style( 'cbstyle', get_template_directory_uri() . '/css/cb-style.css', false, null, 'all');

    wp_deregister_style( 'owlcarousel' );
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'https://fonts.googleapis.com/css?family=Roboto:100,300,400', false, null, 'all');

    wp_deregister_style( 'hovermin' );
    wp_enqueue_style( 'hovermin', get_template_directory_uri() . '/css/hover-min.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'casino2_enqueue_scripts' );
endif;

/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */

    /* Pinegrow generated Include Resources End */
?>