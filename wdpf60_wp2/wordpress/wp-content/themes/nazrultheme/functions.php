<?php

add_theme_support( 'post-thumbnails' );

/*function nazrultheme_setup(){
  add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'nazrultheme_setup' );*/
function register_nazrul_menu() {
  register_nav_menu( 'primary', __( 'Main Location', 'nazrultheme' ) );
  //register_nav_menu( 'secondary', __( 'Footer Main Location', 'nazrultheme' ) );
}


add_action( 'after_setup_theme', 'register_nazrul_menu' );


function slider_post_type() {
	register_post_type('nazrul_slider',
		array(
			'labels'      => array(
				'name'          => __('Sliders', 'nazrultheme'),
				'singular_name' => __('Slider', 'nazrultheme'),
			),
				'public'      => true,
				'supports' => array( 'title', 'thumbnail' ),
		)
	);
}
add_action('init', 'slider_post_type');


/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'nazrultheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'nazrultheme' ),
		'before_widget' => '<div class="box"><div class="heading">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

  register_sidebar( array(
    'name'          => __( 'Footer Sidebar-1', 'nazrultheme' ),
    'id'            => 'sidebar-2',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'nazrultheme' ),
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ) );


  }


add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



  
