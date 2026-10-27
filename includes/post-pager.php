<?php
// Prev/next chevrons overlaid on a post's hero image (Option A).
// Order = load_posts() (sitemap.xml order, newest first), same as blog.php.
// "Previous" = the older post, "Next" = the newer post.
// Usage in posts/<slug>.php, wrapping the hero:
//   wrap the hero img in <div class="yc-pager"> ... </div> and include this file right after the img (see BOTS.md).
require_once __DIR__ . '/config.php';
$__pg_slug = basename($_SERVER['SCRIPT_NAME'] ?? '', '.php');
$__pg_posts = load_posts(dirname(__DIR__));
$__pg_prev = $__pg_next = null;
foreach ($__pg_posts as $__pg_i => $__pg_p) {
    if ($__pg_p['slug'] === $__pg_slug) {
        $__pg_prev = $__pg_posts[$__pg_i + 1] ?? null; // older
        $__pg_next = $__pg_i > 0 ? $__pg_posts[$__pg_i - 1] : null; // newer
        break;
    }
}
$__pg_h = function ($s) { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); };
?>
<style>
.yc-pager{position:relative;margin:0 0 24px}
.yc-pager .hero{display:block;margin:0!important;width:100%}
.yc-pager .yc-pg{position:absolute;top:50%;transform:translateY(-50%);display:flex;align-items:center;gap:8px;text-decoration:none!important;color:#fff;opacity:.6;transition:opacity .15s;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif}
.yc-pager .yc-pg.prev{left:10px}.yc-pager .yc-pg.next{right:10px;flex-direction:row-reverse}
.yc-pager .yc-pg .c{width:44px;height:44px;flex:0 0 44px;border-radius:50%;background:rgba(0,0,0,.45);display:flex;align-items:center;justify-content:center}
.yc-pager .yc-pg .t{max-width:220px;font-size:13px;line-height:1.3;background:rgba(0,0,0,.75);padding:6px 10px;border-radius:6px;opacity:0;pointer-events:none;transition:opacity .15s}
.yc-pager .yc-pg:hover,.yc-pager .yc-pg:focus-visible{opacity:1}
.yc-pager .yc-pg:hover .t,.yc-pager .yc-pg:focus-visible .t{opacity:1}
.yc-pager .yc-pg:focus-visible{outline:none}
.yc-pager .yc-pg:focus-visible .c{outline:2px solid #F7B51E;outline-offset:2px}
@media(max-width:599px){.yc-pager .yc-pg.prev{left:4px}.yc-pager .yc-pg.next{right:4px}.yc-pager .yc-pg .c{width:36px;height:36px;flex-basis:36px}.yc-pager .yc-pg .c svg{width:16px;height:16px}.yc-pager .yc-pg .t{display:none}}
</style>
<?php if ($__pg_prev): ?><a class="yc-pg prev" href="<?= $__pg_h($__pg_prev['url']) ?>" aria-label="Previous post: <?= $__pg_h($__pg_prev['title']) ?>"><span class="c"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M15 18l-6-6 6-6"/></svg></span><span class="t" aria-hidden="true"><?= $__pg_h($__pg_prev['title']) ?></span></a><?php endif; ?>
<?php if ($__pg_next): ?><a class="yc-pg next" href="<?= $__pg_h($__pg_next['url']) ?>" aria-label="Next post: <?= $__pg_h($__pg_next['title']) ?>"><span class="c"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M9 18l6-6-6-6"/></svg></span><span class="t" aria-hidden="true"><?= $__pg_h($__pg_next['title']) ?></span></a><?php endif; ?>
