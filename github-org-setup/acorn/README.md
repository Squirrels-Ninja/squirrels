# Acorn — Starter Site Packs for Squirrels

> **Status:** v1.0.0 — Three packs included in the Squirrels theme

Acorn is the starter site importer built into the [Squirrels](https://github.com/Squirrels-Ninja/squirrels) theme. It allows one-click import of demo content, pages, and theme settings via **Appearance → Acorn** in the WordPress admin.

## Included packs (free)

| Pack | Description |
|------|-------------|
| **Classic Store** | WooCommerce-focused layout with shop pages, featured products, and a newsletter section |
| **Minimal Blog** | Typography-first blog layout with sidebar, categories, and a clean reading experience |
| **Creative Portfolio** | Full-width portfolio layout with project grids and a bold hero section |

## Planned packs (Nut Pack — Pro)

Premium starter site packs for Workshop Pro users:

- **Agency** — Multi-service agency with case studies and team profiles
- **Restaurant** — Menu, reservations, and delivery-focused layout
- **Course** — Education site with lesson structure and LearnDash support
- **SaaS** — Software product site with pricing, docs, and changelog
- **Digital Downloads** — EDD-powered digital product store

## How it works

Each pack is a JSON file containing:
- Sample pages with Gutenberg block content
- Theme Customizer settings (colors, sidebar, footer text)

Import is idempotent — running the same pack twice skips already-imported pages.

## Adding custom packs

See [Acorn developer documentation](https://treehouse.squirrels.ninja/acorn/custom-packs) for the JSON schema and how to register custom packs via `squirrels_get_demo_packs` filter.

## Links

- [Squirrels theme](https://github.com/Squirrels-Ninja/squirrels)
- [Nut Pack (Pro packs)](https://squirrels.ninja/nut-pack)
- [Documentation](https://treehouse.squirrels.ninja/acorn)
