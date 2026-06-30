# Contributing to Squirrels

Thank you for taking the time to contribute. All Squirrels projects are GPL v2+ and welcome contributions of all kinds.

## Before you start

- Search [existing issues](https://github.com/Squirrels-Ninja/squirrels/issues) before opening a new one.
- For large changes, open an issue first to discuss the approach.
- Small fixes (typos, obvious bugs) can go straight to a pull request.

## Development setup

```bash
# Clone the theme into a local WordPress install
git clone https://github.com/Squirrels-Ninja/squirrels.git \
  /path/to/wordpress/wp-content/themes/squirrels

# Activate in WordPress admin → Appearance → Themes
```

No build step is required. The theme uses plain PHP, vanilla CSS, and vanilla JS.

## Code standards

- **PHP:** Follow [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
  - All functions prefixed `squirrels_`
  - Text domain `squirrels`
  - `defined( 'ABSPATH' ) || exit;` at the top of every PHP file
- **CSS:** Use existing `--squirrels-*` CSS custom properties. Avoid hardcoded colors.
- **JS:** Vanilla ES5-compatible JavaScript (no build toolchain dependency).
- **No new dependencies** without prior discussion.

## Pull request checklist

- [ ] `php -l` passes on all modified PHP files
- [ ] No new warnings from the [Theme Check](https://wordpress.org/plugins/theme-check/) plugin
- [ ] No hardcoded strings — all user-facing text uses `esc_html_e()` / `esc_html__()` with `'squirrels'` domain
- [ ] Changes tested against WordPress latest + WooCommerce latest
- [ ] CHANGELOG.md updated under `## Unreleased`

## Reporting security issues

Do not open a public issue for security vulnerabilities. See [SECURITY.md](SECURITY.md).

## License

By contributing, you agree your contributions are licensed under [GPL v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).
