# Changelog — Squirrels

All notable changes to this project are documented in this file.
Format follows [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## [1.1.0] — 2026-07-01

### Added
- Block pattern library: 12 native Gutenberg block patterns, no page builder required.
- `squirrels` pattern category: Hero Centered, Hero Store, Three Feature Cards, CTA Banner, Testimonials, Trust Badges, Newsletter Signup.
- `squirrels-woocommerce` pattern category: Featured Categories, Sale Banner, Best Sellers, New Arrivals, Product Grid (plus Hero Store).
- `inc/block-patterns.php`: registers both pattern categories on `init`.
- `patterns/` directory: one PHP file per pattern with standard WordPress pattern headers.
- WooCommerce patterns use `Requires Plugins: woocommerce` — hidden automatically when WooCommerce is inactive.
- Pattern CSS added to `assets/css/main.css` with responsive overrides for all 12 patterns.
- Pattern documentation in README.md, readme.txt, and Treehouse reference.

### Changed
- `functions.php`: added `require_once` for `inc/block-patterns.php`.
- `README.md`: added "Reusable Page Sections" documentation section; updated directory structure; bumped version to 1.1.0.
- `readme.txt`: added Pattern Library description section, new FAQ entries, updated Changelog; bumped Stable tag to 1.1.0.

### Fixed
- `patterns/cta-banner.php`: corrected keywords (removed "signup", added "button").
- `patterns/newsletter-signup.php`: clarified description to mention platform connection requirement.

## [1.0.0] — 2026-06-29

### Added
- Initial release.
- Full WordPress theme foundation: index, single, page, archive, search, 404, comments, woocommerce templates.
- WooCommerce integration: `add_theme_support('woocommerce')`, product gallery zoom/lightbox/slider, HPOS compatibility declaration.
- Live Customizer: primary color, accent color, body font size, sidebar position (left/right/none), footer copyright text.
- Customizer CSS output via inline `<style>` using CSS custom properties.
- Demo Import system with three demo packs: Classic Store, Minimal Blog, Creative Portfolio.
- 4 registered widget areas: Main Sidebar, Footer 1–3.
- 2 registered nav menus: Primary, Footer.
- Responsive layout with CSS Grid/Flexbox and mobile menu toggle.
- Accessibility: skip link, ARIA labels, screen-reader text throughout.
- Block editor: `wp-block-styles`, `align-wide`, `responsive-embeds` support.
- Child theme: `squirrels-child` with correct `Template: squirrels` header.
