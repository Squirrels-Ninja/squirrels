<?php
/**
 * Title: Blog Categories
 * Slug: squirrels/blog-categories
 * Categories: squirrels-blog
 * Keywords: categories, topics, tags, browse, filter, taxonomy, subjects
 * Description: Blog category browsing section with five category cards — each shows an icon, category name, and post count. Use on Blog index pages to help readers find topics they care about.
 */
?>

<!-- wp:group {"className":"squirrels-blog-categories","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-blog-categories">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"480px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="has-text-align-center">Browse by topic</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"squirrels-blog-categories__grid","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
	<div class="wp-block-group squirrels-blog-categories__grid">

		<!-- wp:group {"className":"squirrels-category-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group squirrels-category-card is-style-squirrels-card">
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__icon"} -->
			<p class="has-text-align-center squirrels-category-card__icon">⚡</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__name"} -->
			<p class="has-text-align-center squirrels-category-card__name"><a href="#">Performance</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">24 posts</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"squirrels-category-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group squirrels-category-card is-style-squirrels-card">
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__icon"} -->
			<p class="has-text-align-center squirrels-category-card__icon">🎨</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__name"} -->
			<p class="has-text-align-center squirrels-category-card__name"><a href="#">Design</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">18 posts</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"squirrels-category-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group squirrels-category-card is-style-squirrels-card">
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__icon"} -->
			<p class="has-text-align-center squirrels-category-card__icon">🛒</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__name"} -->
			<p class="has-text-align-center squirrels-category-card__name"><a href="#">WooCommerce</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">31 posts</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"squirrels-category-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group squirrels-category-card is-style-squirrels-card">
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__icon"} -->
			<p class="has-text-align-center squirrels-category-card__icon">📐</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__name"} -->
			<p class="has-text-align-center squirrels-category-card__name"><a href="#">Tutorials</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">42 posts</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"squirrels-category-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group squirrels-category-card is-style-squirrels-card">
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__icon"} -->
			<p class="has-text-align-center squirrels-category-card__icon">📈</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__name"} -->
			<p class="has-text-align-center squirrels-category-card__name"><a href="#">Growth</a></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"align":"center","className":"squirrels-category-card__count"} -->
			<p class="has-text-align-center squirrels-category-card__count">15 posts</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
