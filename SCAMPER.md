# Scamper — Performance System for Squirrels

Scamper is the internal name for the Squirrels performance discipline. It covers measurement, optimization, and ongoing validation across all releases.

The name reflects the theme's character: fast, lightweight, and intentional — shipping only what's needed.

---

## The Three Scamper Artifacts

### Scamper Report

A per-release performance document. Contains:

- Baseline Lighthouse scores (before any optimization)
- Code-level asset audit findings
- Optimization log (what was changed and why)
- Before/After Lighthouse comparison across all key pages
- Scamper Score (composite — see below)
- Regression notes and open items

**Location:** `github-org-setup/squirrels-demo/baseline/scamper-report-[version].md`  
**When created:** Once per release, before optimization work begins. Baseline must be recorded before touching performance code.

---

### Scamper Score

A single composite number (0–100) summarizing the performance state of a given version. Calculated as:

```
Scamper Score = average of Lighthouse Performance scores
                across all six measured pages
                (homepage, shop, product, cart, checkout, blog)
```

A Scamper Score of 90+ means Squirrels is in the green across the board. A score below 70 is a blocker for release.

The Scamper Score is recorded:

- Before optimization (baseline)
- After optimization (target)
- In the release CHANGELOG

---

### Scamper Checklist

A short, checkbox-driven performance validation gate run before every release. Not a comprehensive audit — a fast regression check.

**Location:** `github-org-setup/squirrels-demo/qa/scamper-checklist.md`  
**When run:** Before every version tag. Takes ~20 minutes with the Lighthouse CLI.

Covers:
- Lighthouse scores still meet minimum thresholds
- No new render-blocking resources
- No new unused JavaScript
- No layout shift regressions
- WooCommerce patterns still hidden when WC is inactive
- Mobile layout intact at 375px

---

## How Scamper fits in the Squirrels ecosystem

| Tool | Role |
|------|------|
| **Acorn** | Starter site importer (content layer) |
| **Treehouse** | Documentation portal |
| **Workshop** | Pro plugin (future) |
| **Scamper** | Performance system (measure → optimize → validate) |

Scamper is not a plugin. It is a discipline: measure first, optimize second, validate before shipping.

---

## Minimum acceptable thresholds (Scamper baseline gate)

These are floor values. Falling below any of these is a release blocker.

| Metric | Minimum |
|--------|---------|
| Lighthouse Performance (each page) | ≥ 60 unoptimized / ≥ 85 post-T7 |
| Lighthouse Accessibility | ≥ 90 (hard block at any score) |
| LCP | < 4.0s unoptimized / < 2.5s post-T7 |
| INP | < 500ms unoptimized / < 200ms post-T7 |
| TBT | < 600ms unoptimized / < 200ms post-T7 |
| CLS | < 0.15 unoptimized / < 0.05 post-T7 |

---

## T7 — Scamper Performance Milestone

The first major Scamper work is T7. It runs after the demo site is live (L3 complete) so that real-world Lighthouse measurements can be taken.

See `T7-SCAMPER.md` for the full T7 runbook.
