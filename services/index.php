<?php
$page_title = 'Services';
$page_desc = 'Three ways to work with Yellow Coop: an AI readiness and security review, an advisory retainer, and a half-day team AI workshop.';
$page_path = '/services/';
$active = 'services';
require __DIR__ . '/../includes/header.php';

$offers = [
  [
    'name' => 'AI Readiness and Security Review',
    'meta' => 'Fixed scope · two days',
    'lead' => 'A short, fixed-scope look at where your company stands on AI and security, ending in a written plan.',
    'items' => [
      'Interviews with leadership and staff',
      'Review of systems, spend, contracts, and security posture',
      'Written findings report in plain business language',
      'AI data readiness: pick the use case, name data owners, and flag data quality and sharing permissions to fix first',
      'AI use policy draft: which tools, which data, who approves',
      '90-day roadmap, prioritized by cost, headcount, and risk, with an owner and a date on each item',
    ],
    'best' => 'You are about to turn on AI tools, or a customer or insurer is asking about your security, and you want to know where you stand first.',
    'featured' => true,
  ],
  [
    'name' => 'Advisory retainer',
    'meta' => 'Monthly · 1 to 4 hours a week',
    'lead' => 'An experienced technology executive on call for the CEO and leadership team.',
    'items' => [
      'Monthly roadmap and spend review',
      'Second opinion on vendors, contracts, and proposals',
      'Board and investor meeting prep',
      'Escalation point for your IT lead or provider',
    ],
    'best' => 'A capable IT lead or provider already runs day-to-day work.',
    'featured' => false,
  ],
  [
    'name' => 'Half-day team AI workshop',
    'meta' => 'Half day · your leadership team',
    'lead' => 'A working session that gets your team on the same page about AI use.',
    'items' => [
      'Which AI tools staff may use, with which data, and who approves',
      'How to pick a use case and tie it to hours saved, not demos',
      'AI data readiness: name data owners and fix quality and sharing permissions first',
    ],
    'best' => 'Staff already paste company data into public AI tools, or vendors pitch AI and nobody in-house can evaluate the claims.',
    'featured' => false,
  ],
];
?>
<style>
.offers .tier { display: flex; flex-direction: column; }
.offers .tier .price { font-size: 20px; font-weight: 800; color: var(--y); margin: 4px 0 2px; }
.offers .tier .grow { flex: 1; }
.offers .tier .btn { margin-top: 18px; text-align: center; }
</style>
<section class="container page-hero">
  <span class="eyebrow">Services</span>
  <h1>Three ways to start.</h1>
  <p>Pick the one that fits where you are. Each begins with a 20-minute call so we can confirm it is the right fit before you commit to anything.</p>
</section>

<section class="container offers" style="padding-bottom:40px">
  <div class="tiers">
    <?php foreach ($offers as $o): ?>
    <div class="tier<?= $o['featured'] ? ' featured' : '' ?>">
      <h3><?= e($o['name']) ?></h3>
      <span class="hrs"><?= e($o['meta']) ?></span>
      <div class="price">Pricing on request</div>
      <div class="grow">
        <p style="margin-top:10px"><?= e($o['lead']) ?></p>
        <ul>
          <?php foreach ($o['items'] as $item): ?><li><?= e($item) ?></li>
          <?php endforeach; ?>
        </ul>
        <p style="margin-top:12px"><strong>Best for:</strong> <?= e($o['best']) ?></p>
      </div>
      <a class="btn btn-y" href="/contact/">Book a 20-minute call</a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Need more than one of these?</h2>
    <p class="lead">Most clients start with one and move as the business changes. For ongoing ownership of the technology function, see the Fractional and Interim levels.</p>
    <p><a class="btn btn-ghost" href="/how-we-engage/">Compare Virtual, Fractional, and Interim</a> <a class="btn btn-ghost" href="/what-we-do/">See what we do</a></p>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
