<?php 
	/**
	 * Single setting section 
	 */
	// Single setting section 
	$wp_customize->add_section(
		'kavine_blog_single_settings',
		array(
			'title' => esc_html__( 'Single Posts', 'kavine-blog' ),
			'description' => esc_html__( 'Settings for all single posts.', 'kavine-blog' ),
			'panel' => 'kavine_blog_general_panel',
		)
	);


	// Author enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_post_header_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_post_header_image',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable Post Header Image.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Category enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_image',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable Featured Image.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Category enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_category',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_category',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable categories.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Date enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_date',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_date',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable Date.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);


	// Author enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_author',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_author',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable Author.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Comment enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_comment',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_comment',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable Comment.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Tag enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_tag',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_tag',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable tags.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Pagination enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_pagination',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_pagination',
		array(
			'section'		=> 'kavine_blog_single_settings',
			'label'			=> esc_html__( 'Enable pagination.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);
?>