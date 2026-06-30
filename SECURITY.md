# Security Policy — Squirrels

## Supported Versions

| Version | Security fixes |
|---------|---------------|
| 1.0.x (current) | ✅ Yes |
| Earlier versions | ❌ No — upgrade to latest |

---

## Reporting a Vulnerability

**Do not open a public GitHub issue for security vulnerabilities.**

If you discover a security vulnerability in Squirrels, report it privately so it can be fixed before disclosure.

**Contact:** [your-security-email@example.com]

Include in your report:

- A description of the vulnerability and the potential impact
- The affected version(s)
- Steps to reproduce or a proof of concept
- Your name/handle if you would like to be credited in the fix

---

## Response Timeline

| Stage | Target |
|-------|--------|
| Acknowledgement | Within 72 hours of receipt |
| Severity assessment | Within 5 business days |
| Fix development | Within 14 days for critical/high severity |
| Patch release | As soon as the fix is tested |
| Public disclosure | After the patch is available |

We follow coordinated disclosure. We ask that you do not publicly disclose the vulnerability until a patch has been released, and we will credit you in the release notes if you wish.

---

## Scope

### In scope

- Remote code execution
- SQL injection
- Cross-site scripting (XSS) in theme output
- Cross-site request forgery (CSRF) in theme AJAX handlers
- Unauthorized capability escalation
- Path traversal in the demo importer
- Nonce bypass in AJAX endpoints

### Out of scope

- Vulnerabilities in WordPress core (report to [wordpress.org/security](https://wordpress.org/security/))
- Vulnerabilities in WooCommerce (report to WooCommerce)
- Vulnerabilities in third-party plugins
- Issues that require administrator access to exploit (admin is already a trusted role in WordPress)
- Self-XSS or issues requiring the attacker to be the victim

---

## Security Design Notes

The following security controls are implemented in v1.0.0:

- **ABSPATH guard** — `defined( 'ABSPATH' ) || exit;` in all PHP files
- **Nonce verification** — `check_ajax_referer( 'squirrels_demo_import', 'nonce' )` in the demo import AJAX handler
- **Capability check** — `current_user_can( 'manage_options' )` before any admin action
- **Path traversal guard** — `realpath()` with prefix verification before reading any demo JSON file
- **Input sanitization** — `sanitize_key()`, `sanitize_text_field()`, `wp_kses_post()` on all user input
- **Output escaping** — `esc_html()`, `esc_attr()`, `esc_url()` throughout templates
- **Admin-only load** — demo importer loaded only when `is_admin()` is true
- **Sanitize callbacks** — all Customizer settings have `sanitize_callback` defined

---

## Acknowledgements

We will maintain a list of acknowledged security reporters here as vulnerabilities are fixed and disclosed.

*(None yet — v1.0.0 is the initial release.)*
