<?php
$page_title = 'AI, Security & IT Operations Insights';
$page_desc = 'Field notes on AI, security, and IT operations for CEOs and operators running technology without a full-time CTO.';
$active = 'insights';
require_once __DIR__ . '/includes/config.php';
$all_posts = load_posts(__DIR__);

// Pillar filter (?pillar=secure) and pages of 12 (?page=2), both handled on the server.
$pillars = ['operate' => 'Operate', 'secure' => 'Secure', 'innovate' => 'Innovate'];
$pillar_key = is_string($_GET['pillar'] ?? null) && isset($pillars[strtolower($_GET['pillar'])]) ? strtolower($_GET['pillar']) : '';
$posts = $pillar_key === '' ? $all_posts : array_values(array_filter($all_posts, function ($p) use ($pillars, $pillar_key) { return $p['pillar'] === $pillars[$pillar_key]; }));
$per_page = 12;
$total_pages = max(1, (int) ceil(count($posts) / $per_page));
$page = is_string($_GET['page'] ?? null) && ctype_digit($_GET['page']) && $_GET['page'] !== '' ? (int) $_GET['page'] : 1;
if ($page < 1) $page = 1;
$out_of_range = $page > $total_pages;
function blog_url($pillar_key, $page) {
    $q = [];
    if ($pillar_key !== '') $q[] = 'pillar=' . $pillar_key;
    if ($page > 1) $q[] = 'page=' . $page;
    return '/blog.php' . ($q ? '?' . implode('&', $q) : '');
}
// Each page canonicalizes to itself; pillar views stay out of the index so they never compete with /blog.php.
$page_path = blog_url($pillar_key, min($page, $total_pages));
if ($page > 1 && !$out_of_range) $page_title .= ' (Page ' . $page . ')';
if ($pillar_key !== '') $page_robots = 'noindex, follow';
if ($out_of_range) { http_response_code(404); $page_robots = 'noindex'; $page_path = '/blog.php'; }
require __DIR__ . '/includes/header.php';
$shown = $out_of_range ? [] : array_slice($posts, ($page - 1) * $per_page, $per_page);
?>
<section class="container page-hero">
  <span class="eyebrow">Insights</span>
  <h1>Field notes on AI, security, and IT operations</h1>
  <p>What changed, and what to do about it, for leadership teams running technology without a full-time CTO.</p>
  <div class="ctas" style="margin-top:18px"><a class="btn btn-ghost" href="<?= e($site['newsletter']) ?>" target="_blank" rel="noopener">Get the weekly brief</a></div>
</section>
<section class="container" style="padding-bottom:40px">
  <nav class="filters" aria-label="Filter by pillar">
    <a href="/blog.php"<?= $pillar_key === '' ? ' aria-current="true"' : '' ?>>All</a>
    <?php foreach ($pillars as $k => $label): ?><a href="<?= e(blog_url($k, 1)) ?>"<?= $pillar_key === $k ? ' aria-current="true"' : '' ?>><?= e($label) ?></a><?php endforeach; ?>
  </nav>
  <?php if ($out_of_range): ?>
  <p>There is no page <?= (int) $page ?> here. <a href="/blog.php">Back to the latest insights</a>.</p>
  <?php endif; ?>
  <div class="posts">
    <?php foreach ($shown as $i => $p): ?>
    <article class="post-card" data-pillar="<?= e($p['pillar']) ?>">
      <a class="post-link" href="<?= e($p['url']) ?>">
        <?php if ($p['img']): ?><img src="<?= e($p['img']) ?>" alt=""<?= $i >= 3 ? ' loading="lazy"' : '' ?> width="640" height="360"><?php else: ?><div class="ph"></div><?php endif; ?>
        <div class="body"><span class="tag"><?= e($p['pillar']) ?></span><h3><?= e($p['title']) ?></h3></div>
      </a>
      <div class="post-foot"><span class="date"><?= e($p['date']) ?></span><a class="share-x" href="<?= e(x_share_href($site, $p['title'], $p['url'])) ?>" target="_blank" rel="noopener" aria-label="Share on X: <?= e($p['title']) ?>"><?= x_icon(13) ?> Share</a></div>
    </article>
    <?php endforeach; ?>
  </div>
  <?php if ($total_pages > 1 && !$out_of_range): ?>
  <nav class="page-nav" aria-label="Insights pages">
    <?php if ($page > 1): ?><a class="btn btn-ghost" rel="prev" href="<?= e(blog_url($pillar_key, $page - 1)) ?>">&larr; Newer</a><?php else: ?><span></span><?php endif; ?>
    <span class="muted">Page <?= (int) $page ?> of <?= (int) $total_pages ?></span>
    <?php if ($page < $total_pages): ?><a class="btn btn-ghost" rel="next" href="<?= e(blog_url($pillar_key, $page + 1)) ?>">Older &rarr;</a><?php else: ?><span></span><?php endif; ?>
  </nav>
  <?php endif; ?>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
