<?php
/**
 * Shadow Themes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shadow Themes
 */


if ( ! function_exists( 'kavine_blog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kavine_blog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Shadow Themes, use a find and replace
		 * to change 'kavine-blog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kavine-blog' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 500, 500, true );
		add_image_size( 'kavine-archive-two', 590, 750, true);
		

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'kavine-blog' ),
			'bannersocial' => esc_html__( 'Banner Social', 'kavine-blog' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'kavine_blog_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'custom-header', array(
		        'default-image'      => '',
		        'default-text-color' => '000',
		        'width'              => 1920,
		        'height'             => 1080,
		        'flex-width'         => true,
		        'flex-height'        => true,
		    ) );
		 // Register default headers.
		register_default_headers( array(
			'default-banner' => array(
				'url'           => '%s/assets/img/header-image.jpg',
				'thumbnail_url' => '%s/assets/img/header-image.jpg',
				'description'   => esc_html_x( 'Default Banner', 'Header image description', 'kavine-blog' ),
			),

		) );

		// Add theme support for selective refresh for widgets.
		// add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 350,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	    
    	/*
    	 * This theme styles the visual editor to resemble the theme style,
    	 * specifically font, colors, and column width.
     	 */
    	add_editor_style( array( 'assets/css/editor-style.css', kavine_blog_fonts_url() ) );

    	// Gutenberg support
		add_theme_support( 'editor-color-palette', array(
	       	array(
				'name' => esc_html__( 'Blue', 'kavine-blog' ),
				'slug' => 'blue',
				'color' => '#2c7dfa',
	       	),
	       	array(
	           	'name' => esc_html__( 'Green', 'kavine-blog' ),
	           	'slug' => 'green',
	           	'color' => '#07d79c',
	       	),
	       	array(
	           	'name' => esc_html__( 'Orange', 'kavine-blog' ),
	           	'slug' => 'orange',
	           	'color' => '#ff8737',
	       	),
	       	array(
	           	'name' => esc_html__( 'Black', 'kavine-blog' ),
	           	'slug' => 'black',
	           	'color' => '#2f3633',
	       	),
	       	array(
	           	'name' => esc_html__( 'Grey', 'kavine-blog' ),
	           	'slug' => 'grey',
	           	'color' => '#82868b',
	       	),
	   	));

		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-font-sizes', array(
		   	array(
		       	'name' => esc_html__( 'small', 'kavine-blog' ),
		       	'shortName' => esc_html__( 'S', 'kavine-blog' ),
		       	'size' => 12,
		       	'slug' => 'small'
		   	),
		   	array(
		       	'name' => esc_html__( 'regular', 'kavine-blog' ),
		       	'shortName' => esc_html__( 'M', 'kavine-blog' ),
		       	'size' => 16,
		       	'slug' => 'regular'
		   	),
		   	array(
		       	'name' => esc_html__( 'larger', 'kavine-blog' ),
		       	'shortName' => esc_html__( 'L', 'kavine-blog' ),
		       	'size' => 36,
		       	'slug' => 'larger'
		   	),
		   	array(
		       	'name' => esc_html__( 'huge', 'kavine-blog' ),
		       	'shortName' => esc_html__( 'XL', 'kavine-blog' ),
		       	'size' => 48,
		       	'slug' => 'huge'
		   	)
		));
		add_theme_support('editor-styles');
		add_theme_support( 'wp-block-styles' );
	}
endif;
add_action( 'after_setup_theme', 'kavine_blog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kavine_blog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kavine_blog_content_width', 900 );
}
add_action( 'after_setup_theme', 'kavine_blog_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kavine_blog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'kavine-blog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kavine-blog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s ">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for ( $i=1; $i <= 4; $i++ ) { 
		register_sidebar( array(
			'name'          => esc_html__( 'Footer Widget Area ', 'kavine-blog' )  . $i,
			'id'            => 'footer-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'kavine-blog' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s ">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'kavine_blog_widgets_init' );

/**
 * Register custom fonts.
 */
function kavine_blog_fonts_url() {
	$fonts_url = '';

	$font_families = array();

	$body_font_family = get_theme_mod( 'kavine_blog_body_font_option' );
	if ( $body_font_family ) {
    	$body_font_family_arr = explode( '-', $body_font_family );
		$body_font_family_value = implode( ' ', array_map( 'ucfirst', $body_font_family_arr ) );

		$font_families[] = $body_font_family_value;
	}

	$h1_h6_font_family = get_theme_mod( 'kavine_blog_h1_h6_font_option' );
	if ( $h1_h6_font_family ) {
    	$h1_h6_font_family_arr = explode( '-', $h1_h6_font_family );
		$h1_h6_font_family_value = implode( ' ', array_map( 'ucfirst', $h1_h6_font_family_arr ) );

		$font_families[] = $h1_h6_font_family_value;
	}

	$section_title_font_family = get_theme_mod( 'kavine_blog_section_title_font_option' );
	if ( $section_title_font_family ) {
    	$section_title_font_family_arr = explode( '-', $section_title_font_family );
		$section_title_font_family_value = implode( ' ', array_map( 'ucfirst', $section_title_font_family_arr ) );

		$font_families[] = $section_title_font_family_value;
	}
	
	/*
	 * Translators: If there are characters in your language that are not
	 * supported by Bad Script, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$bad_script = _x( 'on', 'Bad Script font: on or off', 'kavine-blog' );

	if ( 'off' !== $bad_script ) {
		$font_families[] = 'Bad Script:400,600';
	}

	$playfair = _x( 'on', 'Playfair Display font: on or off', 'kavine-blog' );

	if ( 'off' !== $playfair ) {
		$font_families[] = 'Playfair Display:400,700';
	}

	$lora = _x( 'on', 'Lora font: on or off', 'kavine-blog' );

	if ( 'off' !== $lora ) {
		$font_families[] = 'Lora:400,700';
	}

	$grey = _x( 'on', 'Grey Qo font: on or off', 'kavine-blog' );

	if ( 'off' !== $grey ) {
		$font_families[] = 'Grey Qo:400,700';
	}

	$fatface = _x( 'on', 'Abril Fatface font: on or off', 'kavine-blog' );

	if ( 'off' !== $fatface ) {
		$font_families[] = 'Abril Fatface:400,700';
	}

	$herr = _x( 'on', 'Herr Von Muellerhoff font: on or off', 'kavine-blog' );

	if ( 'off' !== $herr ) {
		$font_families[] = 'Herr Von Muellerhoff';
	}

	$pinyon = _x( 'on', 'Pinyon Script font: on or off', 'kavine-blog' );

	if ( 'off' !== $pinyon ) {
		$font_families[] = 'Pinyon Script';
	}
	
	$monsieurlad = _x( 'on', 'Monsieur La Doulaise font: on or off', 'kavine-blog' );

	if ( 'off' !== $monsieurlad ) {
		$font_families[] = 'Monsieur La Doulaise';
	}

	$sail = _x( 'on', 'Sail font: on or off', 'kavine-blog' );

	if ( 'off' !== $sail ) {
		$font_families[] = 'Sail';
	}

	$whisper = _x( 'on', 'Whisper font: on or off', 'kavine-blog' );

	if ( 'off' !== $whisper ) {
		$font_families[] = 'Whisper';
	}

	$lugrasimo = _x( 'on', 'Lugrasimo font: on or off', 'kavine-blog' );

	if ( 'off' !== $lugrasimo ) {
		$font_families[] = 'Lugrasimo';
	}

	$caveat = _x( 'on', 'Caveat font: on or off', 'kavine-blog' );

	if ( 'off' !== $caveat ) {
		$font_families[] = 'Caveat';
	}

	$rajdhani = _x( 'on', 'Rajdhani font: on or off', 'kavine-blog' );

	if ( 'off' !== $rajdhani ) {
		$font_families[] = 'Rajdhani';
	}

	$query_args = array(
		'family' => urlencode( implode( '|', $font_families ) ),
		'subset' => urlencode( 'latin,latin-ext' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function kavine_blog_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'kavine-blog-fonts', kavine_blog_fonts_url(), array(), null );

	wp_enqueue_style( 'slick', get_theme_file_uri() . '/assets/css/slick.css', '', '1.8.0' );

	wp_enqueue_style( 'fontawesome-all', get_theme_file_uri() . '/assets/css/all.css', '', '4.7.0' );

	wp_enqueue_style( 'font-awesome', get_theme_file_uri() . '/assets/css/font-awesome.css', '', '4.7.0' );

	wp_enqueue_style( 'slick-theme', get_theme_file_uri() . '/assets/css/slick-theme.css', '', '1.8.0' );

	// blocks
	wp_enqueue_style( 'kavine-blog-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );

	wp_enqueue_style( 'kavine-blog-style', get_stylesheet_uri() );

	wp_enqueue_script( 'slick-jquery', get_theme_file_uri( '/assets/js/slick.js' ), array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'imagesloaded' );

	wp_enqueue_script( 'jquery-packer', get_theme_file_uri( '/assets/js/packery.pkgd.min.js' ), array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'jquery-matchHeight', get_theme_file_uri( '/assets/js/jquery-matchHeight.js' ), array( 'jquery' ), '20151215', true );
	
	wp_enqueue_script( 'kavine-blog-navigation', get_theme_file_uri( '/assets/js/navigation.js' ), array(), '20151215', true );

	wp_enqueue_script( 'kavine-blog-skip-link-focus-fix', get_theme_file_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_enqueue_script( 'kavine-blog-custom', get_theme_file_uri( '/assets/js/custom.js' ), array( 'jquery' ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kavine_blog_scripts' );

/**
 * Enqueue editor styles for Gutenberg
 *
 * @since Kavine Blog 1.0.0
 */
function kavine_blog_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'kavine-blog-block-editor-style', get_theme_file_uri( '/assets/css/editor-blocks.css' ) );
	// Add custom fonts.
	wp_enqueue_style( 'kavine-blog-fonts', kavine_blog_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'kavine_blog_block_editor_styles' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/customizer.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/defaults.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/sanitize.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer/active-callback.php' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_parent_theme_file_path() . '/inc/jetpack.php';
}

/**
 * Webfont Loader.
 */
require get_template_directory() . '/inc/wptt-webfont-loader.php';

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

/**
 * Breadcrumb trail class.
 */
require get_parent_theme_file_path( '/inc/class-breadcrumb-trail.php' );

/**
 * Metabox
 */
require get_parent_theme_file_path( '/inc/metabox.php' );

/**
 * TGMPA call
 */
require get_parent_theme_file_path( '/inc/tgmpa/call.php' );

/**
 * Widget call
 */
require get_parent_theme_file_path( '/inc/widgets/widgets.php' );


/**
 * Enqueue admin css.
 * @return [type] [description]
 */
function kavine_blog_load_custom_wp_admin_style( $hook ) {
	if ( 'appearance_page_kavine-blog-welcome' != $hook ) {
        return;
    }
    wp_register_style( 'kavine-blog-admin', get_theme_file_uri( 'assets/css/kavine-blog-admin.css' ), false, '1.0.0' );
    wp_enqueue_style( 'kavine-blog-admin' );
}
add_action( 'admin_enqueue_scripts', 'kavine_blog_load_custom_wp_admin_style' );

/**
 * Styles the header image and text displayed on the blog.
 *
 * @see kavine_blog_custom_header_setup().
 */
function kavine_blog_header_text_style() {
	// If we get this far, we have custom styles. Let's do this.
	$header_text_display = get_theme_mod( 'kavine_blog_header_text_display', true );
	?>
	<style type="text/css">
	<?php if ( ! $header_text_display ) : ?>
		#site-identity {
			display: none;
		}
	<?php endif; ?>

	.site-title a{
		color: <?php echo esc_attr( get_theme_mod( 'kavine_blog_header_title_color', '#cf3140' ) ); ?>;
	}
	.site-description {
		color: <?php echo esc_attr( get_theme_mod( 'kavine_blog_header_tagline', '#2e2e2e' ) ); ?>;
	}
	</style>
	<?php
}
add_action( 'wp_head', 'kavine_blog_header_text_style' );

/**
 *
 * Reset all setting to default.
 *
 */
function kavine_blog_reset_settings() {
    $reset_settings = get_theme_mod( 'kavine_blog_reset_settings', false );
    if ( $reset_settings ) {
        remove_theme_mods();
    }
}
add_action( 'customize_save_after', 'kavine_blog_reset_settings' );


if ( ! function_exists( 'kavine_blog_exclude_sticky_posts' ) ) {
    function kavine_blog_exclude_sticky_posts( $query ) {
        if ( ! is_admin() && $query->is_main_query() && $query->is_home() ) {
            $sticky_posts = get_option( 'sticky_posts' );  
            if ( ! empty( $sticky_posts ) ) {
            	$query->set('post__not_in', $sticky_posts );
            }
            $query->set('ignore_sticky_posts', true );
        }
    }
}
add_action( 'pre_get_posts', 'kavine_blog_exclude_sticky_posts' );

function kavines_pro_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<p class="menu-item-description">' . $item->description . '</p>' . $args->link_after . '</a>', $item_output );
    }
 
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'kavines_pro_nav_description', 10, 4 );
