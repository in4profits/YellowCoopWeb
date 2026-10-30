<?php
// Search and social tags for blog posts. Included just before </head> in every post.
// Uses the post's own $title and $meta_description; reads the date from the post file.
require_once __DIR__ . '/config.php';
$__file = $_SERVER['SCRIPT_FILENAME'] ?? '';
$__slug = basename($__file, '.php');
$__url = $site['url'] . '/posts/' . $__slug . '.php';
$__headline = preg_replace('/\s+[—-]\s+Yellow Coop$/u', '', $title ?? '');
$__desc = $meta_description ?? '';
$__img = $site['url'] . '/posts/images/' . $__slug . '-hero.png';
$__date = '';
if ($__file && preg_match('#<p class="meta">\s*([0-9]{4}-[0-9]{2}-[0-9]{2})#', (string) @file_get_contents($__file), $__m)) { $__date = $__m[1]; }
$__ld = [
    '@context' => 'https://schema.org',
    '@graph' => [
        org_schema($site),
        array_filter([
            '@type' => 'BlogPosting',
            'headline' => $__headline,
            'description' => $__desc,
            'image' => $__img,
            'url' => $__url,
            'mainEntityOfPage' => $__url,
            'datePublished' => $__date,
            'articleSection' => $pillar ?? ($legacy_pillars[$__slug] ?? null),
            'author' => ['@id' => $site['url'] . '/#org'],
            'publisher' => ['@id' => $site['url'] . '/#org'],
        ]),
    ],
];
?>
<style>
/* Post tables: bare <table><tr><th> markup scrolls sideways on narrow screens, no wrapper needed. */
article table { display: block; max-width: 100%; overflow-x: auto; -webkit-overflow-scrolling: touch; border-collapse: collapse; margin: 0 0 20px; font-size: 15px; line-height: 1.5; }
article th, article td { padding: 10px 14px; text-align: left; vertical-align: top; border: 1px solid #262626; min-width: 9rem; }
article th { background: #181818; color: #fff; font-weight: 600; border-bottom: 2px solid #F7B51E; white-space: nowrap; }
article td { color: #ddd; }
article tr:nth-child(even) td { background: #151515; }
</style>
<link rel="canonical" href="<?= e($__url) ?>">
<meta property="og:type" content="article">
<meta property="og:site_name" content="Yellow Coop">
<meta property="og:title" content="<?= e($__headline) ?>">
<meta property="og:description" content="<?= e($__desc) ?>">
<meta property="og:url" content="<?= e($__url) ?>">
<meta property="og:image" content="<?= e($__img) ?>">
<?php if ($__date): ?><meta property="article:published_time" content="<?= e($__date) ?>"><?php endif; ?>
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="/assets/mark.svg" type="image/svg+xml">
<script type="application/ld+json"><?= json_encode($__ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?></script>
<?= hubspot_tracking($site) ?>
