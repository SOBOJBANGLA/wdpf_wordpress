<?php 
/**
	 * Sidebar Layout
	 */
	// Sidebar Layout
	$wp_customize->add_section(
		'kavine_blog_global_layout',
		array(
			'title' => esc_html__( 'Global & Sidebar Layout', 'kavine-blog' ),
			'panel' => 'kavine_blog_general_panel',
		)
	);

	// Sidebar archive layout setting
	$wp_customize->add_setting(
		'kavine_blog_archive_sidebar',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'no',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_archive_sidebar',
		array(
			'section'		=> 'kavine_blog_global_layout',
			'label'			=> esc_html__( 'Archive Sidebar', 'kavine-blog' ),
			'description'			=> esc_html__( 'This option works on all archive pages like: 404, search, date, category and so on.', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array(  
				'right' => esc_html__( 'Right', 'kavine-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'kavine-blog' ), 
			),
		)
	);

	// Blog layout setting
	$wp_customize->add_setting(
		'kavine_blog_blog_sidebar',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'no',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_blog_sidebar',
		array(
			'section'		=> 'kavine_blog_global_layout',
			'label'			=> esc_html__( 'Blog Sidebar', 'kavine-blog' ),
			'description'			=> esc_html__( 'This option works on blog and "Your latest posts"', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array(  
				'right' => esc_html__( 'Right', 'kavine-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'kavine-blog' ), 
			),
		)
	);

	// Sidebar page layout setting
	$wp_customize->add_setting(
		'kavine_blog_global_page_layout',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'right',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_global_page_layout',
		array(
			'section'		=> 'kavine_blog_global_layout',
			'label'			=> esc_html__( 'Sidebar page sidebar', 'kavine-blog' ),
			'description'			=> esc_html__( 'This option works only on single pages including "Posts page". This setting can be overridden for single page from the metabox too.', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array(   
				'right' => esc_html__( 'Right', 'kavine-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'kavine-blog' ), 
			),
		)
	);

	// Sidebar post layout setting
	$wp_customize->add_setting(
		'kavine_blog_global_post_layout',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'right',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_global_post_layout',
		array(
			'section'		=> 'kavine_blog_global_layout',
			'label'			=> esc_html__( 'Sidebar post sidebar', 'kavine-blog' ),
			'description'			=> esc_html__( 'This option works only on single posts. This setting can be overridden for single post from the metabox too.', 'kavine-blog' ),
			'type'			=> 'radio',
			'choices'		=> array(  
				'right' => esc_html__( 'Right', 'kavine-blog' ), 
				'no' => esc_html__( 'No Sidebar', 'kavine-blog' ), 
			),
		)
	);
 ?>