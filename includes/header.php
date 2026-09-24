<?php
// Expects: $page_title, $page_desc, $page_path (e.g. '/about/'), $active (nav key or '').
require_once __DIR__ . '/config.php';
$full_title = isset($page_title) && $page_title !== '' ? $page_title . ' | Yellow Coop' : 'Yellow Coop | Fractional & Interim CIO, CTO, CISO Leadership';
$page_desc = $page_desc ?? 'Executive technology leadership sized to the job: virtual, fractional, and interim CIO, CISO, and CTO coverage.';
$page_path = $page_path ?? '/';
$active = $active ?? '';
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= e($full_title) ?></title>
<meta name="description" content="<?= e($page_desc) ?>">
<link rel="canonical" href="<?= e($site['url'] . $page_path) ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Yellow Coop">
<meta property="og:title" content="<?= e($full_title) ?>">
<meta property="og:description" content="<?= e($page_desc) ?>">
<meta property="og:url" content="<?= e($site['url'] . $page_path) ?>">
<meta name="theme-color" content="#111111">
<link rel="icon" href="/assets/mark.svg" type="image/svg+xml">
<link rel="stylesheet" href="/assets/site.css?v=1">
</head>
<body>
<a class="skip" href="#main">Skip to content</a>
<header class="site-nav">
  <div class="container nav-row">
    <a class="logo" href="/" aria-label="Yellow Coop home">
      <img src="/assets/mark.svg" alt="" width="28" height="24"><span>yellow coop</span>
    </a>
    <button class="nav-toggle" aria-expanded="false" aria-controls="nav-links">Menu</button>
    <nav id="nav-links" class="nav-links" aria-label="Main">
      <?php foreach ($nav as $key => [$label, $href]): ?>
        <a href="<?= e($href) ?>"<?= $key === $active ? ' aria-current="page"' : '' ?>><?= e($label) ?></a>
      <?php endforeach; ?>
      <a class="btn btn-y" href="<?= e(booking_href($site)) ?>">Book a 20-min call</a>
    </nav>
  </div>
</header>
<main id="main">
