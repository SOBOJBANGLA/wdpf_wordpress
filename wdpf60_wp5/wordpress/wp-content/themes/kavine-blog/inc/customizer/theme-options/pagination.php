<?php 

	// Pagination type setting
	$wp_customize->add_setting(
		'kavine_blog_archive_pagination_type',
		array(
			'sanitize_callback' => 'kavine_blog_sanitize_select',
			'default' => 'numeric',
		)
	);

	$archive_pagination_description = '';
	$archive_pagination_choices = array( 
				'disable' => esc_html__( '--Disable--', 'kavine-blog' ),
				'numeric' => esc_html__( 'Numeric', 'kavine-blog' ),
				'older_newer' => esc_html__( 'Older / Newer', 'kavine-blog' ),
			);
	
	$wp_customize->add_control(
		'kavine_blog_archive_pagination_type',
		array(
			'section'		=> 'kavine_blog_archive_settings',
			'label'			=> esc_html__( 'Pagination type:', 'kavine-blog' ),
			'description'			=>  $archive_pagination_description,
			'type'			=> 'select',
			'choices'		=> $archive_pagination_choices,
		)
	);
 ?>