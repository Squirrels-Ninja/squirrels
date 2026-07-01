<?php
/**
 * Title: Featured Categories
 * Slug: squirrels/featured-categories
 * Categories: squirrels-woocommerce
 * Keywords: categories, shop, browse, collections, woocommerce
 * Description: Three-column category showcase with image, name, and browse link.
 * Requires Plugins: woocommerce
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-featured-categories","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-featured-categories">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="has-text-align-center">Shop by Category</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"className":"squirrels-featured-categories__grid"} -->
	<div class="wp-block-columns squirrels-featured-categories__grid">

		<!-- wp:column {"className":"squirrels-category-card"} -->
		<div class="wp-block-column squirrels-category-card">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"squirrels-category-card__image"} -->
			<figure class="wp-block-image size-large squirrels-category-card__image"><img src="https://picsum.photos/seed/clothing/600/450" alt="Clothing category" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">Clothing</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">12 products</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/product-category/clothing/">Browse</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-category-card"} -->
		<div class="wp-block-column squirrels-category-card">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"squirrels-category-card__image"} -->
			<figure class="wp-block-image size-large squirrels-category-card__image"><img src="https://picsum.photos/seed/accessories/600/450" alt="Accessories category" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">Accessories</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">8 products</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/product-category/accessories/">Browse</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-category-card"} -->
		<div class="wp-block-column squirrels-category-card">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"squirrels-category-card__image"} -->
			<figure class="wp-block-image size-large squirrels-category-card__image"><img src="https://picsum.photos/seed/home/600/450" alt="Home category" /></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">Home &amp; Living</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">9 products</p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/product-category/home-living/">Browse</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
