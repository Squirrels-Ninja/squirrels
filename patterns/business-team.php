<?php
/**
 * Title: Team Section
 * Slug: squirrels/business-team
 * Categories: squirrels-business
 * Keywords: team, people, staff, members, founders, employees, about
 * Description: Four-up team grid with heading, sub-text, and four team member cards (avatar, name, role, bio). Built from the Team Card component. Use on About and Team pages.
 */
?>

<!-- wp:group {"className":"squirrels-team-section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-team-section">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"560px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="has-text-align-center">Meet the team</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">A small team with deep expertise in WooCommerce, performance engineering, and product design.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"squirrels-team-section__grid"} -->
	<div class="wp-block-columns squirrels-team-section__grid">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"squirrels-team-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group squirrels-team-card is-style-squirrels-card">
				<!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"thumbnail","className":"is-style-squirrels-avatar squirrels-team-card__avatar","align":"center"} -->
				<figure class="wp-block-image size-thumbnail is-resized has-custom-border is-style-squirrels-avatar squirrels-team-card__avatar aligncenter"><img src="https://picsum.photos/seed/team1/200/200" alt="Alex Rivera" style="aspect-ratio:1;object-fit:cover;width:96px;height:96px" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":4,"className":"squirrels-team-card__name"} -->
				<h4 class="has-text-align-center squirrels-team-card__name">Alex Rivera</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__role"} -->
				<p class="has-text-align-center squirrels-team-card__role">Co-Founder &amp; CEO</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__bio"} -->
				<p class="has-text-align-center squirrels-team-card__bio">Former agency lead with 12 years building WooCommerce stores. Started Squirrels to solve the performance problem once and for all.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"squirrels-team-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group squirrels-team-card is-style-squirrels-card">
				<!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"thumbnail","className":"is-style-squirrels-avatar squirrels-team-card__avatar","align":"center"} -->
				<figure class="wp-block-image size-thumbnail is-resized has-custom-border is-style-squirrels-avatar squirrels-team-card__avatar aligncenter"><img src="https://picsum.photos/seed/team2/200/200" alt="Jordan Kim" style="aspect-ratio:1;object-fit:cover;width:96px;height:96px" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":4,"className":"squirrels-team-card__name"} -->
				<h4 class="has-text-align-center squirrels-team-card__name">Jordan Kim</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__role"} -->
				<p class="has-text-align-center squirrels-team-card__role">Lead Engineer</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__bio"} -->
				<p class="has-text-align-center squirrels-team-card__bio">Core WordPress contributor. Obsessed with INP scores, clean markup, and making the block editor do things people say can't be done.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"squirrels-team-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group squirrels-team-card is-style-squirrels-card">
				<!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"thumbnail","className":"is-style-squirrels-avatar squirrels-team-card__avatar","align":"center"} -->
				<figure class="wp-block-image size-thumbnail is-resized has-custom-border is-style-squirrels-avatar squirrels-team-card__avatar aligncenter"><img src="https://picsum.photos/seed/team3/200/200" alt="Sam Okafor" style="aspect-ratio:1;object-fit:cover;width:96px;height:96px" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":4,"className":"squirrels-team-card__name"} -->
				<h4 class="has-text-align-center squirrels-team-card__name">Sam Okafor</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__role"} -->
				<p class="has-text-align-center squirrels-team-card__role">Head of Design</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__bio"} -->
				<p class="has-text-align-center squirrels-team-card__bio">Designed the token system and every pattern in the library. Believes that constraints are what make great design — freedom within a system.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"squirrels-team-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group squirrels-team-card is-style-squirrels-card">
				<!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"thumbnail","className":"is-style-squirrels-avatar squirrels-team-card__avatar","align":"center"} -->
				<figure class="wp-block-image size-thumbnail is-resized has-custom-border is-style-squirrels-avatar squirrels-team-card__avatar aligncenter"><img src="https://picsum.photos/seed/team4/200/200" alt="Morgan Patel" style="aspect-ratio:1;object-fit:cover;width:96px;height:96px" /></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":4,"className":"squirrels-team-card__name"} -->
				<h4 class="has-text-align-center squirrels-team-card__name">Morgan Patel</h4>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__role"} -->
				<p class="has-text-align-center squirrels-team-card__role">Customer Success</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__bio"} -->
				<p class="has-text-align-center squirrels-team-card__bio">Has personally helped over 3,000 store owners set up Squirrels. If there's a use case, Morgan has seen it and probably written the runbook.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
