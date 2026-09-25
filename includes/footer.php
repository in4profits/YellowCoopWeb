<?php
// Set $show_cta = false before including to hide the closing call-to-action band.
$show_cta = $show_cta ?? true;
?>
<?php if ($show_cta): ?>
<section class="container">
  <div class="cta-band">
    <p><strong>Not sure which seat you need?</strong> That's what the first call is for.</p>
    <a class="btn btn-navy" href="<?= e(booking_href($site)) ?>"<?= booking_attrs($site) ?>>Book a 20-min call</a>
  </div>
</section>
<?php endif; ?>
</main>
<footer class="site-foot">
  <div class="container foot-row">
    <div>
      <a class="logo" href="/"><img src="/assets/mark.svg" alt="" width="24" height="20"><span>yellow coop</span></a>
      <p class="muted"><?= e($site['tagline']) ?></p>
    </div>
    <nav aria-label="Footer">
      <a href="/what-we-do/">What We Do</a>
      <a href="/how-we-engage/">How We Engage</a>
      <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>
      <a href="/blog.php">Insights</a>
      <a href="/about/">About</a>
      <a href="/faq/">FAQ</a>
      <a href="/contact/">Contact</a>
      <a href="<?= e($site['newsletter']) ?>" target="_blank" rel="noopener">Subscribe</a>
    </nav>
  </div>
  <div class="container muted small">&copy; <?= (int) $site['year_start'] ?>–<?= date('Y') ?> Yellow Coop LLC. All rights reserved.</div>
</footer>
<script src="/assets/site.js?v=1" defer></script>
<?= hubspot_tracking($site) ?>
</body>
</html>
