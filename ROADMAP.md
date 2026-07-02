# Squirrels — Roadmap

Components are built before patterns. Patterns are built before performance. Performance is the last stop, not the first.

---

## Completed

| Milestone | Description | Tag |
|-----------|-------------|-----|
| **T1** — Theme Foundation | WordPress template hierarchy, responsive layout, widget areas, navigation menus, accessibility | v1.0.0 |
| **T2** — WooCommerce Integration | Shop, product, cart, checkout, account templates; HPOS compatibility; cart fragments | v1.0.0 |
| **T3** — Theme Customizer | Primary/accent colors, font size, sidebar position, footer text; CSS custom properties output | v1.0.0 |
| **T4** — Acorn Starter Sites | Demo import system; Classic Store, Minimal Blog, Creative Portfolio demo packs | v1.0.0 |
| **T5** — QA & Release Packaging | Theme check pass, child theme, CHANGELOG, release ZIPs with checksums | v1.0.0 |
| **T6** — Branding & Launch Materials | Brand identity, color system (WCAG AA), typography, icon/logo SVGs, GitHub org, L1–L3 runbooks | v1.0.0 |
| **T8** — Starter Pattern Library | 12 native block patterns across `squirrels` and `squirrels-woocommerce` categories | v1.1.0 |
| **T9** — Components Library | 14 block styles + 5 atomic component patterns; `squirrels-components` category | v1.1.0 |
| **T10** — Page Builder Library | 26 new patterns across marketing, store, business, blog, and page layout categories; 43 patterns total | v1.2.0 |

---

## Active

| Milestone | Description | Target |
|-----------|-------------|--------|
| **L3** | Demo site deployment — `demo.squirrels.ninja` live, QA, Lighthouse baseline | — |
| **T11** | Native Block Theme Templates — FSE conversion with full template hierarchy | v1.3.0 |

---

## Planned

### T11 — Native Block Theme Templates

Convert Squirrels from a classic PHP theme to a Full Site Editing (FSE) block theme. Adds `theme.json`, `/templates/`, and `/parts/` directories. Existing PHP templates remain as fallbacks.

#### T11.1 — Blog Templates

Templates using native blocks (`wp:post-content`, `wp:query`, `wp:post-featured-image`, etc.):

| Template | File | Notes |
|----------|------|-------|
| Fallback / Blog Index | `index.html` | Query loop, pagination |
| Posts Page | `home.html` | Static front page + posts page |
| Single Post | `single.html` | Featured image, author bio, related posts, reading CTA |
| Static Page | `page.html` | Full-width, no sidebar |
| Archive | `archive.html` | Date/author/taxonomy title + post list |
| Category | `category.html` | Category title, description, post grid |
| Tag | `tag.html` | Tag title, post list |
| Author | `author.html` | Author avatar, bio, post list |
| Date Archive | `date.html` | Period heading, post list |

Template parts: `header.html`, `footer.html`, `post-meta.html`, `post-navigation.html`

#### T11.2 — WooCommerce Templates

| Template | File |
|----------|------|
| Shop Archive | `archive-product.html` |
| Product Category | `taxonomy-product_cat.html` |
| Product Tag | `taxonomy-product_tag.html` |
| Single Product | `single-product.html` |
| Cart | `page-cart.html` |
| Checkout | `page-checkout.html` |
| My Account | `page-account.html` |

Template parts: `product-meta.html`

#### T11.3 — Utility Templates

| Template | File |
|----------|------|
| Search Results | `search.html` |
| 404 | `404.html` |
| No Results (part) | `no-results.html` |
| Maintenance | `page-maintenance.html` (custom template) |
| Coming Soon | `page-coming-soon.html` (custom template) |

#### T11.4 — Template Parts

Expand reusable template parts for the Site Editor:

- `header-centered.html` — logo centered, nav below
- `header-minimal.html` — logo only, no nav (landing pages)
- `footer-minimal.html` — copyright line only
- `footer-widgets.html` — three-column widget footer
- `announcement-bar.html` — dismissible top banner
- `breadcrumbs.html` — path breadcrumb trail
- `sidebar.html` — blog sidebar with search + popular posts

#### T11.5 — Style Variations

Five built-in style variations via `/styles/*.json`. Each swaps design tokens without duplicating templates:

| Variation | File | Character |
|-----------|------|-----------|
| Store (default) | `store.json` | Warm orange; commerce-focused |
| Business | `business.json` | Navy + slate; professional services |
| Minimal | `minimal.json` | Black + white; content-first |
| Editorial | `editorial.json` | Serif type; magazine feel |
| Dark | `dark.json` | Dark backgrounds; high contrast |

---

### T12 — Scamper Performance

After the template architecture is stable. Optimizing a moving target wastes effort.

Sub-milestones in execution order:

1. T12.1 — Lighthouse baseline (live demo)
2. T12.2 — Asset audit
3. T12.2.5 — Asset inventory
4. T12.4 — Remove jQuery dependency (vanilla menu toggle)
5. T12.7 — Font loading strategy (self-host Inter + Geist, or system stack)
6. T12.3 — CSS optimization + design token consolidation
7. T12.5 — WooCommerce conditional asset loading
8. T12.6 — Image optimization
9. T12.8 — Final benchmark + Scamper Report

See `SCAMPER.md` and `T7-SCAMPER.md` for full documentation (originally numbered T7, then renumbered T14, now T12).

---

### T13 — Workshop Pro Plugin

Advanced features as a paid companion plugin. Keeps the free theme lean and WordPress.org-suitable.

- Header Builder (visual, Site Editor integrated)
- Footer Builder
- Mega Menu
- AJAX Product Filters (by attribute, category, price range)
- Quick View product modal
- Wishlist
- Product Comparison table
- Advanced WooCommerce blocks
- Conversion-focused marketing blocks (countdown timers, sticky bars)
- Premium pattern packs (Nut Pack)

---

### T14 — Accessibility & SEO Excellence

- WCAG 2.1 AA full audit + remediation (color, keyboard, ARIA, focus)
- Structured data / schema.org markup for products, articles, breadcrumbs
- Open Graph + Twitter Card meta
- XML sitemap integration
- Core Web Vitals monitoring hook (via Scamper score)

---

### T15 — Public Launch & Ecosystem

- WordPress.org submission + review process
- Marketing site — squirrels.ninja (from LANDING-PAGE-COPY.md)
- Treehouse documentation portal
- Demo site — demo.squirrels.ninja (L3)
- Screencast / video walkthrough
- ProductHunt launch
- Ecosystem: Acorn starter sites, Nut Pack premium patterns

---

## Design principles

**Components before patterns.** Patterns assembled from shared components stay consistent automatically. Bespoke patterns require manual synchronization.

**Features before performance.** You can't optimize what isn't built. Performance work before T11 is complete would be premature optimization — the asset profile changes substantially with each architecture milestone.

**Free before paid.** The free theme must be genuinely excellent before Workshop Pro is worth building. T13 doesn't start until T11 and T12 are complete.

**Templates before style variations.** You can't offer five visual styles of a template that doesn't exist yet.
