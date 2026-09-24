<?php
$page_title = '';
$page_desc = 'Executive technology leadership sized to the job. Virtual, fractional, and interim CIO, CISO, and CTO coverage for companies that need a technology executive but not a full-time hire.';
$page_path = '/';
$active = '';
require __DIR__ . '/includes/header.php';
$latest = array_slice(load_posts(__DIR__), 0, 3);
?>
<section class="container hero">
  <h1>Executive technology leadership, <span class="grad">sized to the job.</span></h1>
  <p>CIO, CISO, and CTO coverage from a few hours a week to a full-time interim seat. For companies that need a technology executive and don't need one on payroll yet, or just lost the one they had.</p>
  <div class="ctas">
    <a class="btn btn-y" href="<?= e(booking_href($site)) ?>">Book a 20-min call</a>
    <a class="btn btn-ghost" href="/how-we-engage/">See how engagements work</a>
  </div>
</section>

<section class="container spectrum" aria-label="What we cover">
  <div class="roles" aria-hidden="true">
    <span><span class="long">Chief Information Officer</span><span class="short">CIO</span></span>
    <span><span class="long">Chief Information Security Officer</span><span class="short">CISO</span></span>
    <span><span class="long">Chief Technology Officer</span><span class="short">CTO</span></span>
  </div>
  <div class="band" role="tablist" aria-label="Operate, Secure, Innovate">
    <button role="tab" aria-selected="true" data-pillar="operate">Operate</button>
    <button role="tab" aria-selected="false" data-pillar="secure">Secure</button>
    <button role="tab" aria-selected="false" data-pillar="innovate">Innovate</button>
  </div>
  <div class="band-panel" aria-live="polite">
    <p data-panel="operate"><strong>Operate · CIO.</strong> Systems, vendors, contracts, IT spend, help desk, and the team that runs them. <a href="/what-we-do/#operate">More</a></p>
    <p data-panel="secure" hidden><strong>Secure · CISO.</strong> Security questionnaires, cyber insurance requirements, compliance, incident readiness, and AI data policy. <a href="/what-we-do/#secure">More</a></p>
    <p data-panel="innovate" hidden><strong>Innovate · CTO.</strong> Product and platform roadmap, AI adoption, build vs buy, and the engineering team. <a href="/what-we-do/#innovate">More</a></p>
  </div>

  <div class="tiers">
    <div class="tier">
      <h3>Virtual</h3><span class="hrs">Advisory · 1 to 4 hours a week</span>
      <p>A sounding board for the CEO. Roadmap reviews, second opinions on vendors and contracts, board and investor prep.</p>
    </div>
    <div class="tier featured">
      <h3>Fractional</h3><span class="hrs">Shared · 1 to 4 days a week</span>
      <p>Owns the technology function part-time. Runs the team, the budget, and the roadmap, and sits in your leadership meetings.</p>
    </div>
    <div class="tier">
      <h3>Interim</h3><span class="hrs">Full-time, fixed term</span>
      <p>Fills the seat while you hire. Stabilizes the team, keeps projects moving, and helps you pick the permanent leader.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>When companies call us</h2>
    <div class="grid-4">
      <div class="situation"><strong>Your IT leader just left.</strong>Projects stall, vendor contracts renew on autopilot, and nobody owns the roadmap.</div>
      <div class="situation"><strong>The board asked about AI.</strong>Staff already use AI tools. Nobody decided which ones, or what company data goes into them.</div>
      <div class="situation"><strong>A security review is coming.</strong>A customer questionnaire, an insurer, or a SOC 2 audit, and no one owns the answers.</div>
      <div class="situation"><strong>You outgrew "the IT person."</strong>Great at keeping things running. Not hired to set a three-year plan or run a platform decision.</div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>How an engagement runs</h2>
    <div class="grid-3">
      <div class="step"><span class="eyebrow">Step 1</span><h3>Assess</h3>Systems, spend, contracts, team, and risk. You get a written findings report in plain business language.</div>
      <div class="step"><span class="eyebrow">Step 2</span><h3>Roadmap</h3>A prioritized plan tied to cost, headcount, and risk, sized to the budget you actually have.</div>
      <div class="step"><span class="eyebrow">Step 3</span><h3>Lead</h3>We run the plan at the level of commitment you pick, and adjust it as the business changes.</div>
    </div>
  </div>
</section>

<?php if ($latest): ?>
<section class="section">
  <div class="container">
    <h2>Latest insights</h2>
    <div class="posts">
      <?php foreach ($latest as $p): ?>
      <a class="post-card" href="<?= e($p['url']) ?>">
        <?php if ($p['img']): ?><img src="<?= e($p['img']) ?>" alt="" loading="lazy" width="640" height="360"><?php else: ?><div class="ph"></div><?php endif; ?>
        <div class="body"><span class="tag"><?= e($p['pillar']) ?></span><h3><?= e($p['title']) ?></h3><span class="date"><?= e($p['date']) ?></span></div>
      </a>
      <?php endforeach; ?>
    </div>
    <p style="margin-top:18px"><a href="/blog.php">All insights →</a></p>
  </div>
</section>
<?php endif; ?>

<?php require __DIR__ . '/includes/footer.php'; ?>
