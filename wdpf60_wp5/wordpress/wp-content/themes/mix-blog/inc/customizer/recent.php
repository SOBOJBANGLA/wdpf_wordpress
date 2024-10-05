<?php
/**
	 * Recent section
	 */
	// Recent section
	$wp_customize->add_section(
		'mix_blog_must_read',
		array(
			'title' => esc_html__( 'Recent Post', 'mix-blog' ),
			'panel' => 'kavine_blog_home_panel',
		)
	);

	// Recent Section enable setting
	$wp_customize->add_setting(
		'mix_blog_must_read_section_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => false,
		)
	);

	$wp_customize->add_control(
		'mix_blog_must_read_section_enable',
		array(
			'section'		=> 'mix_blog_must_read',
			'label'			=> esc_html__( 'Enable Recent Section.', 'mix-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Recent title setting
	$wp_customize->add_setting(
		'mix_blog_must_read_title',
		array(
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'mix_blog_must_read_title',
		array(
			'section'		=> 'mix_blog_must_read',
			'label'			=> esc_html__( 'Title:', 'mix-blog' ),
		)
	);


	// Slider number setting
	$wp_customize->add_setting(
		'mix_blog_must_read_secion_excerpt',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_number_range',
			'default' => 50,
			'transport'	=> 'postMessage',
		)
	);

	// Recent category setting
	$wp_customize->add_setting(
		'mix_blog_must_read_cat',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
		)
	);

	$wp_customize->add_control(
		'mix_blog_must_read_cat',
		array(
			'section'		=> 'mix_blog_must_read',
			'label'			=> esc_html__( 'Category:', 'mix-blog' ),
			'type'			=> 'select',
			'choices'		=> mix_blog_get_post_cat_choices(),
		)
	);
?>