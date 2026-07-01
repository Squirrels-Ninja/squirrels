=== Squirrels ===
Contributors: (your-wordpress-org-username)
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Tags: e-commerce, blog, custom-colors, custom-logo, custom-menu, featured-images, footer-widgets, full-width-template, one-column, right-sidebar, two-columns, translation-ready, wide-blocks, threaded-comments

A clean, fast WordPress + WooCommerce theme with one-click starter sites and a live Customizer. No page builder required.

== Description ==

Squirrels is a clean, fast WordPress + WooCommerce theme built for modern online stores. It ships with three ready-to-import starter site packs, a live Customizer with real-time colour and layout controls, full WooCommerce integration, and a packaged child theme — everything you need to launch a professional store without a page builder.

**Features**

* Full WordPress template hierarchy — index, single, page, archive, search, 404, comments, WooCommerce
* WooCommerce integration — product gallery zoom, lightbox, and slider; HPOS compatibility; cart fragment AJAX; sale badge and button styling
* Theme Customizer — primary colour, accent/sale colour, body font size, sidebar position, footer copyright text; all settings output via CSS custom properties with live preview
* One-click Demo Import — three starter site packs: Classic Store, Minimal Blog, Creative Portfolio
* Responsive layout — CSS Flexbox and Grid, mobile hamburger menu, adaptive sidebar and footer columns
* Block editor ready — wide and full alignment, wp-block-styles compatibility, responsive embeds
* Native block pattern library — 12 reusable, fully editable page sections; no page builder required
* Accessibility — skip link, ARIA labels, screen-reader text throughout
* 2 navigation menus: Primary, Footer
* 4 widget areas: Main Sidebar, Footer 1, Footer 2, Footer 3
* Child theme included — `squirrels-child-1.0.0.zip` packaged separately
* ABSPATH guards in all PHP files
* Translation-ready — all strings use the `squirrels` text domain
* Clean code — `squirrels_` function prefix, no framework dependencies, no Bootstrap

**WooCommerce Compatibility**

Squirrels declares `add_theme_support( 'woocommerce' )` and registers product gallery zoom, lightbox, and slider support. It declares High-Performance Order Storage (HPOS) compatibility for WooCommerce 7.1+. No WooCommerce core template files are overridden, which means WooCommerce template updates do not break the theme.

**Pattern Library**

Squirrels includes 12 native Gutenberg block patterns — pre-built page sections that insert as fully editable content directly in the block editor. No page builder required.

Patterns are organised into two categories:

*Squirrels* — General-purpose sections usable on any page:

* Hero Centered — full-width centered hero with heading, subtext, and CTA button
* Hero Store — split hero with eyebrow text, two call-to-action buttons, and a sale badge
* Three Feature Cards — three-column icon + heading + description grid
* CTA Banner — full-width orange call-to-action banner with heading and button
* Testimonials — two-column customer quote layout with name and role
* Trust Badges — four-column trust signal row: secure checkout, free shipping, easy returns, support
* Newsletter Signup — accessible inline email signup form with privacy note

*Squirrels WooCommerce* — Live commerce sections (hidden when WooCommerce is not active):

* Hero Store — also appears in this category
* Featured Categories — three-column category showcase with image and browse link
* Sale Banner — high-contrast horizontal sale announcement with discount text and CTA
* Best Sellers — three products ordered by popularity (live WooCommerce query)
* New Arrivals — four newest products ordered by date (live WooCommerce query)
* Product Grid — three featured products with a link to the full shop

WooCommerce patterns use the `Requires Plugins: woocommerce` header and are suppressed automatically in the inserter when WooCommerce is not active. The theme produces no errors without WooCommerce.

The Newsletter Signup pattern ships with a placeholder form action. Connect it to your preferred email platform: Mailchimp, MailPoet, Klaviyo, FluentCRM, or ConvertKit.

All patterns are responsive and use the Squirrels design token system for consistent spacing, colors, and typography. WCAG AA color contrast is maintained throughout.

**Starter Sites**

Three demo packs are included and importable from Appearance → Demo Import:

* **Classic Store** — WooCommerce-focused homepage with shop, about, and contact pages
* **Minimal Blog** — Typography-first blog with sidebar and category archive
* **Creative Portfolio** — Full-width layout with no sidebar, designed for creatives who also sell

Each pack imports sample pages and Customizer settings. Existing content is never deleted.

== Installation ==

1. In your WordPress admin, go to **Appearance → Themes**.
2. Click **Add New**, then **Upload Theme**.
3. Upload `squirrels-1.0.0.zip` and click **Install Now**.
4. Click **Activate**.

**Optional: Child Theme**

If you plan to customise the theme (custom CSS, template overrides, or additional PHP), use the child theme so your changes survive parent theme updates.

1. Upload `squirrels-child-1.0.0.zip` using the same upload steps.
2. Activate **Squirrels Child**.

**Optional: WooCommerce**

Squirrels works without WooCommerce. To add a shop:

1. Go to **Plugins → Add New**, search for "WooCommerce", and activate it.
2. Complete the WooCommerce setup wizard.

Squirrels detects WooCommerce automatically and applies shop styling.

**Optional: Import a Starter Site**

1. Go to **Appearance → Demo Import**.
2. Choose a demo pack and click **Import**.
3. Go to **Settings → Reading** and set the front page to the imported Home page.

== Frequently Asked Questions ==

= Does this theme require a page builder? =

No. Squirrels works with the native WordPress block editor. It ships with 12 block patterns — pre-built page sections you can insert and customise from the Patterns panel. Starter site demos import as real block content with no page builder dependency.

= What are block patterns and where do I find them? =

Block patterns are pre-built arrangements of blocks that insert as fully editable content. In the block editor, click **+** → **Patterns** → **Squirrels** or **Squirrels WooCommerce**. Click any pattern to preview it, then insert it into your page.

= Do I need WooCommerce to use this theme? =

No. Squirrels works as a standard WordPress theme without WooCommerce. Shop functionality activates automatically when WooCommerce is present.

= Will my store break when I update the theme? =

Updates follow semantic versioning. Patch versions (1.0.x) are safe to apply without review. If you use the child theme, your template overrides are never modified by parent theme updates.

= Is this compatible with my current WordPress version? =

Squirrels requires WordPress 6.0 or later and PHP 7.4 or later. It is tested up to the current WordPress release.

= Can I use this on a client's site? =

Yes. Squirrels is GPL v2 or later. You may use it on unlimited sites, including client projects.

= Where do I get support? =

Support is available via the GitHub issue tracker. Please search existing issues before opening a new one.

= Does the Demo Import delete existing content? =

No. The demo importer only creates new pages and applies Customizer settings. It skips pages that already exist (idempotent import) and never deletes posts, products, or other existing content.

= How do I change the primary colour? =

Go to **Appearance → Customize → Store Colors → Primary Color**. The change previews in real time and applies to navigation, links, buttons, and product prices.

= Is the theme translation-ready? =

Yes. All translatable strings use the `squirrels` text domain and are wrapped in the appropriate WordPress i18n functions.

== Screenshots ==

1. Classic Store starter site — homepage (desktop)
2. Shop archive page — product grid with sidebar
3. Single product page — gallery, price, Add to Cart
4. Theme Customizer — colour and layout controls
5. Demo Import admin page — three starter site packs
6. Homepage on mobile — responsive layout with hamburger menu

== Changelog ==

= 1.1.0 — 2026-07-01 =
* Added block pattern library: 12 native Gutenberg patterns across two categories (Squirrels, Squirrels WooCommerce).
* WooCommerce patterns suppressed automatically when WooCommerce is inactive via Requires Plugins header.
* Updated documentation: README.md, readme.txt, Treehouse pattern reference.
* Editor polish: pattern titles, descriptions, and keywords reviewed and corrected.

= 1.0.0 — 2026-06-29 =
* Initial release.
* Full WordPress template hierarchy.
* WooCommerce integration with HPOS compatibility.
* Theme Customizer: primary colour, accent colour, body font size, sidebar position, footer text.
* Demo Import system with three starter site packs: Classic Store, Minimal Blog, Creative Portfolio.
* 4 widget areas, 2 nav menus.
* Responsive layout, block editor support, accessibility improvements.
* Child theme packaged separately.

== Upgrade Notice ==

= 1.1.0 =
Adds the block pattern library. No breaking changes. Safe to update.

= 1.0.0 =
Initial release. No upgrade path from a previous version.
