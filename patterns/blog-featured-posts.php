<?php
/**
 * Title: Featured Posts
 * Slug: squirrels/blog-featured-posts
 * Categories: squirrels-blog
 * Keywords: blog, posts, featured, articles, latest, grid, news
 * Description: Featured blog posts section with a heading and three post cards (image, category, title, excerpt, date, read more link) in a three-column grid. Use on Blog index and Home pages.
 */
?>

<!-- wp:group {"className":"squirrels-featured-posts","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-featured-posts">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":2} -->
		<h2>From the blog</h2>
		<!-- /wp:heading -->
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"className":"is-style-squirrels-ghost"} -->
			<div class="wp-block-button is-style-squirrels-ghost"><a class="wp-block-button__link wp-element-button" href="#">View all posts</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"squirrels-featured-posts__grid"} -->
	<div class="wp-block-columns squirrels-featured-posts__grid">

		<!-- wp:column {"className":"squirrels-post-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-post-card is-style-squirrels-card">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","className":"squirrels-post-card__image"} -->
			<figure class="wp-block-image size-medium squirrels-post-card__image"><a href="#"><img src="https://picsum.photos/seed/post1/640/360" alt="How to set up WooCommerce in 2025" /></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"squirrels-post-card__cat"} -->
			<p class="squirrels-post-card__cat">Tutorials</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"squirrels-post-card__title"} -->
			<h3 class="squirrels-post-card__title"><a href="#">How to set up WooCommerce in 2025 — the fast way</a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-post-card__excerpt"} -->
			<p class="squirrels-post-card__excerpt">Skip the bloated setup guides. Here's the minimal WooCommerce configuration that gets you selling in under an hour.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"squirrels-post-card__meta"} -->
			<p class="squirrels-post-card__meta">June 12, 2025 &nbsp;·&nbsp; 8 min read</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-post-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-post-card is-style-squirrels-card">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","className":"squirrels-post-card__image"} -->
			<figure class="wp-block-image size-medium squirrels-post-card__image"><a href="#"><img src="https://picsum.photos/seed/post2/640/360" alt="Block patterns vs page builders" /></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"squirrels-post-card__cat"} -->
			<p class="squirrels-post-card__cat">Design</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"squirrels-post-card__title"} -->
			<h3 class="squirrels-post-card__title"><a href="#">Block patterns vs page builders — what you actually lose</a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-post-card__excerpt"} -->
			<p class="squirrels-post-card__excerpt">We compared the same homepage built in Elementor vs native blocks. The performance gap is wider than you think.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"squirrels-post-card__meta"} -->
			<p class="squirrels-post-card__meta">May 28, 2025 &nbsp;·&nbsp; 12 min read</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-post-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-post-card is-style-squirrels-card">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","className":"squirrels-post-card__image"} -->
			<figure class="wp-block-image size-medium squirrels-post-card__image"><a href="#"><img src="https://picsum.photos/seed/post3/640/360" alt="INP: the new Core Web Vital" /></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"squirrels-post-card__cat"} -->
			<p class="squirrels-post-card__cat">Performance</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"squirrels-post-card__title"} -->
			<h3 class="squirrels-post-card__title"><a href="#">INP is the new Core Web Vital — here's how to pass it</a></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-post-card__excerpt"} -->
			<p class="squirrels-post-card__excerpt">Interaction to Next Paint replaced FID in 2024. Most WooCommerce themes fail it badly. Here's the Squirrels approach.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"className":"squirrels-post-card__meta"} -->
			<p class="squirrels-post-card__meta">May 3, 2025 &nbsp;·&nbsp; 10 min read</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
