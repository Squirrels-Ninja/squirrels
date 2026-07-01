<?php
/**
 * Title: Benefits Split
 * Slug: squirrels/marketing-benefits
 * Categories: squirrels-marketing
 * Keywords: benefits, split, two column, image, icon list, features
 * Description: Two-column benefits section with a product image on the left and an icon list on the right. Use to highlight key advantages alongside a visual.
 */
?>

<!-- wp:group {"className":"squirrels-benefits","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-benefits">

	<!-- wp:columns {"verticalAlignment":"center","className":"squirrels-benefits__grid"} -->
	<div class="wp-block-columns are-vertically-aligned-center squirrels-benefits__grid">

		<!-- wp:column {"width":"50%","className":"squirrels-benefits__image-col"} -->
		<div class="wp-block-column squirrels-benefits__image-col" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"squirrels-benefits__image"} -->
			<figure class="wp-block-image size-large squirrels-benefits__image"><img src="https://picsum.photos/seed/benefits/800/600" alt="Product benefits illustration" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"squirrels-benefits__content-col"} -->
		<div class="wp-block-column squirrels-benefits__content-col" style="flex-basis:50%">

			<!-- wp:paragraph {"className":"squirrels-benefits__eyebrow"} -->
			<p class="squirrels-benefits__eyebrow">Why Squirrels</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"squirrels-benefits__heading"} -->
			<h2 class="squirrels-benefits__heading">The last theme you'll ever need to buy</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"squirrels-benefits__intro"} -->
			<p class="squirrels-benefits__intro">Most themes trade looks for performance. Squirrels gives you both — a design system that's fast by architecture, not by accident.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"squirrels-icon-list","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group squirrels-icon-list">

				<!-- wp:group {"className":"squirrels-icon-list__item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group squirrels-icon-list__item">
					<!-- wp:paragraph {"className":"squirrels-icon-list__icon"} -->
					<p class="squirrels-icon-list__icon">✅</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flow"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"squirrels-icon-list__label"} -->
						<p class="squirrels-icon-list__label"><strong>One-click page layouts</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"squirrels-icon-list__text"} -->
						<p class="squirrels-icon-list__text">Full page templates assembled from pre-built patterns. Insert a layout and start editing immediately.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"squirrels-icon-list__item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group squirrels-icon-list__item">
					<!-- wp:paragraph {"className":"squirrels-icon-list__icon"} -->
					<p class="squirrels-icon-list__icon">✅</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flow"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"squirrels-icon-list__label"} -->
						<p class="squirrels-icon-list__label"><strong>No subscription bloat</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"squirrels-icon-list__text"} -->
						<p class="squirrels-icon-list__text">Pay once. All updates included. No upsells, no locked features, no annual renewal gotchas.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"squirrels-icon-list__item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group squirrels-icon-list__item">
					<!-- wp:paragraph {"className":"squirrels-icon-list__icon"} -->
					<p class="squirrels-icon-list__icon">✅</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flow"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"squirrels-icon-list__label"} -->
						<p class="squirrels-icon-list__label"><strong>Lifetime documentation</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"squirrels-icon-list__text"} -->
						<p class="squirrels-icon-list__text">Detailed runbooks, QA checklists, and a Scamper performance guide — maintained with every release.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
