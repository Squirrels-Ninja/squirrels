# L3 — Go / No-Go Gate

**Demo URL:** `https://demo.squirrels.ninja`  
**Theme version:** Squirrels v1.0.0  
**Status:** ⬜ Not started

L3 is complete only when every item below is checked. Do not capture production screenshots or record the Lighthouse baseline until this gate passes — those artifacts represent the official v1.0.0 baseline for all future T7 optimization work.

---

## Infrastructure

- [ ] WPMU DEV Managed Hosting server provisioned (see `HOSTING.md`)
- [ ] PHP 8.3 (or latest stable supported by WordPress + WooCommerce)
- [ ] WordPress installed
- [ ] WooCommerce installed
- [ ] SSH access verified
- [ ] `wp --info` succeeds over SSH
- [ ] SSL certificate active (Let's Encrypt via Cloudways)
- [ ] Automatic daily backups enabled in Cloudways

---

## DNS

- [ ] `demo.squirrels.ninja` resolves to correct server IP (`dig demo.squirrels.ninja`)
- [ ] `https://demo.squirrels.ninja` loads without certificate error
- [ ] `http://demo.squirrels.ninja` → 301 redirect to HTTPS
- [ ] No mixed-content warnings in browser console
- [ ] SSL rated A by [SSL Labs](https://www.ssllabs.com/ssltest/) *(optional but recommended)*

---

## Theme

- [ ] Squirrels v1.0.0 installed and active
- [ ] Squirrels Child theme installs cleanly (if used)
- [ ] Theme activates without errors
- [ ] No PHP warnings with `WP_DEBUG` enabled (`wp config set WP_DEBUG true --raw`)
- [ ] No JavaScript console errors on homepage, shop, or product page

---

## Acorn Import

- [ ] Classic Store imported successfully
- [ ] Home, Shop, About, Contact pages created
- [ ] Primary navigation menu assigned
- [ ] Front page set to imported Home page (**Settings → Reading**)
- [ ] Customizer colors updated: primary `#C94F10`, accent `#B91C1C`

---

## WooCommerce

- [ ] Shop archive (`/shop/`) loads with product grid
- [ ] Categories display correctly
- [ ] Product page renders (name, price, images, add-to-cart)
- [ ] "Add to Cart" adds item and updates cart count
- [ ] Cart (`/cart/`) shows items, quantities, totals
- [ ] Checkout (`/checkout/`) loads full billing form
- [ ] Test order completes end-to-end:
  - [ ] Fill billing fields
  - [ ] Place order via Cash on Delivery
  - [ ] Redirected to order confirmation page
  - [ ] Order visible in WooCommerce → Orders
- [ ] My Account (`/my-account/`) renders and shows the test order
- [ ] Search returns relevant products
- [ ] 404 page renders correctly (not a server error)

---

## UI

- [ ] Header: logo, navigation, cart icon render correctly
- [ ] Footer: copyright text visible, demo notice present
- [ ] Mobile navigation: hamburger opens/closes at 375px
- [ ] Search: form in header functions
- [ ] Responsive layout passes at 375px, 768px, 1024px, 1440px (no horizontal scroll, no overflow)
- [ ] Buttons: orange background, white text, correct hover state
- [ ] Forms: labeled inputs, visible focus rings, error states work
- [ ] Typography: Geist headings, Inter body (verify in DevTools → Computed)

---

## Accessibility

- [ ] Interactive orange (`#C94F10`) used on all buttons and text links (not display orange `#E8621A`)
- [ ] Body text is charcoal (`#1A1714`), not pure black
- [ ] All text passes WCAG AA contrast (4.5:1 normal, 3:1 large/UI)
- [ ] Tab key navigates through all interactive elements in logical order
- [ ] Focus indicators visible on all interactive elements
- [ ] All product images have non-empty `alt` attributes
- [ ] Skip-to-content link functions (if present in theme)

---

## Performance Baseline

**Run Lighthouse immediately after all items above pass — before adding any caching plugins or CDN.**

```bash
# From github-org-setup/squirrels-demo/setup/
lhci autorun --config=lighthouserc.json
```

Record results in `github-org-setup/squirrels-demo/baseline/lighthouse-baseline.md`.

Pages to record:

- [ ] Homepage (`/`)
- [ ] Shop (`/shop/`)
- [ ] Product page (`/shop/classic-cotton-tee/`)
- [ ] Cart (`/cart/`)
- [ ] Checkout (`/checkout/`)
- [ ] Blog (`/blog/`)

Metrics to capture per page: **Performance, Accessibility, Best Practices, SEO** (scores 0–100) + **FCP, LCP, TBT, CLS, INP, TTI** (raw values).

**Blocker:** If Accessibility score falls below 90 on any page, fix before proceeding.

---

## Production Assets

- [ ] `squirrels/screenshot.png` replaced with real 1200×900 capture of homepage at 1200px viewport
- [ ] `screenshots/homepage-desktop.png` — 1440×900
- [ ] `screenshots/shop-desktop.png` — 1440×900
- [ ] `screenshots/product-desktop.png` — 1440×900
- [ ] `screenshots/cart-desktop.png` — 1440×900
- [ ] `screenshots/checkout-desktop.png` — 1440×900
- [ ] `screenshots/blog-desktop.png` — 1440×900
- [ ] `screenshots/acorn-admin.png` — 1440×900
- [ ] `screenshots/customizer-admin.png` — 1440×900
- [ ] `screenshots/homepage-mobile.png` — 375×812
- [ ] `screenshots/mobile-menu.png` — 375×812
- [ ] `screenshots/shop-mobile.png` — 375×812
- [ ] `screenshots/product-mobile.png` — 375×812

All screenshots committed to `Squirrels-Ninja/squirrels-demo`.

---

## Demo Site Notice

- [ ] Footer displays: *"This is a demonstration store. No real orders are processed."*
- [ ] Notice is visible on every page (header, shop, checkout, my account)
- [ ] Notice does not obscure any functional UI element

---

## Success Criteria

**L3 is complete when all of the following are true:**

1. Every checkbox above is checked
2. `https://demo.squirrels.ninja` is publicly accessible
3. A visitor with no account can: browse the shop → add a product to cart → complete checkout → receive order confirmation
4. Lighthouse baseline scores are recorded in `baseline/lighthouse-baseline.md`
5. Production screenshots have replaced all placeholders
6. `wp option update blog_public 1` has been run (search engines re-enabled)

---

## After L3

| Milestone | Work |
|-----------|------|
| **L4** | Build squirrels.ninja marketing site using `LANDING-PAGE-COPY.md` |
| **L5** | Final marketing assets: OG image, WP.org banners, social headers |
| **L6** | WordPress.org Theme Check + submission (optional) |
| **T7** | Scamper performance optimization — measured against v1.0.0 baseline from L3.7 |
