<?php
$page_title = 'Contact';
$page_desc = 'Book a 20-minute call with Yellow Coop about fractional, virtual, or interim technology leadership.';
$page_path = '/contact/';
$active = '';
$show_cta = false;
require __DIR__ . '/../includes/header.php';
$has_form = $site['hs_portal'] !== '' && $site['hs_form'] !== '';
?>
<section class="container page-hero">
  <span class="eyebrow">Contact</span>
  <h1>Start with a 20-minute call.</h1>
  <p>Tell us what's going on: a leader who left, a security review, an AI decision, a platform that's stuck. We'll tell you which level of help fits, or if you don't need us yet.</p>
</section>
<section class="container" style="padding-bottom:56px">
  <div class="grid-2">
    <div class="card">
      <?php if ($site['booking_url'] !== ''): ?>
        <h3>Book a time</h3>
        <p class="muted" style="margin-bottom:14px">Pick a slot that works for you.</p>
        <a class="btn btn-y" href="<?= e($site['booking_url']) ?>"<?= booking_attrs($site) ?>>Book a 20-min call</a>
      <?php elseif ($has_form): ?>
        <h3>Send a note</h3>
        <div id="hs-form"></div>
        <script src="https://js.hsforms.net/forms/embed/v2.js" charset="utf-8"></script>
        <script>
          hbspt.forms.create({ region: <?= json_encode($site['hs_region']) ?>, portalId: <?= json_encode($site['hs_portal']) ?>, formId: <?= json_encode($site['hs_form']) ?>, target: '#hs-form' });
        </script>
      <?php else: ?>
        <h3>Email us</h3>
        <p class="muted" style="margin-bottom:14px">A short note on your situation is enough. We reply within one business day.</p>
        <a class="btn btn-y" href="mailto:<?= e($site['email']) ?>?subject=<?= rawurlencode('20-minute call') ?>"><?= e($site['email']) ?></a>
      <?php endif; ?>
    </div>
    <div class="card">
      <h3>Not ready to talk?</h3>
      <p class="muted" style="margin-bottom:14px">Get the weekly Yellow Coop brief on AI, security, and IT operations.</p>
      <a class="btn btn-ghost" href="<?= e($site['newsletter']) ?>" target="_blank" rel="noopener">Subscribe</a>
      <p class="muted small" style="margin-top:18px">Or email <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></p>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
