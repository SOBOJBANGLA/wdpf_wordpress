<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( ! function_exists( 'mix_blog_enqueue_styles' ) ) :
    /**
     * Load assets.
     *
     * @since 1.0.0
     */
    function mix_blog_enqueue_styles() {
        wp_enqueue_style( 'mix-blog-style-parent', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'mix-blog-style', get_stylesheet_directory_uri() . '/style.css', array( 'mix-blog-style-parent' ), '1.0.0' );
        wp_enqueue_script( 'mix-blog-custom', get_theme_file_uri( '/body-class.js' ), array( 'jquery' ), '20151215', true );
        wp_enqueue_script( 'mix-blog-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), '20151215', true );
        wp_enqueue_script( 'jquery-matchHeight', get_theme_file_uri( '/assets/js/jquery.matchHeight.js' ), array( 'jquery' ), '20151215', true );
    }
endif;
add_action( 'wp_enqueue_scripts', 'mix_blog_enqueue_styles', 99 );

if ( ! function_exists( 'mix_blog_customize_backend_styles' ) ) :
    /**
     * Load assets.
     *
     * @since 1.0.0
     */
    function mix_blog_customize_backend_styles() {
        wp_enqueue_style( 'mix-blog-style', get_stylesheet_directory_uri() . '/customizer-style.css' );
    }
endif;
add_action( 'customize_controls_enqueue_scripts', 'mix_blog_customize_backend_styles', 99 );

require get_stylesheet_directory() . '/inc/customizer/customizer.php';