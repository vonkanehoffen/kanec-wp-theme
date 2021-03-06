<?php
/**
 * kanec functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kanec
 */

if ( ! function_exists( 'kanec_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kanec_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kanec, use a find and replace
	 * to change 'kanec' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kanec', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'kanec' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
}
endif;
add_action( 'after_setup_theme', 'kanec_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kanec_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kanec_content_width', 640 );
}
add_action( 'after_setup_theme', 'kanec_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kanec_widgets_init() {
	$defaults = [
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		'description'   => '',	
		];
	register_sidebar( [
		'name'          => esc_html__( 'Footer 1', 'kanec' ),
		'id'            => 'footer-1',
		] + $defaults );
	register_sidebar( [
		'name'          => esc_html__( 'Footer 2', 'kanec' ),
		'id'            => 'footer-2',
		] + $defaults );
	register_sidebar( [
		'name'          => esc_html__( 'Footer 3', 'kanec' ),
		'id'            => 'footer-3',
		] + $defaults );
	register_sidebar( [
		'name'          => esc_html__( 'Footer 4', 'kanec' ),
		'id'            => 'footer-4',
		] + $defaults );
}
add_action( 'widgets_init', 'kanec_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kanec_scripts() {

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script(
      'jquery',
      'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
      [],
      null,
      true
    );
    add_filter('script_loader_src', 'jquery_local_fallback', 10, 2);
	}
	wp_enqueue_style( 'kanec-style', get_template_directory_uri() . '/dist/main.css', [], false, 'all' );

	wp_enqueue_script( 'kanec-main', get_template_directory_uri() . '/dist/main.js', ['jquery'], '20120206', true );

	// wp_enqueue_script( 'kanec-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kanec_scripts' );

/**
 * Output the local fallback immediately after jQuery's <script>
 *
 * @link http://wordpress.stackexchange.com/a/12450
 */
function jquery_local_fallback($src, $handle = null) {
  static $add_jquery_fallback = false;
  if ($add_jquery_fallback) {
    echo '<script>window.jQuery || document.write(\'<script src="' . $add_jquery_fallback .'"><\/script>\')</script>' . "\n";
    $add_jquery_fallback = false;
  }
  if ($handle === 'jquery') {
    $add_jquery_fallback = apply_filters('script_loader_src', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', 'jquery-fallback');
  }
  return $src;
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

/**
 * Register Portfolio post type.
 */
require get_template_directory() . '/inc/portfolio-post-type.php';
