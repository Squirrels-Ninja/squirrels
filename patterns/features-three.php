<?php
/**
 * Title: Three Feature Cards
 * Slug: squirrels/features-three
 * Categories: squirrels
 * Keywords: features, cards, columns, benefits, icons
 * Description: Three-column feature grid with icon, heading, and description per card.
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-features-three","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-features-three">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="has-text-align-center">Why Squirrels</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Built for shop owners who care about performance, design, and long-term maintainability.</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"className":"squirrels-features-three__grid"} -->
	<div class="wp-block-columns squirrels-features-three__grid">

		<!-- wp:column {"className":"squirrels-feature-card"} -->
		<div class="wp-block-column squirrels-feature-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon","align":"center","fontSize":"large"} -->
			<p class="squirrels-feature-card__icon has-text-align-center has-large-font-size">⚡</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">Fast by default</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Lightweight markup and deferred assets keep your Core Web Vitals in the green without a caching plugin.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-feature-card"} -->
		<div class="wp-block-column squirrels-feature-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon","align":"center","fontSize":"large"} -->
			<p class="squirrels-feature-card__icon has-text-align-center has-large-font-size">🎨</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">Designer-friendly</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">A complete design token system means consistent spacing, colors, and typography across every page.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-feature-card"} -->
		<div class="wp-block-column squirrels-feature-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon","align":"center","fontSize":"large"} -->
			<p class="squirrels-feature-card__icon has-text-align-center has-large-font-size">🛒</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="has-text-align-center">WooCommerce ready</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">Shop, cart, checkout, and account pages are fully styled and tested with WooCommerce out of the box.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
