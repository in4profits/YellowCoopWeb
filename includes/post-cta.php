<?php
require_once __DIR__ . '/config.php';
$__share_slug = basename($_SERVER['SCRIPT_FILENAME'] ?? '', '.php');
$__share_title = preg_replace('/\s+[—-]\s+Yellow Coop$/u', '', $title ?? '');
?>
<p class="yc-share">Found this useful? <a href="<?= e(x_share_href($site, $__share_title, '/posts/' . $__share_slug . '.php')) ?>" target="_blank" rel="noopener"><?= x_icon(14) ?> Share on X</a></p>
<?php
// Related posts: up to 3 more from the same pillar, newest first, so every post links to others.
$__all = load_posts(dirname(__DIR__));
$__me = null;
foreach ($__all as $__p) { if ($__p['slug'] === $__share_slug) { $__me = $__p; break; } }
$__pillar = $__me['pillar'] ?? ($pillar ?? 'Operate');
$__rel = array_slice(array_values(array_filter($__all, function ($p) use ($__share_slug, $__pillar) {
    return $p['slug'] !== $__share_slug && $p['pillar'] === $__pillar;
})), 0, 3);
?>
<?php if ($__rel): ?>
<nav class="yc-related" aria-label="More on <?= e($__pillar) ?>">
  <p class="yc-related-h">More on <?= e($__pillar) ?></p>
  <ul>
    <?php foreach ($__rel as $__r): ?>
    <li><a href="<?= e($__r['url']) ?>"><?= e($__r['title']) ?></a><?php if ($__r['date']): ?> <span><?= e($__r['date']) ?></span><?php endif; ?></li>
    <?php endforeach; ?>
  </ul>
  <p class="yc-related-all"><a href="/blog.php#<?= e(strtolower($__pillar)) ?>">All <?= e($__pillar) ?> insights &rarr;</a></p>
</nav>
<?php endif; ?>
<aside class="yc-cta">
  <p><strong>Need someone to own this, not just read about it?</strong> Yellow Coop provides CIO, CISO, and CTO leadership from a few hours a week to a full-time interim seat.</p>
  <a href="/how-we-engage/">How we engage</a><a href="<?= htmlspecialchars(booking_href($site), ENT_QUOTES, 'UTF-8') ?>"<?= booking_attrs($site) ?>>Book a 20-min call</a>
</aside>
