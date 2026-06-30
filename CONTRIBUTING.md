# Contributing to Squirrels

Thank you for your interest in contributing. This document explains how to report bugs, request features, and submit code changes.

---

## Before You Start

- Search [existing issues](../../issues) before opening a new one — your bug or idea may already be tracked.
- Check the [CHANGELOG.md](CHANGELOG.md) to confirm the issue is not already fixed in an unreleased version.
- Read the [Support Policy](SUPPORT-POLICY.md) to understand what is in scope for the free theme.

---

## Reporting a Bug

Use the **Bug Report** issue template. Include:

- WordPress version
- WooCommerce version (if applicable)
- PHP version
- Squirrels version
- Steps to reproduce the bug
- Expected behaviour
- Actual behaviour
- Any error messages from the browser console or PHP error log

**Do not** open a bug report for:
- Conflicts with third-party plugins or page builders
- Custom code you have added
- Hosting or server configuration issues

These are outside the scope of this project. See [SUPPORT-POLICY.md](SUPPORT-POLICY.md).

---

## Requesting a Feature

Use the **Feature Request** issue template. Describe:

- What you want to accomplish
- Why the current theme does not address it
- Whether this is something the free theme should include or a Pro feature

Be specific. "Make it look better" is not actionable. "Add a sticky header option to the Customizer" is.

---

## Submitting a Pull Request

### Setup

The theme has no build process — there is no npm, no Webpack, no Sass. All CSS is written in plain CSS with custom properties. All JavaScript is plain jQuery-based ES5.

1. Fork the repository.
2. Create a branch: `git checkout -b fix/description-of-fix` or `git checkout -b feature/description`.
3. Make your changes.
4. Test on a clean WordPress install with WooCommerce.

### Code Standards

**PHP**
- Follow [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- All functions must use the `squirrels_` prefix.
- All files must include `defined( 'ABSPATH' ) || exit;` after the opening `<?php`.
- All translatable strings must use the `squirrels` text domain.
- Run `php -l` on every PHP file before submitting.

**CSS**
- Use CSS custom properties (`--squirrels-*`) for values that should respond to Customizer settings.
- No vendor prefixes for properties with >95% browser support.
- Mobile-first: base styles apply at all breakpoints; overrides inside `@media ( min-width: ... )`.

**JavaScript**
- ES5 only (no transpilation step).
- jQuery is available; avoid loading additional libraries.
- Wrap all code in an IIFE: `( function ( $ ) { 'use strict'; ... } )( jQuery );`
- Use `wp_localize_script` to pass PHP data to JS — no inline `<script>` blocks.

### Pull Request Checklist

Before submitting:

- [ ] `php -l` passes on all changed PHP files
- [ ] No bare `store_` function names — use `squirrels_` throughout
- [ ] All new strings wrapped in `esc_html__()`, `esc_attr__()`, or equivalent with `squirrels` domain
- [ ] CSS changes tested at 375px, 768px, 1024px, and 1440px
- [ ] JS changes tested in Chrome and Firefox
- [ ] WooCommerce pages (shop, product, cart, checkout) unaffected if changes are not WooCommerce-specific
- [ ] No changes to `style.css` theme header fields (version, description, etc.) — those are managed by maintainers
- [ ] PR description explains what the change does and why

### What Gets Accepted

- Bug fixes for confirmed issues
- Accessibility improvements (keyboard navigation, ARIA, contrast)
- Compatibility fixes for new WordPress or WooCommerce versions
- Documentation improvements

### What Will Not Be Accepted

- New features that belong in Squirrels Pro (see [FREE-VS-PRO.md](FREE-VS-PRO.md))
- Page builder integrations
- Changes that add framework dependencies (Bootstrap, Tailwind, etc.)
- Changes that remove or rename existing hooks, filters, or CSS classes in a breaking way

---

## Branching Convention

| Branch | Purpose |
|--------|---------|
| `main` | Current stable release |
| `develop` | Next release in progress |
| `fix/short-description` | Bug fixes |
| `feature/short-description` | New features |

Submit pull requests against `develop`, not `main`.

---

## License

By contributing to this project, you agree that your contributions will be licensed under the GPL v2 or later, consistent with the project's existing license.
