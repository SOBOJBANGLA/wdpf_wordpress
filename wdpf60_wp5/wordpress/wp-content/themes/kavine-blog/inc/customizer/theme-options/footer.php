<?php /**
	 *
	 *
	 * Footer copyright
	 *
	 *
	 */
	// Footer copyright
	$wp_customize->add_section(
		'kavine_blog_footer_section',
		array(
			'title' => esc_html__( 'Footer', 'kavine-blog' ),
			'priority' => 106,
			'panel' => 'kavine_blog_general_panel',
		)
	);
	// Footer image setting
	$wp_customize->add_setting(
		'kavine_blog_footer_bg_image',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_image',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'kavine_blog_footer_bg_image',
			array(
				'section'		=> 'kavine_blog_footer_section',
				'label'			=> esc_html__( 'Background Image:', 'kavine-blog' ),
			)
		)
	);

	// Footer social menu enable setting
	$wp_customize->add_setting(
		'kavine_blog_back_to_top_enable',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => true,
		)
	);

	$wp_customize->add_control(
		'kavine_blog_back_to_top_enable',
		array(
			'section'		=> 'kavine_blog_footer_section',
			'label'			=> esc_html__( 'Enable Back To Top.', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);

	// Footer copyright setting
	$wp_customize->add_setting(
		'kavine_blog_copyright_txt',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_html',
			'default' => $default['kavine_blog_copyright_txt'],
		)
	);

	$wp_customize->add_control(
		'kavine_blog_copyright_txt',
		array(
			'section'		=> 'kavine_blog_footer_section',
			'label'			=> esc_html__( 'Copyright Text:', 'kavine-blog' ),
			'type'			=> 'textarea',
			
		)
	);
?>