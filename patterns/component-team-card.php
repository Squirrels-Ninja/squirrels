<?php
/**
 * Title: Team Card
 * Slug: squirrels/component-team-card
 * Categories: squirrels-components
 * Keywords: team, person, member, bio, avatar, staff, about
 * Description: A single team member card with avatar image, name, role, and short bio. Combine three or four of these in a Columns block for a full team section.
 */
?>

<!-- wp:group {"className":"squirrels-team-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group squirrels-team-card is-style-squirrels-card">

	<!-- wp:image {"width":"96px","height":"96px","scale":"cover","sizeSlug":"thumbnail","className":"is-style-squirrels-avatar squirrels-team-card__avatar","align":"center"} -->
	<figure class="wp-block-image size-thumbnail is-resized has-custom-border is-style-squirrels-avatar squirrels-team-card__avatar aligncenter"><img src="https://picsum.photos/seed/team1/200/200" alt="Team member photo" style="aspect-ratio:1;object-fit:cover;width:96px;height:96px" /></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"textAlign":"center","level":4,"className":"squirrels-team-card__name"} -->
	<h4 class="has-text-align-center squirrels-team-card__name">Alex Rivera</h4>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__role"} -->
	<p class="has-text-align-center squirrels-team-card__role">Lead Designer</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","className":"squirrels-team-card__bio"} -->
	<p class="has-text-align-center squirrels-team-card__bio">Alex has spent a decade making complex products feel simple. They believe great design is invisible.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
