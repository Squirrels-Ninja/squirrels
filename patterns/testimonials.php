<?php
/**
 * Title: Testimonials
 * Slug: squirrels/testimonials
 * Categories: squirrels
 * Keywords: testimonials, reviews, social proof, quotes, customers
 * Description: Two-column testimonial layout with customer quote, name, and role.
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-testimonials","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-testimonials">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="has-text-align-center">What store owners say</h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"className":"squirrels-testimonials__grid"} -->
	<div class="wp-block-columns squirrels-testimonials__grid">

		<!-- wp:column {"className":"squirrels-testimonial"} -->
		<div class="wp-block-column squirrels-testimonial">
			<!-- wp:paragraph {"className":"squirrels-testimonial__quote"} -->
			<p class="squirrels-testimonial__quote">"We had the Classic Store running in under two hours. The WooCommerce integration is seamless and the design is exactly what our brand needed."</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"squirrels-testimonial__author","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group squirrels-testimonial__author">
				<!-- wp:group {"layout":{"type":"flow"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"squirrels-testimonial__name"} -->
					<p class="squirrels-testimonial__name"><strong>Sarah K.</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"squirrels-testimonial__role"} -->
					<p class="squirrels-testimonial__role">Owner, The Paper Goods Co.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-testimonial"} -->
		<div class="wp-block-column squirrels-testimonial">
			<!-- wp:paragraph {"className":"squirrels-testimonial__quote"} -->
			<p class="squirrels-testimonial__quote">"The Lighthouse scores impressed our developers and the block editor experience impressed our content team. It's rare to find a theme that satisfies both."</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"squirrels-testimonial__author","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group squirrels-testimonial__author">
				<!-- wp:group {"layout":{"type":"flow"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"squirrels-testimonial__name"} -->
					<p class="squirrels-testimonial__name"><strong>Marcus T.</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"className":"squirrels-testimonial__role"} -->
					<p class="squirrels-testimonial__role">Lead Developer, Studio Olive</p>
					<!-- /wp:paragraph -->
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
