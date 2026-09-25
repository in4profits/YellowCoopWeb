# BOTS.md: rules for every AI agent working in this repo

Read this file at the start of every session. It overrides older instructions.
Owner: JP. Last updated: 2026-09-24 (redesign launch version).

## 1. Repo basics
- GitHub: github.com/in4profits/YellowCoopWeb (public repo). Live branch: `main`.
- Blog bot working copy on the Mac mini: `~/YellowCoop/Media/YellowCoopWeb` (stays on `main`).
- Claude's working copy: `~/YellowCoop/Media/YellowCoopWeb-claude`. Don't touch it.
- The live site deploys from `main` when JP clicks **Update from Remote** and **Deploy HEAD Commit** in cPanel. Bots never deploy.

## 2. Start of every session
1. `git pull origin main`. If it fails or reports a conflict, stop and report to JP. Do not force-push.
2. `git status` must show a clean tree on `main` before you change anything.

## 3. Publishing a blog post
One commit per post, containing all of:
- `posts/<slug>.php`
- `posts/images/<slug>-hero.png` (16:9, used for LinkedIn and social previews)
- `posts/images/<slug>-hero.webp`, the same image converted to WebP at quality 80 (shown on the site; about 40 KB instead of 900 KB). Example: `python3 -c "from PIL import Image; Image.open('posts/images/<slug>-hero.png').convert('RGB').save('posts/images/<slug>-hero.webp', quality=80)"` or `cwebp -q 80 in.png -o out.webp`
- a new `<url>` entry in `sitemap.xml`, placed above the other `/posts/` entries (newest first)

Do **not** edit `blog.php`. It builds the post list automatically from `posts/*.php`, in the order of `sitemap.xml`.
Do **not** edit `.cpanel.yml`. It copies every file in `posts/` and `posts/images/` automatically.

### Post template rules
Copy an existing post (for example `posts/process-knowledge-map-before-ai-agents-scale.php`) and keep this structure:
- PHP variables at the top: `$title` (ends with ` — Yellow Coop`), `$meta_description`, `$meta_keywords`, and `$pillar`.
- `$pillar` is exactly one of `'Operate'`, `'Secure'`, `'Innovate'`:
  - Operate = IT operations, vendors, cost, process, AI tools in daily work
  - Secure = security, compliance, risk, AI data policy
  - Innovate = product, platform, architecture, AI build vs buy
- The line right before `</head>` must be: `<?php include __DIR__ . '/../includes/post-head.php'; ?>` (canonical URL, social preview, article data, HubSpot tracking)
- The hero image tag uses the WebP file: `<img class="hero" src="/posts/images/<slug>-hero.webp" ...>`
- The line right after `<body>` must be: `<?php include __DIR__ . '/../includes/post-nav.php'; ?>`
- The line right before `</article>` must be: `<?php include __DIR__ . '/../includes/post-cta.php'; ?>`
- The date goes in `<p class="meta">YYYY-MM-DD</p>`. The blog list reads it from there.
- Audience: CEOs, owners, and operators of small and mid-size companies. Use "founder" only when the post is specifically about startups.
- Internal links: `/what-we-do/`, `/what-we-do/#operate`, `/what-we-do/#secure`, `/what-we-do/#innovate`, `/how-we-engage/`, `/blog.php`, `/contact/`.

Commit message format: `Publish <short title> post (<Mon DD> A|B)`.
Push to `main`, then report to JP: commit SHA, post URL, files changed.

## 4. Site pages (owned by Claude and JP)
Do not edit these without JP's written OK: `index.php`, `blog.php`, `includes/`, `assets/`, `what-we-do/`, `how-we-engage/`, `about/`, `faq/`, `contact/`, the redirect folders (`blog/`, `fractional-cto/`, `ai-solutions/`, `tech-projects/`, `technology-projects/`), and `.cpanel.yml`.
Site-wide settings (email, newsletter link, booking link, HubSpot form IDs) live in `includes/config.php`.

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
