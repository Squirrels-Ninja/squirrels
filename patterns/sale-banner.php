<?php
/**
 * Title: Sale Banner
 * Slug: squirrels/sale-banner
 * Categories: squirrels, squirrels-woocommerce
 * Keywords: sale, discount, offer, promotion, banner
 * Description: High-contrast sale announcement banner with discount callout and shop link.
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-sale-banner","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-sale-banner">

	<!-- wp:group {"className":"squirrels-sale-banner__inner","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group squirrels-sale-banner__inner">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"className":"squirrels-sale-banner__label"} -->
			<p class="squirrels-sale-banner__label">SALE</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"layout":{"type":"flow"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3,"className":"squirrels-sale-banner__heading"} -->
				<h3 class="squirrels-sale-banner__heading">Up to 30% off selected items</h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"className":"squirrels-sale-banner__sub"} -->
				<p class="squirrels-sale-banner__sub">Limited time. No code needed.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"squirrels-sale-banner__button is-style-outline"} -->
			<div class="wp-block-button squirrels-sale-banner__button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/shop/?orderby=price">Shop the Sale</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
