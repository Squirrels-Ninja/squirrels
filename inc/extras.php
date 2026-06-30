<?php
defined( 'ABSPATH' ) || exit;
/**
 * Custom functions independent of theme templates.
 *
 * @package Squirrels
 */

/**
 * Adds custom classes to the body tag.
 */
function squirrels_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'squirrels-singular';
    }
    if ( is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'squirrels-has-sidebar';
    }
    return $classes;
}
add_filter( 'body_class', 'squirrels_body_classes' );

/**
 * Adds a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function squirrels_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    }
}
add_action( 'wp_head', 'squirrels_pingback_header' );

/**
 * Filters the excerpt length.
 */
function squirrels_excerpt_length( $length ) {
    if ( is_admin() ) {
        return $length;
    }
    return 30;
}
add_filter( 'excerpt_length', 'squirrels_excerpt_length' );

/**
 * Filters the excerpt trailing text.
 */
function squirrels_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    }
    return ' &hellip; <a class="squirrels-read-more" href="' . esc_url( get_permalink() ) . '">' . esc_html__( 'Read more', 'squirrels' ) . '</a>';
}
add_filter( 'excerpt_more', 'squirrels_excerpt_more' );
