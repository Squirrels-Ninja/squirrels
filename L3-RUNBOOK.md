# L3 — Demo Site Deployment Runbook

**Target:** `https://demo.squirrels.ninja`  
**Theme version:** Squirrels v1.0.0  
**Status:** ⬜ Not started

This runbook covers all 8 phases of L3, from server provisioning to production screenshots. Files referenced here are in `github-org-setup/squirrels-demo/`.

---

## Pre-requisites

- [ ] L1 complete (brand assets in `assets/brand/`)
- [ ] L2 complete (GitHub org live at github.com/Squirrels-Ninja)
- [ ] `squirrels-1.0.0.zip` and `squirrels-child-1.0.0.zip` built and checksums verified
- [ ] DNS for `demo.squirrels.ninja` pointing to your server's IP

---

## L3.1 — Server Provisioning

### Infrastructure decision

The official Squirrels demo and QA environment runs on **WPMU DEV Managed Hosting**. See `HOSTING.md` for the full hosting recommendation and requirements.

| Option | Recommended for | Notes |
|--------|----------------|-------|
| WPMU DEV Managed Hosting | Official demo + QA environment | SSH, WP-CLI, staging, daily backups, object cache |
| Managed WordPress (Kinsta, WP Engine, Cloudways) | Alternative managed path | HTTPS built-in, daily backups, object cache included |
| VPS (DigitalOcean, Hetzner, Vultr) | Most control, cheapest | Requires Nginx/Apache + PHP + MySQL setup |

**Minimum spec:**
- PHP 8.2+ (8.3 preferred)
- MySQL 8.0+ or MariaDB 10.6+
- 1 GB RAM minimum (2 GB recommended for WooCommerce)
- 10 GB disk
- HTTPS via Let's Encrypt or host-provided SSL

### Domain setup

1. Log into your DNS provider (Cloudflare recommended)
2. Add an A record:
   ```
   demo.squirrels.ninja → [server IP]
   TTL: Auto (or 300)
   ```
3. If using a managed host, follow their CNAME or IP instructions
4. Verify propagation:
   ```bash
   dig demo.squirrels.ninja
   curl -I https://demo.squirrels.ninja
   ```

### SSL verification

- [ ] `https://demo.squirrels.ninja` loads without certificate error
- [ ] `http://demo.squirrels.ninja` redirects to HTTPS (301)
- [ ] Certificate issuer visible in browser (Let's Encrypt or host SSL)
- [ ] HSTS header present (optional but recommended):
  ```bash
  curl -I https://demo.squirrels.ninja | grep -i strict
  ```

---

## L3.2 — WordPress Installation

### Option A: Automated via WP-CLI (recommended)

```bash
# Upload files to server
scp squirrels-1.0.0.zip user@server:/tmp/
scp github-org-setup/squirrels-demo/setup/products.csv user@server:/tmp/

# SSH into server
ssh user@server
cd /var/www/demo.squirrels.ninja  # or your webroot

# Download WordPress
wp core download

# Create wp-config.php
wp config create \
  --dbname=squirrels_demo \
  --dbuser=dbuser \
  --dbpass=your_db_password \
  --dbhost=localhost

# Edit install.sh with your settings
nano /tmp/install.sh   # set DEMO_URL, THEME_ZIP, PRODUCTS_CSV, etc.

# Run the installer
bash /tmp/install.sh
```

The script (`github-org-setup/squirrels-demo/setup/install.sh`) handles:
- WordPress core install
- WooCommerce installation and configuration
- Squirrels theme installation
- Acorn Classic Store demo import
- Product CSV import (12 products)
- Navigation menu setup
- Customizer settings (brand colors, footer text)
- Permalink setup

### Option B: Manual install

If you prefer the WordPress GUI:

1. Upload WordPress to your webroot
2. Visit `https://demo.squirrels.ninja` and complete the 5-minute install
3. Log into wp-admin
4. Go to **Plugins → Add New** → search "WooCommerce" → Install + Activate
5. Complete the WooCommerce Setup Wizard
6. Go to **Appearance → Themes → Add New → Upload Theme**
7. Upload `squirrels-1.0.0.zip` → Install → Activate
8. Set permalink structure: **Settings → Permalinks → Post name** (`/%postname%/`)

---

## L3.3 — Acorn Import

1. Go to **Appearance → Acorn**
2. Click **Import** on the **Classic Store** pack
3. Wait for confirmation: "Imported!"

### Verify after import

- [ ] "Home" page exists with Gutenberg hero content
- [ ] "Shop" page exists (WooCommerce shop is already assigned separately)
- [ ] "About" and "Contact" pages exist
- [ ] Front page is set to the imported Home page (**Settings → Reading**)
- [ ] Customizer colors updated to brand orange (`#C94F10`)

### Import products (manual method if WP-CLI not used)

1. Go to **WooCommerce → Products → Import**
2. Upload `github-org-setup/squirrels-demo/setup/products.csv`
3. Map columns: keep defaults, check SKU, Regular price, Sale price, Categories
4. Run import → verify 12 products appear

---

## L3.4 — WooCommerce Configuration

### Store settings (**WooCommerce → Settings → General**)
- [ ] Store address set (demo address is fine)
- [ ] Currency: USD
- [ ] Selling location: All countries
- [ ] Default customer location: No location by default

### Tax (**WooCommerce → Settings → Tax**)
- [ ] "Enable tax rates and calculations": checked
- [ ] Tax display (shop): Excluding tax
- [ ] Tax display (cart): Excluding tax

### Shipping (**WooCommerce → Settings → Shipping**)
- [ ] Create a "United States" zone
- [ ] Add "Free Shipping" method (no minimum)
- [ ] Optional: add "Flat Rate" as an alternative ($5.99)

### Payments (**WooCommerce → Settings → Payments**)
- [ ] "Cash on Delivery": Enabled, Title = "Cash on Delivery"
- [ ] All real payment gateways: Disabled (no live credentials on demo)

### Emails (**WooCommerce → Settings → Emails**)
- [ ] "From" name: `Squirrels Demo Store`
- [ ] "From" address: `orders@squirrels.ninja`

---

## L3.5 — Functional QA

Run the complete functional QA checklist:

```
github-org-setup/squirrels-demo/qa/functional-checklist.md
```

**Covers:** Homepage, Shop, Product pages, Cart, Checkout (end-to-end order), My Account, Blog, Search, 404, Admin smoke check, Mobile (375px).

**Required before proceeding:** All items pass or known exceptions documented.

---

## L3.6 — Content & Design QA

Run the content and design QA checklist:

```
github-org-setup/squirrels-demo/qa/content-checklist.md
```

**Covers:** Typography, Color accuracy (WCAG AA), Buttons, Forms, Header, Footer, Images, Cards, Spacing, Responsive layout (320px–1920px), Cross-browser.

---

## L3.7 — Lighthouse Baseline

**Run this immediately after QA passes — before any caching or CDN is added.**

### Run via Lighthouse CLI

```bash
# Install
npm install -g @lhci/cli@0.14

# Run (from the squirrels-demo/setup/ directory)
lhci autorun --config=lighthouserc.json
```

This runs 3 passes on 5 URLs (homepage, shop, cart, checkout, blog) and averages the scores.

### Record results

Fill in `github-org-setup/squirrels-demo/baseline/lighthouse-baseline.md` with all scores.

### Key metrics to record

- Performance score (0–100)
- Accessibility score (0–100)  
- Best Practices score (0–100)
- SEO score (0–100)
- FCP, LCP, TBT, CLS, TTI (raw values)
- All failed or warned audits

These numbers are the official v1.0.0 baseline for T7 (Scamper performance optimization).

### Acceptable baseline thresholds

| Metric | Acceptable (unoptimized) | Target after T7 |
|--------|--------------------------|-----------------|
| Performance | ≥60 | ≥90 |
| Accessibility | ≥90 | ≥95 |
| LCP | <4.0s | <2.5s |
| TBT | <600ms | <200ms |
| CLS | <0.15 | <0.05 |

If Accessibility falls below 90, fix before proceeding — that's a blocker.

---

## L3.8 — Production Screenshots

### Required screenshots (for marketing + WP.org)

Capture in Chrome at the listed viewport. No browser chrome visible (use full-screen or screenshotting tool).

| # | Page | Viewport | File |
|---|------|----------|------|
| 1 | Homepage | 1440×900 | `screenshots/homepage-desktop.png` |
| 2 | Shop archive | 1440×900 | `screenshots/shop-desktop.png` |
| 3 | Product page | 1440×900 | `screenshots/product-desktop.png` |
| 4 | Cart | 1440×900 | `screenshots/cart-desktop.png` |
| 5 | Checkout | 1440×900 | `screenshots/checkout-desktop.png` |
| 6 | Blog archive | 1440×900 | `screenshots/blog-desktop.png` |
| 7 | Acorn importer | 1440×900 | `screenshots/acorn-admin.png` |
| 8 | Customizer open | 1440×900 | `screenshots/customizer-admin.png` |
| 9 | Homepage mobile | 375×812 | `screenshots/homepage-mobile.png` |
| 10 | Mobile menu open | 375×812 | `screenshots/mobile-menu.png` |
| 11 | Shop mobile | 375×812 | `screenshots/shop-mobile.png` |
| 12 | Product mobile | 375×812 | `screenshots/product-mobile.png` |

### Theme card screenshot (required for WordPress.org + theme activation screen)

- Dimensions: **1200×900 PNG**
- Content: Homepage above the fold at 1200px viewport
- File: `squirrels/screenshot.png` (replaces current placeholder)
- No browser chrome, no OS chrome, clean white background

```bash
# Using puppeteer-screenshot or similar:
npx pageres https://demo.squirrels.ninja 1200x900 --filename=screenshot
```

Or manually: DevTools → ⋮ → Run command → "Capture screenshot" at 1200px viewport.

### Upload screenshots

After capturing:
1. Copy `screenshot.png` to `squirrels/screenshot.png` (replacing placeholder)
2. Copy all screenshots to `github-org-setup/squirrels-demo/screenshots/`
3. Commit and push to `Squirrels-Ninja/squirrels-demo`
4. Update the screenshot in `Squirrels-Ninja/squirrels` and tag a new patch release if needed

---

## L3 Completion Checklist

- [ ] **L3.1** — Server provisioned, SSL live, HTTP→HTTPS redirect working
- [ ] **L3.2** — WordPress + WooCommerce + Squirrels v1.0.0 installed
- [ ] **L3.3** — Acorn Classic Store import complete, 12 products imported
- [ ] **L3.4** — WooCommerce configured (address, currency, tax, shipping, payment)
- [ ] **L3.5** — Functional QA passed (all items checked, test order placed)
- [ ] **L3.6** — Content/design QA passed (typography, colors, layout, responsive)
- [ ] **L3.7** — Lighthouse baseline recorded in `baseline/lighthouse-baseline.md`
- [ ] **L3.8** — Production screenshots captured, `screenshot.png` replaced
- [ ] Search engine indexing re-enabled (`wp option update blog_public 1`)
- [ ] Demo URL publicly accessible: `https://demo.squirrels.ninja`

**Before declaring L3 done, run the Go / No-Go gate:**

```
L3-GO-NO-GO.md
```

All items in that checklist must pass. The Go/No-Go gate is the authoritative definition of "L3 complete."

---

## After L3

With the live demo in place:

| Next | Work |
|------|------|
| **L4** | Build squirrels.ninja marketing site using `LANDING-PAGE-COPY.md` |
| **L5** | Produce final marketing assets: OG image, WP.org banners, social headers |
| **L6** | WordPress.org Theme Check + submission (optional) |
| **T7** | Scamper performance work, using the Lighthouse baseline from L3.7 |
