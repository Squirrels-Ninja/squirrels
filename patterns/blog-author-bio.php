<?php
/**
 * Title: Author Bio
 * Slug: squirrels/blog-author-bio
 * Categories: squirrels-blog
 * Keywords: author, bio, about the author, writer, contributor, byline
 * Description: Author bio card with avatar, name, role, short bio, and social links. Use at the bottom of single blog posts to introduce the author and encourage followship.
 */
?>

<!-- wp:group {"className":"squirrels-author-bio is-style-squirrels-card","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group squirrels-author-bio is-style-squirrels-card">

	<!-- wp:group {"className":"squirrels-author-bio__inner","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group squirrels-author-bio__inner">

		<!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-squirrels-avatar squirrels-author-bio__avatar"} -->
		<figure class="wp-block-image size-thumbnail is-resized is-style-squirrels-avatar squirrels-author-bio__avatar"><img src="https://picsum.photos/seed/author/200/200" alt="Author avatar" style="aspect-ratio:1;object-fit:cover;width:80px;height:80px" /></figure>
		<!-- /wp:image -->

		<!-- wp:group {"className":"squirrels-author-bio__content","layout":{"type":"flow"}} -->
		<div class="wp-block-group squirrels-author-bio__content">

			<!-- wp:paragraph {"className":"squirrels-author-bio__written-by"} -->
			<p class="squirrels-author-bio__written-by">Written by</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":4,"className":"squirrels-author-bio__name"} -->
			<h4 class="squirrels-author-bio__name">Jordan Kim</h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"squirrels-author-bio__role"} -->
			<p class="squirrels-author-bio__role">Lead Engineer at Squirrels</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"className":"squirrels-author-bio__bio"} -->
			<p class="squirrels-author-bio__bio">Core WordPress contributor and performance nerd. Jordan writes about the block editor, WooCommerce architecture, and Core Web Vitals. When not writing code, they're probably trail running.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"squirrels-author-bio__social","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group squirrels-author-bio__social">
				<!-- wp:paragraph {"className":"squirrels-author-bio__social-link"} -->
				<p class="squirrels-author-bio__social-link"><a href="#">Twitter</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"squirrels-author-bio__social-link"} -->
				<p class="squirrels-author-bio__social-link"><a href="#">GitHub</a></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"squirrels-author-bio__social-link"} -->
				<p class="squirrels-author-bio__social-link"><a href="#">LinkedIn</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
