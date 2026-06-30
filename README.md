# Squirrels

A clean, fast WordPress + WooCommerce theme built for modern online stores.

**Version:** 1.0.0
**Requires WordPress:** 6.0+
**Requires PHP:** 7.4+
**License:** GPL v2 or later

## Features

- Full WooCommerce integration (product gallery zoom, lightbox, slider)
- Live Customizer with color, typography, and layout controls
- One-click Demo Import (Classic Store, Minimal Blog, Creative Portfolio)
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

## Directory Structure

```
squirrels/
├── assets/css/          Main stylesheet, demo-import admin CSS
├── assets/js/           Main JS, demo-import admin JS
├── inc/customizer/      Customizer settings and CSS output
├── inc/demo-import/     Admin demo importer + 3 demo JSON packs
├── template-parts/      Reusable content partials
├── languages/           Translation-ready (.pot included on request)
└── woocommerce.php      WooCommerce page wrapper
```

## Changelog

See CHANGELOG.md.
