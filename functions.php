<?php
/**
 * cmh3258 functions and definitions
 *
 * @package cmh3258
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cmh3258_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cmh3258_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on cmh3258, use a find and replace
	 * to change 'cmh3258' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cmh3258', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cmh3258' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cmh3258_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // cmh3258_setup
add_action( 'after_setup_theme', 'cmh3258_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cmh3258_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cmh3258' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'cmh3258_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cmh3258_scripts() {
	wp_enqueue_style( 'cmh3258-style', get_stylesheet_uri() );

	//wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/custom.css' ); //our stylesheet
	wp_enqueue_script( 'jquery' );

	// wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/frontpage.js', array(), '20120206', true);
	wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/frontpage.js', array( 'jquery' ));

	wp_enqueue_script( 'cmh3258-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'cmh3258-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


	/* Add the Javascript */
	$path = get_stylesheet_directory_uri() .'/js/';
	// wp_enqueue_script('cmh3258-navigation', $path.'jquery.frontpage.js', array('jquery'));
	// wp_register_script( 'custom-script', get_template_directory_uri() . '/js/frontpage.js', array( 'jquery', 'jquery-ui-core' ), '20120208', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cmh3258_scripts' );

function custom_style_sheet() {
	wp_enqueue_style( 'custom-styling', get_stylesheet_directory_uri() . '/custom.css' );
	//wp_enqueue_style( 'basscss-styling', get_stylesheet_directory_uri() . 'http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.2/basscss.min.css' );
	//wp_register_style( 'basscss-styling', 'http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.2/basscss.min.cs',array(), null, true);
	//wp_enqueue_style('basscss-styling');
	//http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.2/basscss.min.css
	//wp_enqueue_style('hemingway_googleFonts',  'http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.2/basscss.min.cs' );

}
add_action('wp_enqueue_scripts', 'custom_style_sheet');



/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

// Custom more-link text
/*
add_filter( 'the_content_more_link', 'cmh3258_custom_more_link', 10, 2 );

function cmh3258_custom_more_link( $more_link, $more_link_text ) {
	return str_replace( $more_link_text, __('Continue reading', 'cmh3258'), $more_link );
}
*/

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


