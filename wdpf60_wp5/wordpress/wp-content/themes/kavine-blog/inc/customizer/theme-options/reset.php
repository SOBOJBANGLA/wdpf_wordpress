<?php 
/**
	 * Reset all settings
	 */
	// Reset settings section
	$wp_customize->add_section(
		'kavine_blog_reset_sections',
		array(
			'title' => esc_html__( 'Reset all', 'kavine-blog' ),
			'description' => esc_html__( 'Reset all settings to default.', 'kavine-blog' ),
			'panel' => 'kavine_blog_general_panel',
		)
	);

	// Reset sortable order setting
	$wp_customize->add_setting(
		'kavine_blog_reset_settings',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_checkbox',
			'default' => false,
			'transport'	=> 'postMessage',
		)
	);

	$wp_customize->add_control(
		'kavine_blog_reset_settings',
		array(
			'section'		=> 'kavine_blog_reset_sections',
			'label'			=> esc_html__( 'Reset all settings?', 'kavine-blog' ),
			'type'			=> 'checkbox',
		)
	);
 ?>