<?php
/**
 * kilobyte functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kilobyte
 */

if ( ! function_exists( 'kilobyte_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kilobyte_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kilobyte, use a find and replace
	 * to change 'kilobyte' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kilobyte', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_image_size( 'portifolio-thumbnail', 300, 200, true );

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top' => esc_html__( 'Primary', 'kilobyte' ),
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
	add_theme_support( 'custom-background', apply_filters( 'kilobyte_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	add_image_size( 'blog-thumbnail', 500, 300, true );
}
endif;
add_action( 'after_setup_theme', 'kilobyte_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kilobyte_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kilobyte_content_width', 640 );
}
add_action( 'after_setup_theme', 'kilobyte_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kilobyte_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'kilobyte' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'kilobyte' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'kilobyte_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kilobyte_scripts() {
	wp_enqueue_style( 'kilobyte-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'kilobyte-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kilobyte-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery', 'masonry' ), '20151215', true );

	wp_enqueue_script( 'kilobyte-main', get_template_directory_uri() . '/js/main.js', array( 'kilobyte-bootstrap-js' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kilobyte_scripts' );


//custom post type portfolio
 if(! function_exists( 'kilobyte_custom_post_type_portfolio' )):
function kilobyte_custom_post_type_portfolio(){
	$labels = array( 
		'name'=>'Portfolio',
		'singular_name'=>'Portfolio',
		'add_new' => 'Add Portfolio',
		'all_items' => 'All Portfolio',
		'add_new_item'=> 'Add Portfolio',
		'new_item' => 'New Portfolio',
		'view_item' => 'View Portfolio',
		'search_item' => 'Search Portfolio',
		'not_found' =>	'no items found',
		'not_found_in_trash' => 'not found in trash',
		'parent_item_colon' => 'parent'	
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicaly_queryable' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' =>'post',
		'heirarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'revisons',
			'custom-fields',
			),
		'menu_position' => 5,
		'rewrite' => array( 'slug' => 'portfolio','with_front' => false ),
		'exclude_from_search' => false
		);

	register_post_type('post-type-portfolio',$args);
}
endif;

add_action('init','kilobyte_custom_post_type_portfolio' );

//custom post type Case Study
if(!function_exists( 'kilobyte_custom_post_type_casestudy')):
function kilobyte_custom_post_type_casestudy(){
	$labels2 = array( 
		'name'=>'Case Study',
		'singular_name'=>'Case Study',
		'add_new' => 'Add Case Study',
		'all_items' => 'All Case Study',
		'add_new_item'=> 'Add Case Study',
		'new_item' => 'New Case Study',
		'view_item' => 'View Case Study',
		'search_item' => 'Search Case Study',
		'not_found' =>	'no items found',
		'not_found_in_trash' => 'not found in trash',
		'parent_item_colon' => 'parent'	
		);
	$args2 = array(
		'labels' => $labels2,
		'public' => true,
		'has_archive' => true,
		'publicaly_queryable' => true, 
		'query_var' => true,
		'rewrite' => array( 'slug' => 'casestudy','with_front' => false ),
		'capability_type' =>'post',
		'heirarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'excerpt',
			'revisons',
			'post_formats',
			'custom-fields'
			),
		'menu_position' => 6,
		'exclude_from_search' => false
		);

	register_post_type('post-type-casestudy',$args2);
}
endif;

add_action('init','kilobyte_custom_post_type_casestudy' );

//custom taxonomies
if ( ! function_exists( 'kilobyte_custom_taxonomy')):
function kilobyte_custom_taxonomy(){
$labels = array(
		'name'              => 'Portfolio types',
		'singular_name'     => 'Portfolio types',
		'search_items'      => 'search types',
		'all_items'         => 'all types',
		'parent_item'       => 'parent Type',
		'parent_item_colon' => 'parent Type',
		'edit_item'         => 'edit Type',
		'update_item'       => 'update Type',
		'new_item_name'     => 'new type Name',
		'menu_name'         => 'Portfolio types'
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'portfolio/type','with_front' => false ),
	);
	register_taxonomy('Portfolio Types',array('post-type-portfolio'),$args );
	}
	endif;

add_action('init','kilobyte_custom_taxonomy' );

// taxonomy for casestudy
if ( ! function_exists( 'kilobyte_custom_taxonomy_casestudy')):
function kilobyte_custom_taxonomy_casestudy(){
$labels = array(
		'name'              => 'Casestudy type',
		'singular_name'     => 'Casestudy type',
		'search_items'      => 'search types',
		'all_items'         => 'all types',
		'parent_item'       => 'parent Type',
		'parent_item_colon' => 'parent Type',
		'edit_item'         => 'edit Type',
		'update_item'       => 'update Type',
		'new_item_name'     => 'new type Name',
		'menu_name'         => 'Casestudy type'
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'casestudy/type' ),
	);
	register_taxonomy('Casestudy type',array('post-type-casestudy'),$args );
	}
	endif;

add_action('init','kilobyte_custom_taxonomy_casestudy' );

function kilobyte_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'kilobyte_custom_excerpt_length', 999 );

/**
 * Function for continue reading excerpts.
 */
if ( ! function_exists( 'kilobyte_excerpt_more' ) ) {
	function kilobyte_excerpt_more() {
		global $post;
		return '... <a href="' . get_the_permalink() . '" title="Read More" class="read-more">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'kilobyte' ) . '</a>';
	}
	add_filter( 'excerpt_more', 'kilobyte_excerpt_more' );
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Bootstrap Nav walker Class
 */
require get_template_directory() . '/inc/walker-nav.php';
