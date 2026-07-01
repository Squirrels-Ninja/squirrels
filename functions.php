<?php
/**
 * Squirrels functions and definitions.
 *
 * @package Squirrels
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SQUIRRELS_VERSION', '1.0.0' );
define( 'SQUIRRELS_DIR', get_template_directory() );
define( 'SQUIRRELS_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function squirrels_setup() {
    load_theme_textdomain( 'squirrels', SQUIRRELS_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'responsive-embeds' );

    // WooCommerce support.
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'squirrels' ),
        'footer'  => esc_html__( 'Footer Menu', 'squirrels' ),
    ) );
}
add_action( 'after_setup_theme', 'squirrels_setup' );

/**
 * Set the content width in pixels.
 */
function squirrels_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'squirrels_content_width', 1200 );
}
add_action( 'after_setup_theme', 'squirrels_content_width', 0 );

/**
 * Register widget areas.
 */
function squirrels_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'squirrels' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'squirrels' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 1', 'squirrels' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Footer column 1.', 'squirrels' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 2', 'squirrels' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Footer column 2.', 'squirrels' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Area 3', 'squirrels' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Footer column 3.', 'squirrels' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'squirrels_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function squirrels_enqueue_assets() {
    wp_enqueue_style(
        'squirrels-main',
        SQUIRRELS_URI . '/assets/css/main.css',
        array(),
        SQUIRRELS_VERSION
    );

    wp_enqueue_style(
        'squirrels-style',
        get_stylesheet_uri(),
        array( 'squirrels-main' ),
        SQUIRRELS_VERSION
    );

    wp_enqueue_script(
        'squirrels-main',
        SQUIRRELS_URI . '/assets/js/main.js',
        array( 'jquery' ),
        SQUIRRELS_VERSION,
        true
    );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'squirrels_enqueue_assets' );

/**
 * Load the customizer — wrapped in customize_register so WP_Customize_Control exists.
 */
add_action( 'customize_register', function () {
    require_once SQUIRRELS_DIR . '/inc/customizer/customizer.php';
}, 0 );

/**
 * Required files.
 */
require_once SQUIRRELS_DIR . '/inc/template-tags.php';
require_once SQUIRRELS_DIR . '/inc/extras.php';
require_once SQUIRRELS_DIR . '/inc/woocommerce.php';
require_once SQUIRRELS_DIR . '/inc/block-patterns.php';

if ( is_admin() ) {
    require_once SQUIRRELS_DIR . '/inc/demo-import/demo-import.php';
}
