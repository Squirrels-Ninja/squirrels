<?php
defined( 'ABSPATH' ) || exit;
/**
 * WooCommerce integration for Squirrels.
 *
 * @package Squirrels
 */

/**
 * Remove default WooCommerce styles — the theme provides its own.
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add WooCommerce-specific body classes.
 */
function squirrels_woocommerce_body_class( $classes ) {
    $classes[] = 'squirrels-woocommerce-active';
    return $classes;
}
add_filter( 'body_class', 'squirrels_woocommerce_body_class' );

/**
 * Declare WooCommerce HPOS compatibility.
 */
function squirrels_declare_woocommerce_compatibility() {
    if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
        \Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
    }
}
add_action( 'before_woocommerce_init', 'squirrels_declare_woocommerce_compatibility' );

/**
 * Ensure cart fragments work with AJAX.
 */
function squirrels_woocommerce_cart_link_fragment( $fragments ) {
    ob_start();
    ?>
    <span class="squirrels-cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
    <?php
    $fragments['span.squirrels-cart-count'] = ob_get_clean();
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'squirrels_woocommerce_cart_link_fragment' );
