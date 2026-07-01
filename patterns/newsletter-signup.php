<?php
/**
 * Title: Newsletter Signup
 * Slug: squirrels/newsletter-signup
 * Categories: squirrels
 * Keywords: newsletter, email, signup, subscribe, list, mailing
 * Description: Centered email signup section with heading, subtext, and an inline form. Replace the form action with your email platform shortcode or embed.
 */
?>

<!-- wp:group {"align":"full","className":"squirrels-pattern squirrels-newsletter","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-pattern squirrels-newsletter">

	<!-- wp:heading {"textAlign":"center","level":2} -->
	<h2 class="has-text-align-center">Join the list</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">New arrivals, exclusive offers, and a peek behind the scenes — straight to your inbox. Unsubscribe any time.</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<form class="squirrels-newsletter__form" action="#" method="post" aria-label="Newsletter signup">
		<label for="squirrels-email" class="squirrels-newsletter__label">Email address</label>
		<div class="squirrels-newsletter__row">
			<input
				type="email"
				id="squirrels-email"
				name="email"
				class="squirrels-newsletter__input"
				placeholder="you@example.com"
				required
				autocomplete="email"
			/>
			<button type="submit" class="squirrels-newsletter__submit">Subscribe</button>
		</div>
		<p class="squirrels-newsletter__privacy">We respect your privacy. No spam, ever.</p>
	</form>
	<!-- /wp:html -->

</div>
<!-- /wp:group -->
