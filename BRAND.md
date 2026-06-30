# Squirrels — Brand Guidelines

**Version:** 1.0  
**Last updated:** 2026-06-30

---

## 1. Brand Foundation

### Personality
**Fast. Curious. Thoughtfully Built.**

Squirrels is a developer-focused WordPress theme. The brand reads like a senior engineer who also cares about craft — precise, quick, and genuinely interested in the work. Not corporate. Not a cartoon.

### Voice
- Confident without being arrogant
- Technical without being intimidating
- Warm without being casual
- Direct sentences, active voice, zero jargon for its own sake

### What Squirrels is not
- Not a startup-bro brand ("move fast, break things")
- Not a whimsical cartoon mascot
- Not a generic "minimal WP theme" with no identity

### The name
The squirrel is a symbol of preparation, agility, and intelligence. It moves quickly and caches its work. That's the Squirrels developer: fast, forward-thinking, always ready.

---

## 2. Logo System

### Primary Mark
The primary mark is the **geometric squirrel icon** — a clean, silhouetted squirrel form on a warm orange rounded square. The icon is built from simple geometric shapes: arched stroke for the tail, circles and ellipses for the body and head, polygons for the ears.

### Logo Files

| File | Use case |
|------|----------|
| `squirrels-icon.svg` | Standalone icon — avatars, app icons, small contexts |
| `squirrels-favicon.svg` | Simplified for favicon (16–48px), browser tabs |
| `squirrels-logo-horizontal.svg` | Primary logo — header, README, most contexts |
| `squirrels-logo-stacked.svg` | Square contexts — splash screens, app stores |
| `squirrels-logo-on-dark.svg` | White wordmark — dark/colored backgrounds |
| `squirrels-logo-mono-black.svg` | Single-ink print, dark embossing |
| `squirrels-logo-mono-white.svg` | White ink, reversed print, dark embossing |
| `squirrels-og-image.svg` | Open Graph social card (1200×630) |
| `squirrels-github-banner.svg` | GitHub profile / repo social preview (1280×640) |

All files are in `assets/brand/`. All SVG text uses `font-family="Geist, Inter, -apple-system, sans-serif"` — convert text to paths for production rasterization.

### Clear Space
Maintain clear space equal to the height of the icon (`1× icon height`) on all four sides of any logo variant. Never place text, other logos, or strong visual elements inside this zone.

### Minimum Sizes
| Context | Minimum size |
|---------|-------------|
| Icon (squaremark alone) | 16px × 16px |
| Horizontal logo | 120px wide |
| Stacked logo | 80px wide |
| Favicon (SVG) | renders at any size |

### Incorrect Usage
- Do not stretch or squish the logo
- Do not rotate the logo
- Do not use the wordmark without the icon in hero contexts
- Do not apply drop shadows to the logo
- Do not use the logo on backgrounds with insufficient contrast
- Do not recreate the squirrel mark by hand — use the provided SVG
- Do not place the logo on busy photography without a backing plate

### Logo on Backgrounds
| Background type | Recommended version |
|-----------------|---------------------|
| White / cream | `squirrels-logo-horizontal.svg` |
| Light colored | `squirrels-logo-horizontal.svg` or `-mono-black` |
| Dark / charcoal | `squirrels-logo-on-dark.svg` |
| Orange / brand primary | `squirrels-logo-mono-white.svg` |
| Photographic | White version on a dark overlay, or black on light overlay |

---

## 3. Color Palette

### Primary Palette

| Name | HEX | RGB | HSL | CSS Var |
|------|-----|-----|-----|---------|
| **Warm Orange** | `#E8621A` | 232, 98, 26 | 22°, 81%, 51% | `--brand-orange` |
| **Forest Brown** | `#2B1506` | 43, 21, 6 | 22°, 76%, 10% | `--brand-brown` |
| **Nut Tan** | `#C47D2E` | 196, 125, 46 | 32°, 62%, 47% | `--brand-tan` |
| **Cream** | `#FDF5EC` | 253, 245, 236 | 32°, 88%, 96% | `--brand-cream` |
| **Charcoal** | `#1A1714` | 26, 23, 20 | 27°, 13%, 9% | `--brand-charcoal` |

### Orange Scale

| Step | HEX | Usage |
|------|-----|-------|
| 50  | `#FEF2E8` | Tinted backgrounds, hover states |
| 100 | `#FDD9BE` | Subtle highlights |
| 200 | `#FBBF94` | Inactive indicators |
| 300 | `#F8A06A` | Icon tints on dark backgrounds |
| 400 | `#F48040` | Lighter interactive states |
| 500 | `#E8621A` | **Brand primary — CTAs, icon background** |
| 600 | `#C94F10` | Hover state for primary button |
| 700 | `#A63E0A` | Active/pressed state |
| 800 | `#832E05` | High-contrast orange text |
| 900 | `#611F01` | Maximum contrast orange |

### Neutral Scale (warm-tinted)

| Step | HEX |
|------|-----|
| 0   | `#FFFFFF` |
| 50  | `#FAFAF9` |
| 100 | `#F5F4F2` |
| 200 | `#E8E6E2` |
| 300 | `#D5D2CC` |
| 400 | `#B0ABAA` |
| 500 | `#8A8480` |
| 600 | `#635E5A` |
| 700 | `#4A4542` |
| 800 | `#342F2C` |
| 900 | `#1A1714` |

> The neutral scale has a warm (brown-tinted) bias. Never use pure cool grays (`#808080`, `#EEEEEE`) — they clash with the warm brand palette.

### Semantic Colors

| Name | HEX | Light | Dark | CSS Var |
|------|-----|-------|------|---------|
| **Success** | `#1A7A3C` | `#D6F0DF` | `#0D4E25` | `--brand-success` |
| **Warning** | `#D4A017` | `#FBF0CC` | `#8F6A0A` | `--brand-warning` |
| **Error** | `#B91C1C` | `#FEE2E2` | `#7F1D1D` | `--brand-error` |
| **Info** | `#1D5E8C` | `#DBEAFE` | `#1E3A5F` | `--brand-info` |

### Color Usage Rules
- **Orange** is used sparingly as an accent — primary buttons, links, the icon, and key callouts. Not for large background areas.
- **Charcoal** is the primary text color. Never pure black (`#000000`).
- **Cream** is the warm surface color for hero sections, sidebars, and card backgrounds.
- **Forest Brown** is used for headings on cream backgrounds and as a deep alternative to charcoal.

---

## 4. Typography

### Font Families

| Role | Font | Fallback |
|------|------|----------|
| **Headings** | Geist | Inter, -apple-system, sans-serif |
| **Body** | Inter | -apple-system, BlinkMacSystemFont, sans-serif |
| **Monospace** | JetBrains Mono | Fira Code, Cascadia Code, monospace |

**Obtaining the fonts:**
- Geist: [vercel.com/font](https://vercel.com/font) — free, open source (SIL OFL)
- Inter: [rsms.me/inter](https://rsms.me/inter/) — free, open source (SIL OFL)
- JetBrains Mono: [jetbrains.com/lp/mono](https://www.jetbrains.com/lp/mono/) — free, open source (SIL OFL)

All three fonts are licensed under SIL Open Font License 1.1. Self-host via `@font-face` or load from Google Fonts (Inter) / Bunny Fonts.

### Type Scale

| Token | Size | Rem | Use |
|-------|------|-----|-----|
| `--text-2xs` | 11px | 0.6875rem | Metadata, labels |
| `--text-xs` | 12px | 0.75rem | Small labels, badges |
| `--text-sm` | 14px | 0.875rem | UI labels, captions, buttons |
| `--text-base` | 16px | 1rem | Body copy (default) |
| `--text-lg` | 18px | 1.125rem | Large body, lead paragraphs |
| `--text-xl` | 20px | 1.25rem | H5, H6 |
| `--text-2xl` | 24px | 1.5rem | H4 |
| `--text-3xl` | 30px | 1.875rem | H3 |
| `--text-4xl` | 36px | 2.25rem | H2 |
| `--text-5xl` | 48px | 3rem | H1 |
| `--text-6xl` | 60px | 3.75rem | Display (hero) |
| `--text-7xl` | 72px | 4.5rem | Large display |

### Typography Rules
- Headings: Geist, weight 600 (semibold), letter-spacing −0.02em to −0.04em for large sizes
- Body: Inter, weight 400, line-height 1.65
- Code: JetBrains Mono, weight 400, never bold
- Minimum body size: 16px. Never go below 14px for body copy
- Use optical sizing at display sizes: `font-optical-sizing: auto`

---

## 5. UI Design Language

### Spacing Scale (4px grid)

All spacing follows a 4px base grid. Use the `--space-*` tokens from `brand-tokens.css`. Never use arbitrary pixel values.

```
4  → --space-1
8  → --space-2
12 → --space-3
16 → --space-4
24 → --space-6
32 → --space-8
48 → --space-12
64 → --space-16
```

### Border Radius

| Token | Size | Context |
|-------|------|---------|
| `--radius-sm` | 4px | Badges, chips, small inputs |
| `--radius-md` | 8px | Buttons, inputs (default) |
| `--radius-lg` | 12px | Cards, panels, dropdowns |
| `--radius-xl` | 16px | Modals, large cards |
| `--radius-2xl` | 24px | Feature blocks |
| `--radius-full` | 9999px | Pills, avatars, toggles |
| `--radius-icon` | 22% | Icon background (matches brand mark) |

### Shadows (warm-tinted)

```css
--shadow-sm:  0 1px 3px rgba(43,21,6, 0.08), 0 1px 2px rgba(43,21,6, 0.05)
--shadow-md:  0 4px 6px rgba(43,21,6, 0.08), 0 2px 4px rgba(43,21,6, 0.05)
--shadow-lg:  0 10px 15px rgba(43,21,6, 0.09), 0 4px 6px rgba(43,21,6, 0.05)
--shadow-xl:  0 20px 25px rgba(43,21,6, 0.10), 0 10px 10px rgba(43,21,6, 0.04)
--shadow-focus: 0 0 0 3px rgba(232,98,26, 0.30)  (orange focus ring)
```

Never use pure black box shadows. The warm brown base keeps shadows from looking out of place on cream and white surfaces.

### Button Styles

**Primary Button**
```
Background:    --brand-orange (#E8621A)
Text:          white
Hover bg:      --brand-orange-600 (#C94F10)
Border radius: --radius-md (8px)
Padding:       10px 20px
Font:          14px / weight 500
Shadow:        --shadow-sm
Transition:    100ms ease-in-out
```

**Secondary Button**
```
Background:    --brand-cream (#FDF5EC)
Text:          --brand-charcoal
Border:        1px solid --brand-neutral-200
Hover bg:      --brand-neutral-100
```

**Ghost Button**
```
Background:    transparent
Text:          --brand-orange
Hover bg:      --brand-orange-50
```

**Destructive Button**
```
Background:    --brand-error (#B91C1C)
Text:          white
```

### Card Style
```
Background:     white
Border:         1px solid --brand-neutral-200
Border radius:  --radius-lg (12px)
Shadow:         --shadow-sm
Hover shadow:   --shadow-md
Hover transform: translateY(−2px)
Padding:        --space-6 (24px)
Transition:     200ms ease-in-out
```

### Form Controls
```
Background:       white
Border:           1px solid --brand-neutral-300
Border (focus):   --brand-orange
Focus ring:       0 0 0 3px rgba(232,98,26, 0.30)
Border radius:    --radius-md (8px)
Padding:          8px 12px
Font size:        16px (body)
Label size:       14px / weight 500
Label color:      --brand-neutral-700
```

### Navigation Bar
```
Height:       64px
Background:   white
Border:       1px solid --brand-neutral-100
Link color:   --brand-neutral-700
Link hover:   --brand-charcoal
Active link:  --brand-orange
Font:         14px / weight 500
```

---

## 6. Icon Style

### Brand Icon Usage
- Always use the provided SVG files. Do not redraw the squirrel mark
- At 32px and below, use `squirrels-favicon.svg` (simplified version)
- The icon background (orange rounded square) is part of the mark — do not use the squirrel silhouette alone on white without the orange square

### UI Icons
- Style: Outlined, 1.5–2px stroke weight, rounded caps and joins
- Size grid: 16px, 20px, 24px, 32px
- Recommended library: Lucide Icons, Phosphor Icons, or Heroicons (all MIT/ISC)
- Never mix icon styles. Pick one library and use it consistently.
- Functional icons must have accessible `aria-label` or be accompanied by visible text

### Favicon Sizes
Generate from `squirrels-favicon.svg` using a tool like `sharp` or browser's native SVG favicon support:

| File | Size | Format | Context |
|------|------|--------|---------|
| `favicon.svg` | — | SVG | Modern browsers (preferred) |
| `favicon-16.png` | 16×16 | PNG | Browser tabs, legacy |
| `favicon-32.png` | 32×32 | PNG | Browser tabs, Retina |
| `favicon-48.png` | 48×48 | PNG | Windows sites list |
| `favicon.ico` | 16+32+48 | ICO | Maximum compatibility |
| `apple-touch-icon.png` | 180×180 | PNG | iOS home screen |
| `icon-192.png` | 192×192 | PNG | Android / PWA |
| `icon-512.png` | 512×512 | PNG | PWA splash screen |

---

## 7. Marketing Assets

### Open Graph Image (`squirrels-og-image.svg`, 1200×630)
The OG image uses:
- Cream background with warm orange left accent bar
- Large decorative icon (low-opacity, right side)
- Icon + wordmark + tagline + domain
- Used for all links shared on social media. Keep consistent with this layout.

Convert to PNG for use in `<meta property="og:image">`. Target file size: under 300 KB.

### GitHub Banner (`squirrels-github-banner.svg`, 1280×640)
- Charcoal background with dot texture
- Large icon + wordmark + tagline
- Feature pills: WordPress · WooCommerce · GPL v2+ · v1.0.0
- Used as the GitHub organization profile image and repository social preview

### Social Media Avatars
- Size: 400×400 minimum for upload (platforms display at various sizes)
- Use: `squirrels-icon.svg` (or PNG export at 400×400)
- The orange rounded square makes it immediately recognizable at any size

### WordPress.org Assets (required for submission)

| Asset | Dimensions | Format | File |
|-------|-----------|--------|------|
| Banner (wide) | 1544×500 | PNG/JPEG | derive from `squirrels-github-banner.svg` |
| Banner (narrow) | 772×250 | PNG/JPEG | scaled version |
| Icon (high-res) | 256×256 | PNG | `squirrels-icon.svg` exported at 256px |
| Icon (low-res) | 128×128 | PNG | `squirrels-icon.svg` exported at 128px |
| Screenshot | 1200×900 | PNG | `screenshot.png` in theme root |

---

## 8. Photography & Illustration Style

### Photography
- Subject: products, workspaces, crafted objects — real things, not stock
- Mood: warm natural light, shallow depth of field, earthy tones
- Color grade: warm, slightly desaturated, never over-HDR
- Avoid: people pointing at screens, handshakes, generic "business" stock

### Illustrations / Diagrams
- Style: flat, geometric, line-art
- Stroke: 2px, rounded caps, rounded joins
- Colors: from the brand palette (orange, tan, cream, neutrals)
- Avoid: gradient-heavy 3D renders, cartoon/chibi figures, clipart
- For technical diagrams (architecture, flows): use the charcoal + neutral palette with orange highlights for emphasis

---

## 9. Tone of Voice Examples

| Instead of | Write |
|-----------|-------|
| "Squirrels is an amazing theme packed with features!" | "Squirrels ships with WooCommerce support, a built-in customizer, and three starter site packs." |
| "Our team works hard to bring you the best!" | "Every template is audited for accessibility and tested against WooCommerce 8.x." |
| "Click the big orange button to get started!" | "Install the theme. Run the importer. You're done." |
| "Please don't hesitate to reach out!" | "Questions? Open a GitHub issue." |

---

## 10. Brand Asset Generation Commands

Generate PNG favicons from the SVG source (requires ImageMagick 7+ / `magick`):

```bash
BRAND="wp-content/themes/squirrels/assets/brand"
ICON="$BRAND/squirrels-favicon.svg"

magick "$ICON" -resize 16x16   "$BRAND/favicon-16.png"
magick "$ICON" -resize 32x32   "$BRAND/favicon-32.png"
magick "$ICON" -resize 48x48   "$BRAND/favicon-48.png"
magick "$ICON" -resize 180x180 "$BRAND/apple-touch-icon.png"
magick "$ICON" -resize 192x192 "$BRAND/icon-192.png"
magick "$ICON" -resize 512x512 "$BRAND/icon-512.png"

# Multi-resolution ICO
magick "$BRAND/favicon-16.png" "$BRAND/favicon-32.png" "$BRAND/favicon-48.png" \
  "$BRAND/favicon.ico"

# WP.org icon assets (from full icon, not simplified favicon)
FULL="$BRAND/squirrels-icon.svg"
magick "$FULL" -resize 128x128 "$BRAND/wp-org-icon-128.png"
magick "$FULL" -resize 256x256 "$BRAND/wp-org-icon-256.png"

# OG image PNG (for meta tags)
magick "$BRAND/squirrels-og-image.svg" -resize 1200x630 "$BRAND/og-image.png"
```

Note: SVG rendering quality in ImageMagick depends on the Inkscape/RSVG delegate. For production assets, open the SVG in Figma or Inkscape and export directly to PNG.
