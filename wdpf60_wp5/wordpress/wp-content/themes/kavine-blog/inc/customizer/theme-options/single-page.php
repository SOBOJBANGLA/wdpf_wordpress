<?php /**
	 * Single pages setting section 
	 */
	// Single pages setting section 
	$wp_customize->add_section(
		'kavine_blog_single_page_settings',
		array(
			'title' => esc_html__( 'Single Pages', 'kavine-blog' ),
			'description' => esc_html__( 'Settings for all single pages.', 'kavine-blog' ),
			'panel' => 'kavine_blog_general_panel',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_page_header_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_page_header_image',
		array(
			'section'		=> 'kavine_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page Header Image.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_page_author',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_page_author',
		array(
			'section'		=> 'kavine_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page Author.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_page_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_page_image',
		array(
			'section'		=> 'kavine_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page image.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Author enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_page_comment',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_page_comment',
		array(
			'section'		=> 'kavine_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable Page Comment.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Pagination enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_single_page_pagination',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_single_page_pagination',
		array(
			'section'		=> 'kavine_blog_single_page_settings',
			'label'			=> esc_html__( 'Enable pagination.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);
?>