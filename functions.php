<?php
/**
 * Greg Sagan 2018 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Greg_Sagan_2018
 */

if ( ! function_exists( 'greg_sagan_2018_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function greg_sagan_2018_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Greg Sagan 2018, use a find and replace
		 * to change 'greg-sagan-2018' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'greg-sagan-2018', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'greg-sagan-2018' ),
		) );
		register_nav_menus( array(
			'primary' => esc_html__( 'Navigation Menu', 'greg-sagan-2018' ),
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
		add_theme_support( 'custom-background', apply_filters( 'greg_sagan_2018_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'greg_sagan_2018_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function greg_sagan_2018_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'greg_sagan_2018_content_width', 640 );
}
add_action( 'after_setup_theme', 'greg_sagan_2018_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function greg_sagan_2018_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'greg-sagan-2018' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'greg-sagan-2018' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'greg_sagan_2018_widgets_init' );


// Register Custom Sidebar
function footer1() {
	$args = array (
		'id' => 'footer1',
		'name' => 'Footer 1',
		'description' => 'Custom Sidebar for Website',
		'before_title' => '<h3 class="footer-title">',
		'after_title' => '</h3>',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>'
	);
	register_sidebar ( $args );
}

add_action ( 'widgets_init', 'footer1' );

/**
 * Enqueue scripts and styles.
 */
function greg_sagan_2018_scripts() {
	wp_enqueue_style ( 'bs_style', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); // Bootstrap 3.3.7 CSS

	wp_enqueue_style( 'greg-sagan-2018-style', get_stylesheet_uri() );

	wp_enqueue_script( 'greg-sagan-2018-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'greg-sagan-2018-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('greg-sagan-font-awesome', 'https://use.fontawesome.com/05f2c25adf.js');
		wp_enqueue_script('greg-sagan-2018-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'greg_sagan_2018_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';



/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function positions_types() {

    $labels = array(
        'name'                => __( 'Positions', 'Zonestrap' ),
        'singular_name'       => __( 'Position', 'Zonestrap' ),
        'add_new'             => _x( 'Add New Position', 'Zonestrap', 'Zonestrap' ),
        'add_new_item'        => __( 'Add New Position', 'Zonestrap' ),
        'edit_item'           => __( 'Edit Position', 'Zonestrap' ),
        'new_item'            => __( 'New Position', 'Zonestrap' ),
        'view_item'           => __( 'View Position', 'Zonestrap' ),
        'search_items'        => __( 'Search Positions', 'Zonestrap' ),
        'not_found'           => __( 'No Positions found', 'Zonestrap' ),
        'not_found_in_trash'  => __( 'No Positions found in Trash', 'Zonestrap' ),
        'parent_item_colon'   => __( 'Parent Position:', 'Zonestrap' ),
        'menu_name'           => __( 'Positions', 'Zonestrap' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title', 'editor', 'author', 'thumbnail', 'revisions',
            )
    );

    register_post_type( 'positions_types', $args );
}

add_action( 'init', 'positions_types' );

/* function to restrict categories to the positions posts*/
add_action('init', 'positions_tax' );

function positions_tax() {
	register_taxonomy(
		'positions_types-categories',
		'positions_types',
		array(
			'label'        => __('Postions Categories'),
			'hierarchical' => true,
		)
	);
}

/**
* Registers a new post type
* @uses $wp_post_types Inserts new post type object into the list
*
* @param string  Post type key, must not exceed 20 characters
* @param array|string  See optional args description above.
* @return object|WP_Error the registered post type object, or an error object
*/
function media_posts() {

    $labels = array(
        'name'                => __( 'Public Media', 'Zonestrap' ),
        'singular_name'       => __( 'Public Media', 'Zonestrap' ),
        'add_new'             => _x( 'Add New Public Media Item', 'Zonestrap', 'Zonestrap' ),
        'add_new_item'        => __( 'Add New Public Media Item', 'Zonestrap' ),
        'edit_item'           => __( 'Edit Public Media', 'Zonestrap' ),
        'new_item'            => __( 'New Public Media Item', 'Zonestrap' ),
        'view_item'           => __( 'View Public Media', 'Zonestrap' ),
        'search_items'        => __( 'Search Public Media', 'Zonestrap' ),
        'not_found'           => __( 'No Public Media found', 'Zonestrap' ),
        'not_found_in_trash'  => __( 'No Public Media found in Trash', 'Zonestrap' ),
        'parent_item_colon'   => __( 'Parent Public Media:', 'Zonestrap' ),
        'menu_name'           => __( 'Public Media', 'Zonestrap' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-admin-media',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title', 'editor', 'author', 'thumbnail',
            'revisions', 'page-attributes', 'post-formats'
            )
    );

    register_post_type( 'media_posts', $args );
}

add_action( 'init', 'media_posts' );

/* function to restrict categories to the positions posts*/
add_action('init', 'media_tax' );

function media_tax() {
	register_taxonomy(
		'media_posts-categories',
		'media_posts',
		array(
			'label'        => __('Media Categories'),
			'hierarchical' => true,
		)
	);
}

function coming_events() {

    $labels = array(
        'name'                => __( 'Coming Events', 'Zonestrap' ),
        'singular_name'       => __( 'Coming Event', 'Zonestrap' ),
        'add_new'             => _x( 'Add New Coming Event', 'Zonestrap', 'Zonestrap' ),
        'add_new_item'        => __( 'Add New Coming Event', 'Zonestrap' ),
        'edit_item'           => __( 'Edit Coming Event', 'Zonestrap' ),
        'new_item'            => __( 'New Coming Event', 'Zonestrap' ),
        'view_item'           => __( 'View Coming Event', 'Zonestrap' ),
        'search_items'        => __( 'Search Coming Event', 'Zonestrap' ),
        'not_found'           => __( 'No Coming Event found', 'Zonestrap' ),
        'not_found_in_trash'  => __( 'No Coming Event found in Trash', 'Zonestrap' ),
        'parent_item_colon'   => __( 'Parent Coming Event:', 'Zonestrap' ),
        'menu_name'           => __( 'Coming Event', 'Zonestrap' ),
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'description'         => 'description',
        'taxonomies'          => array(),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => null,
        'menu_icon'           => 'dashicons-calendar-alt',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => true,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => true,
        'capability_type'     => 'post',
        'supports'            => array(
            'title', 'editor', 'author', 'thumbnail',
			'page-attributes', 'post-formats'
            )
    );

    register_post_type( 'coming_events', $args );
}

add_action( 'init', 'coming_events' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Adding class to anchor tags
**/
add_filter( 'nav_menu_link_attributes', function($atts) {
	$atts['class'] = "underline";
	return $atts;
}, 100, 1);
