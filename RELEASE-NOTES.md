# Squirrels v1.0.0 — Release Notes

**Release date:** 2026-06-30
**Theme slug:** `squirrels`
**Text domain:** `squirrels`
**Function prefix:** `squirrels_`
**Packages:**
- `squirrels-1.0.0.zip` — parent theme (611 KB, includes brand assets)
- `squirrels-child-1.0.0.zip` — child theme (1.4 KB)

**SHA-256 checksums:**
- `555410d134f010068a9751057b03fab47cddd7d099f49f9d73b65391af000984  squirrels-1.0.0.zip`
- `b5b7143062457f847bf98d1870e17b52f69578838292dfe4bcb9b724ff84cfe8  squirrels-child-1.0.0.zip`

## What's included

This is the initial stable release of Squirrels, a custom WordPress + WooCommerce theme built from scratch. It is not derived from any third-party theme.

### Theme foundation
Standard WordPress template hierarchy with full template-parts coverage. All templates pass PHP syntax validation.

### WooCommerce
Native WooCommerce wrapper (`woocommerce.php`), product gallery features, HPOS compatibility, and cart fragment support.

### Customizer
Settings for primary color, accent/sale color, body font size, sidebar position, and footer text. All controls output CSS custom properties via `wp_head`, enabling real-time preview. Classes extending `WP_Customize_Control` are loaded inside `add_action('customize_register', fn, 0)` to prevent the `Class not found` fatal error.

### Demo Importer
One-click import of three demo content packs from **Appearance → Demo Import**. Each pack imports sample pages and theme mod settings. Import is idempotent (re-running skips already-imported pages).

### Child theme
`squirrels-child` is packaged separately. It enqueues the parent stylesheet correctly with `squirrels-main` as a dependency.

## Install instructions

1. Upload `squirrels-1.0.0.zip` via **Appearance → Themes → Add New → Upload Theme**.
2. Activate **Squirrels**.
3. Optionally upload and activate `squirrels-child-1.0.0.zip` if you intend to customise the theme.
4. Go to **Appearance → Demo Import** to load sample content.
5. Go to **Appearance → Customize** to adjust colors, layout, and footer text.

## Known limitations (v1.x roadmap)

- Performance: no critical CSS, no advanced lazy loading (planned v1.1)
- Block Patterns: no custom patterns registered (planned v1.2)
- Accessibility: WCAG 2.2 AA full audit pending (planned v1.3)
- SEO: no JSON-LD schema, no Open Graph tags (planned v1.4)
