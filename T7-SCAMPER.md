# T7 — Scamper Performance

**Milestone:** T7 — Scamper  
**Depends on:** L3 complete (live demo at `https://demo.squirrels.ninja`)  
**Baseline version:** v1.1.0  
**Target tag:** v1.2.0

See `SCAMPER.md` for the performance philosophy and artifact definitions.

---

## Recommended execution order

Run sub-milestones in this sequence to maximize early wins and minimize regression risk:

| Step | Milestone | Rationale |
|------|-----------|-----------|
| 1 | **T7.1** — Baseline | Must happen first, before any changes |
| 2 | **T7.2** — Asset Audit | Understand what exists before cutting anything |
| 3 | **T7.2.5** — Asset Inventory | Permanent reference table: every asset, every page, every decision |
| 4 | **T7.4** — Remove jQuery | Highest-impact, lowest-risk change; easy to verify |
| 5 | **T7.7** — Font strategy | Architectural decision that affects size, privacy, and CSS token structure |
| 6 | **T7.3** — CSS + token consolidation | Consolidate tokens after font decision is made; avoids doing it twice |
| 7 | **T7.5** — WooCommerce conditionals | `squirrels_is_woocommerce_page()` helper cleans up the rest naturally |
| 8 | **T7.6** — Image optimization | Lower coupling; can run in parallel with T7.5 |
| 9 | **T7.8** — Final benchmark | Record after all changes; publish Scamper Report |

---

## Pre-requisites

- [ ] L3 complete — `https://demo.squirrels.ninja` publicly accessible
- [ ] 12 products imported, WooCommerce configured
- [ ] Acorn Classic Store starter site active
- [ ] No caching plugins active during baseline capture
- [ ] No CDN active during baseline capture

Do not begin T7.1 until both prerequisites are checked.

---

## T7.1 — Performance Baseline

**Goal:** Establish the v1.1.0 Scamper baseline before any optimization changes.

### Run Lighthouse CI

```bash
cd github-org-setup/squirrels-demo/setup/
lhci autorun --config=lighthouserc.json
```

Or manually per-page:

```bash
npx lighthouse https://demo.squirrels.ninja \
  --form-factor=desktop \
  --output=json,html \
  --output-path=./baseline/homepage
```

### Pages to measure

| Page | URL |
|------|-----|
| Homepage | `/` |
| Shop | `/shop/` |
| Product | `/shop/classic-cotton-tee/` |
| Cart | `/cart/` |
| Checkout | `/checkout/` |
| Blog | `/blog/` |
| Pattern landing page | Create a page using 4+ patterns, e.g. Hero Store + Features Three + Testimonials + CTA Banner |

### Metrics to capture per page

- Performance (0–100)
- Accessibility (0–100)
- Best Practices (0–100)
- SEO (0–100)
- FCP, LCP, INP, TBT, CLS, TTI (raw values)

### Record results

Fill in `github-org-setup/squirrels-demo/baseline/scamper-report-v1.1.0.md`.

**Blocker:** If Accessibility < 90 on any page, fix before proceeding.

**Scamper Score (baseline)** = average Performance score across all 6 standard pages. Record it at the top of the Scamper Report.

---

## T7.2 — Asset Audit

**Goal:** Understand the full payload before cutting anything.

### Known issues from static code analysis (pre-live audit)

These were identified by reading the source before the live demo was available:

| Issue | File | Priority |
|-------|------|----------|
| jQuery dependency for 13-line mobile menu | `assets/js/main.js`, `functions.php` | High — ~30KB gzipped for a feature vanilla JS handles in 4 lines |
| Fonts not enqueued | `functions.php` | High — CSS vars reference Geist/Inter/JetBrains Mono but no `wp_enqueue_style` loads them; theme silently falls back to system fonts |
| `brand-tokens.css` not enqueued | `functions.php` | Medium — 13KB token file exists but is never loaded; CSS fallback values work but the full token system is unreachable |
| No WooCommerce asset conditionals | `functions.php` | Medium — all CSS/JS loads on every page; shop-specific styles load on the blog |
| Pattern CSS bundled into `main.css` | `assets/css/main.css` | Low — ~4KB of pattern styles loads on pages that have no patterns |
| `brand-tokens.css` loaded separately from `main.css` | `functions.php` | Low — if tokens are enqueued in T7, that's two CSS requests where one (or inline) would serve better |

### Live audit checklist (complete after L3 is up)

Run in Chrome DevTools → Network tab, slow 3G throttling:

- [ ] Record total CSS transfer size (compressed)
- [ ] Record total JS transfer size (compressed)
- [ ] Identify render-blocking resources (Coverage tab → reload)
- [ ] Record unused CSS % (Coverage tab)
- [ ] Record unused JS % (Coverage tab)
- [ ] Check WebP/AVIF image adoption on product images
- [ ] Check lazy-load attribute on below-fold images
- [ ] Identify any third-party scripts (Analytics, chat, etc.)
- [ ] Run `wp --info` on server to confirm OPcache is enabled

Fill in the Asset Audit section of `scamper-report-v1.1.0.md`.

---

## T7.2.5 — Asset Inventory

**Goal:** Produce a permanent, per-asset reference table that answers for every CSS and JS file: what it is, where it loads, why it's there, and what should happen to it. This table is added to the Scamper Report and updated with each major release.

### How to build the inventory

1. Open the demo site in Chrome with the Network panel open (DevTools → Network → filter CSS / JS)
2. Load each page type (homepage, shop, product, cart, blog) and note which assets appear
3. For each asset, record the columns below

### Inventory table format

| Asset | Raw size | Gzip size | Loads on | Conditional? | Deferrable? | Action |
|-------|----------|-----------|----------|--------------|-------------|--------|
| `main.css` | | | All pages | No | No (render-critical) | Keep; consolidate tokens into it |
| `brand-tokens.css` | 13.8KB | | **Nowhere** | No | — | Merge into `main.css` or inline `:root` block |
| `style.css` (root) | ~0.5KB | | All pages | No | No | Keep (WP required) |
| `main.js` | 406B | | All pages | No | Yes (already footer) | Remove jQuery dep; keep vanilla version |
| `jquery.js` (WP core) | ~87KB | ~30KB | All pages (via theme) | No | No | Remove theme dep; WC still loads it on shop pages |
| `demo-import.css` | 1.5KB | | Admin only | Yes (`is_admin`) | — | Already conditional; keep |
| `demo-import.js` | 1.6KB | | Admin only | Yes (`is_admin`) | — | Already conditional; keep |
| WooCommerce CSS | (measure) | | Shop/product/cart/checkout | Partial | — | Add `squirrels_is_woocommerce_page()` conditional |
| `wc-cart-fragments.js` | (measure) | | All pages | No | — | Gate with `is_cart() \|\| is_checkout()` if no header cart count |

### Inventory checklist

- [ ] Network panel recorded for homepage (desktop, no cache)
- [ ] Network panel recorded for `/shop/`
- [ ] Network panel recorded for a product page
- [ ] Network panel recorded for `/cart/`
- [ ] Network panel recorded for `/blog/`
- [ ] All assets identified, sized (raw + gzip), and assigned an action
- [ ] Table filled in `scamper-report-v1.1.0.md → Asset Inventory` section

### Decision: brand tokens consolidation

The brand-tokens.css situation requires a one-time architectural decision before T7.3 begins. There are two valid paths — choose one and do not maintain both:

| Path | Description | Pros | Cons |
|------|-------------|------|------|
| **A — Inline `:root` block** | Extract only the `:root {}` CSS vars and echo them via `wp_head` at priority 1 | Zero extra HTTP request; tokens available before any CSS parses | Removes tokens from browser DevTools stylesheet view |
| **B — Merge into `main.css`** | Copy the `:root` block into `main.css` at the top; delete `brand-tokens.css` | Single stylesheet; simple; DevTools shows tokens clearly | Increases `main.css` size (manageable); `brand-tokens.css` becomes dead file |

**Recommendation: Path B.** Merge during T7.3. One source of truth, one file, no `file_get_contents` at runtime. Archive `brand-tokens.css` as a design reference document (rename to `brand-tokens.reference.css`) so the token documentation isn't lost.

---

## T7.3 — CSS Optimization

### Priority 1: Inline critical CSS or load tokens correctly

**Problem:** `brand-tokens.css` (13KB) is not enqueued. Main CSS vars have hardcoded fallbacks, which works but defeats the token system.

**Options:**
- A: Enqueue `brand-tokens.css` before `main.css` (adds one HTTP request but correct)
- B: Merge tokens into `main.css` via build step (one request, correct)
- C: Inline the `:root {}` token block in `<head>` via `wp_head` (zero extra request, fastest)

**Recommended:** Option C — inline the `:root` block. Tokens are ~2KB uncompressed; inlining avoids a blocking request.

Implementation in `functions.php`:

```php
function squirrels_inline_tokens() {
    $tokens = file_get_contents( SQUIRRELS_DIR . '/assets/css/brand-tokens.css' );
    // Extract only the :root block
    if ( preg_match( '/:root\s*\{[^}]+\}/s', $tokens, $match ) ) {
        echo '<style id="squirrels-tokens">' . $match[0] . '</style>';
    }
}
add_action( 'wp_head', 'squirrels_inline_tokens', 1 );
```

### Priority 2: Pattern CSS as separate file (conditional load)

**Problem:** ~4KB of pattern CSS loads on every page including blog posts and WooCommerce pages with no patterns.

**Option:** Move pattern styles to `assets/css/patterns.css` and enqueue only when Gutenberg is active on the current page:

```php
if ( function_exists( 'has_blocks' ) && has_blocks() ) {
    wp_enqueue_style( 'squirrels-patterns', SQUIRRELS_URI . '/assets/css/patterns.css', array( 'squirrels-main' ), SQUIRRELS_VERSION );
}
```

### Priority 3: CSS coverage audit

- [ ] Run DevTools Coverage on homepage, shop, blog
- [ ] Identify selectors with 0% usage on each page
- [ ] Remove or consolidate dead rules
- [ ] Check for duplicate `color`, `padding`, `margin` declarations
- [ ] Verify CSS custom property cascade is working end-to-end

---

## T7.4 — JavaScript Optimization

### Priority 1: Remove jQuery dependency

**Problem:** `main.js` uses jQuery `$()` only for mobile menu toggle. jQuery is ~30KB gzipped and blocks rendering if not deferred.

**Current code (`assets/js/main.js`):**
```js
( function ( $ ) {
    $( '.squirrels-menu-toggle' ).on( 'click', function () {
        var $nav = $( '.squirrels-main-navigation' );
        var expanded = $( this ).attr( 'aria-expanded' ) === 'true';
        $( this ).attr( 'aria-expanded', String( ! expanded ) );
        $nav.toggleClass( 'toggled' );
    } );
} )( jQuery );
```

**Replacement (vanilla JS, no jQuery):**
```js
( function () {
    'use strict';
    var toggle = document.querySelector( '.squirrels-menu-toggle' );
    if ( ! toggle ) return;
    toggle.addEventListener( 'click', function () {
        var expanded = this.getAttribute( 'aria-expanded' ) === 'true';
        this.setAttribute( 'aria-expanded', String( ! expanded ) );
        document.querySelector( '.squirrels-main-navigation' ).classList.toggle( 'toggled' );
    } );
} )();
```

Remove the `array( 'jquery' )` dependency in `functions.php`:
```php
// Before
wp_enqueue_script( 'squirrels-main', ..., array( 'jquery' ), ..., true );

// After
wp_enqueue_script( 'squirrels-main', ..., array(), ..., true );
```

WooCommerce requires jQuery itself — removing the theme's jQuery dependency does not remove jQuery from WooCommerce pages. This only removes it from non-WooCommerce pages.

### Priority 2: Conditional comment-reply script

Already conditional — no change needed.

### Priority 3: WooCommerce conditional asset loading

Add a `squirrels_is_woocommerce_page()` helper and use it to gate WooCommerce-related JS:

```php
function squirrels_is_woocommerce_page() {
    return function_exists( 'is_woocommerce' ) &&
           ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() );
}
```

---

## T7.5 — WooCommerce Optimization

### Cart fragment AJAX

Verify cart fragment AJAX (`wc-cart-fragments`) is loading correctly. On non-cart pages, WooCommerce enqueues cart fragments by default — this can be disabled on pages that don't show a cart count:

```php
add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_cart() && ! is_checkout() ) {
        wp_dequeue_script( 'wc-cart-fragments' );
    }
}, 99 );
```

**Note:** Only do this if the header does not display a live cart count. If the cart icon shows item count in the header, `wc-cart-fragments` must stay on all pages.

### Pattern performance on shop pages

- [ ] Verify `product-collection` block renders without layout shift (CLS)
- [ ] Confirm product images are lazy-loaded by the block
- [ ] Check that `woocommerce/product-collection` queryId is unique across inserted patterns (current: product-grid=0, best-sellers=1, new-arrivals=2 — correct)

### HPOS compatibility

Already declared. No action needed.

---

## T7.6 — Image Optimization

### Responsive images

WordPress core generates `srcset` automatically for uploaded images. Verify:

- [ ] Product images uploaded at 800×800 minimum
- [ ] `add_theme_support( 'post-thumbnails' )` is declared
- [ ] No `width`/`height` attributes hardcoded in PHP templates
- [ ] `loading="lazy"` present on below-fold images (WordPress adds this automatically for `wp_get_attachment_image` calls)

### SVG logo/icon optimization

- [ ] If SVG logo is used via Customizer, confirm it passes through `wp_kses_post` cleanly
- [ ] Run `svgo` on `assets/brand/squirrels-icon.svg` to minimize bytes

### Demo/pattern placeholder images

The demo uses `picsum.photos` URLs in `featured-categories.php`. On the live demo site:
- Replace with actual category images in the block editor
- Picsum images are fine for the pattern inserter preview but not for production use

---

## T7.7 — Font Optimization

### Current state

Fonts are **not loaded**. The CSS system references them by name via CSS custom properties but no font files are fetched. The theme silently falls back to system fonts.

This is actually a **valid performance choice** for a theme that wants zero web font overhead. The tradeoff: the design looks different from the brand spec on systems without Geist or Inter installed.

**Decision required before implementing:**

| Approach | Performance | Brand fidelity | Complexity |
|----------|-------------|----------------|------------|
| System font stack only (current) | Best | Lower | None |
| Self-hosted Geist + Inter subset | Good | High | Medium |
| Google Fonts CDN | Lower | High | Low |
| Variable fonts (self-hosted) | Good | High | Medium-high |

**Recommended:** Self-host a subset of Inter (latin only, weights 400+600) and Geist (latin, weight 600). Use `font-display: swap` and `<link rel="preload">`.

Implementation pattern in `functions.php`:

```php
// Preload critical fonts
function squirrels_preload_fonts() {
    echo '<link rel="preload" href="' . SQUIRRELS_URI . '/assets/fonts/inter-latin-400.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
    echo '<link rel="preload" href="' . SQUIRRELS_URI . '/assets/fonts/inter-latin-600.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
    echo '<link rel="preload" href="' . SQUIRRELS_URI . '/assets/fonts/geist-latin-600.woff2" as="font" type="font/woff2" crossorigin>' . "\n";
}
add_action( 'wp_head', 'squirrels_preload_fonts', 1 );
```

Add `@font-face` declarations to `main.css` with `font-display: swap`.

**Files needed:** Create `assets/fonts/` directory with WOFF2 subsets.

---

## T7.8 — Final Benchmark

After all optimization work is complete:

1. Clear all server-side caches and browser cache
2. Disable any caching plugins for the test run
3. Re-run the same Lighthouse CI config:

```bash
lhci autorun --config=lighthouserc.json
```

4. Fill in the "After" column in `scamper-report-v1.1.0.md`
5. Calculate the improvement for each metric
6. Calculate the new Scamper Score
7. Verify all Scamper minimum thresholds pass

### Minimum pass criteria for T7 complete

| Metric | Target |
|--------|--------|
| Performance (all pages) | ≥ 85 |
| Accessibility (all pages) | ≥ 95 |
| Scamper Score | ≥ 85 |
| LCP | < 2.5s |
| INP | < 200ms |
| TBT | < 200ms |
| CLS | < 0.05 |

If any page fails a threshold: identify the cause, fix it, and re-run. Do not tag until all pages pass.

---

## T7 Completion Checklist

Run in the recommended execution order:

- [ ] **T7.1** — Baseline captured, Scamper Report started, Scamper Score (baseline) recorded
- [ ] **T7.2** — Asset audit complete (Network panel, Coverage tab), all findings documented
- [ ] **T7.2.5** — Asset Inventory table complete; brand-token consolidation path chosen (A or B)
- [ ] **T7.4** — jQuery removed from theme; vanilla menu toggle verified; `main.js` dependency array empty
- [ ] **T7.7** — Font strategy decided and implemented; `font-display: swap` confirmed
- [ ] **T7.3** — CSS: tokens merged/inlined, pattern CSS conditional, dead rules removed, single token source
- [ ] **T7.5** — `squirrels_is_woocommerce_page()` added; cart fragments gated; WC asset conditionals in place
- [ ] **T7.6** — Images: `srcset` verified, lazy-load confirmed, SVGs run through `svgo`
- [ ] **T7.8** — Final benchmark complete; all Scamper thresholds pass; Scamper Report published

**Tag on completion:** `v1.2.0`

---

## After T7

| Next | Work |
|------|------|
| **T9** | Accessibility Excellence — WCAG AA → AAA audit, axe-core integration |
| **T10** | SEO & Schema — structured data, Open Graph, sitemap |
| **T11** | Workshop Pro Plugin |
