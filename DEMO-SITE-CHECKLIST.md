# Squirrels — Demo Site Setup Checklist

Use this checklist to build and verify the public live demo for Squirrels v1.0.0.

**Target URL:** `[your-domain]/demo/`
**Theme version:** 1.0.0
**Demo pack used:** Classic Store (recommended for primary demo)

---

## Phase 1 — Environment

- [ ] Fresh WordPress install (no existing content)
- [ ] WordPress version: 6.0 or later
- [ ] PHP version: 7.4 or later
- [ ] SSL certificate active (HTTPS enabled)
- [ ] Site URL and WordPress URL set correctly in Settings → General
- [ ] Search engine indexing: **disabled** (Settings → Reading → "Discourage search engines") until demo is ready, then re-enable
- [ ] Default "Hello World" post and "Sample Page" deleted
- [ ] Default "Uncategorized" category renamed or left as-is

---

## Phase 2 — Plugin Installation

- [ ] WooCommerce installed and activated (latest stable version)
- [ ] WooCommerce setup wizard completed:
  - [ ] Store location set
  - [ ] Currency set
  - [ ] Payment method: set to "Cash on delivery" or a sandbox payment gateway (do not use live credentials on a demo)
  - [ ] Shipping: configure one flat-rate zone or free shipping
- [ ] No other plugins active except WooCommerce (keep the demo clean)
- [ ] Jetpack, caching plugins, or SEO plugins: defer until demo is verified

---

## Phase 3 — Theme Installation

- [ ] Upload `squirrels-1.0.0.zip` via Appearance → Themes → Add New → Upload Theme
- [ ] Activate Squirrels
- [ ] Confirm no PHP errors or warnings in the WordPress admin
- [ ] Confirm Appearance → Customize loads without fatal errors
- [ ] Confirm Appearance → Demo Import page is present

---

## Phase 4 — Demo Import

- [ ] Go to Appearance → Demo Import
- [ ] Click **Import** on "Classic Store"
- [ ] Wait for success confirmation
- [ ] Verify pages created: Home, Shop, About, Contact
- [ ] Go to Settings → Reading → set "A static page" → Front page: Home
- [ ] Confirm homepage displays the imported content
- [ ] Verify theme mods applied (primary colour: `#0073aa`, accent: `#e74c3c`)

---

## Phase 5 — WooCommerce Content

- [ ] Add sample products (minimum 8):
  - [ ] At least 2 products with sale prices (tests sale badge)
  - [ ] At least 2 products with multiple images (tests gallery)
  - [ ] At least 1 variable product (size or colour options)
  - [ ] At least 1 digital/downloadable product
  - [ ] At least 2 product categories
- [ ] Add products to featured status where appropriate
- [ ] Set up product images (min 800×800px, square aspect ratio recommended)
- [ ] Verify shop page: `[your-domain]/demo/shop/` — products display in grid
- [ ] Set the WooCommerce shop page to the imported "Shop" page (WooCommerce → Settings → Products → Shop page)

---

## Phase 6 — Navigation

- [ ] Create Primary Menu (Appearance → Menus):
  - [ ] Home
  - [ ] Shop
  - [ ] About
  - [ ] Contact
  - [ ] Cart (optional)
- [ ] Assign Primary Menu to "Primary Menu" location
- [ ] Create Footer Menu (optional):
  - [ ] Privacy Policy
  - [ ] Terms
  - [ ] Contact
- [ ] Assign Footer Menu to "Footer Menu" location
- [ ] Test mobile menu toggle on a real mobile device or browser dev tools

---

## Phase 7 — Widgets

- [ ] Add widgets to Main Sidebar:
  - [ ] WooCommerce Product Search
  - [ ] WooCommerce Product Categories
  - [ ] WooCommerce Price Filter (if available)
  - [ ] Recent Posts (for blog pages)
- [ ] Add widgets to Footer areas 1–3:
  - [ ] Footer 1: About blurb or logo + text
  - [ ] Footer 2: Quick links menu widget
  - [ ] Footer 3: Contact info or newsletter signup

---

## Phase 8 — Page Verification

Go through each page and confirm it renders correctly with no layout breaks.

### Homepage
- [ ] Custom homepage content displays
- [ ] Header logo / site title visible
- [ ] Primary navigation renders
- [ ] Footer renders with widgets and copyright text
- [ ] Page is readable and visually coherent

### Shop Archive (`/shop/`)
- [ ] Product grid displays correctly
- [ ] Product images load
- [ ] Product titles and prices display
- [ ] Sale badges appear on sale products
- [ ] Add to Cart buttons work
- [ ] Pagination works (if enough products)
- [ ] Sidebar shows product categories and search (if sidebar enabled)

### Product Page (single product)
- [ ] Product title, price, description render
- [ ] Product gallery: main image + thumbnails load
- [ ] Gallery zoom works on hover
- [ ] Gallery lightbox opens on click
- [ ] Add to Cart button works
- [ ] Product variations display (for variable products)
- [ ] Related products section renders

### Cart (`/cart/`)
- [ ] Added products appear in cart
- [ ] Quantities can be updated
- [ ] Remove item works
- [ ] Cart totals display correctly
- [ ] Proceed to Checkout button works

### Checkout (`/checkout/`)
- [ ] Checkout form renders fully
- [ ] Required fields highlighted correctly
- [ ] Order summary sidebar renders
- [ ] Place Order button submits (sandbox mode)
- [ ] Order received page renders after submission

### My Account (`/my-account/`)
- [ ] Login form renders
- [ ] Dashboard renders when logged in
- [ ] Order history accessible
- [ ] Account details editable

### Blog Archive
- [ ] Add 3–5 sample blog posts with featured images
- [ ] Archive page renders post list with thumbnails
- [ ] Post excerpts display correctly
- [ ] Pagination works

### Single Post
- [ ] Post title, date, author render
- [ ] Featured image renders
- [ ] Post content renders (test with headings, images, lists)
- [ ] Post navigation (Previous / Next) renders
- [ ] Comments section renders (with at least one test comment)

### About Page
- [ ] Page content renders
- [ ] No sidebar (or sidebar with widgets) as configured

### Contact Page
- [ ] Page content renders
- [ ] Contact form plugin installed and form renders (e.g., WPForms Lite or Contact Form 7)
- [ ] Form submits successfully

### 404 Page
- [ ] Visit a non-existent URL (e.g., `/demo/this-does-not-exist/`)
- [ ] 404 template renders with heading and search form

---

## Phase 9 — Customizer Testing

- [ ] Open Appearance → Customize
- [ ] Change primary colour — live preview updates in real time
- [ ] Change accent colour — sale badges update
- [ ] Change body font size — text size updates live
- [ ] Toggle sidebar position: left, right, none
- [ ] Edit footer copyright text — footer updates live
- [ ] Publish changes
- [ ] Verify changes persist on frontend after closing Customizer

---

## Phase 10 — Mobile & Responsive Testing

Test on real devices if possible; use browser dev tools as a minimum.

- [ ] iPhone SE (375px) — smallest common viewport
- [ ] iPhone 14 (390px)
- [ ] iPad (768px)
- [ ] iPad Pro landscape (1024px)
- [ ] Desktop (1280px, 1440px, 1920px)

For each viewport, verify:
- [ ] Mobile menu toggle appears below 768px
- [ ] Mobile menu opens and closes correctly
- [ ] Navigation links are tappable (minimum 44×44px target)
- [ ] Product grid collapses to 1–2 columns on mobile
- [ ] Footer widget columns stack vertically on mobile
- [ ] No horizontal scroll on any page
- [ ] Images scale correctly (no overflow)

---

## Phase 11 — Speed Testing

Run performance audits on the homepage and a product page.

**Tools:** Google PageSpeed Insights, GTmetrix, or Lighthouse in Chrome DevTools

Targets for v1.0.0 (no performance optimisation yet — these are baseline benchmarks to record for T7):
- [ ] Record Lighthouse Performance score (desktop)
- [ ] Record Lighthouse Performance score (mobile)
- [ ] Record Core Web Vitals: LCP, CLS, FID/INP
- [ ] Record total page size (KB)
- [ ] Record number of HTTP requests

Save these numbers as the v1.0.0 baseline before T7 work begins.

---

## Phase 12 — Screenshot Capture

*(See LAUNCH-ASSETS.md for full screenshot specifications.)*

- [ ] Homepage desktop (1440×900 viewport)
- [ ] Homepage mobile (375×812 viewport)
- [ ] Shop archive desktop
- [ ] Product page desktop
- [ ] Cart page
- [ ] Checkout page
- [ ] Blog archive desktop
- [ ] Single post desktop
- [ ] Customizer panel open (sidebar visible)
- [ ] Demo Import admin page
- [ ] Mobile menu open
- [ ] Theme card screenshot (1200×900, saved as `screenshot.png` in theme root)

---

## Phase 13 — Final Pre-Publish Checks

- [ ] All pages return HTTP 200 (no 404s from internal links)
- [ ] No console errors in browser developer tools
- [ ] No PHP notices or warnings (check WP_DEBUG log)
- [ ] Favicon set (Settings → General → Site Icon)
- [ ] Page title format set correctly (Settings → General → Tagline)
- [ ] Demo site search engine indexing: **enabled** when ready to go public
- [ ] Demo link added to landing page
- [ ] Demo link added to theme README.md

---

## Demo Site Maintenance Notes

- Demo content should be refreshed if a new starter site pack is added.
- Do not use real customer data or live payment credentials on the demo site.
- Keep WooCommerce updated on the demo site to verify ongoing compatibility.
- Record the demo site's Lighthouse scores after each minor theme update as an ongoing benchmark.
