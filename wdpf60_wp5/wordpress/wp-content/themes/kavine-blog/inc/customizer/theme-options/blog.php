<?php 
/**
	 * Blog/Archive section 
	 */
	// Blog/Archive section 
	$wp_customize->add_section(
		'kavine_blog_archive_settings',
		array(
			'title' => esc_html__( 'Archive/Blog', 'kavine-blog' ),
			'description' => esc_html__( 'Settings for archive pages including blog page too.', 'kavine-blog' ),
			'panel' => 'kavine_blog_general_panel',
		)
	);


	// Date enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_archive_blog_header_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_archive_blog_header_image',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Enable Header Image.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Global archive layout setting
	$wp_customize->add_setting(
		'kavine_blog_archive_layout',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'archive-four',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_archive_layout',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Archive layout', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'archive-one' => esc_html__( 'Design One', 'kavine-blog' ), 
				'archive-four' => esc_html__( 'Design Two', 'kavine-blog' ), 
			),
		)
	);

	// Global archive layout setting
	$wp_customize->add_setting(
		'kavine_blog_content_align',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'content-center',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_content_align',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Content Position Align', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'content-left' => esc_html__( 'Left', 'kavine-blog' ), 
				'content-center' => esc_html__( 'Center', 'kavine-blog' ), 
				'content-right' => esc_html__( 'Right', 'kavine-blog' ), 
				'content-justify' => esc_html__( 'Justify', 'kavine-blog' ),
			),
		)
	);

	// Global archive layout setting
	$wp_customize->add_setting(
		'kavine_blog_archive_content_type',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'excerpt',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_archive_content_type',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Archive Content Type', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array( 
				'excerpt' => esc_html__( 'Excerpt Content', 'kavine-blog' ), 
				'full-content' => esc_html__( 'Full Content', 'kavine-blog' ), 
			),
		)
	);

	// Archive excerpt setting
	$wp_customize->add_setting(
		'kavine_blog_archive_excerpt',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => esc_html__( 'View the post', 'kavine-blog' ),
		)
	);

	$wp_customize->add_control(
		'kavine_blog_archive_excerpt',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Excerpt more text:', 'kavine-blog' ),
		)
	);

	// number setting
	$wp_customize->add_setting(
		'kavine_blog_blog_archive_column',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 1,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_blog_archive_column',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Column of Blog And Archive Page:', 'kavine-blog' ),
			'description'			=> esc_html__( 'Min: 1 | Max:3 ', 'kavine-blog' ),
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 1, 'max' => 3 ),
		)
	);
	// Archive excerpt length setting
	$wp_customize->add_setting(
		'kavine_blog_archive_excerpt_length',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 15,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_archive_excerpt_length',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Excerpt more length:', 'kavine-blog' ),
			'type'			=> 'number',
			'input_attrs'   => array( 'min' => 5 ),
		)
	);

	// Category enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_archive_category',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_archive_category',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Enable Category.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Date enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_archive_date',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_archive_date',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Enable Date.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);


	// Featured image enable setting
	$wp_customize->add_setting(
		'kavine_blog_enable_archive_featured_img',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_enable_archive_featured_img',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Enable featured image.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

 ?>