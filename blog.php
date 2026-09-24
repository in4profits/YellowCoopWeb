<?php
$page_title = 'Insights';
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
    <a class="post-card" href="<?= e($p['url']) ?>" data-pillar="<?= e($p['pillar']) ?>">
      <?php if ($p['img']): ?><img src="<?= e($p['img']) ?>" alt="" loading="lazy" width="640" height="360"><?php else: ?><div class="ph"></div><?php endif; ?>
      <div class="body"><span class="tag"><?= e($p['pillar']) ?></span><h3><?= e($p['title']) ?></h3><span class="date"><?= e($p['date']) ?></span></div>
    </a>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
