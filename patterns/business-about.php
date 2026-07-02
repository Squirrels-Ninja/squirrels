<?php
/**
 * Title: About Section
 * Slug: squirrels/business-about
 * Categories: squirrels-business
 * Keywords: about, company, story, introduction, overview, who we are
 * Description: Two-column about section with a brand image and company story text, including founding year, mission statement, and two key stats. Use as the lead section on About pages.
 */
?>

<!-- wp:group {"className":"squirrels-about","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-about">

	<!-- wp:columns {"verticalAlignment":"center","className":"squirrels-about__grid"} -->
	<div class="wp-block-columns are-vertically-aligned-center squirrels-about__grid">

		<!-- wp:column {"width":"50%","className":"squirrels-about__image-col"} -->
		<div class="wp-block-column squirrels-about__image-col" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"squirrels-about__image"} -->
			<figure class="wp-block-image size-large squirrels-about__image"><img src="https://picsum.photos/seed/about-team/800/640" alt="Our team at work" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","className":"squirrels-about__content-col"} -->
		<div class="wp-block-column squirrels-about__content-col" style="flex-basis:50%">

			<!-- wp:paragraph {"className":"squirrels-about__eyebrow"} -->
			<p class="squirrels-about__eyebrow">Our story</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"squirrels-about__heading"} -->
			<h2 class="squirrels-about__heading">Built by store owners, for store owners</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"squirrels-about__body"} -->
			<p class="squirrels-about__body">We started Squirrels in 2019 after spending years building WooCommerce stores for clients and growing frustrated with the gap between beautiful designs and real-world performance. Every theme either looked great or loaded fast — never both.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"squirrels-about__body"} -->
			<p class="squirrels-about__body">So we built the theme we always wished existed: native blocks, design tokens, a Scamper performance framework, and a pattern library that covers every page you'll ever need to build.</p>
			<!-- /wp:paragraph -->

			<!-- wp:columns {"className":"squirrels-about__stats"} -->
			<div class="wp-block-columns squirrels-about__stats">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"squirrels-stat__number"} -->
					<h3 class="squirrels-stat__number">2019</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"squirrels-stat__label"} -->
					<p class="squirrels-stat__label">Founded</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:heading {"level":3,"className":"squirrels-stat__number"} -->
					<h3 class="squirrels-stat__number">12k+</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"className":"squirrels-stat__label"} -->
					<p class="squirrels-stat__label">Stores powered</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
