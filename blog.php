<?php
$page_title = 'AI, Security & IT Operations Insights';
$page_desc = 'Field notes on AI, security, and IT operations for CEOs and operators running technology without a full-time CTO.';
$page_path = '/blog.php';
$active = 'insights';
require __DIR__ . '/includes/header.php';
$posts = load_posts(__DIR__);
?>
<section class="container page-hero">
  <span class="eyebrow">Insights</span>
  <h1>Field notes on AI, security, and IT operations</h1>
  <p>What changed, and what to do about it, for leadership teams running technology without a full-time CTO.</p>
  <div class="ctas" style="margin-top:18px"><a class="btn btn-ghost" href="<?= e($site['newsletter']) ?>" target="_blank" rel="noopener">Get the weekly brief</a></div>
</section>
<section class="container" style="padding-bottom:40px">
  <div class="filters" role="group" aria-label="Filter by pillar">
    <button data-filter="all" aria-pressed="true">All</button>
    <button data-filter="Operate" aria-pressed="false">Operate</button>
    <button data-filter="Secure" aria-pressed="false">Secure</button>
    <button data-filter="Innovate" aria-pressed="false">Innovate</button>
  </div>
  <div class="posts">
    <?php foreach ($posts as $p): ?>
    <article class="post-card" data-pillar="<?= e($p['pillar']) ?>">
      <a class="post-link" href="<?= e($p['url']) ?>">
        <?php if ($p['img']): ?><img src="<?= e($p['img']) ?>" alt="" loading="lazy" width="640" height="360"><?php else: ?><div class="ph"></div><?php endif; ?>
        <div class="body"><span class="tag"><?= e($p['pillar']) ?></span><h3><?= e($p['title']) ?></h3></div>
      </a>
      <div class="post-foot"><span class="date"><?= e($p['date']) ?></span><a class="share-x" href="<?= e(x_share_href($site, $p['title'], $p['url'])) ?>" target="_blank" rel="noopener" aria-label="Share on X: <?= e($p['title']) ?>"><?= x_icon(13) ?> Share</a></div>
    </article>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
