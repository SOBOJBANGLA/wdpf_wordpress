<?php 
	/**
	 * Banner section
	 */
	// Banner section
	$wp_customize->add_section(
		'kavine_blog_banner',
		array(
			'title' => esc_html__( 'Banner Section', 'kavine-blog' ),
			'panel' => 'kavine_blog_home_panel',
		)
	);

	// Fretured Post Section enable setting
	$wp_customize->add_setting(
		'kavine_blog_banner_section_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_section_enable',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Enable Banner Section.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Banner post setting
	$wp_customize->add_setting(
		'kavine_blog_banner_post',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_dropdown_pages',
			'default' => 10,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_post',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Post:', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_banner_enable',
			'type'			=> 'select',
			'choices'		=> kavine_blog_get_post_choices(),
		)
	);

	// Banner button text setting
	$wp_customize->add_setting(
		'kavine_blog_banner_btn_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_btn_text',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Banner Button Text', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_banner_enable'
		)
	);

	// Excrept Length setting
	$wp_customize->add_setting(
		'kavine_blog_banner_secion_excerpt',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 50,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_secion_excerpt',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Excerpt Length', 'kavine-blog' ),
			'description'			=> esc_html__( 'Min: 10 | Max: 200', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_banner_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 10, 'max' => 200 ),
		)
	);
	// Category enable setting
	$wp_customize->add_setting(
		'kavine_blog_banner_category_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_category_enable',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Enable Category.', 'kavine-blog' ),
			'type'			=> 'checkbox',
			'active_callback' => 'kavine_blog_is_banner_enable'
		)
	);
	// Content enable setting
	$wp_customize->add_setting(
		'kavine_blog_banner_content_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_content_enable',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Enable Content.', 'kavine-blog' ),
			'type'			=> 'checkbox',
			'active_callback' => 'kavine_blog_is_banner_enable'
		)
	);
	// Social Icons enable setting
	$wp_customize->add_setting(
		'kavine_blog_banner_social_icons_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_banner_social_icons_enable',
		array(
			'section'		=> 'kavine_blog_banner',
			'label'			=> esc_html__( 'Enable Social Icons.', 'kavine-blog' ),
			'type'			=> 'checkbox',
			'active_callback' => 'kavine_blog_is_banner_enable'
		)
	);