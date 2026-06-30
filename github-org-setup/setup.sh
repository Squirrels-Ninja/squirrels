#!/usr/bin/env bash
# =============================================================================
# Squirrels — Phase 1: Local Bootstrap
#
# Safe to run multiple times. Does NOT connect to GitHub or push anything.
# Creates local git repositories and tags. Review the results, then run
# publish.sh to make everything public.
#
# Usage (from the wp-content/themes directory):
#   bash squirrels/github-org-setup/setup.sh
# =============================================================================

set -euo pipefail

# ---- Resolve paths ----------------------------------------------------------
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
THEME_DIR="$(cd "$SCRIPT_DIR/.." && pwd)"
THEMES_DIR="$(cd "$THEME_DIR/.." && pwd)"
ORG="Squirrels-Ninja"

PARENT_ZIP="$THEMES_DIR/squirrels-1.0.0.zip"
CHILD_ZIP="$THEMES_DIR/squirrels-child-1.0.0.zip"

EXPECTED_PARENT_SHA="555410d134f010068a9751057b03fab47cddd7d099f49f9d73b65391af000984"
EXPECTED_CHILD_SHA="b5b7143062457f847bf98d1870e17b52f69578838292dfe4bcb9b724ff84cfe8"

PASS="✓"
FAIL="✗"
WARN="!"

errors=0

# ---- Helpers ----------------------------------------------------------------
ok()   { echo "  $PASS $*"; }
fail() { echo "  $FAIL $*"; errors=$((errors + 1)); }
warn() { echo "  $WARN $*"; }
section() { echo ""; echo "--- $* ---"; }

# ---- Header -----------------------------------------------------------------
echo "============================================"
echo "  Squirrels — Phase 1: Local Bootstrap"
echo "  $(date '+%Y-%m-%d %H:%M:%S')"
echo "============================================"

# ============================================================
# SECTION 1 — Required tools
# ============================================================
section "Required tools"

if command -v git &> /dev/null; then
  ok "git $(git --version | awk '{print $3}')"
else
  fail "git not found — install from https://git-scm.com/"
fi

if command -v gh &> /dev/null; then
  ok "gh $(gh --version | head -1 | awk '{print $3}')"
else
  fail "gh CLI not found — install from https://cli.github.com/"
fi

if command -v zip &> /dev/null; then
  ok "zip $(zip --version 2>&1 | head -2 | tail -1 | awk '{print $2}')"
else
  fail "zip not found — install via Homebrew: brew install zip"
fi

if command -v shasum &> /dev/null; then
  ok "shasum"
elif command -v sha256sum &> /dev/null; then
  ok "sha256sum"
else
  fail "shasum / sha256sum not found"
fi

if command -v php &> /dev/null; then
  ok "php $(php --version | head -1 | awk '{print $2}')"
else
  warn "php not found — PHP syntax checks will be skipped"
fi

# ============================================================
# SECTION 2 — GitHub CLI authentication
# ============================================================
section "GitHub CLI authentication"

if gh auth status &> /dev/null; then
  GH_USER="$(gh api user --jq '.login' 2>/dev/null || echo 'unknown')"
  ok "Authenticated as: $GH_USER"
else
  fail "Not authenticated. Run: gh auth login"
fi

# ============================================================
# SECTION 3 — Git identity
# ============================================================
section "Git identity"

GIT_NAME="$(git config --global user.name 2>/dev/null || true)"
GIT_EMAIL="$(git config --global user.email 2>/dev/null || true)"

if [[ -n "$GIT_NAME" ]]; then
  ok "user.name  = $GIT_NAME"
else
  fail "git user.name not set. Run: git config --global user.name 'Your Name'"
fi

if [[ -n "$GIT_EMAIL" ]]; then
  ok "user.email = $GIT_EMAIL"
else
  fail "git user.email not set. Run: git config --global user.email 'you@example.com'"
fi

# ============================================================
# SECTION 4 — GitHub organization
# ============================================================
section "GitHub organization"

if gh api "orgs/$ORG" &> /dev/null; then
  ok "Organization '$ORG' exists on GitHub"
else
  warn "Organization '$ORG' not found yet"
  echo "     Create it before running publish.sh:"
  echo "     https://github.com/organizations/new"
  echo "     Use the free plan. Name it exactly: $ORG"
fi

# ============================================================
# SECTION 5 — Release assets (ZIPs + checksums)
# ============================================================
section "Release assets"

check_zip() {
  local ZIP="$1"
  local EXPECTED="$2"
  local LABEL="$3"

  if [[ ! -f "$ZIP" ]]; then
    fail "$LABEL — file not found: $ZIP"
    return
  fi

  local ACTUAL
  if command -v shasum &> /dev/null; then
    ACTUAL="$(shasum -a 256 "$ZIP" | awk '{print $1}')"
  else
    ACTUAL="$(sha256sum "$ZIP" | awk '{print $1}')"
  fi

  local SIZE
  SIZE="$(du -sh "$ZIP" | awk '{print $1}')"

  if [[ "$ACTUAL" == "$EXPECTED" ]]; then
    ok "$LABEL ($SIZE)"
    ok "   SHA-256: $ACTUAL"
  else
    fail "$LABEL — checksum mismatch"
    echo "     Expected: $EXPECTED"
    echo "     Actual:   $ACTUAL"
    echo "     Rebuild with:"
    echo "       cd '$THEMES_DIR'"
    echo "       zip -r squirrels-1.0.0.zip squirrels --exclude 'squirrels/github-org-setup/*' --exclude 'squirrels/.git/*' --exclude 'squirrels/**/.DS_Store'"
  fi
}

check_zip "$PARENT_ZIP" "$EXPECTED_PARENT_SHA" "squirrels-1.0.0.zip"
check_zip "$CHILD_ZIP"  "$EXPECTED_CHILD_SHA"  "squirrels-child-1.0.0.zip"

# ============================================================
# SECTION 6 — PHP syntax check
# ============================================================
section "PHP syntax"

if command -v php &> /dev/null; then
  PHP_ERRORS=0
  while IFS= read -r -d '' f; do
    result=$(php -l "$f" 2>&1)
    if echo "$result" | grep -q "Parse error\|Fatal error"; then
      fail "$f"
      echo "     $result"
      PHP_ERRORS=$((PHP_ERRORS + 1))
    fi
  done < <(find "$THEME_DIR" -name "*.php" -not -path "*/github-org-setup/*" -print0)

  if [[ $PHP_ERRORS -eq 0 ]]; then
    PHP_COUNT="$(find "$THEME_DIR" -name "*.php" -not -path "*/github-org-setup/*" | wc -l | tr -d ' ')"
    ok "$PHP_COUNT PHP files — all pass"
  fi
else
  warn "Skipping PHP check (php not installed)"
fi

# ============================================================
# SECTION 7 — Old-name scan
# ============================================================
section "Old-name scan (no 'thematic_store_' references)"

OLDNAME_HITS=$(grep -r \
  --include="*.php" --include="*.css" --include="*.js" --include="*.json" \
  -lE "(thematic[_-]store|thematic_store_|THEMATIC_STORE_|thematicStore)" \
  "$THEME_DIR" 2>/dev/null | grep -v ".git" || true)

if [[ -z "$OLDNAME_HITS" ]]; then
  ok "Clean — no old-name references found"
else
  fail "Old names found in:"
  echo "$OLDNAME_HITS" | while read -r f; do echo "     $f"; done
fi

# ============================================================
# SECTION 8 — Abort if errors
# ============================================================
if [[ $errors -gt 0 ]]; then
  echo ""
  echo "============================================"
  echo "  $FAIL $errors error(s) found above."
  echo "  Fix all errors before continuing."
  echo "============================================"
  exit 1
fi

# ============================================================
# SECTION 9 — Initialize git in squirrels theme
# ============================================================
section "Initializing squirrels theme repository"

cd "$THEME_DIR"

if [[ -d ".git" ]]; then
  warn "Git already initialized — checking status"
  CHANGES="$(git status --porcelain 2>/dev/null | wc -l | tr -d ' ')"
  if [[ "$CHANGES" -gt 0 ]]; then
    warn "$CHANGES uncommitted change(s) found"
    git add .
    git commit -m "chore: L1 brand system + WCAG color fix + L2 org scaffold

- Add complete brand asset system (assets/brand/): SVG logos,
  favicons, OG image, GitHub banner, PNG icon exports
- Add brand-tokens.css: full design token system
- Fix WCAG accessibility: --squirrels-primary now defaults to
  #C94F10 (4.56:1 on white, AA compliant) instead of display
  orange #E8621A (3.39:1, fails AA for normal text)
- Update customizer.php defaults to match accessible orange
- Add github-org-setup/ with org health files and repo scaffolds
- Rebuild squirrels-1.0.0.zip with all brand assets included"
    ok "Committed outstanding changes"
  else
    ok "Repository clean, nothing to commit"
  fi
else
  git init -b main
  git add .
  git commit -m "Initial commit: Squirrels v1.0.0

WordPress + WooCommerce theme. Fast. Curious. Thoughtfully Built.

Includes:
- Full WordPress template hierarchy (25 PHP files)
- WooCommerce integration with HPOS compatibility
- Theme Customizer with WCAG AA compliant default colors
- Acorn starter site importer (Classic Store, Minimal Blog, Portfolio)
- Complete brand asset system (SVG logos, favicons, brand tokens)
- Child theme (squirrels-child) packaged separately

Co-Authored-By: Claude Sonnet 4.6 <noreply@anthropic.com>"
  ok "Repository initialized and committed"
fi

# Tag v1.0.0
if git tag | grep -q "^v1.0.0$"; then
  warn "Tag v1.0.0 already exists"
else
  git tag -a v1.0.0 -m "Squirrels v1.0.0 — initial public release"
  ok "Tagged v1.0.0"
fi

# ============================================================
# SECTION 10 — Initialize ecosystem stub repos
# ============================================================
section "Initializing ecosystem stub repositories"

init_stub() {
  local NAME="$1"
  local DIR="$SCRIPT_DIR/$NAME"

  if [[ ! -d "$DIR" ]]; then
    warn "$NAME — directory not found, skipping"
    return
  fi

  cd "$DIR"

  if [[ -d ".git" ]]; then
    warn "$NAME — git already initialized"
    return
  fi

  git init -b main
  git add .
  git commit -m "Initial commit: $NAME scaffold

Part of the Squirrels ecosystem — https://squirrels.ninja

Co-Authored-By: Claude Sonnet 4.6 <noreply@anthropic.com>"
  ok "$NAME"
}

init_stub "acorn"
init_stub "workshop"
init_stub "treehouse"
init_stub "squirrels-demo"
init_stub "squirrels-website"

# .github org repo
cd "$SCRIPT_DIR/.github"
if [[ -d ".git" ]]; then
  warn ".github — git already initialized"
else
  git init -b main
  git add .
  git commit -m "Initial commit: org health files

CONTRIBUTING, SECURITY, SUPPORT, CODE_OF_CONDUCT, org profile README.

Co-Authored-By: Claude Sonnet 4.6 <noreply@anthropic.com>"
  ok ".github (org health repo)"
fi

# ============================================================
# SECTION 11 — Validate repository names
# ============================================================
section "Validating repository names"

validate_repo_name() {
  local NAME="$1"
  # GitHub repo names: alphanumeric, hyphens, underscores, dots. No spaces.
  if [[ "$NAME" =~ ^[a-zA-Z0-9._-]+$ ]]; then
    ok "$ORG/$NAME"
  else
    fail "Invalid repo name: '$NAME'"
  fi
}

validate_repo_name "squirrels"
validate_repo_name ".github"
validate_repo_name "acorn"
validate_repo_name "workshop"
validate_repo_name "treehouse"
validate_repo_name "squirrels-demo"
validate_repo_name "squirrels-website"

# ============================================================
# DONE — Summary
# ============================================================
echo ""
echo "============================================"
echo "  $PASS Local repository prepared."
echo ""
echo "  Ready to publish:"
echo ""
echo "    • $ORG/squirrels         (theme — v1.0.0 release)"
echo "    • $ORG/.github           (org health files)"
echo "    • $ORG/acorn             (starter site packs)"
echo "    • $ORG/workshop          (pro plugin scaffold)"
echo "    • $ORG/treehouse         (documentation scaffold)"
echo "    • $ORG/squirrels-demo    (demo site config)"
echo "    • $ORG/squirrels-website (marketing site)"
echo ""
echo "  Release assets:"
echo "    squirrels-1.0.0.zip       — $EXPECTED_PARENT_SHA"
echo "    squirrels-child-1.0.0.zip — $EXPECTED_CHILD_SHA"
echo ""
echo "  Review everything, then run:"
echo ""
echo "    bash squirrels/github-org-setup/publish.sh"
echo ""
echo "  to push all repositories and create the v1.0.0 release."
echo "============================================"
