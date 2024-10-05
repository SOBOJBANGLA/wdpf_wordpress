<?php 
	/**
	 * General settings
	 */
	// General settings
	$wp_customize->add_section(
		'kavine_blog_general_section',
		array(
			'title' => esc_html__( 'General', 'kavine-blog' ),
			'panel' => 'kavine_blog_general_panel',
		)
	);
 

	// Breadcrumb enable setting
	$wp_customize->add_setting(
		'kavine_blog_breadcrumb_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_breadcrumb_enable',
		array(
			'section'		=> 'kavine_blog_general_section',
			'label'			=> esc_html__( 'Enable breadcrumb.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);


?>