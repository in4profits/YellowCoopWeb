# BOTS.md: rules for every AI agent working in this repo

Read this file at the start of every session. It overrides older instructions.
Owner: JP. Last updated: 2026-10-27 (single-owner version).

## 1. Roles
- **Spiderman** (formerly Web Guru) is the single owner and decision-maker for all YellowCoopWeb code, structure and site-page changes, including `index.php`, `blog.php`, `includes/`, `assets/`, section pages, redirect folders and `.cpanel.yml`.
- **Posty** keeps direct push access to `main` for daily blog posts only: `posts/<slug>.php`, `posts/images/` hero images, and the matching `sitemap.xml` entry. No handoff to Spiderman is needed for posts. Anything else Posty needs changed goes to Spiderman.
- **JP** deploys. Bots never deploy.

## 2. Repo basics
- GitHub: github.com/in4profits/YellowCoopWeb (public repo). One branch: `main`. No feature branches.
- The live site deploys from `main` when JP clicks **Update from Remote** and then **Deploy HEAD Commit** in cPanel.
- Site-wide settings (email, newsletter link, booking link, HubSpot form IDs) live in `includes/config.php`.

## 3. Start of every session
1. `git pull origin main`. If it fails or reports a conflict, stop and report to JP. Do not force-push.
2. `git status` must show a clean tree on `main` before you change anything.

## 4. Publishing a blog post (Posty)
One commit per post, containing all of:
- `posts/<slug>.php`
- `posts/images/<slug>-hero.png` (16:9, for social previews)
- `posts/images/<slug>-hero.webp`, the same image at WebP quality 80 (shown on the site), e.g. `cwebp -q 80 in.png -o out.webp`
- a new `<url>` entry in `sitemap.xml`, above the other `/posts/` entries (newest first)

`blog.php` builds the post list automatically from `posts/*.php` in `sitemap.xml` order, and `.cpanel.yml` copies `posts/` automatically, so posts never need edits there.

Post template: copy an existing post (e.g. `posts/process-knowledge-map-before-ai-agents-scale.php`) and keep its structure:
- PHP variables at the top: `$title` (ends with ` — Yellow Coop`), `$meta_description`, `$meta_keywords`, `$pillar` (exactly `'Operate'`, `'Secure'` or `'Innovate'`).
- Before `</head>`: `<?php include __DIR__ . '/../includes/post-head.php'; ?>`
- Hero, wrapped with the prev/next chevrons: `<div class="yc-pager"><img class="hero" src="/posts/images/<slug>-hero.webp" ...><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>`
- After `<body>`: `<?php include __DIR__ . '/../includes/post-nav.php'; ?>`
- Before `</article>`: `<?php include __DIR__ . '/../includes/post-cta.php'; ?>`
- Date in `<p class="meta">YYYY-MM-DD</p>`.
- Keep the footer links as in the template (Home · Contact · Subscribe · Privacy).
- Audience: CEOs, owners and operators of small and mid-size companies.

Commit message: `Publish <short title> post (<Mon DD> A|B)`.

## 5. Never
- Never commit `GrokBots/`, `.env`, API keys, tokens, HubSpot private app keys, or passwords. The repo is public.
- Never rewrite history on `main` (`push --force`, `reset --hard` on pushed commits, rebase of pushed commits).
- Never delete posts or images without JP's written OK.
- Never edit `.htaccess` on the server.

## 6. Report format (end of every task)
```
Branch:
Commit SHA(s):
Files changed:
New or changed URLs:
JP to do in cPanel: Update from Remote → Deploy HEAD Commit (yes/no)
Open issues:
```
