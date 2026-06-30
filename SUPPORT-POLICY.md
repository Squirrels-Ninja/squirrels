# Squirrels — Support Policy

**Version:** 1.0.0
**Last updated:** 2026-06-30

---

## What This Policy Covers

This policy applies to the Squirrels free theme (GPL) and, when released, the Squirrels Pro companion plugin. It describes what is and is not covered by support, how to request help, and what to expect.

---

## Free Theme Support

### What Is Supported

Support for the free theme covers issues directly caused by Squirrels itself:

- **Installation issues** — errors during ZIP upload or theme activation that are caused by the theme file structure
- **Confirmed bugs** — behaviour that differs from what is documented (e.g., a template that renders incorrectly on a standard WordPress + WooCommerce install)
- **Compatibility with current WordPress** — the theme targets the current and previous major WordPress release (e.g., 6.7 and 6.6)
- **Compatibility with current WooCommerce** — the theme targets the current and previous major WooCommerce release
- **Demo importer issues** — import failures or errors on a clean WordPress install
- **Customizer issues** — settings that do not save, do not preview, or cause fatal errors

### What Is Not Supported

The following are outside the scope of free support:

- **Customisation requests** — changing colours, fonts, layout, or adding features beyond what the Customizer provides. This includes "how do I make it look like X" questions.
- **Third-party plugin conflicts** — conflicts caused by a plugin that is not WooCommerce. If a third-party plugin breaks the theme, contact that plugin's author.
- **Custom code** — code added to `functions.php`, a child theme, or any file you have modified. Once you modify theme files directly, support for the modified installation is outside scope.
- **Hosting and server configuration** — PHP memory limits, server caching, `.htaccess` issues, and SSL errors are server-side issues.
- **Page builder conflicts** — Squirrels does not require a page builder. Conflicts caused by Elementor, Divi, Beaver Builder, or similar tools are not covered.
- **WooCommerce extensions** — extensions that add functionality to WooCommerce (payment gateways, shipping plugins, memberships, etc.) are the responsibility of their respective authors.
- **Theme customisation by code** — writing custom PHP, custom CSS (beyond what the child theme provides), or custom JavaScript is outside scope for free support.
- **Outdated environments** — WordPress installs older than the two most recent major versions, PHP older than 7.4, or WooCommerce older than the two most recent major versions.

### How to Request Free Support

1. Check the [README.md](README.md) and [CHANGELOG.md](CHANGELOG.md) first.
2. Search existing issues on the GitHub issue tracker before opening a new one.
3. Open a new issue at `[GitHub repository URL]` with:
   - WordPress version
   - WooCommerce version (if applicable)
   - PHP version
   - Theme version (always 1.0.0 until updated)
   - A clear description of the issue
   - Steps to reproduce
   - Any error messages from the browser console or PHP error log

### Response Expectations (Free)

Free support is provided on a best-effort basis with no guaranteed response time. Issues are reviewed in order of severity:

1. Fatal errors or theme activation failures — prioritised
2. Confirmed bugs with reproduction steps — addressed in next patch release
3. General questions — answered when capacity allows

---

## WooCommerce Compatibility

Squirrels declares WooCommerce compatibility and is tested against current WooCommerce releases. The theme does not override WooCommerce core templates, which means WooCommerce template updates do not break the theme.

If WooCommerce introduces a breaking change that affects the theme's integration layer (`inc/woocommerce.php` or `woocommerce.php`), a patch will be released.

WooCommerce extensions (payment gateways, product add-ons, subscription plugins, etc.) are not tested and not covered by this policy. If an extension conflicts with Squirrels, report it to the extension author first.

---

## Third-Party Plugins

Squirrels is tested in a clean WordPress + WooCommerce environment. It does not guarantee compatibility with any specific third-party plugin.

Common conflicts arise from:
- Page builders that override template output
- Caching plugins that serve stale CSS after Customizer changes
- Security plugins that block AJAX requests (affects the demo importer)
- SEO plugins that modify `wp_head` output

If you encounter a conflict, deactivate other plugins one at a time to isolate the cause before reporting an issue.

---

## Custom Code Policy

If you have added custom PHP to `functions.php`, modified a template file directly (rather than using a child theme), or written custom CSS that conflicts with the theme, support for that installation is outside scope.

**Best practice:** Always use the child theme for customisations. The child theme package is included in the release. If you used the child theme and still encounter an issue, that issue is supportable.

---

## Pro Plugin Support

*Applies when Squirrels Pro is released.*

### What Is Supported (Pro)

Everything in the free support scope, plus:

- All Pro plugin features (quick view, wishlist, compare, filters, header/footer builder, mega menu, etc.)
- Premium starter site import issues
- Pro Customizer settings and typography controls
- White-label / agency features

### How to Request Pro Support

Pro customers receive access to a private support channel. Contact details are provided at purchase. Do not use the public GitHub issue tracker for Pro-specific issues.

### Response Expectations (Pro)

| Priority | Response time |
|----------|--------------|
| Site down / fatal error | Within 24 hours on business days |
| Feature not working as documented | Within 48 hours on business days |
| General question | Within 72 hours on business days |

Business days: Monday–Friday, excluding public holidays.

Response time begins when a complete issue report is received (version numbers, steps to reproduce, error messages).

---

## Refund Policy

*Applies to Pro plugin purchases.*

A refund may be requested within 14 days of purchase if:

- The Pro plugin does not function as documented on a clean WordPress + WooCommerce install
- The issue cannot be resolved by the support team within the response window

Refunds are not issued for:

- Incompatibility with third-party plugins or custom code
- Change of mind after purchase
- Requests made after 14 days

---

## Version Support

| Theme version | Support status |
|--------------|----------------|
| 1.0.0 (current) | ✅ Active |
| Previous versions | ❌ Upgrade to latest |

When a new version is released, the previous version receives a 30-day transition window during which critical bug reports are still reviewed.

---

## Disclaimer

Squirrels is provided as-is under the GPL v2 or later license. No warranty is provided beyond what is required by the GPL. The authors are not liable for data loss, revenue loss, or any other damages arising from use of the theme.
