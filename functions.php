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
	wp_enqueue_style( 'kilobyte-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );

	wp_enqueue_style( 'kilobyte-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kilobyte-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery', 'masonry' ), '20151215', true );

	wp_enqueue_script( 'kilobyte-main', get_template_directory_uri() . '/js/main.js', array( 'kilobyte-bootstrap-js' ), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kilobyte_scripts' );

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

require get_template_directory() . '/inc/custom-posttype.php';

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

// extra user fields
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) { ?>
	<h3>Extra profile information</h3>
	<table class="form-table">
		<tr>
			<th><label for="u-role">what i do?</label></th>
			<td>
			<input type="text" name="urole" id="urole" value="<?php echo esc_attr( get_the_author_meta( 'urole', $user->ID ) ); ?>" class="regular-text" /><br />
			</td>
		</tr>

	</table>
<?php }

add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

	if ( !current_user_can( 'edit_user', $user_id ) )
		return false;
	update_usermeta( $user_id, 'urole', $_POST['urole'] );
}