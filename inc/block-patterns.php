<?php
defined( 'ABSPATH' ) || exit;

function squirrels_register_block_pattern_categories() {
	register_block_pattern_category(
		'squirrels-components',
		array(
			'label' => __( 'Squirrels Components', 'squirrels' ),
		)
	);

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

	register_block_pattern_category(
		'squirrels-marketing',
		array(
			'label' => __( 'Squirrels Marketing', 'squirrels' ),
		)
	);

	register_block_pattern_category(
		'squirrels-business',
		array(
			'label' => __( 'Squirrels Business', 'squirrels' ),
		)
	);

	register_block_pattern_category(
		'squirrels-blog',
		array(
			'label' => __( 'Squirrels Blog', 'squirrels' ),
		)
	);

	register_block_pattern_category(
		'squirrels-pages',
		array(
			'label' => __( 'Squirrels Pages', 'squirrels' ),
		)
	);
}
add_action( 'init', 'squirrels_register_block_pattern_categories' );
