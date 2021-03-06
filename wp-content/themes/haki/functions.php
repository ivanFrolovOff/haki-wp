<?php
/**
 * haki functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package haki
 */

if ( ! function_exists( 'haki_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function haki_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on haki, use a find and replace
	 * to change 'haki' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'haki', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'haki' ),
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
	add_theme_support( 'custom-background', apply_filters( 'haki_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'haki_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function haki_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'haki_content_width', 640 );
}
add_action( 'after_setup_theme', 'haki_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function haki_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'haki' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'haki' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'haki_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function haki_scripts() {
	wp_enqueue_style( 'haki-style', get_stylesheet_uri() );

	wp_enqueue_script( 'haki-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'haki-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'haki_scripts' );

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

function custom_post()
{

    $labels_gallery = array(
        'name' => 'Галлерея',
        'singular_name' => 'Галлерея',
        'add_new' => 'Добавить новое фото',
        'add_new_item' => 'Добавить новое фото',
        'edit_item' => 'Редактировать',
        'new_item' => 'Новый фото',
        'view_item' => 'Просмотреть',
        'search_items' => 'Найти фото',
        'not_found' => 'Фото не найден',
        'not_found_in_trash' => 'Фото не найден',
        'parent_item_colon' => '',
        'menu_name' => 'Галлерея'
    );
    $args_gallery = array(
        'labels' => $labels_gallery,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'custom-fields')
    );
    $labels_partners = array(
        'name' => 'Партнеры',
        'singular_name' => 'Партнер',
        'add_new' => 'Добавить новое',
        'add_new_item' => 'Добавить новое',
        'edit_item' => 'Редактировать',
        'new_item' => 'Новый партнер',
        'view_item' => 'Просмотреть',
        'search_items' => 'Найти партнер',
        'not_found' => 'Партнер не найден',
        'not_found_in_trash' => 'Партнер не найден',
        'parent_item_colon' => '',
        'menu_name' => 'Партнеры'
    );
    $args_partners = array(
        'labels' => $labels_partners,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'custom-fields')
    );
    $labels_advantages = array(
        'name' => 'Наши преимущества',
        'singular_name' => 'Наши преимущества',
        'add_new' => 'Добавить новое',
        'add_new_item' => 'Добавить новое',
        'edit_item' => 'Редактировать',
        'new_item' => 'Новое',
        'view_item' => 'Просмотреть',
        'menu_name' => 'Наши преимущества'
    );
    $args_advantages = array(
        'labels' => $labels_advantages,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'custom-fields')
    );



    register_post_type('gallery',$args_gallery);
    register_post_type('partners',$args_partners);
    register_post_type('advantages',$args_advantages);
    flush_rewrite_rules();
}
add_action('init', 'custom_post');
