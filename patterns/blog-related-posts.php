<?php
/**
 * Title: Related Posts
 * Slug: squirrels/blog-related-posts
 * Categories: squirrels-blog
 * Keywords: related, posts, more, articles, continue reading, suggestions
 * Description: Three related post cards with image, category tag, and title. Use at the bottom of single posts to reduce exit rate and encourage continued reading.
 */
?>

<!-- wp:group {"className":"squirrels-related-posts","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-related-posts">

	<!-- wp:heading {"level":3,"className":"squirrels-related-posts__heading"} -->
	<h3 class="squirrels-related-posts__heading">Continue reading</h3>
	<!-- /wp:heading -->

	<!-- wp:columns {"className":"squirrels-related-posts__grid"} -->
	<div class="wp-block-columns squirrels-related-posts__grid">

		<!-- wp:column {"className":"squirrels-related-post-card"} -->
		<div class="wp-block-column squirrels-related-post-card">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","className":"squirrels-related-post-card__image"} -->
			<figure class="wp-block-image size-medium squirrels-related-post-card__image"><a href="#"><img src="https://picsum.photos/seed/related1/480/270" alt="Related post" /></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"squirrels-related-post-card__cat"} -->
			<p class="squirrels-related-post-card__cat">Performance</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-related-post-card__title"} -->
			<h4 class="squirrels-related-post-card__title"><a href="#">The complete guide to WordPress performance in 2025</a></h4>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-related-post-card"} -->
		<div class="wp-block-column squirrels-related-post-card">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","className":"squirrels-related-post-card__image"} -->
			<figure class="wp-block-image size-medium squirrels-related-post-card__image"><a href="#"><img src="https://picsum.photos/seed/related2/480/270" alt="Related post" /></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"squirrels-related-post-card__cat"} -->
			<p class="squirrels-related-post-card__cat">Design</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-related-post-card__title"} -->
			<h4 class="squirrels-related-post-card__title"><a href="#">Design tokens explained — what they are and why they matter</a></h4>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-related-post-card"} -->
		<div class="wp-block-column squirrels-related-post-card">
			<!-- wp:image {"sizeSlug":"medium","linkDestination":"custom","className":"squirrels-related-post-card__image"} -->
			<figure class="wp-block-image size-medium squirrels-related-post-card__image"><a href="#"><img src="https://picsum.photos/seed/related3/480/270" alt="Related post" /></a></figure>
			<!-- /wp:image -->
			<!-- wp:paragraph {"className":"squirrels-related-post-card__cat"} -->
			<p class="squirrels-related-post-card__cat">WooCommerce</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":4,"className":"squirrels-related-post-card__title"} -->
			<h4 class="squirrels-related-post-card__title"><a href="#">WooCommerce checkout optimization — 9 changes that lift conversion</a></h4>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
