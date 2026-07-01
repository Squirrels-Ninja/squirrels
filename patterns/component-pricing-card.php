<?php
/**
 * Title: Pricing Card
 * Slug: squirrels/component-pricing-card
 * Categories: squirrels-components
 * Keywords: pricing, plan, subscription, card, cost, tier
 * Description: A single pricing tier card with plan name, price, feature list, and CTA button. Combine three of these in a Columns block for a full pricing table.
 */
?>

<!-- wp:group {"className":"squirrels-pricing-card is-style-squirrels-card","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group squirrels-pricing-card is-style-squirrels-card">

	<!-- wp:paragraph {"className":"squirrels-pricing-card__badge"} -->
	<p class="squirrels-pricing-card__badge">Most popular</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"level":3,"className":"squirrels-pricing-card__name"} -->
	<h3 class="squirrels-pricing-card__name">Pro</h3>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"squirrels-pricing-card__price","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"baseline"}} -->
	<div class="wp-block-group squirrels-pricing-card__price">
		<!-- wp:heading {"level":2,"className":"squirrels-pricing-card__amount"} -->
		<h2 class="squirrels-pricing-card__amount">$49</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"className":"squirrels-pricing-card__period"} -->
		<p class="squirrels-pricing-card__period">/ month</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"squirrels-pricing-card__desc"} -->
	<p class="squirrels-pricing-card__desc">Everything in Starter, plus advanced features for growing stores.</p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-squirrels-narrow"} -->
	<hr class="wp-block-separator is-style-squirrels-narrow" />
	<!-- /wp:separator -->

	<!-- wp:list {"className":"squirrels-pricing-card__features is-style-squirrels-icon-list"} -->
	<ul class="squirrels-pricing-card__features is-style-squirrels-icon-list">
		<!-- wp:list-item -->
		<li>Unlimited products</li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li>Advanced WooCommerce blocks</li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li>Priority support</li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li>Pattern variations (light / dark)</li>
		<!-- /wp:list-item -->
		<!-- wp:list-item -->
		<li>Workshop Pro plugin included</li>
		<!-- /wp:list-item -->
	</ul>
	<!-- /wp:list -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"width":100} -->
		<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#">Get started</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</div>
<!-- /wp:group -->
