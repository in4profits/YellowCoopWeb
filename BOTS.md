# BOTS.md: rules for every AI agent working in this repo

Read this file at the start of every session. It overrides older instructions.
Owner: JP. Last updated: 2026-09-24.

## 1. Repo basics
- GitHub: github.com/in4profits/YellowCoopWeb (public repo). Live branch: `main`.
- Blog bot working copy on the Mac mini: `~/YellowCoop/Media/YellowCoopWeb` (stays on `main`).
- Redesign working copy: `~/YellowCoop/Media/YellowCoopWeb-claude` (used by Claude). Don't touch it.
- The live site deploys from `main` when JP clicks **Update from Remote** and **Deploy HEAD Commit** in cPanel. Bots never deploy.

## 2. Start of every session
1. `git pull origin main`. If it fails or reports a conflict, stop and report to JP. Do not force-push.
2. `git status` must show a clean tree on `main` before you change anything.

## 3. Publishing a blog post (continues on `main` during the redesign)
One commit per post, containing all of:
- `posts/<slug>.php`
- `posts/images/<slug>-hero.png`
- the new entry at the top of the list in `blog.php`
- the new `<url>` entry in `sitemap.xml`

Do **not** edit `.cpanel.yml` for posts anymore. It now copies every file in `posts/` and `posts/images/` automatically.

Also, starting now:
- Add `$pillar = 'Operate';` (or `'Secure'` or `'Innovate'`) to the PHP variables at the top of each new post.
  - Operate = IT operations, vendors, cost, process, AI tools in daily work
  - Secure = security, compliance, risk, AI data policy
  - Innovate = product, platform, architecture, AI build vs buy
- Internal links in posts: use `/what-we-do/`, `/how-we-engage/`, `/blog.php`. Stop linking to `/fractional-cto`, `/ai-solutions`, `/tech-projects`, `/technology-projects`. Those pages don't exist. The redesign adds redirects for old posts.

Commit message format: `Publish <short title> post (<Mon DD> A|B)`.
Push to `main`, then report to JP: commit SHA, post URL, files changed.

## 4. Redesign (Concept A, "The Spectrum"): hands off
Claude is building the new site on branch `redesign-spectrum`. Until JP merges it:
- Do not create or edit on `main`: `index.php`, `home.html`, `404.shtml`, `.cpanel.yml`, `includes/`, `assets/`, or any folder page (`what-we-do/`, `how-we-engage/`, `about/`, `faq/`, `contact/`).
- Do not check out, commit to, rebase, or push `redesign-spectrum`.
- Keep using the current post template for new posts. Claude merges your posts into the redesign before launch.
- After launch, this file gets a new post template section. Use that one from then on.

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
