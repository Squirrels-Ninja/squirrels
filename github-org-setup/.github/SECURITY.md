# Security Policy — Squirrels

## Supported versions

| Version | Supported |
|---------|-----------|
| 1.x (latest) | ✅ |
| < 1.0 | ❌ |

## Reporting a vulnerability

**Do not open a public GitHub issue for security vulnerabilities.**

Email: **security@squirrels.ninja**

Include:
- A description of the vulnerability
- Steps to reproduce
- WordPress and WooCommerce version
- Theme version
- Any relevant code or screenshots

We will acknowledge receipt within 48 hours and aim to release a fix within 14 days of confirmation.

## Scope

In scope:
- Remote code execution
- SQL injection
- XSS (cross-site scripting)
- CSRF
- Privilege escalation
- Path traversal in the demo importer or other file-reading code
- Information disclosure

Out of scope:
- Issues in WordPress core or WooCommerce (report to their respective security teams)
- Theoretical vulnerabilities without a working proof of concept
- Issues requiring physical device access

## Disclosure policy

We follow responsible disclosure. After a fix is released, we will publish a security advisory crediting the reporter (unless anonymity is requested).
