<?php
/**
	 * Must Read section
	 */
	// Must Read section
	$wp_customize->add_section(
		'kavine_blog_must_read',
		array(
			'title' => esc_html__( 'Must Read Post', 'kavine-blog' ),
			'panel' => 'kavine_blog_home_panel',
		)
	);

	// Must Read Section enable setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_section_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_section_enable',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Enable Must Read Section.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);
	// Author image setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_background_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kavine_blog_must_read_background_image',
			array(
				'section'		=> 'kavine_blog_must_read',
				'label'			=> esc_html__( 'Background Image:', 'kavine-blog' ),
				'active_callback' => 'kavine_blog_is_must_read_enable',
			)
		)
	);
	// Must Read title setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_icon',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_icon',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Section Icon', 'kavine-blog' ),
			'description' => sprintf( __('Please input icon as eg: fa-archive. Find Font-awesome icons', 'kavine-blog') . '<a href="' . esc_url( 'https://fontawesome.com/v4/cheatsheet/' ) . '" target="_blank">'. __(' Click Here', 'kavine-blog') . '</a>' ),
			'active_callback' => 'kavine_blog_is_must_read_enable'
		)
	);

	// Must Read title setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'default' => $default['kavine_blog_must_read_title'],
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_title',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Title:', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable'
		)
	);

	// Featured title setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_subtitle',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_subtitle',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Subtitle:', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable'
		)
	);

	// Featured title setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_see_all_text',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_see_all_text',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'See All Text', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable'
		)
	);

	// Author Message link setting
	$wp_customize->add_setting( 
		'kavine_blog_must_read_see_all_url',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'default' => '#',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_see_all_url',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'See All Link:', 'kavine-blog' ),
			'type'			=> 'url',
			'active_callback' => 'kavine_blog_is_must_read_enable'
		)
	);


	// Video number setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_column',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 2,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_column',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Number of Must Read column', 'kavine-blog' ),
			'description'			=> esc_html__( 'Min: 1 | Max: 4', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 1, 'max' => 4 ),
		)
	);

	// Must Read number setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_num',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 4,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_num',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Number of Must Read:', 'kavine-blog' ),
			'description'			=> esc_html__( 'Min: 1 | Max: Unlimited', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 1, 'step'   => 1,),
		)
	);
	// Must Read number setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_secion_excerpt',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 20,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_secion_excerpt',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Excerpt Length', 'kavine-blog' ),
			'description'			=> esc_html__( 'Min: 0 | Max: 300', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable',
			'type'			=> 'number',
			'input_attrs'	=> array( 'min' => 0, 'max' => 300 ),
		)
	);


	// Must Read category setting
	$wp_customize->add_setting(
		'kavine_blog_must_read_cat',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_must_read_cat',
		array(
			'section'		=> 'kavine_blog_must_read',
			'label'			=> esc_html__( 'Category:', 'kavine-blog' ),
			'active_callback' => 'kavine_blog_is_must_read_enable',
			'type'			=> 'select',
			'choices'		=> kavine_blog_get_post_cat_choices(),
		)
	);
?>