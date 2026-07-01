# Treehouse — Documentation for Squirrels

> **Status:** In progress · Pattern Library section complete

Treehouse is the documentation portal for the Squirrels ecosystem. It lives at [treehouse.squirrels.ninja](https://treehouse.squirrels.ninja).

## Planned documentation

### Getting Started
- Installation guide
- Using the child theme
- Importing a starter site (Acorn)
- Customizer reference

### Theme Reference
- Template hierarchy
- Available hooks and filters
- CSS custom properties reference
- WooCommerce template overrides

### Pattern Library ✓
- [Pattern Overview](#pattern-overview)
- [Recommended workflow](#recommended-page-building-workflow)
- [Pattern Reference](#pattern-reference)

### Development
- Setting up a local development environment
- Building a child theme
- Creating custom Acorn starter packs
- Contributing to Squirrels

### Workshop (Pro)
- Installing Workshop
- Advanced blocks reference
- Email designer guide
- SEO & Schema configuration

---

## Pattern Overview

Squirrels ships with a native **block pattern library** — 12 pre-built page sections you can insert and customise in the WordPress block editor. No page builder is required.

### Pattern categories

Patterns are grouped into two categories visible in the block editor inserter:

| Category | Description | Count |
|----------|-------------|-------|
| **Squirrels** | General-purpose sections for any page | 7 |
| **Squirrels WooCommerce** | Live commerce sections; hidden when WooCommerce is inactive | 6 |

### Where to find patterns

1. Open any page or post in the block editor
2. Click **+** (Add Block) or press `/` in an empty paragraph
3. Switch to the **Patterns** tab in the panel
4. Open **Squirrels** or **Squirrels WooCommerce**
5. Hover a pattern to preview it; click to insert

### Recommended page-building workflow

Patterns are designed to be combined into full pages. A typical homepage for a WooCommerce store:

| Order | Pattern | Purpose |
|-------|---------|---------|
| 1 | **Hero Store** | Opening section with headline and shop CTAs |
| 2 | **Featured Categories** | Direct visitors to product sections |
| 3 | **New Arrivals** or **Best Sellers** | Live product grid |
| 4 | **Trust Badges** | Reinforce checkout confidence |
| 5 | **Testimonials** | Social proof |
| 6 | **Newsletter Signup** | Grow email list |
| 7 | **CTA Banner** | Final conversion push |

A content page or landing page might use: **Hero Centered** → **Three Feature Cards** → **Testimonials** → **CTA Banner**.

### Editing patterns after inserting

After inserting a pattern, everything is editable:

**Editing text**
Click any heading or paragraph to select it. Type directly to change the content. Press Enter for a new paragraph within the same block, or click outside to deselect.

**Editing buttons**
Click a button to select it. The text is editable in place. Click the link icon (🔗) in the toolbar to change the button URL.

**Replacing images**
Click an image block. In the block toolbar, click **Replace** to open the Media Library or upload a new image. For the Featured Categories pattern, replace the placeholder picsum.photos images with your actual category images.

**Reordering sections**
Use the **↑ ↓** arrows in the block toolbar to move a section up or down. For larger reordering, open **View → List View** to see the full page structure and drag blocks into position.

**Adjusting spacing**
Select the outer `Group` block for a pattern. In the sidebar, use **Dimensions → Padding** to adjust the section's vertical and horizontal spacing.

---

## Pattern Reference

### Hero Centered

**Slug:** `squirrels/hero-centered`  
**Category:** Squirrels  
**WooCommerce required:** No

**Purpose:** Opening hero for landing pages, homepages without a store, and content-first pages. Keeps visitors focused with a single headline and CTA.

**Typical use:** Homepage of a non-store site, an about page hero, a launch announcement page.

**Editable areas:**
- H1 heading
- Subtext paragraph
- Button label and URL

---

### Hero Store

**Slug:** `squirrels/hero-store`  
**Category:** Squirrels, Squirrels WooCommerce  
**WooCommerce required:** No (but designed for store use)

**Purpose:** Store homepage opening section. Includes an eyebrow label, headline, two buttons (primary shop + secondary best sellers), and a decorative sale badge.

**Typical use:** WooCommerce store homepage, seasonal sale launch page.

**Editable areas:**
- Eyebrow label (e.g. "New collection")
- H1 heading
- Paragraph subtext
- Button 1 label + URL (primary — links to `/shop/` by default)
- Button 2 label + URL (secondary — links to `/shop/?orderby=popularity` by default)
- Sale badge text (percentage, supporting copy)

---

### Three Feature Cards

**Slug:** `squirrels/features-three`  
**Category:** Squirrels  
**WooCommerce required:** No

**Purpose:** Communicates three key benefits or features of the product, service, or theme. Typically placed below the hero.

**Typical use:** "Why choose us" section, theme feature highlights, service benefits.

**Editable areas:**
- Section heading and subtext
- Each card: emoji icon, H3 heading, description paragraph
- Replace emoji icons with SVG icons or the WordPress Icon block for a polished result

---

### CTA Banner

**Slug:** `squirrels/cta-banner`  
**Category:** Squirrels  
**WooCommerce required:** No

**Purpose:** Full-width conversion section, typically placed near the bottom of a page. Orange background with white text inverts the visual weight of the page and draws attention.

**Typical use:** End-of-page conversion push, download CTA, signup prompt.

**Editable areas:**
- H2 heading
- Paragraph subtext
- Button label and URL
- Background color (via block settings → Color → Background)

---

### Testimonials

**Slug:** `squirrels/testimonials`  
**Category:** Squirrels  
**WooCommerce required:** No

**Purpose:** Social proof section with two customer quotes. The CSS applies curly quotation marks automatically via `::before`/`::after` — do not add manual quote characters.

**Typical use:** Store homepage social proof, services page trust builder, pricing page below the plan comparison.

**Editable areas:**
- Each testimonial: quote text, customer name, customer role
- Add additional columns by duplicating a `Column` block

---

### Trust Badges

**Slug:** `squirrels/trust-badges`  
**Category:** Squirrels  
**WooCommerce required:** No

**Purpose:** Four-column row of trust signals that reinforce checkout confidence. Designed to appear above or below product grids and near the checkout area.

**Typical use:** Above the footer, below a product grid, on the cart or checkout page.

**Editable areas:**
- Each badge: emoji icon, H4 heading, description
- Change the four badges to match your actual policies (return window, shipping threshold, etc.)

---

### Newsletter Signup

**Slug:** `squirrels/newsletter-signup`  
**Category:** Squirrels  
**WooCommerce required:** No

**Purpose:** Email list growth section with a clean inline form. Ships with a placeholder `action="#"` that must be replaced with your email platform's endpoint.

**Typical use:** Bottom of the homepage, blog archive footer, checkout confirmation page.

**Editable areas:**
- H2 heading
- Subtext paragraph
- Privacy note below the form
- Form action URL (in the HTML block — replace `#` with your platform endpoint or swap the HTML block for your platform's shortcode block)

**Connecting your email platform:**

| Platform | Method |
|----------|--------|
| **Mailchimp** | Replace the HTML block with a Mailchimp for WordPress shortcode block: `[mc4wp_form id="1"]` |
| **MailPoet** | Replace with: `[mailpoet_form id="1"]` |
| **Klaviyo** | Use the Klaviyo Forms plugin; replace the HTML block with the Klaviyo embed snippet |
| **FluentCRM** | Use FluentForms connected to FluentCRM; replace the HTML block with a FluentForms shortcode |
| **ConvertKit** | Use the ConvertKit for WordPress plugin; replace with the ConvertKit form shortcode |

---

### Featured Categories

**Slug:** `squirrels/featured-categories`  
**Category:** Squirrels WooCommerce  
**WooCommerce required:** Yes

**Purpose:** Directs visitors to product categories with a visual image-forward layout. Placeholder images from picsum.photos are included — replace with real category imagery.

**Typical use:** Below the homepage hero, on a dedicated "Shop" landing page.

**Editable areas:**
- Section heading
- Each column: image, H3 category name, product count, button label + URL
- Update button URLs to your actual WooCommerce category slugs (`/product-category/your-slug/`)
- Replace images with real category photography

---

### Sale Banner

**Slug:** `squirrels/sale-banner`  
**Category:** Squirrels, Squirrels WooCommerce  
**WooCommerce required:** No (but designed for store promotions)

**Purpose:** Horizontal announcement bar for active sales or promotions. Uses the Squirrels accent red (`#B91C1C`) for urgency. Collapses to a vertical stack on mobile.

**Typical use:** Top of the shop archive page, homepage during a sale period, above the cart.

**Editable areas:**
- "SALE" label text (or remove the label block for a cleaner look)
- Headline text (discount percentage and description)
- Sub-text (conditions, expiry)
- Button label and URL

---

### Best Sellers

**Slug:** `squirrels/best-sellers`  
**Category:** Squirrels WooCommerce  
**WooCommerce required:** Yes

**Purpose:** Live product grid showing the three best-selling products, ordered by purchase count. Queries the WooCommerce database directly — no manual product selection.

**Typical use:** Homepage below the hero, a dedicated "Shop" page after category navigation.

**Editable areas:**
- Section heading
- "See all" link URL (default: `/shop/?orderby=popularity`)
- Product count: select the `Product Collection` block and change `perPage` in the query settings
- Column count: change `columns` in the block settings

---

### New Arrivals

**Slug:** `squirrels/new-arrivals`  
**Category:** Squirrels WooCommerce  
**WooCommerce required:** Yes

**Purpose:** Live product grid showing the four newest products ordered by publish date. Automatically reflects new products without manual updates.

**Typical use:** Homepage for stores that add products regularly, email campaign landing pages.

**Editable areas:**
- Section heading
- "See all" link URL (default: `/shop/?orderby=date`)
- Product count: default is 4 in a 4-column grid; change `perPage` and `columns` in block settings
- Switch to a 3-column layout by updating `columns` to `3`

---

### Product Grid

**Slug:** `squirrels/product-grid`  
**Category:** Squirrels WooCommerce  
**WooCommerce required:** Yes

**Purpose:** A curated 3-product featured grid. Identical in structure to Best Sellers but defaults to the most recently published products. Designed as a neutral "featured products" section.

**Typical use:** Homepage general product showcase, landing page product highlight.

**Editable areas:**
- Section heading ("Featured products")
- "View all products" link URL
- Query: change `orderBy` to `popularity`, `rating`, or `date` in block settings to control which products appear

---

## Tech stack

The documentation site is built with [Docusaurus](https://docusaurus.io/) (React-based static site generator). Source is Markdown, output is a static site deployed to Cloudflare Pages.

## Contributing documentation

Documentation contributions are welcome. See [CONTRIBUTING.md](https://github.com/Squirrels-Ninja/.github/blob/main/CONTRIBUTING.md) for the writing style guide.

## Links

- [Live docs](https://treehouse.squirrels.ninja)
- [Squirrels theme](https://github.com/Squirrels-Ninja/squirrels)
- [Open a docs issue](https://github.com/Squirrels-Ninja/treehouse/issues)
