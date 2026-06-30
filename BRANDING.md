# Squirrels — Branding & Product Positioning

---

## 1. Product Positioning

### What Squirrels Is

Squirrels is a clean, fast WordPress + WooCommerce theme built for people who want a professional online store without the overhead of a page builder, a proprietary framework, or a recurring SaaS subscription. It ships as a standard WordPress theme ZIP, activates in one click, and includes three starter sites so the first visit to your homepage looks finished — not blank.

### Who It Is For

**Primary audience**
- Small business owners launching their first WooCommerce store
- Freelancers and agencies building client stores on a deadline
- WordPress developers who want a clean, standards-compliant base to customise

**Secondary audience**
- Bloggers adding an e-commerce component to an existing WordPress site
- Product creators selling digital goods who want a simple, credible storefront
- Studio owners and makers who need a presentable shop without a design budget

### Why It Exists

Most WooCommerce themes are one of two things: a bloated multipurpose theme with 40,000 lines of shortcode logic bolted on, or a stripped-down starter that requires a paid page builder to look like the demo. Neither is the right foundation for a business.

Squirrels exists to occupy the middle ground: genuinely complete out of the box, genuinely customisable without a page builder, and genuinely simple to maintain long-term.

### What Problem It Solves

**The demo-to-reality gap.** Most WooCommerce theme demos look impressive and then require $300 in plugins and six hours of configuration to reproduce. Squirrels ships three ready-to-import starter sites that represent what the theme actually looks like when activated — no upsell required.

**Framework dependency.** Themes built on Bootstrap or other CSS frameworks carry dead weight: styles you don't use, JavaScript you didn't ask for, and update cycles outside your control. Squirrels uses native WordPress APIs and its own minimal CSS custom-property system.

**The Customizer fallout.** The `WP_Customize_Control` fatal error — caused by themes loading customizer classes at the wrong point in the WordPress lifecycle — has broken more stores than most developers know. Squirrels solves this at the architecture level with a lazy-load fix baked into the first release.

### Why Choose Squirrels Over a Generic WooCommerce Theme

| Generic theme | Squirrels |
|--------------|----------------|
| 3–6 MB download | ~61 KB download |
| Requires page builder for demos | Three demo packs, one-click import |
| Bootstrap or proprietary CSS | CSS custom properties, no framework |
| Customizer broken on fresh installs (WP_Customize_Control fatal) | Load-order fix in v1.0.0 |
| Child theme undocumented | Child theme packaged and documented separately |
| Update = potential layout break | Clean template hierarchy, override-safe |
| WooCommerce compatibility declared nowhere | HPOS compatibility declared, gallery features registered |

---

## 2. Tagline Options

Ten candidates. Preferred tagline is marked.

1. **"Your store, ready in minutes."** *(recommended — direct, benefit-led)*
2. "WooCommerce without the bloat."
3. "A clean start for every online store."
4. "Launch your store. Keep it simple."
5. "Built for WooCommerce. Built to last."
6. "Fast, clean, and ready to sell."
7. "The theme your store deserves."
8. "Start selling. Stop configuring."
9. "One theme. Every store."
10. "Clean design. Real commerce."

**Recommended:** *"Your store, ready in minutes."*

Why: It is first-person, benefit-forward, and answers the most common question a prospective user has ("how long will this take?"). It also sets an expectation the theme can deliver — starter site import genuinely gets a homepage live in under ten minutes.

**Runner-up:** *"Start selling. Stop configuring."*

Why: Strong contrast structure that calls out the pain point (too much configuration in WooCommerce themes) without naming a competitor.

---

## 3. Logo Direction

Three concepts. No image files — described for handoff to a designer.

---

### Concept A — "The Wordmark" (Recommended)

**Visual idea**
A clean horizontal wordmark with a small, contained icon to the left. The word "Thematic" is set in regular weight; "Store" is set in bold. The weight shift communicates that "Store" is the product category and "Thematic" is the brand differentiator.

**Typography direction**
- Typeface: Geist (free, open-source) or Inter as a fallback
- "Thematic": 400 weight, tracked +10
- "Store": 700 weight, no tracking
- Wordmark cap-height: 28–32px at standard usage

**Color palette**
- Primary: `#0073aa` (WordPress blue — signals familiarity to the WordPress audience)
- Text: `#1a1a1a`
- White reverse variant for dark backgrounds

**Icon idea**
A single abstract mark to the left of the wordmark: a rounded square (representing a theme frame / browser window) with a small upward-pointing price tag inside. The price tag stroke matches the "T" stroke width of the wordmark. The rounded square is the same colour as the "Store" word.

**Usage notes**
- Full wordmark for website headers, ZIP README, and social preview
- Icon-only for favicon, app icon, and 16–32px usages
- Reverse (white) variant for the theme's own `screenshot.png` background

---

### Concept B — "The Monogram"

**Visual idea**
A bold geometric monogram: the letters "T" and "S" interlocked or stacked inside a rounded square container. No separate wordmark — the logo is the monogram plus the spelled-out name set beneath in small caps.

**Typography direction**
- Typeface: DM Sans (open-source) or Outfit
- Full name beneath: 500 weight, all caps, tracked +60
- Monogram letterforms: custom-drawn or derived from the typeface, simplified to 2-stroke geometry

**Color palette**
- Container fill: `#0073aa`
- Letterforms: white
- Name text: `#1a1a1a`
- Optional accent: `#e74c3c` on the "S" stroke only

**Icon idea**
The "TS" monogram in the rounded square is the icon. At small sizes (favicon), only the rounded square with a single "T" is shown.

**Usage notes**
- Works well as a social media profile image (square format)
- Best for contexts where brand recognition is established — less descriptive than Concept A
- Avoid at sizes below 24px; switch to single-letter favicon at that scale

---

### Concept C — "The Accent Line"

**Visual idea**
A minimal all-lowercase logotype — `thematic store` — with a short horizontal accent rule beneath the word "thematic" only, in the accent colour. No icon. The rule acts as an underline that visually separates the two words while keeping them on one line.

**Typography direction**
- Typeface: Sora or Space Grotesk (open-source, strong at display sizes)
- Both words in 300 or 400 weight — no weight contrast
- Entirely lowercase
- The accent rule is 2px, left-aligned with the "t", ending at the "c"

**Color palette**
- Text: `#1a1a1a`
- Accent rule: `#e74c3c` (the theme's accent/sale colour)
- White reverse variant for dark backgrounds
- Rule remains `#e74c3c` on dark backgrounds (it pops)

**Icon idea**
No standalone icon. For favicon usage, a circle containing a lowercase `t` in the display typeface, with the accent rule beneath it inside the circle.

**Usage notes**
- Best suited for a marketing/editorial positioning (blog, docs site)
- Too subtle for a product README or ZIP file header — use Concept A there
- Strong candidate if Squirrels eventually targets a design-aware or agency audience

---

## 4. Colour System (All Concepts)

| Token | Value | Usage |
|-------|-------|-------|
| `--ts-primary` | `#0073aa` | Primary action, links, header |
| `--ts-accent` | `#e74c3c` | Sale badges, CTA buttons, highlights |
| `--ts-text` | `#1a1a1a` | Body copy |
| `--ts-muted` | `#666666` | Meta, captions |
| `--ts-bg` | `#ffffff` | Page background |
| `--ts-surface` | `#f8f9fa` | Cards, panels |
| `--ts-border` | `#dddddd` | Dividers |

These match the theme's own CSS custom properties so the brand and the product are visually consistent.
