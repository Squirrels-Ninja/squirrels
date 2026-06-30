# Squirrels — Launch Assets Inventory

**Version:** 1.0.0
**Last updated:** 2026-06-30

Status key: ✅ Complete · 🔄 In progress · ⬜ Not started

---

## Section 1 — Release Packages

| Asset | File | Status | Notes |
|-------|------|--------|-------|
| Parent theme ZIP | `squirrels-1.0.0.zip` | ✅ | 611 KB · includes brand assets |
| Child theme ZIP | `squirrels-child-1.0.0.zip` | ✅ | 1.4 KB |
| SHA-256 checksum (parent) | `555410d1...` | ✅ | Recorded in RELEASE-NOTES.md |
| SHA-256 checksum (child) | `b5b71430...` | ✅ | Recorded in RELEASE-NOTES.md |

---

## Section 2 — Documentation (In-Theme)

| Asset | File | Status | Notes |
|-------|------|--------|-------|
| README | `README.md` | ✅ | Feature list, install instructions, dir structure |
| Changelog | `CHANGELOG.md` | ✅ | v1.0.0 entry complete |
| Release notes | `RELEASE-NOTES.md` | ✅ | Full release summary and install guide |
| Branding guide | `BRANDING.md` | ✅ | Positioning, taglines, 3 logo concepts |
| Landing page copy | `LANDING-PAGE-COPY.md` | ✅ | Full one-page copy, all sections |
| Free vs Pro | `FREE-VS-PRO.md` | ✅ | Feature split, comparison table, WP.org compliance notes |
| Demo site checklist | `DEMO-SITE-CHECKLIST.md` | ✅ | 13-phase setup and verification guide |
| Support policy | `SUPPORT-POLICY.md` | ✅ | Free + Pro support scope and expectations |
| Launch assets inventory | `LAUNCH-ASSETS.md` | ✅ | This file |

---

## Section 3 — Visual Assets

| Asset | Specification | Status | Notes |
|-------|--------------|--------|-------|
| Theme card screenshot | 1200×900 PNG · `screenshot.png` | ✅ | Placeholder generated; replace with designed version |
| Logo (Concept A — Wordmark) | SVG + PNG variants | ⬜ | See BRANDING.md §3 for spec |
| Logo (Concept B — Monogram) | SVG + PNG variants | ⬜ | Alternative concept |
| Logo (Concept C — Accent Line) | SVG + PNG variants | ⬜ | Minimal/editorial concept |
| Favicon | 32×32 ICO + 180×180 Apple touch PNG | ⬜ | Derived from logo icon |
| Homepage desktop screenshot | 1440×900 | ⬜ | Requires demo site |
| Homepage mobile screenshot | 375×812 | ⬜ | Requires demo site |
| Shop archive screenshot | 1440×900 | ⬜ | Requires demo site |
| Product page screenshot | 1440×900 | ⬜ | Requires demo site |
| Cart page screenshot | 1440×900 | ⬜ | Requires demo site |
| Checkout page screenshot | 1440×900 | ⬜ | Requires demo site |
| Blog archive screenshot | 1440×900 | ⬜ | Requires demo site |
| Single post screenshot | 1440×900 | ⬜ | Requires demo site |
| Customizer panel screenshot | 1440×900 | ⬜ | Requires demo site |
| Demo Import admin screenshot | 1440×900 | ⬜ | Requires demo site |
| Mobile menu open screenshot | 375×812 | ⬜ | Requires demo site |
| Social preview image | 1200×630 · Open Graph | ⬜ | For landing page meta + social sharing |
| Twitter/X card image | 1200×628 | ⬜ | Can reuse social preview with minor crop |
| WordPress.org banner (wide) | 1544×500 | ⬜ | Required for WP.org submission |
| WordPress.org banner (low-res) | 772×250 | ⬜ | Required for WP.org submission |
| WordPress.org icon (high-res) | 256×256 | ⬜ | Required for WP.org submission |
| WordPress.org icon (low-res) | 128×128 | ⬜ | Required for WP.org submission |

---

## Section 4 — Screenshot Checklist (Detailed)

For each screenshot: capture in Chrome at the listed viewport, with no browser chrome visible. Use a clean demo install of the Classic Store starter.

### Desktop Screenshots (1440px viewport width)

| # | Page | URL | Scroll position | Key elements to show |
|---|------|-----|----------------|---------------------|
| 1 | Homepage | `/` | Top of page | Hero section, header/nav |
| 2 | Shop archive | `/shop/` | Top of page | Product grid (3 col), sidebar, header |
| 3 | Product page | `/shop/[any-product]/` | Top of page | Gallery, title, price, Add to Cart |
| 4 | Cart | `/cart/` | Top of page | Cart table, totals, Proceed to Checkout |
| 5 | Checkout | `/checkout/` | Top of page | Form, order summary |
| 6 | Blog archive | `/blog/` | Top of page | Post list with thumbnails and excerpts |
| 7 | Single post | `/[post-slug]/` | Top of page | Post title, featured image, content |
| 8 | Customizer | N/A (admin) | Colour section open | Customizer sidebar + live preview of homepage |
| 9 | Demo Import page | `/wp-admin/themes.php?page=squirrels-acorn` | Full page | All three demo cards |

### Mobile Screenshots (375×812 iPhone SE viewport)

| # | Page | Key elements to show |
|---|------|---------------------|
| 10 | Homepage | Mobile header, hero section |
| 11 | Mobile menu open | Hamburger expanded, nav items visible |
| 12 | Shop archive | 1-column product grid |
| 13 | Product page | Full-width image, title, price, Add to Cart |

### Theme Card (used in WordPress admin and WP.org)

| # | Asset | Spec |
|---|-------|------|
| 14 | `screenshot.png` | 1200×900 PNG · represents the theme's visual identity · currently a placeholder |

**Recommendation:** Replace the current placeholder `screenshot.png` with a real browser mockup of the Classic Store demo homepage at 1200×900, with the Squirrels branding visible in the header.

---

## Section 5 — Landing Page & Website

| Asset | Status | Notes |
|-------|--------|-------|
| Domain / hosting | ⬜ | Choose domain for product site |
| Landing page HTML/CSS | ⬜ | Copy complete in LANDING-PAGE-COPY.md · needs front-end build |
| Download page | ⬜ | Hosts the ZIP with checksum displayed |
| Changelog page | ⬜ | Published version of CHANGELOG.md |
| Documentation pages | ⬜ | Install guide, Customizer guide, Child theme guide, Demo import guide |
| Free vs Pro comparison page | ⬜ | Published version of FREE-VS-PRO.md |
| Support page | ⬜ | Published version of SUPPORT-POLICY.md |
| Blog (optional) | ⬜ | For release announcements and tutorials |

---

## Section 6 — Distribution Channels

| Channel | Status | Notes |
|---------|--------|-------|
| Product website | ⬜ | Primary distribution point |
| GitHub repository | ⬜ | Source code + issue tracker |
| WordPress.org Theme Directory | ⬜ | Requires passing Theme Review Team automated and manual checks |
| Gumroad / Lemon Squeezy (optional) | ⬜ | For paid Pro plugin when released |

### WordPress.org Submission Checklist

Before submitting to the WordPress.org Theme Directory, verify:

- [ ] All translation strings use the correct text domain (`squirrels`)
- [ ] No `eval()` calls or obfuscated code
- [ ] No remote calls on theme activation
- [ ] `screenshot.png` is 1200×900 and represents the theme accurately
- [ ] All images are GPL-compatible (own work or appropriately licensed)
- [ ] No admin notices displayed without user action
- [ ] `readme.txt` file present (WordPress.org format, separate from `README.md`)
- [ ] Theme passes Theme Check plugin with no required errors
- [ ] Prefix on all functions, hooks, and global variables: `squirrels_`

---

## Section 7 — Download & Install Instructions (User-Facing)

### Installing the Parent Theme

1. Download `squirrels-1.0.0.zip` from the product page.
2. Log into your WordPress admin (`yoursite.com/wp-admin`).
3. Go to **Appearance → Themes**.
4. Click **Add New**, then **Upload Theme**.
5. Click **Choose File**, select `squirrels-1.0.0.zip`, and click **Install Now**.
6. Click **Activate**.

Your site now uses Squirrels. If WooCommerce is installed, the shop is already styled.

---

### Installing the Optional Child Theme

If you plan to customise the theme (add custom CSS, modify templates, or add PHP functions), use the child theme so your changes survive parent theme updates.

1. Download `squirrels-child-1.0.0.zip` from the product page.
2. Follow the same upload steps as the parent theme above.
3. Click **Activate** on Squirrels Child.

The child theme automatically loads the parent theme's stylesheet and scripts.

---

### Installing WooCommerce

Squirrels works without WooCommerce. To add a shop:

1. Go to **Plugins → Add New**.
2. Search for "WooCommerce".
3. Click **Install Now**, then **Activate**.
4. Complete the WooCommerce setup wizard.

Squirrels detects WooCommerce automatically and applies shop styling without any additional configuration.

---

### Importing a Starter Site

1. Go to **Appearance → Demo Import**.
2. Choose a demo pack:
   - **Classic Store** — WooCommerce-focused layout
   - **Minimal Blog** — Typography-first blog layout
   - **Creative Portfolio** — Full-width, no sidebar
3. Click **Import**.
4. When the import completes, go to **Settings → Reading** and set the front page to the imported Home page.

The import creates sample pages and applies theme Customizer settings. Your existing content is not deleted.

---

### Using the Customizer

1. Go to **Appearance → Customize**.
2. Use the **Store Colors** panel to change:
   - **Primary Color** — navigation, links, buttons, product prices
   - **Accent / Sale Color** — sale badges and CTA highlights
3. Use the **Typography** section to adjust body font size.
4. Use the **Layout** section to set sidebar position (left, right, or none).
5. Use the **Footer** section to edit the copyright text.
6. Click **Publish** to save all changes.

All changes are live-previewed in the Customizer before publishing.

---

### Updating the Theme Safely

**If using the parent theme directly (no child theme):**
- Before updating, back up any template files you have modified.
- Apply the update via **Appearance → Themes → Update Available**.

**If using the child theme (recommended):**
- Your customisations live in the child theme and are not touched by parent theme updates.
- Apply the parent theme update via **Appearance → Themes → Update Available**.
- Your child theme remains active and your changes are preserved.

**Checking for updates:**
- Updates distributed via WordPress.org will appear in the WordPress admin automatically.
- For direct-download versions, check the product page for new releases and the CHANGELOG.md for what changed.

---

## Section 8 — Missing Assets Summary

The following are required before public distribution and are not yet complete:

| Priority | Asset | Blocker |
|----------|-------|---------|
| High | Logo (final designed files) | Needs design work (spec in BRANDING.md) |
| High | `screenshot.png` replacement | Needs demo site + screenshot capture |
| High | Demo site | Needs hosting + WooCommerce setup (see DEMO-SITE-CHECKLIST.md) |
| High | Landing page (built) | Copy complete; needs front-end build |
| High | GitHub repository | Needs to be created and populated |
| Medium | Social preview image (1200×630) | Needs logo + screenshot |
| Medium | WordPress.org banners | Needs logo + design |
| Medium | `readme.txt` (WP.org format) | Separate from README.md; required for WP.org submission |
| Low | Documentation website | Can launch with GitHub README initially |
| Low | Pro notification page | Not needed until Pro development begins |

---

## Section 9 — Launch Readiness Summary

| Area | Status |
|------|--------|
| Theme code | ✅ Complete — v1.0.0 shipped |
| Child theme | ✅ Complete — packaged separately |
| Release ZIPs | ✅ Built with SHA-256 checksums |
| In-theme documentation | ✅ README, CHANGELOG, RELEASE-NOTES, all policy docs |
| Branding & positioning | ✅ Documented in BRANDING.md |
| Landing page copy | ✅ Written — needs front-end build |
| Free vs Pro plan | ✅ Defined in FREE-VS-PRO.md |
| Support policy | ✅ Written in SUPPORT-POLICY.md |
| Demo site checklist | ✅ Written — demo site not yet built |
| Visual assets (logo, screenshots) | ⬜ Not yet designed/captured |
| Live demo site | ⬜ Not yet built |
| Public GitHub repo | ⬜ Not yet created |
| Landing page (built) | ⬜ Not yet built |
| WordPress.org submission | ⬜ Not yet submitted |
