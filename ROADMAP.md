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
| **T8** — Pattern Library | 12 native block patterns across `squirrels` and `squirrels-woocommerce` categories | v1.1.0 |

---

## Active

| Milestone | Description | Target |
|-----------|-------------|--------|
| **L3** | Demo site deployment — `demo.squirrels.ninja` live, QA, Lighthouse baseline | — |
| **T9** | Components Library — block styles + atomic component patterns | v1.2.0 |

---

## Planned

### T10 — Design System (Pattern Expansion)

Expand the pattern library to 40–60 production-ready patterns. Built using T9 components as building blocks.

**Phase 1 — 25 patterns (T10.1):**

| Category | Patterns |
|----------|---------|
| Hero | Store, Business, SaaS, Agency, Portfolio |
| Commerce | Featured Products, Featured Categories, Flash Sale, Product Comparison, Pricing Table, Product Features |
| Marketing | CTA, Newsletter, FAQ, Logos/Social Proof, Statistics |
| Content | Team, About, Timeline, Services |
| Blog | Featured Posts, Author Box, Related Posts, Newsletter CTA |

**Phase 2 — 50 patterns (T10.2):** Remaining categories + Trust, Contact, Documentation patterns.

**Phase 3 — Pattern Variations (T10.3):** Light, dark, compact, and full-width variants for the most-used patterns.

**Phase 4 — Premium patterns (T10.4):** Workshop-exclusive premium patterns.

---

### T11 — Theme Templates

Expand the page template system. New full-page templates:

- Landing Page (no header nav, no sidebar, conversion-focused)
- Sales Page (long-form, full-width)
- Contact Page
- About Page
- Team Page
- FAQ Page
- Portfolio
- Documentation
- Coming Soon (pre-launch, hide nav)
- Maintenance

---

### T12 — Header & Footer Builder

Visual header and footer construction without a page builder:

- Multiple header layouts (centered, split, minimal, magazine)
- Mega menu support
- Sticky header options
- Announcement bar (dismissible)
- Multiple footer column layouts
- Social link blocks
- Footer widget builder

---

### T13 — Workshop Pro Plugin

Advanced features as a paid companion plugin. Keeps the free theme lean.

- Quick View product modal
- Wishlist
- Product Filters (by attribute, category, price)
- AJAX Search with live results
- Advanced WooCommerce blocks
- Mega Menu builder
- Header Builder (advanced)
- Advanced Customizer controls

---

### T14 — Scamper Performance

After the feature set is stable. Optimizing a moving target wastes effort.

Sub-milestones in execution order:

1. T14.1 — Lighthouse baseline (live demo)
2. T14.2 — Asset audit
3. T14.2.5 — Asset inventory
4. T14.4 — Remove jQuery dependency (vanilla menu toggle)
5. T14.7 — Font loading strategy (self-host Inter + Geist, or system stack)
6. T14.3 — CSS optimization + design token consolidation
7. T14.5 — WooCommerce conditional asset loading
8. T14.6 — Image optimization
9. T14.8 — Final benchmark + Scamper Report

See `SCAMPER.md` and `T7-SCAMPER.md` for full documentation (originally numbered T7; renumbered T14 in this roadmap to reflect actual sequencing).

---

## Design principles

**Components before patterns.** Patterns assembled from shared components stay consistent automatically. Bespoke patterns require manual synchronization.

**Features before performance.** You can't optimize what isn't built. Performance work on v1.1.0 would be premature optimization — the asset profile will change substantially through T10–T13.

**Free before paid.** The free theme must be genuinely excellent before Workshop Pro is worth building.
