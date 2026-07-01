<?php
defined( 'ABSPATH' ) || exit;

function squirrels_register_block_pattern_categories() {
	register_block_pattern_category(
		'squirrels',
		array(
			'label' => __( 'Squirrels', 'squirrels' ),
		)
	);

	register_block_pattern_category(
		'squirrels-woocommerce',
		array(
			'label' => __( 'Squirrels WooCommerce', 'squirrels' ),
		)
	);
}
add_action( 'init', 'squirrels_register_block_pattern_categories' );
