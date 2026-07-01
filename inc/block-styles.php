<?php
defined( 'ABSPATH' ) || exit;

/**
 * Register block styles for the Squirrels component system.
 *
 * Block styles add visual variants to existing core blocks, selectable
 * from the block toolbar. Each style applies an `is-style-{name}` class
 * to the block's wrapper. CSS for every style lives in assets/css/main.css
 * under the "T9 — Component Block Styles" section.
 */
function squirrels_register_block_styles() {

	// -------------------------------------------------------------------------
	// Group block — card + surface variants
	// -------------------------------------------------------------------------
	register_block_style( 'core/group', array(
		'name'  => 'squirrels-card',
		'label' => __( 'Card', 'squirrels' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'squirrels-feature-box',
		'label' => __( 'Feature Box', 'squirrels' ),
	) );

	// -------------------------------------------------------------------------
	// Group block — alert variants
	// -------------------------------------------------------------------------
	register_block_style( 'core/group', array(
		'name'  => 'squirrels-alert-info',
		'label' => __( 'Alert: Info', 'squirrels' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'squirrels-alert-success',
		'label' => __( 'Alert: Success', 'squirrels' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'squirrels-alert-warning',
		'label' => __( 'Alert: Warning', 'squirrels' ),
	) );

	register_block_style( 'core/group', array(
		'name'  => 'squirrels-alert-error',
		'label' => __( 'Alert: Error', 'squirrels' ),
	) );

	// -------------------------------------------------------------------------
	// Button block — additional variants
	// WordPress ships: Default (filled) + Outline (is-style-outline).
	// We add Ghost (text only, no fill/border).
	// -------------------------------------------------------------------------
	register_block_style( 'core/button', array(
		'name'  => 'squirrels-ghost',
		'label' => __( 'Ghost', 'squirrels' ),
	) );

	register_block_style( 'core/button', array(
		'name'  => 'squirrels-danger',
		'label' => __( 'Danger', 'squirrels' ),
	) );

	// -------------------------------------------------------------------------
	// Quote block — testimonial card
	// -------------------------------------------------------------------------
	register_block_style( 'core/quote', array(
		'name'  => 'squirrels-testimonial',
		'label' => __( 'Testimonial Card', 'squirrels' ),
	) );

	// -------------------------------------------------------------------------
	// Image block — rounded media
	// -------------------------------------------------------------------------
	register_block_style( 'core/image', array(
		'name'  => 'squirrels-rounded',
		'label' => __( 'Rounded', 'squirrels' ),
	) );

	register_block_style( 'core/image', array(
		'name'  => 'squirrels-avatar',
		'label' => __( 'Avatar', 'squirrels' ),
	) );

	// -------------------------------------------------------------------------
	// Separator — decorative variants
	// -------------------------------------------------------------------------
	register_block_style( 'core/separator', array(
		'name'  => 'squirrels-narrow',
		'label' => __( 'Narrow', 'squirrels' ),
	) );

	register_block_style( 'core/separator', array(
		'name'  => 'squirrels-accent',
		'label' => __( 'Accent', 'squirrels' ),
	) );

	// -------------------------------------------------------------------------
	// List — icon list variant
	// -------------------------------------------------------------------------
	register_block_style( 'core/list', array(
		'name'  => 'squirrels-icon-list',
		'label' => __( 'Icon List', 'squirrels' ),
	) );
}
add_action( 'init', 'squirrels_register_block_styles' );
