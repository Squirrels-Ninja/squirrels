#!/usr/bin/env bash
# =============================================================================
# Squirrels — Phase 2: Publish to GitHub
#
# Run AFTER setup.sh completes successfully and you have reviewed the
# local repositories. This script makes everything public.
#
# Usage (from the wp-content/themes directory):
#   bash squirrels/github-org-setup/publish.sh
#
# What this does (in order):
#   1. Confirms you want to proceed
#   2. Creates all GitHub repositories
#   3. Pushes commits and tags
#   4. Creates the v1.0.0 release with ZIP attachments
#   5. Creates the .github org health repo
#   6. Creates and pushes the 5 ecosystem scaffold repos
#   7. Configures issues, discussions, and descriptions
#   8. Prints a summary with links to everything
# =============================================================================

set -euo pipefail

# ---- Resolve paths ----------------------------------------------------------
SCRIPT_DIR="$(cd "$(dirname "$0")" && pwd)"
THEME_DIR="$(cd "$SCRIPT_DIR/.." && pwd)"
THEMES_DIR="$(cd "$THEME_DIR/.." && pwd)"
ORG="Squirrels-Ninja"

PARENT_ZIP="$THEMES_DIR/squirrels-1.0.0.zip"
CHILD_ZIP="$THEMES_DIR/squirrels-child-1.0.0.zip"

ok()   { echo "  ✓ $*"; }
fail() { echo "  ✗ $*"; exit 1; }
step() { echo ""; echo "--- $* ---"; }

# ============================================================
# PRE-FLIGHT
# ============================================================
echo "============================================"
echo "  Squirrels — Phase 2: Publish to GitHub"
echo "  $(date '+%Y-%m-%d %H:%M:%S')"
echo "============================================"
echo ""
echo "  Organization: $ORG"
echo ""
echo "  Repositories to create:"
echo "    • $ORG/squirrels"
echo "    • $ORG/.github"
echo "    • $ORG/acorn"
echo "    • $ORG/workshop"
echo "    • $ORG/treehouse"
echo "    • $ORG/squirrels-demo"
echo "    • $ORG/squirrels-website"
echo ""
echo "  Release: v1.0.0 with squirrels-1.0.0.zip + squirrels-child-1.0.0.zip"
echo ""

# Confirm intent
read -rp "  Publish all of the above? [y/N] " CONFIRM
echo ""
CONFIRM_NORMALIZED="$(printf "%s" "$CONFIRM" | tr "[:upper:]" "[:lower:]")"
if [[ "$CONFIRM_NORMALIZED" != "y" ]]; then
  echo "  Aborted. Nothing was published."
  exit 0
fi

# Check gh auth
if ! gh auth status &> /dev/null; then
  fail "Not authenticated. Run: gh auth login"
fi

# Check org exists
if ! gh api "orgs/$ORG" &> /dev/null; then
  fail "Organization '$ORG' not found. Create it at: https://github.com/organizations/new"
fi

# Check squirrels theme is git-initialized
if [[ ! -d "$THEME_DIR/.git" ]]; then
  fail "squirrels/ git not initialized. Run setup.sh first."
fi

# Check ZIPs exist
[[ -f "$PARENT_ZIP" ]] || fail "Missing: $PARENT_ZIP"
[[ -f "$CHILD_ZIP"  ]] || fail "Missing: $CHILD_ZIP"

# ============================================================
# STEP 1 — Push squirrels theme
# ============================================================
step "Pushing squirrels theme"

cd "$THEME_DIR"

# Create repo if it doesn't exist, then push
if gh api "repos/$ORG/squirrels" &> /dev/null 2>&1; then
  warn_exists() { echo "  ! squirrels repo already exists — pushing to existing"; }
  warn_exists
  git remote add origin "https://github.com/$ORG/squirrels.git" 2>/dev/null || \
    git remote set-url origin "https://github.com/$ORG/squirrels.git"
  git push -u origin main
  git push origin --tags
else
  gh repo create "$ORG/squirrels" \
    --public \
    --description "🐿️ WordPress + WooCommerce theme. Fast. Curious. Thoughtfully Built." \
    --homepage "https://squirrels.ninja" \
    --push \
    --source=.
  git push origin --tags
fi

ok "squirrels pushed → https://github.com/$ORG/squirrels"

# ============================================================
# STEP 2 — Create v1.0.0 release
# ============================================================
step "Creating v1.0.0 release"

PARENT_SHA="$(shasum -a 256 "$PARENT_ZIP" | awk '{print $1}')"
CHILD_SHA="$(shasum -a 256 "$CHILD_ZIP"  | awk '{print $1}')"

RELEASE_BODY="## What's included

- Full WordPress template hierarchy — 25 PHP template files
- WooCommerce integration with HPOS compatibility declaration
- Theme Customizer — primary color, accent color, font size, sidebar, footer text
- **Acorn** starter site importer — one-click import via Appearance → Acorn
  - Classic Store · Minimal Blog · Creative Portfolio
- Complete brand asset system — SVG logos, favicons, OG image, GitHub banner
- WCAG AA compliant default colors (interactive orange \`#C94F10\`, 4.56:1 on white)
- Child theme (\`squirrels-child\`) packaged separately

## Install

1. Download \`squirrels-1.0.0.zip\`
2. Go to **Appearance → Themes → Add New → Upload Theme**
3. Select the ZIP and click **Install Now**
4. Click **Activate**
5. Go to **Appearance → Acorn** to import a starter site

## Requirements

- WordPress 6.3+
- PHP 7.4+
- WooCommerce 7.0+ (optional)

## SHA-256 checksums

\`\`\`
$PARENT_SHA  squirrels-1.0.0.zip
$CHILD_SHA  squirrels-child-1.0.0.zip
\`\`\`"

gh release create v1.0.0 \
  --repo "$ORG/squirrels" \
  --title "Squirrels v1.0.0" \
  --notes "$RELEASE_BODY" \
  --latest \
  "$PARENT_ZIP" \
  "$CHILD_ZIP"

ok "Release v1.0.0 created → https://github.com/$ORG/squirrels/releases/tag/v1.0.0"

# ============================================================
# STEP 3 — Push .github org health repo
# ============================================================
step "Pushing .github org health repo"

GITHUB_DIR="$SCRIPT_DIR/.github"

if [[ ! -d "$GITHUB_DIR/.git" ]]; then
  fail ".github repo not initialized. Run setup.sh first."
fi

cd "$GITHUB_DIR"

if gh api "repos/$ORG/.github" &> /dev/null 2>&1; then
  git remote add origin "https://github.com/$ORG/.github.git" 2>/dev/null || \
    git remote set-url origin "https://github.com/$ORG/.github.git"
  git push -u origin main
else
  gh repo create "$ORG/.github" \
    --public \
    --description "Organization health files for Squirrels-Ninja" \
    --push \
    --source=.
fi

ok ".github pushed → https://github.com/$ORG/.github"

# ============================================================
# STEP 4 — Push ecosystem scaffold repos
# ============================================================
step "Pushing ecosystem scaffold repos"

push_scaffold() {
  local NAME="$1"
  local DESC="$2"
  local DIR="$SCRIPT_DIR/$NAME"

  if [[ ! -d "$DIR/.git" ]]; then
    echo "  ! $NAME — git not initialized, skipping (run setup.sh)"
    return
  fi

  cd "$DIR"

  if gh api "repos/$ORG/$NAME" &> /dev/null 2>&1; then
    git remote add origin "https://github.com/$ORG/$NAME.git" 2>/dev/null || \
      git remote set-url origin "https://github.com/$ORG/$NAME.git"
    git push -u origin main
  else
    gh repo create "$ORG/$NAME" \
      --public \
      --description "$DESC" \
      --homepage "https://squirrels.ninja" \
      --push \
      --source=.
  fi

  ok "$NAME → https://github.com/$ORG/$NAME"
}

push_scaffold "acorn"            "🌰 Starter site packs for the Squirrels WordPress theme"
push_scaffold "workshop"         "🛠️ Pro companion plugin for Squirrels (planned)"
push_scaffold "treehouse"        "🌳 Documentation source for treehouse.squirrels.ninja"
push_scaffold "squirrels-demo"   "Demo site configuration for demo.squirrels.ninja"
push_scaffold "squirrels-website" "Marketing website source for squirrels.ninja"

# ============================================================
# STEP 5 — Configure squirrels repo settings
# ============================================================
step "Configuring repository settings"

gh repo edit "$ORG/squirrels" \
  --enable-issues \
  --enable-wiki=false \
  --enable-projects=false \
  2>/dev/null && ok "Issues enabled, wiki/projects disabled" || true

# Enable discussions (requires separate API call — not all gh versions support --enable-discussions)
gh api \
  --method PATCH \
  "repos/$ORG/squirrels" \
  -f "has_discussions=true" \
  --silent 2>/dev/null && ok "Discussions enabled" || \
  echo "  ! Discussions: enable manually at https://github.com/$ORG/squirrels/settings"

# ============================================================
# DONE
# ============================================================
echo ""
echo "============================================"
echo "  ✓ Publish complete."
echo ""
echo "  GitHub organization:"
echo "    https://github.com/$ORG"
echo ""
echo "  Primary repository:"
echo "    https://github.com/$ORG/squirrels"
echo ""
echo "  Release v1.0.0:"
echo "    https://github.com/$ORG/squirrels/releases/tag/v1.0.0"
echo ""
echo "  Next steps:"
echo ""
echo "  1. Add an org avatar (400×400 PNG):"
echo "     → https://github.com/organizations/$ORG/settings/profile"
echo "       File: squirrels/assets/brand/squirrels-icon.svg (export at 400px)"
echo ""
echo "  2. Verify the org profile README is live:"
echo "     → https://github.com/$ORG"
echo ""
echo "  3. Add the GitHub banner to your repo social preview:"
echo "     → https://github.com/$ORG/squirrels/settings"
echo "       File: squirrels/assets/brand/squirrels-github-banner.svg (convert to PNG)"
echo ""
echo "  4. Proceed to L3 — Live Demo:"
echo "     Deploy demo.squirrels.ninja using the Classic Store starter"
echo "============================================"
