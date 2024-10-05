<?php
/**
 * Shadow Themes Customizer
 *
 * @package Shadow Themes
 */

/**
 * Get all the default values of the theme mods.
 */
function kavine_blog_get_default_mods() {
	$kavine_blog_default_mods = array(
		'kavine_blog_custom_color_scheme' => '#D60A0A',
		// Sliders
		'kavine_blog_slider_custom_title' => esc_html__( 'We carve design in most possible beautiful way.', 'kavine-blog'),
		'kavine_blog_slider_custom_content' => esc_html__( 'Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma – which is living with the results of other people’s thinking.', 'kavine-blog'),
		'kavine_blog_slider_custom_btn' => esc_html__( 'Know More', 'kavine-blog' ),
		'kavine_blog_slider_custom_subtitle' => esc_html__( 'Lorem Ipsum is simply dummy text.', 'kavine-blog' ),
		'kavine_blog_featured_slider_dot_enable'		=> true,
		'kavine_blog_featured_slider_fade_enable'		=> false,
		'kavine_blog_featured_slider_autoplay_enable'		=> true,
		'kavine_blog_featured_slider_infinite_enable'		=> true,

		// Trending
		'kavine_blog_trending_section_title' => esc_html__( 'The Art Of TRAVEL', 'kavine-blog' ),
		'kavine_blog_trending_custom_content' => esc_html__( 'Your time is limited, so don’t waste it living someone else’s life. Don’t be trapped by dogma – which is living with the results of other people’s thinking.', 'kavine-blog' ),
		'kavine_blog_trending_dot_enable'		=> true,
		'kavine_blog_trending_fade_enable'		=> false,
		'kavine_blog_trending_autoplay_enable'		=> true,
		'kavine_blog_trending_infinite_enable'		=> true,

		// Popular
		'kavine_blog_popular_title' => esc_html__( 'Get Ready for an Adventure', 'kavine-blog' ),

		// Must read
		'kavine_blog_must_read_title' => esc_html__( 'Must Read Posts', 'kavine-blog' ),

		// Video
		'kavine_blog_video_section_title' => esc_html__( 'Travel With Us', 'kavine-blog' ),



		// Recent posts
		'kavine_blog_recent_posts_more' => esc_html__( 'See More', 'kavine-blog' ),

		// Footer copyright
		'kavine_blog_copyright_txt' => esc_html__( 'Copyright &copy; All rights reserved.', 'kavine-blog' ),
		'kavine_blog_powered_by_txt' => sprintf( esc_html__( '%1$s by %2$s.', 'kavine-blog' ), 'Kavine Blog', '<a href="' . esc_url( 'http://shadowthemes.com/' ) . '">Shadow Themes</a>' ),

		
	);

	return apply_filters( 'kavine_blog_default_mods', $kavine_blog_default_mods );
}