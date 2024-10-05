<?php
/**
 * Shadow Themes Customizer
 *
 * @package Shadow Themes
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mix_blog_customize_register( $wp_customize ) {

    include get_stylesheet_directory() . '/inc/customizer/recent.php';;
}
add_action( 'customize_register', 'mix_blog_customize_register' );

if( !function_exists( 'mix_blog_get_post_cat_choices' ) ) :
  /*
   * Function to get categories
   */
  function mix_blog_get_post_cat_choices() {
    $categories = get_terms( 'category' );
    $choices = array('' => esc_html__( '--Select Category--', 'mix-blog' ));

    foreach( $categories as $category ) {
      $choices[$category->term_id] = $category->name;
    }

    return $choices;
  }
endif;