<?php
/**
 * @package Arif Slider
 * @version 1.0
 */
/*
Plugin Name: Arif Slider
Plugin URI: http://wordpress.org/plugins/arif-slider/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Abdullah
Version: 1.0
Author URI: http://arif.wdpf60.com/
*/

function arif_slider_setup()
 { 
    
    
    $args = array( 'public' => true,
    'label'     => __( 'Slider', 'textdomain' ),
    'supports' => array('title','editor'  ,'thumbnail')
);
register_post_type( 'slider_post', $args );
}
add_action( 'init', 'arif_slider_setup' );




add_shortcode( 'arif-slider-list', 'arif_slider_listing' );
function arif_slider_listing(  ) {
	ob_start();
	$args=array(
      'post_type' => 'slider_post', // Post Type Slug
      'posts_per_page' =>-1, // Show All
	  'order'=> 'Desc'
    );

    return
    '<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">';

				
				$query = new WP_Query( array(
					'post_type' => 'slider_post',
				) );
				
				if($query->have_posts()):
					while($query->have_posts()):
						$query->the_post() ;
						

			'<li>'; the_post_thumbnail() ; '</li>';
					
					endwhile;
				endif;

				
				

					
					
				'</ul>
			</div>
		</div>
	</div>
</div>';
}