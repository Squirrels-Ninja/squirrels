# Squirrels — Free vs Pro Feature Split

**Last updated:** 2026-06-30
**Free theme version:** 1.0.0
**Pro plugin:** In development (no release date set)

---

## Guiding Principles

1. **The free theme must be complete.** WordPress.org guidelines prohibit "feature-crippled" free themes that require a paid upgrade to function as advertised. Everything on the free theme's feature list must work fully with no Pro plugin installed.

2. **Pro adds capability, not access.** Pro unlocks tools that go beyond the scope of a theme — advanced merchandising, conversion optimisation, header/footer building, premium design packs. It does not gate core WooCommerce or Customizer functionality.

3. **Pro is a companion plugin, not a theme.** The Pro plugin installs alongside Squirrels Free. It is not a separate theme. This means Pro users get every free theme update automatically, and Pro features are never orphaned by a theme switch.

4. **The split must be defensible.** If a feature is "make the store work," it belongs in Free. If a feature is "make the store convert better or look more distinctive," it belongs in Pro.

---

## Free Theme — Squirrels (GPL)

### Theme Foundation
- Full WordPress template hierarchy (index, single, page, archive, search, 404, comments)
- WooCommerce template wrapper (`woocommerce.php`)
- 5 template parts (content, content-single, content-page, content-search, content-none)
- Responsive layout (Flexbox/Grid, mobile menu, adaptive sidebar and footer columns)
- CSS custom properties system (`--squirrels-primary`, `--squirrels-accent`, etc.)
- Accessibility: skip link, ARIA labels, screen-reader text, focus states
- Block editor: wide/full alignment, wp-block-styles, responsive embeds
- 2 navigation menus: Primary, Footer
- 4 widget areas: Main Sidebar, Footer 1–3
- ABSPATH guards in all PHP files
- GPL v2 or later license
- Child theme package included

### WooCommerce
- `add_theme_support( 'woocommerce' )` with product gallery zoom, lightbox, and slider
- HPOS (High-Performance Order Storage) compatibility
- Shop, product, cart, checkout, and My Account pages styled
- Sale badge styling (accent colour)
- Add to Cart button styling (primary colour)
- Product price colour from Customizer primary colour
- Cart fragment AJAX support
- No deprecated WooCommerce template overrides

### Theme Customizer
- Primary colour (hex, live preview via CSS custom property)
- Accent / sale colour (hex, live preview)
- Body font size (12–24px, live preview)
- Sidebar position (left, right, none — global setting)
- Footer copyright text (rich text, live preview)
- All settings stored as WordPress theme mods
- CSS output via `wp_head` inline `<style>` block

### Starter Sites (Demo Importer)
- Admin page at Appearance → Demo Import
- Three included demo packs:
  - Classic Store (WooCommerce-focused homepage, shop, about, contact)
  - Minimal Blog (typography-first, sidebar layout)
  - Creative Portfolio (full-width, no sidebar)
- Each pack imports: sample pages, theme mod settings
- Idempotent import (re-running skips existing pages)
- Nonce verification, capability check, path traversal guard on AJAX handler
- Import does not delete existing content

### Developer Features
- Clean function prefix: `squirrels_`
- Text domain: `squirrels`
- Asset handles: `squirrels-main` (CSS + JS)
- Constants: `SQUIRRELS_VERSION`, `SQUIRRELS_DIR`, `SQUIRRELS_URI`
- All hooks follow WordPress coding standards
- Customizer file loaded inside `add_action('customize_register', fn, 0)` (WP_Customize_Control load-order fix)
- Demo importer admin-only loaded via `is_admin()` gate
- Translation-ready (`.pot` file on request; all strings use `squirrels` domain)

---

## Pro Plugin — Squirrels Pro (Commercial)

*Planned. No release date set. Details subject to change.*

### Advanced WooCommerce Tools
- Product quick view (modal overlay from archive page)
- Wishlist (add to wishlist button on product cards and product pages)
- Product compare (side-by-side spec table)
- Advanced product filters (price range, attribute, category — sidebar or horizontal bar)
- Sticky Add to Cart bar (appears on scroll on single product pages)
- Back-in-stock notification form
- Recently viewed products widget
- Cross-sell and upsell display layout options

### Conversion Tools
- Cart abandonment banner (cookie-based, dismissible)
- Floating cart (slide-out drawer replacing redirect-to-cart)
- Countdown timer for sales (integrates with WooCommerce sale end date)
- Trust badges section (customisable icon + text blocks above Add to Cart)
- Free shipping progress bar

### Header & Footer Builder
- Visual drag-and-drop header layouts (logo, menu, search, cart icon, account)
- Multiple header styles: standard, centred, split, minimal
- Sticky header with scroll shrink option
- Transparent header for full-width hero pages
- Visual footer builder (widget columns, copyright, menu, social icons)

### Mega Menu
- Dropdown panels with columns, images, and custom HTML
- Featured product or category image in menu dropdown
- Icon support per menu item

### Premium Starter Sites
- Additional demo packs beyond the 3 included in Free
- Full-page demos (with post content, product data, and widgets)
- Niche-specific packs (e.g., fashion, electronics, food, services)
- Import includes: posts, products, menus, widgets, and Customizer settings

### Advanced Typography
- Google Fonts integration (selector in Customizer)
- Heading font separate from body font
- Line height and letter spacing controls per element group
- Font preload hint generation

### Advanced Colour & Design
- Per-page colour scheme override
- Gradient support for hero sections
- Dark mode toggle (respects OS preference + manual override)
- Additional Customizer sections: button radius, card shadow, border width

### Performance Tools *(Pro only — Free theme uses native WP defaults)*
- Critical CSS generation (above-the-fold CSS extracted and inlined)
- Deferred non-critical CSS loading
- Local Google Fonts hosting (GDPR-friendly)
- Asset preloading hints

### White-Label & Client Tools
- Remove "Squirrels" branding from Customizer and admin
- Custom "Powered by" footer text without editing theme files
- Admin colour scheme override matching client brand
- Agency license: install on unlimited client sites

### Pro Support
- Private support channel (email or dedicated forum)
- Guaranteed 48-hour first response on business days
- Priority bug fixes
- Access to beta releases

---

## Feature Comparison Table

| Feature | Free | Pro |
|---------|------|-----|
| Full template hierarchy | ✅ | ✅ |
| WooCommerce support | ✅ | ✅ |
| Product gallery (zoom/lightbox/slider) | ✅ | ✅ |
| HPOS compatibility | ✅ | ✅ |
| Theme Customizer (colour/layout/font size) | ✅ | ✅ |
| 3 starter site packs | ✅ | ✅ |
| Child theme | ✅ | ✅ |
| Responsive layout | ✅ | ✅ |
| Block editor support | ✅ | ✅ |
| Quick view | ❌ | ✅ |
| Wishlist | ❌ | ✅ |
| Product compare | ❌ | ✅ |
| Product filters | ❌ | ✅ |
| Floating cart drawer | ❌ | ✅ |
| Sticky Add to Cart bar | ❌ | ✅ |
| Trust badges | ❌ | ✅ |
| Mega menu | ❌ | ✅ |
| Header/footer builder | ❌ | ✅ |
| Premium starter sites | ❌ | ✅ |
| Google Fonts selector | ❌ | ✅ |
| Heading / body font separation | ❌ | ✅ |
| Dark mode | ❌ | ✅ |
| Critical CSS | ❌ | ✅ |
| Local Google Fonts | ❌ | ✅ |
| White-label / agency tools | ❌ | ✅ |
| Community support | ✅ | ✅ |
| Priority support | ❌ | ✅ |

---

## WordPress.org Compliance Notes

- Free theme does not check for Pro plugin activation to unlock any listed Free feature.
- Free theme does not display upsell notices inside the WordPress admin beyond a single unobtrusive "Pro coming soon" link on the Demo Import page (acceptable under guidelines).
- Pro plugin will be distributed outside WordPress.org (commercial license) and will never be submitted to the plugin repository.
- Free theme will be submitted to the WordPress.org theme repository (subject to Theme Review Team approval).
