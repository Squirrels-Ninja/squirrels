<?php
/**
 * Title: Hero Store
 * Slug: squirrels/hero-store
 * Categories: squirrels, squirrels-woocommerce
 * Keywords: hero, store, shop, woocommerce, sale
 * Description: WooCommerce store hero with a bold headline, tagline, and shop button.
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-hero-store","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-hero-store">

	<!-- wp:group {"className":"squirrels-hero-store__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group squirrels-hero-store__inner">

		<!-- wp:group {"className":"squirrels-hero-store__copy","layout":{"type":"flow"}} -->
		<div class="wp-block-group squirrels-hero-store__copy">

			<!-- wp:paragraph {"className":"squirrels-hero-store__eyebrow"} -->
			<p class="squirrels-hero-store__eyebrow">New collection</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1} -->
			<h1>Everything you need, nothing you don't</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Thoughtfully chosen goods for everyday life. Free shipping on orders over $50.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/shop/">Shop Now</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/shop/?orderby=popularity">Best Sellers</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"squirrels-hero-store__badge","layout":{"type":"flow"}} -->
		<div class="wp-block-group squirrels-hero-store__badge">
			<!-- wp:paragraph {"className":"squirrels-hero-store__sale-badge","align":"center"} -->
			<p class="squirrels-hero-store__sale-badge has-text-align-center">Up to<br><strong>30% off</strong><br>selected items</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
