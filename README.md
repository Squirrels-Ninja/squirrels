# Squirrels

A clean, fast WordPress + WooCommerce theme built for modern online stores.

**Version:** 1.1.0  
**Requires WordPress:** 6.0+  
**Requires PHP:** 7.4+  
**License:** GPL v2 or later

## Features

- Full WooCommerce integration (product gallery zoom, lightbox, slider)
- Live Customizer with color, typography, and layout controls
- One-click Demo Import (Classic Store, Minimal Blog, Creative Portfolio)
- Native block pattern library — 12 reusable page sections
- 4 widget areas: Main Sidebar, Footer columns 1–3
- 2 navigation menus: Primary, Footer
- Responsive layout with mobile hamburger menu
- CSS custom properties for easy theming
- Accessibility-ready (skip link, ARIA labels, screen-reader text)
- High-Performance Order Storage (HPOS) compatible
- Block editor ready (wide/full alignment, wp-block-styles)

## Installation

1. Upload the `squirrels` folder to `/wp-content/themes/`
2. Activate via **Appearance → Themes**
3. Optional: import a demo via **Appearance → Demo Import**
4. Customise colours and layout via **Appearance → Customize**

## Child Theme

Use `squirrels-child` for customisations that survive theme updates.

## Reusable Page Sections

Squirrels ships with a native **block pattern library** — 12 pre-built page sections you can insert, customise, and rearrange in the WordPress block editor. No page builder required.

### What are block patterns?

Block patterns are pre-built arrangements of standard WordPress blocks. They appear in the block editor's pattern inserter and insert as fully editable content — you can change any text, button label, image, or link after inserting.

### How to insert a pattern

1. Open any page in the block editor
2. Click **+** (Add Block) — or press `/` in an empty paragraph
3. Switch to the **Patterns** tab
4. Open the **Squirrels** or **Squirrels WooCommerce** category
5. Click a pattern to preview it, then click again to insert

### How to customise a pattern

After inserting a pattern, click any element to select it:

- **Text:** click directly and type to edit headings, paragraphs, and button labels
- **Buttons:** click the button to change the label; click the link icon to change the URL
- **Images:** click an image and use the toolbar to replace it from the Media Library
- **Layout:** drag blocks to reorder sections; use the List View (View → List View) to see the block structure

### Building a full page from patterns

A typical store homepage might combine:

1. **Hero Store** — opening hero
2. **Featured Categories** — browsable category grid
3. **Best Sellers** or **New Arrivals** — live product grid
4. **Trust Badges** — checkout confidence row
5. **Testimonials** — social proof
6. **Newsletter Signup** — email list growth
7. **CTA Banner** — closing call to action

Insert each pattern, then scroll and adjust spacing, colors, and copy to fit your brand.

### Pattern library

#### Squirrels (general)

| Pattern | Slug | Description |
|---------|------|-------------|
| Hero Centered | `squirrels/hero-centered` | Full-width centered hero with heading, subtext, and CTA button |
| Hero Store | `squirrels/hero-store` | Split hero with eyebrow text, two buttons, and a sale badge |
| Three Feature Cards | `squirrels/features-three` | Three-column feature grid with icon, heading, and description |
| CTA Banner | `squirrels/cta-banner` | Full-width orange call-to-action banner with heading and button |
| Testimonials | `squirrels/testimonials` | Two-column customer quote layout with name and role |
| Trust Badges | `squirrels/trust-badges` | Four trust signals: secure checkout, free shipping, returns, support |
| Newsletter Signup | `squirrels/newsletter-signup` | Centered email signup with accessible inline form |

#### Squirrels WooCommerce (requires WooCommerce)

These patterns are hidden automatically when WooCommerce is not active.

| Pattern | Slug | Description |
|---------|------|-------------|
| Hero Store | `squirrels/hero-store` | Also appears in the WooCommerce category |
| Featured Categories | `squirrels/featured-categories` | Three-column category showcase with image and browse link |
| Sale Banner | `squirrels/sale-banner` | High-contrast horizontal sale announcement with CTA |
| Best Sellers | `squirrels/best-sellers` | Three products ordered by popularity (live query) |
| New Arrivals | `squirrels/new-arrivals` | Four products ordered by date (live query) |
| Product Grid | `squirrels/product-grid` | Three featured products with a link to the full shop |

### Newsletter Signup — platform connection

The Newsletter Signup pattern ships with a placeholder form (`action="#"`). To make it functional, replace the `<form>` element with the embed code from your email platform:

- **Mailchimp** — use the Mailchimp for WordPress plugin or embed the Mailchimp HTML form
- **MailPoet** — use the `[mailpoet_form id="1"]` shortcode inside a Shortcode block
- **Klaviyo** — use the Klaviyo Forms plugin or paste the Klaviyo embed script
- **FluentCRM** — use the FluentForm plugin connected to FluentCRM
- **ConvertKit** — use the ConvertKit for WordPress plugin or paste a ConvertKit form embed

### WooCommerce patterns — behaviour when WooCommerce is inactive

WooCommerce patterns use the `Requires Plugins: woocommerce` header. WordPress 6.5+ reads this header and hides the pattern from the inserter when the plugin is not active. The theme itself produces no errors or warnings when WooCommerce is not installed.

## Directory Structure

```
squirrels/
├── assets/css/          Main stylesheet, brand tokens, demo-import admin CSS
├── assets/js/           Main JS, demo-import admin JS
├── inc/
│   ├── customizer/      Customizer settings and CSS output
│   ├── demo-import/     Admin demo importer + 3 demo JSON packs
│   └── block-patterns.php   Pattern category registration
├── patterns/            Native block pattern PHP files (12 patterns)
├── template-parts/      Reusable content partials
├── languages/           Translation-ready (.pot included on request)
└── woocommerce.php      WooCommerce page wrapper
```

## Changelog

See CHANGELOG.md.
