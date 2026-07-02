<?php
/**
 * Title: Contact Section
 * Slug: squirrels/business-contact
 * Categories: squirrels-business
 * Keywords: contact, form, get in touch, email, phone, address, reach us
 * Description: Two-column contact section with contact details on the left (email, phone, hours) and a call-to-action on the right. Use on Contact pages as the main contact block.
 */
?>

<!-- wp:group {"className":"squirrels-contact","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull squirrels-contact">

	<!-- wp:columns {"className":"squirrels-contact__grid"} -->
	<div class="wp-block-columns squirrels-contact__grid">

		<!-- wp:column {"width":"45%","className":"squirrels-contact__details-col"} -->
		<div class="wp-block-column squirrels-contact__details-col" style="flex-basis:45%">

			<!-- wp:paragraph {"className":"squirrels-contact__eyebrow"} -->
			<p class="squirrels-contact__eyebrow">Get in touch</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"className":"squirrels-contact__heading"} -->
			<h2 class="squirrels-contact__heading">We'd love to hear from you</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"squirrels-contact__intro"} -->
			<p class="squirrels-contact__intro">Whether you have a pre-sales question, a support issue, or just want to say hello — the team is here and happy to help.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"className":"squirrels-contact__info-list","layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group squirrels-contact__info-list">

				<!-- wp:group {"className":"squirrels-contact__info-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group squirrels-contact__info-item">
					<!-- wp:paragraph {"className":"squirrels-contact__info-icon"} -->
					<p class="squirrels-contact__info-icon">✉️</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flow"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"squirrels-contact__info-label"} -->
						<p class="squirrels-contact__info-label"><strong>Email</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"squirrels-contact__info-value"} -->
						<p class="squirrels-contact__info-value"><a href="mailto:hello@squirrels.ninja">hello@squirrels.ninja</a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"squirrels-contact__info-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group squirrels-contact__info-item">
					<!-- wp:paragraph {"className":"squirrels-contact__info-icon"} -->
					<p class="squirrels-contact__info-icon">🕐</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flow"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"squirrels-contact__info-label"} -->
						<p class="squirrels-contact__info-label"><strong>Support hours</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"squirrels-contact__info-value"} -->
						<p class="squirrels-contact__info-value">Monday–Friday, 9am–6pm EST<br>Typical reply time: under 4 hours</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"squirrels-contact__info-item","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group squirrels-contact__info-item">
					<!-- wp:paragraph {"className":"squirrels-contact__info-icon"} -->
					<p class="squirrels-contact__info-icon">📚</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"layout":{"type":"flow"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"className":"squirrels-contact__info-label"} -->
						<p class="squirrels-contact__info-label"><strong>Documentation</strong></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"className":"squirrels-contact__info-value"} -->
						<p class="squirrels-contact__info-value"><a href="#">Browse the docs</a> — most questions answered in under 2 minutes.</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%","className":"squirrels-contact__form-col"} -->
		<div class="wp-block-column squirrels-contact__form-col" style="flex-basis:55%">

			<!-- wp:group {"className":"squirrels-contact__form-wrapper is-style-squirrels-card","layout":{"type":"flow"}} -->
			<div class="wp-block-group squirrels-contact__form-wrapper is-style-squirrels-card">

				<!-- wp:heading {"level":3,"className":"squirrels-contact__form-heading"} -->
				<h3 class="squirrels-contact__form-heading">Send us a message</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"squirrels-contact__form-note"} -->
				<p class="squirrels-contact__form-note">Add your contact form here. Compatible with WPForms, Gravity Forms, Fluent Forms, and any shortcode-based form plugin.</p>
				<!-- /wp:paragraph -->

				<!-- wp:shortcode -->
				<p>[contact-form-7 id="1" title="Contact form 1"]</p>
				<!-- /wp:shortcode -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
