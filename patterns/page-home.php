<?php
/**
 * Title: Home Page
 * Slug: squirrels/page-home
 * Categories: squirrels-pages
 * Keywords: home, homepage, full page, layout, landing, complete
 * Description: Complete home page layout assembled from Squirrels patterns: landing hero, statistics, features grid, benefits split, testimonials, pricing cards, and a CTA banner. Insert into a blank page for an instant homepage.
 */
?>

<!-- wp:pattern {"slug":"squirrels/marketing-hero-landing"} /-->

<!-- wp:pattern {"slug":"squirrels/component-stats-row"} /-->

<!-- wp:pattern {"slug":"squirrels/marketing-features-grid"} /-->

<!-- wp:pattern {"slug":"squirrels/marketing-benefits"} /-->

<!-- wp:pattern {"slug":"squirrels/testimonials"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"layout":{"type":"constrained","contentSize":"560px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="has-text-align-center">Simple, transparent pricing</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">One price, all features. No hidden fees, no upsells, no renewal shakedowns.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:pattern {"slug":"squirrels/component-pricing-card"} /--></div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:pattern {"slug":"squirrels/component-pricing-card"} /--></div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:pattern {"slug":"squirrels/component-pricing-card"} /--></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"squirrels/marketing-faq"} /-->

<!-- wp:pattern {"slug":"squirrels/cta-banner"} /-->
