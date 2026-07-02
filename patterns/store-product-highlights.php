<?php
/**
 * Title: Product Highlights
 * Slug: squirrels/store-product-highlights
 * Categories: squirrels-woocommerce
 * Keywords: product, highlight, feature, spotlight, single, hero
 * Requires Plugins: woocommerce
 * Description: A two-column product spotlight with a large product image on the left and product name, price, short description, and CTA button on the right. Use to showcase a hero product or a seasonal bestseller.
 */
?>

<!-- wp:group {"className":"squirrels-product-highlights","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-product-highlights">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"560px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"squirrels-product-highlights__eyebrow"} -->
		<p class="has-text-align-center squirrels-product-highlights__eyebrow">Staff pick</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="has-text-align-center">Product of the season</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"verticalAlignment":"center","className":"squirrels-product-highlights__grid"} -->
	<div class="wp-block-columns are-vertically-aligned-center squirrels-product-highlights__grid">

		<!-- wp:column {"width":"55%","className":"squirrels-product-highlights__image-col"} -->
		<div class="wp-block-column squirrels-product-highlights__image-col" style="flex-basis:55%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"squirrels-product-highlights__image"} -->
			<figure class="wp-block-image size-large squirrels-product-highlights__image"><img src="https://picsum.photos/seed/product-highlight/800/700" alt="Featured product" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"45%","className":"squirrels-product-highlights__content-col"} -->
		<div class="wp-block-column squirrels-product-highlights__content-col" style="flex-basis:45%">

			<!-- wp:paragraph {"className":"squirrels-product-highlights__badge"} -->
			<p class="squirrels-product-highlights__badge">Limited edition</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":3,"className":"squirrels-product-highlights__name"} -->
			<h3 class="squirrels-product-highlights__name">Artisan Ceramic Mug — Autumn Glaze</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"squirrels-product-highlights__price"} -->
			<p class="squirrels-product-highlights__price">$38.00</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"squirrels-product-highlights__desc"} -->
			<p class="squirrels-product-highlights__desc">Handmade in small batches using locally sourced clay. Each piece is unique — no two glazes are exactly alike. Dishwasher safe, microwave safe, and built to last a lifetime.</p>
			<!-- /wp:paragraph -->

			<!-- wp:list {"className":"is-style-squirrels-icon-list squirrels-product-highlights__features"} -->
			<ul class="is-style-squirrels-icon-list squirrels-product-highlights__features">
				<!-- wp:list-item -->
				<li>12 oz capacity</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Food-safe lead-free glaze</li>
				<!-- /wp:list-item -->
				<!-- wp:list-item -->
				<li>Ships in 3–5 business days</li>
				<!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#">Add to cart</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-squirrels-ghost"} -->
				<div class="wp-block-button is-style-squirrels-ghost"><a class="wp-block-button__link wp-element-button" href="#">View full details</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
