<?php 
	/**
	 * Author Message section
	 */
	// Author Message section
	$wp_customize->add_section(
		'kavine_blog_author',
		array(
			'title' => esc_html__( 'Author Message', 'kavine-blog' ),
			'panel' => 'kavine_blog_home_panel',
		)
	);

	// Fretured Post Section enable setting
	$wp_customize->add_setting(
		'kavine_blog_author_section_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_author_section_enable',
		array(
			'section'		=> 'kavine_blog_author',
			'label'			=> esc_html__( 'Enable Author Message Section.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);
	// Author image setting
	$wp_customize->add_setting(
		'kavine_blog_author_background_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kavine_blog_author_background_image',
			array(
				'section'		=> 'kavine_blog_author',
				'label'			=> esc_html__( 'Background Image:', 'kavine-blog' ),
				'active_callback' => 'kavine_blog_is_author_enable',
			)
		)
	);

	// Author Message title setting
	$wp_customize->add_setting(
		'kavine_blog_author_icon',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_author_icon',
		array(
			'section'		=> 'kavine_blog_author',
			'label'			=> esc_html__( 'Section Icon', 'kavine-blog' ),
			'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons', 'kavine-blog') . '<a href="' . esc_url( 'https://fontawesome.com/v4/cheatsheet/' ) . '" target="_blank">'. __(' Click Here', 'kavine-blog') . '</a>' ),
			'active_callback' => 'kavine_blog_is_author_enable'
		)
	);

	// Author Message title setting
	$wp_customize->add_setting(
		'kavine_blog_author_subtitle',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_author_subtitle',
		array(
			'section'		=> 'kavine_blog_author',
			'label'			=> esc_html__( 'Subtitle', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_author_enable'
		)
	);
	// Author image setting
	$wp_customize->add_setting(
		'kavine_blog_author_top_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kavine_blog_author_top_image',
			array(
				'section'		=> 'kavine_blog_author',
				'label'			=> esc_html__( 'Top Image:', 'kavine-blog' ),
				'active_callback' => 'kavine_blog_is_author_enable',
			)
		)
	);
	// Author image setting
	$wp_customize->add_setting(
		'kavine_blog_author_bottom_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kavine_blog_author_bottom_image',
			array(
				'section'		=> 'kavine_blog_author',
				'label'			=> esc_html__( 'Bottom Image:', 'kavine-blog' ),
				'active_callback' => 'kavine_blog_is_author_enable',
			)
		)
	);

	// Author image setting
	$wp_customize->add_setting(
		'kavine_blog_author_signature_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kavine_blog_author_signature_image',
			array(
				'section'		=> 'kavine_blog_author',
				'label'			=> esc_html__( 'Author Signature Image:', 'kavine-blog' ),
				'description' => esc_html__(' Use Only Background Transparent Image.', 'kavine-blog'),
				'active_callback' => 'kavine_blog_is_author_enable',
			)
		)
	);

	// Excrept Length setting
	$wp_customize->add_setting(
		'kavine_blog_author_secion_excerpt',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 20,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_author_secion_excerpt',
		array(
			'section'		=> 'kavine_blog_author',
			'label'			=> esc_html__( 'Excerpt Length', 'kavine-blog' ),
			'description'			=> esc_html__( 'Min: 10 | Max: 200', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_author_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 10, 'max' => 200 ),
		)
	);


	// Author Message post setting
	$wp_customize->add_setting(
		'kavine_blog_author_post',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_dropdown_pages',
			'default' => 10,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_author_post',
		array(
			'section'		=> 'kavine_blog_author',
			'label'			=> esc_html__( 'Post:', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_author_enable',
			'type'			=> 'select',
			'choices'		=> kavine_blog_get_post_choices(),
		)
	);

	
	// Banner button text setting
	$wp_customize->add_setting(
		'kavine_blog_author_btn_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_author_btn_text',
		array(
			'section'		=> 'kavine_blog_author',
			'label'			=> esc_html__( 'Link Text', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_author_enable'
		)
	); 

?>