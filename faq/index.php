<?php
$page_title = 'FAQ';
$page_desc = 'Common questions about fractional, virtual, and interim CIO, CTO, and CISO engagements with Yellow Coop.';
$page_path = '/faq/';
$active = 'faq';
require __DIR__ . '/../includes/header.php';
$faqs = [
  ['What is a fractional CIO or CTO?', 'A senior technology executive who works for your company part-time, owning the same responsibilities a full-time CIO or CTO would: the team, the budget, the roadmap, and the results. You get the experience without the full-time salary.'],
  ['What is the difference between Virtual, Fractional, and Interim?', 'Virtual is advisory, 1 to 4 hours a week, for leadership teams that already have someone running day-to-day IT. Fractional is 1 to 4 days a week and owns the technology function. Interim is full-time for a fixed term while you hire a permanent leader.'],
  ['How is pricing structured?', 'Each engagement is a fixed monthly fee based on the commitment level and scope. We quote it after the first call, once we understand the size of the job.'],
  ['Is there a minimum term?', 'Engagements start with the Assess phase so both sides know what the work involves before committing further. Term and notice period are set in the agreement.'],
  ['Do you work on-site or remote?', 'Mostly remote, with on-site time for kickoff, leadership meetings, and moments that need it. We agree the on-site schedule up front.'],
  ['Will you sign an NDA?', 'Yes. We sign your NDA or provide ours before any detailed discussion of systems, security, or finances.'],
  ['Who does the work?', 'A senior technology executive leads every engagement directly. The work is not handed to junior staff.'],
  ['Do you resell software or take vendor commissions?', 'No. Recommendations are based on what fits your business, and we disclose any relationship with a vendor we recommend.'],
  ['Can you work with our existing IT provider?', 'Yes. Most clients keep their managed service provider. We set priorities, hold the provider to service levels, and step in where they need direction.'],
  ['What happens when the engagement ends?', 'You keep everything: documentation, roadmaps, policies, and vendor contacts. For interim engagements we write a transition plan for your new hire.'],
];
?>
<section class="container page-hero">
  <span class="eyebrow">FAQ</span>
  <h1>Questions we hear on the first call</h1>
</section>
<section class="container faq" style="padding-bottom:40px">
  <?php foreach ($faqs as [$q, $a]): ?>
  <details><summary><?= e($q) ?></summary><p><?= e($a) ?></p></details>
  <?php endforeach; ?>
</section>
<script type="application/ld+json"><?= json_encode([
  '@context' => 'https://schema.org', '@type' => 'FAQPage',
  'mainEntity' => array_map(function ($f) { return ['@type' => 'Question', 'name' => $f[0], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $f[1]]]; }, $faqs),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
<?php require __DIR__ . '/../includes/footer.php'; ?>
