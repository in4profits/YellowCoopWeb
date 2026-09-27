<?php
require_once __DIR__ . '/config.php';
$__share_slug = basename($_SERVER['SCRIPT_FILENAME'] ?? '', '.php');
$__share_title = preg_replace('/\s+[—-]\s+Yellow Coop$/u', '', $title ?? '');
?>
<p class="yc-share">Found this useful? <a href="<?= e(x_share_href($site, $__share_title, '/posts/' . $__share_slug . '.php')) ?>" target="_blank" rel="noopener"><?= x_icon(14) ?> Share on X</a></p>
<aside class="yc-cta">
  <p><strong>Need someone to own this, not just read about it?</strong> Yellow Coop provides CIO, CISO, and CTO leadership from a few hours a week to a full-time interim seat.</p>
  <a href="/how-we-engage/">How we engage</a><a href="<?= htmlspecialchars(booking_href($site), ENT_QUOTES, 'UTF-8') ?>"<?= booking_attrs($site) ?>>Book a 20-min call</a>
</aside>
