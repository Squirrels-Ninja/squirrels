<?php
/**
 * Title: Features Grid
 * Slug: squirrels/marketing-features-grid
 * Categories: squirrels-marketing
 * Keywords: features, grid, cards, benefits, highlights, product
 * Description: Six feature cards in a two-row grid, each with an emoji icon, bold title, and short description. Use on landing pages and product pages to communicate key capabilities.
 */
?>

<!-- wp:group {"className":"squirrels-features-grid","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-features-grid">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="has-text-align-center">Everything you need to sell online</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Built for WooCommerce stores that care about speed, design, and conversion — without the complexity of a page builder.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"squirrels-features-grid__row"} -->
	<div class="wp-block-columns squirrels-features-grid__row">

		<!-- wp:column {"className":"squirrels-feature-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-feature-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon"} -->
			<p class="squirrels-feature-card__icon">⚡</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-feature-card__title"} -->
			<h4 class="squirrels-feature-card__title">Blazing fast</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-feature-card__desc"} -->
			<p class="squirrels-feature-card__desc">Lightweight markup and zero page-builder overhead keeps Core Web Vitals green out of the box.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-feature-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-feature-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon"} -->
			<p class="squirrels-feature-card__icon">🎨</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-feature-card__title"} -->
			<h4 class="squirrels-feature-card__title">Design token system</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-feature-card__desc"} -->
			<p class="squirrels-feature-card__desc">Consistent color, spacing, and typography across every section — change one token, update the whole site.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-feature-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-feature-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon"} -->
			<p class="squirrels-feature-card__icon">🛒</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-feature-card__title"} -->
			<h4 class="squirrels-feature-card__title">WooCommerce ready</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-feature-card__desc"} -->
			<p class="squirrels-feature-card__desc">Shop, cart, checkout, and account pages styled and tested. No extra configuration needed.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"className":"squirrels-features-grid__row"} -->
	<div class="wp-block-columns squirrels-features-grid__row">

		<!-- wp:column {"className":"squirrels-feature-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-feature-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon"} -->
			<p class="squirrels-feature-card__icon">📐</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-feature-card__title"} -->
			<h4 class="squirrels-feature-card__title">40+ patterns</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-feature-card__desc"} -->
			<p class="squirrels-feature-card__desc">Pre-built sections for every page type — hero, features, pricing, team, FAQ, blog, and more.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-feature-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-feature-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon"} -->
			<p class="squirrels-feature-card__icon">♿</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-feature-card__title"} -->
			<h4 class="squirrels-feature-card__title">Accessible by default</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-feature-card__desc"} -->
			<p class="squirrels-feature-card__desc">WCAG AA contrast, semantic HTML, and keyboard-navigable components built into every block.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-feature-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-feature-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-feature-card__icon"} -->
			<p class="squirrels-feature-card__icon">🔧</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-feature-card__title"} -->
			<h4 class="squirrels-feature-card__title">Developer friendly</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-feature-card__desc"} -->
			<p class="squirrels-feature-card__desc">Clean, documented codebase with BEM CSS, theme.json tokens, and a Scamper performance framework.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
