<?php
/**
 * Title: Office Locations
 * Slug: squirrels/business-locations
 * Categories: squirrels-business
 * Keywords: locations, offices, address, map, global, branches, headquarters
 * Description: Three-column office location cards with city, address, phone, and hours. Use on Contact pages for businesses with multiple offices or locations.
 */
?>

<!-- wp:group {"className":"squirrels-locations","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-locations">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"560px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="has-text-align-center">Our offices</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">Fully remote team with hubs in three time zones. Wherever you are, someone on our team shares your working hours.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"className":"squirrels-locations__grid"} -->
	<div class="wp-block-columns squirrels-locations__grid">

		<!-- wp:column {"className":"squirrels-location-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-location-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-location-card__flag"} -->
			<p class="squirrels-location-card__flag">🇺🇸</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"squirrels-location-card__city"} -->
			<h3 class="squirrels-location-card__city">New York</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-location-card__label"} -->
			<p class="squirrels-location-card__label">Headquarters</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"squirrels-location-card__details","layout":{"type":"flow"}} -->
			<div class="wp-block-group squirrels-location-card__details">
				<!-- wp:paragraph {"className":"squirrels-location-card__address"} -->
				<p class="squirrels-location-card__address">350 5th Avenue, Suite 4100<br>New York, NY 10118</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"squirrels-location-card__hours"} -->
				<p class="squirrels-location-card__hours">Mon–Fri · 9am–6pm EST</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-location-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-location-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-location-card__flag"} -->
			<p class="squirrels-location-card__flag">🇬🇧</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"squirrels-location-card__city"} -->
			<h3 class="squirrels-location-card__city">London</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-location-card__label"} -->
			<p class="squirrels-location-card__label">European hub</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"squirrels-location-card__details","layout":{"type":"flow"}} -->
			<div class="wp-block-group squirrels-location-card__details">
				<!-- wp:paragraph {"className":"squirrels-location-card__address"} -->
				<p class="squirrels-location-card__address">1 Canada Square<br>London E14 5AB, UK</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"squirrels-location-card__hours"} -->
				<p class="squirrels-location-card__hours">Mon–Fri · 9am–6pm GMT</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"className":"squirrels-location-card is-style-squirrels-card"} -->
		<div class="wp-block-column squirrels-location-card is-style-squirrels-card">
			<!-- wp:paragraph {"className":"squirrels-location-card__flag"} -->
			<p class="squirrels-location-card__flag">🇸🇬</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":3,"className":"squirrels-location-card__city"} -->
			<h3 class="squirrels-location-card__city">Singapore</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"className":"squirrels-location-card__label"} -->
			<p class="squirrels-location-card__label">Asia-Pacific hub</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"className":"squirrels-location-card__details","layout":{"type":"flow"}} -->
			<div class="wp-block-group squirrels-location-card__details">
				<!-- wp:paragraph {"className":"squirrels-location-card__address"} -->
				<p class="squirrels-location-card__address">1 Raffles Place<br>Singapore 048616</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"className":"squirrels-location-card__hours"} -->
				<p class="squirrels-location-card__hours">Mon–Fri · 9am–6pm SGT</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
