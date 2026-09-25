<?php
$page_title = 'CIO vs CTO vs CISO: Who Owns What';
$page_desc = 'The real differences between a Chief Information Officer, Chief Technology Officer, and Chief Information Security Officer, with an interactive guide to which one your company needs.';
$page_path = '/cio-vs-cto-vs-ciso/';
$page_image = '/assets/cio-cto-ciso.png';
$active = 'roles';
require __DIR__ . '/../includes/header.php';

// Comparison data: dimension => [CIO, CISO, CTO]
$dims = [
  'Primary domain' => [
    'Internal systems, data, and the tools employees use to run the business: ERP, CRM, email, networks, devices.',
    'Cyber risk across every system the company touches: policy, controls, compliance, and incident response.',
    'The product or platform customers use, the architecture under it, and the engineering team that builds it.'],
  'Core question' => [
    'Does the business run efficiently on its technology, at a cost that makes sense?',
    'What could go wrong, how bad would it be, and are we ready when it happens?',
    'What should we build next, can it scale, and does it beat the competition?'],
  'Faces' => [
    'Inward. Employees, operations, finance, and the vendors that serve them.',
    'Across. The board, auditors, regulators, insurers, and customers asking security questions.',
    'Outward. Customers, the market, and product partners.'],
  'Owns in security' => [
    'Operates the defenses on internal systems: MFA, patching, backups, device management, access.',
    'Writes the rules, sets the risk appetite with leadership, and checks that everyone follows them.',
    'Builds security into the product: secure code, cloud configuration, release pipelines (DevSecOps).'],
  'Key actions' => [
    'Negotiates vendor contracts, runs ERP and CRM, manages the help desk or provider, owns the IT budget.',
    'Answers security questionnaires, runs audits, owns the incident response plan, handles cyber insurance.',
    'Sets architecture, decides build vs buy, hires and leads engineers, ships AI and product features.'],
  'Measured by' => [
    'Uptime, cost per user, projects delivered on time, adoption of new tools.',
    'Risk reduced, audit findings closed, time to detect and respond, clean customer reviews.',
    'Release speed, platform reliability, product revenue, engineering productivity.'],
  'Usually reports to' => [
    'CEO, CFO, or COO.',
    'Often the CIO; more and more often the CEO, COO, general counsel, or risk officer.',
    'CEO. In companies that don\'t sell technology, sometimes the CIO.'],
  'Main driver' => [
    'Efficiency and stability.',
    'Resilience and trust.',
    'Growth and speed to market.'],
];
$roles = [
  ['cio', 'CIO', 'Chief Information Officer', 'Operate'],
  ['ciso', 'CISO', 'Chief Information Security Officer', 'Secure'],
  ['cto', 'CTO', 'Chief Technology Officer', 'Innovate'],
];

// "Who owns it?" scenarios: [situation, primary owner, partners, why]
$scenarios = [
  ['A big customer sends a 200-question security questionnaire before signing.', 'ciso', ['cto','cio'], 'The CISO owns the answers and the evidence. The CTO supplies product details, the CIO supplies details on internal systems.'],
  ['The ERP contract renews in 60 days and the price went up 18%.', 'cio', [], 'Business systems and vendor contracts are core CIO work: renegotiate, consolidate, or plan a replacement.'],
  ['Sales wants an AI assistant inside the product by next quarter.', 'cto', ['ciso'], 'A customer-facing feature is a CTO decision. The CISO sets the rules for what customer data the model can see.'],
  ['Ransomware locks the file server at 2 a.m.', 'ciso', ['cio'], 'The CISO runs the incident response plan and makes the calls. The CIO\'s team restores systems from backup.'],
  ['Staff are pasting customer data into free AI chat tools.', 'ciso', ['cio'], 'The CISO writes the AI use policy. The CIO rolls out approved tools and blocks the risky ones.'],
  ['The product slows down every time a large customer runs reports.', 'cto', [], 'Platform scalability and architecture are CTO problems.'],
  ['The cyber insurance renewal asks for proof of MFA and offline backups.', 'ciso', ['cio'], 'The CISO answers the insurer. The CIO\'s team proves the controls are actually in place.'],
  ['Laptops, email, and the help desk are a constant source of complaints.', 'cio', [], 'Employee technology and IT service quality belong to the CIO.'],
  ['An acquirer wants technology due diligence on your company.', 'cto', ['cio','ciso'], 'The CTO leads when the product is the asset. The CIO covers internal systems and the CISO covers security posture.'],
  ['The board asks: "How exposed are we to a breach, and what is our plan?"', 'ciso', [], 'Board-level cyber risk reporting is the CISO\'s job. For US public companies, the SEC requires disclosure of management\'s cybersecurity expertise.'],
];

// Overlap zones for the Venn explorer
$overlaps = [
  'cio'      => ['CIO only', 'Business applications, IT budget and vendors, help desk, devices, employee onboarding.'],
  'ciso'     => ['CISO only', 'Security policy, risk register, audits and compliance, security awareness training, insurer and regulator relationships.'],
  'cto'      => ['CTO only', 'Product roadmap, architecture, engineering team, release process, customer-facing features.'],
  'cio-ciso' => ['CIO + CISO', 'Identity and access, MFA, patching, backups, endpoint protection. The CISO sets the standard; the CIO runs it.'],
  'cto-ciso' => ['CTO + CISO', 'Application security, secure code review, cloud configuration, customer security reviews of the product.'],
  'cio-cto'  => ['CIO + CTO', 'Cloud platforms, data and analytics, integrations between internal systems and the product.'],
  'all'      => ['All three', 'AI governance, third-party and vendor risk, disaster recovery, and the technology roadmap the CEO signs off on.'],
];
?>
<style>
.roles-hero .grad { white-space: nowrap; }
.infographic { margin: 8px 0 12px; border-radius: 12px; overflow: hidden; border: 1px solid var(--line); }
.infographic img { display: block; width: 100%; height: auto; }
.dl { font-size: 14px; color: var(--muted); }
.rc-cio { --rc: #F7B51E; } .rc-ciso { --rc: #F4A11F; } .rc-cto { --rc: #F0851F; }
.role-switch { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 18px; }
.role-switch button { background: var(--bg2); border: 1px solid #333; color: #ddd; border-radius: 999px; padding: 8px 16px; font-weight: 700; cursor: pointer; font-size: 15px; }
.role-switch button[aria-pressed="true"] { background: var(--y); border-color: var(--y); color: #111; }
.cmp { width: 100%; border-collapse: separate; border-spacing: 0 8px; }
.cmp th, .cmp td { text-align: left; vertical-align: top; padding: 14px 16px; font-size: 15.5px; }
.cmp thead th { font-size: 17px; color: #13294B; background: var(--rc); }
.cmp thead th:first-child { background: none; }
.cmp thead th small { display: block; font-weight: 600; font-size: 12px; letter-spacing: 1.5px; opacity: .8; }
.cmp tbody th { color: #fff; width: 18%; border-left: 3px solid var(--y); background: var(--bg2); }
.cmp tbody td { background: var(--bg2); color: #cfcfcf; transition: opacity .2s, background .2s; }
.cmp thead th:nth-child(2) { border-radius: 8px 0 0 8px; } .cmp thead th:last-child { border-radius: 0 8px 8px 0; }
.cmp[data-focus] tbody td { opacity: .35; }
.cmp[data-focus="cio"] td.c-cio, .cmp[data-focus="ciso"] td.c-ciso, .cmp[data-focus="cto"] td.c-cto { opacity: 1; background: #221d12; }
@media (max-width: 760px) {
  .cmp thead { display: none; }
  .cmp, .cmp tbody, .cmp tr, .cmp th, .cmp td { display: block; width: 100%; }
  .cmp tr { margin-bottom: 12px; }
  .cmp tbody th { border-radius: 6px 6px 0 0; width: 100%; }
  .cmp td::before { content: attr(data-label); display: block; font-size: 12px; font-weight: 800; letter-spacing: 1px; color: var(--y); }
  .cmp[data-focus] td { display: none; }
  .cmp[data-focus="cio"] td.c-cio, .cmp[data-focus="ciso"] td.c-ciso, .cmp[data-focus="cto"] td.c-cto { display: block; }
}
/* Scenario game */
.game { background: var(--bg2); border: 1px solid var(--line); border-radius: 12px; padding: 24px; }
.game .count { color: var(--muted); font-size: 14px; }
.game .situation-q { font-size: 21px; color: #fff; font-weight: 600; margin: 8px 0 18px; min-height: 60px; }
.game .picks { display: flex; gap: 10px; flex-wrap: wrap; }
.game .picks button { flex: 1 1 140px; border: 2px solid var(--rc); background: transparent; color: #fff; border-radius: 8px; padding: 12px; font-weight: 800; font-size: 17px; cursor: pointer; }
.game .picks button small { display: block; font-weight: 500; font-size: 12px; color: #aaa; }
.game .picks button:disabled { cursor: default; opacity: .45; }
.game .picks button.correct { background: var(--rc); color: #13294B; opacity: 1; }
.game .picks button.correct small { color: #13294B; }
.game .picks button.partner { opacity: .85; border-style: dashed; }
.game .result { margin-top: 16px; min-height: 48px; color: #d6d6d6; }
.game .result strong { color: var(--y); }
.game .nav { display: flex; justify-content: space-between; align-items: center; margin-top: 12px; gap: 12px; flex-wrap: wrap; }
.game .score { font-weight: 700; color: #fff; }
/* Venn */
.venn-wrap { display: grid; grid-template-columns: 1.1fr 1fr; gap: 28px; align-items: center; }
.venn svg { width: 100%; height: auto; max-width: 520px; display: block; margin: 0 auto; }
.venn circle { mix-blend-mode: screen; }
.venn .zone { cursor: pointer; }
.venn .zone rect { fill: #111; stroke: #555; transition: fill .15s; }
.venn .zone text { fill: #fff; font: 700 13px system-ui, sans-serif; pointer-events: none; }
.venn .zone[aria-pressed="true"] rect, .venn .zone:hover rect, .venn .zone:focus rect { fill: #13294B; stroke: var(--y); }
.venn-panel { background: var(--bg2); border-left: 4px solid var(--y); border-radius: 6px; padding: 20px; min-height: 140px; }
.venn-panel h3 { margin-bottom: 8px; }
.venn-panel p { color: #cfcfcf; }
@media (max-width: 860px) { .venn-wrap { grid-template-columns: 1fr; } }
/* Need finder */
.finder { display: grid; grid-template-columns: repeat(4, 1fr); gap: 12px; margin-bottom: 16px; }
.finder button { text-align: left; background: var(--bg2); border: 1px solid #333; color: #ddd; border-radius: 8px; padding: 14px; cursor: pointer; font-size: 15px; }
.finder button strong { display: block; color: #fff; margin-bottom: 4px; }
.finder button[aria-pressed="true"] { border-color: var(--y); box-shadow: inset 0 0 0 1px var(--y); }
.finder-out { background: #1d1a12; border: 1px solid #3a3222; border-radius: 10px; padding: 20px; }
.finder-out .mix { display: flex; height: 14px; border-radius: 7px; overflow: hidden; margin: 12px 0 8px; }
.finder-out .mix span { display: block; height: 100%; transition: width .3s; }
.finder-out .legend { display: flex; gap: 16px; flex-wrap: wrap; font-size: 13px; color: #bbb; }
.finder-out .legend i { display: inline-block; width: 10px; height: 10px; border-radius: 2px; margin-right: 6px; }
@media (max-width: 860px) { .finder { grid-template-columns: 1fr 1fr; } }
@media (max-width: 520px) { .finder { grid-template-columns: 1fr; } }
.defs .card cite { display: block; margin-top: 10px; font-size: 13px; color: var(--muted); font-style: normal; }
.defs .card blockquote { color: #e6e6e6; border-left: 3px solid var(--y); padding-left: 12px; margin: 8px 0; }
.stat { font-size: 40px; font-weight: 800; color: var(--y); line-height: 1; }
</style>

<section class="container page-hero roles-hero">
  <span class="eyebrow">Technology leadership, explained</span>
  <h1>CIO vs CTO vs CISO: <span class="grad">who owns what</span></h1>
  <p>Three titles that get used interchangeably and shouldn't be. The CIO keeps the business running on technology. The CTO builds the technology the business sells. The CISO makes sure neither one becomes the reason the company ends up in the news.</p>
</section>

<section class="container">
  <figure class="infographic">
    <a href="/assets/cio-cto-ciso.png" target="_blank" rel="noopener" title="Open full size"><img src="/assets/cio-cto-ciso.png" alt="CIO vs CISO vs CTO comparison: primary domain, core question, who each faces, security ownership, key actions, how each is measured, and main driver." width="1200" height="1271"></a>
  </figure>
  <p class="dl">Share it: <a href="/assets/cio-cto-ciso.png" download>Download the image (PNG)</a> · <a href="/assets/cio-cto-ciso.svg" download>Vector (SVG)</a></p>
</section>

<section class="section">
  <div class="container">
    <h2>Side by side, in depth</h2>
    <p class="lead">Pick a role to spotlight its column. On a phone, pick a role to see just that role.</p>
    <div class="role-switch" role="group" aria-label="Spotlight a role">
      <button type="button" data-focus="" aria-pressed="true">All three</button>
      <?php foreach ($roles as [$k, $ab, $full, $pil]): ?>
        <button type="button" data-focus="<?= $k ?>" aria-pressed="false"><?= $ab ?> · <?= $pil ?></button>
      <?php endforeach; ?>
    </div>
    <table class="cmp" id="cmp">
      <thead><tr><th scope="col"><span class="sr-only">Dimension</span></th>
        <?php foreach ($roles as [$k, $ab, $full, $pil]): ?>
          <th scope="col" class="rc-<?= $k ?>"><?= $ab ?><small><?= e(strtoupper($pil)) ?> · <?= e($full) ?></small></th>
        <?php endforeach; ?>
      </tr></thead>
      <tbody>
        <?php foreach ($dims as $label => $vals): ?>
        <tr><th scope="row"><?= e($label) ?></th>
          <?php foreach ($roles as $i => [$k, $ab]): ?>
            <td class="c-<?= $k ?>" data-label="<?= $ab ?>"><?= e($vals[$i]) ?></td>
          <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Who owns it? Test yourself.</h2>
    <p class="lead">Ten situations companies actually face. Pick who should own each one. Most real problems have a primary owner and partners.</p>
    <div class="game" id="game" aria-live="polite">
      <div class="count" id="g-count"></div>
      <p class="situation-q" id="g-q"></p>
      <div class="picks" id="g-picks">
        <?php foreach ($roles as [$k, $ab, $full]): ?>
          <button type="button" class="rc-<?= $k ?>" data-role="<?= $k ?>"><?= $ab ?><small><?= e($full) ?></small></button>
        <?php endforeach; ?>
      </div>
      <div class="result" id="g-result"></div>
      <div class="nav"><span class="score" id="g-score"></span><button type="button" class="btn btn-y" id="g-next" hidden>Next situation</button></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Where the roles overlap</h2>
    <p class="lead">The overlaps are where work gets dropped. Click a zone to see what lives there.</p>
    <div class="venn-wrap">
      <div class="venn">
        <svg viewBox="0 0 520 470" role="group" aria-label="Overlap of CIO, CISO, and CTO responsibilities">
          <circle cx="185" cy="170" r="140" fill="#F7B51E" fill-opacity=".30" stroke="#F7B51E" stroke-width="2"/>
          <circle cx="335" cy="170" r="140" fill="#F0851F" fill-opacity=".30" stroke="#F0851F" stroke-width="2"/>
          <circle cx="260" cy="300" r="140" fill="#C9661A" fill-opacity=".30" stroke="#F4A11F" stroke-width="2"/>
          <text x="95" y="72" fill="#F7B51E" font-weight="800" font-size="22" font-family="system-ui,sans-serif">CIO</text>
          <text x="375" y="72" fill="#F0851F" font-weight="800" font-size="22" font-family="system-ui,sans-serif">CTO</text>
          <text x="230" y="460" fill="#F4A11F" font-weight="800" font-size="22" font-family="system-ui,sans-serif">CISO</text>
          <?php
          $zones = [ // key, x, y, label
            ['cio', 115, 140, 'CIO only'], ['cto', 345, 140, 'CTO only'], ['ciso', 222, 375, 'CISO only'],
            ['cio-cto', 222, 110, 'CIO + CTO'], ['cio-ciso', 128, 268, 'CIO + CISO'], ['cto-ciso', 315, 268, 'CTO + CISO'],
            ['all', 222, 205, 'All three'],
          ];
          foreach ($zones as [$zk, $zx, $zy, $zl]): ?>
          <g class="zone" role="button" tabindex="0" data-zone="<?= $zk ?>" aria-pressed="<?= $zk === 'all' ? 'true' : 'false' ?>" transform="translate(<?= $zx ?>,<?= $zy ?>)">
            <rect width="80" height="30" rx="15" x="-2"/><text x="38" y="20" text-anchor="middle"><?= e($zl) ?></text>
          </g>
          <?php endforeach; ?>
        </svg>
      </div>
      <div class="venn-panel" id="venn-panel"><h3></h3><p></p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Which one does your company need?</h2>
    <p class="lead">Pick the description closest to your company. The bar shows where a technology leader's time should go.</p>
    <div class="finder" id="finder" role="group" aria-label="Company type">
      <button type="button" data-p="runs" aria-pressed="true"><strong>We run on technology</strong>Logistics, manufacturing, distribution, services. Software supports the business; it isn't the product.</button>
      <button type="button" data-p="sells" aria-pressed="false"><strong>We sell technology</strong>SaaS, a platform, or an app customers pay for.</button>
      <button type="button" data-p="regulated" aria-pressed="false"><strong>We get audited</strong>Enterprise customers, SOC 2, HIPAA, PCI, or insurer requirements drive our year.</button>
      <button type="button" data-p="transition" aria-pressed="false"><strong>We lost our leader</strong>The CIO or CTO left, or a merger or big project needs someone now.</button>
    </div>
    <div class="finder-out" id="finder-out" aria-live="polite">
      <h3 id="f-title"></h3>
      <div class="mix" aria-hidden="true"><span id="f-cio" style="background:#F7B51E"></span><span id="f-ciso" style="background:#F4A11F"></span><span id="f-cto" style="background:#F0851F"></span></div>
      <div class="legend"><span><i style="background:#F7B51E"></i>CIO <b id="l-cio"></b></span><span><i style="background:#F4A11F"></i>CISO <b id="l-ciso"></b></span><span><i style="background:#F0851F"></i>CTO <b id="l-cto"></b></span></div>
      <p id="f-body" style="margin-top:12px;color:#d6d6d6"></p>
      <p style="margin-top:12px"><a class="btn btn-y" href="<?= e(booking_href($site)) ?>"<?= booking_attrs($site) ?>>Talk it through: book a 20-min call</a></p>
    </div>
    <p class="muted small" style="margin-top:10px">Splits are Yellow Coop's starting point for scoping an engagement, not survey data.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Can one person do all three?</h2>
    <div class="grid-2">
      <div class="card">
        <h3>Yes, at most companies under a few hundred people</h3>
        <p class="muted">A company with 150 employees rarely has enough CIO, CTO, and CISO work to fill three executive calendars. One experienced leader covering all three, with emphasis set by the business, is how most growing companies get the work done. That is the model behind a fractional technology executive.</p>
      </div>
      <div class="card">
        <h3>With one check: independence</h3>
        <p class="muted">The person who runs the systems shouldn't be the only one grading their security. IANS Research puts it plainly: the CISO has to be free "to give honest, unbiased, clear evaluation and guidance." When one leader holds both seats, add an outside check: an annual penetration test, an external audit, or a direct line to the board on cyber risk.</p>
      </div>
    </div>
    <div class="grid-3" style="margin-top:20px">
      <div class="card"><div class="stat">64%</div><p class="muted" style="margin-top:8px">of security leaders still report into IT leadership. 36% report to a business executive such as the CEO, COO, general counsel, or chief risk officer. <br><small>IANS Research and Artico Search, State of the CISO benchmark, 2026</small></p></div>
      <div class="card"><div class="stat">4 days</div><p class="muted" style="margin-top:8px">US public companies generally have four business days to disclose a cyber incident once they decide it is material, and must describe management's cybersecurity expertise every year. <br><small>SEC cybersecurity disclosure rules, 2023</small></p></div>
      <div class="card"><div class="stat">1981</div><p class="muted" style="margin-top:8px">The year the CIO role was first formally defined, by William Synnott and William Gruber. The CTO title spread through the 1980s. The CISO is the youngest of the three. <br><small>Synnott &amp; Gruber, <i>Information Resource Management</i></small></p></div>
    </div>
  </div>
</section>

<section class="section defs">
  <div class="container">
    <h2>What the references say</h2>
    <div class="grid-3">
      <div class="card">
        <h3>CIO</h3>
        <p class="muted">The senior executive responsible for the information technology and computer systems that support the organization's goals: IT strategy, business systems, vendors, service delivery, and continuity.</p>
        <p class="muted" style="margin-top:8px">Common distinction: the CIO focuses on technology's use inside the business; the CTO on the technology itself, often customer-facing.</p>
        <cite>Synnott &amp; Gruber (1981); widely used CIO vs CTO distinction summarized in the <a href="https://en.wikipedia.org/wiki/Chief_information_officer">CIO reference entry</a></cite>
      </div>
      <div class="card">
        <h3>CISO</h3>
        <p class="muted">NIST, in its federal framework, defines the role as the official responsible for carrying out the CIO's information security responsibilities and serving as the CIO's primary liaison to the people who own and authorize systems.</p>
        <p class="muted" style="margin-top:8px">NIST's Cybersecurity Framework 2.0 adds that "organizational leadership is responsible and accountable for cybersecurity risk", which is why the CISO increasingly reports outside IT.</p>
        <cite><a href="https://csrc.nist.gov/glossary/term/chief_information_security_officer">NIST SP 800-37 Rev. 2 glossary</a> · <a href="https://nvlpubs.nist.gov/nistpubs/CSWP/NIST.CSWP.29.pdf">NIST CSF 2.0 (GV.RR-01)</a></cite>
      </div>
      <div class="card">
        <h3>CTO</h3>
        <p class="muted">The executive who owns technology strategy, research and development, architecture, and engineering delivery, with a long-range view of what the company must build to compete.</p>
        <p class="muted" style="margin-top:8px">Roland Berger describes four CTO archetypes: operations expert, product and technology champion, business model strategist, and chief architect.</p>
        <cite><a href="https://www.rolandberger.com/en/Insights/Publications/CTO-2030-Redefining-the-role-of-the-CTO.html">Roland Berger, CTO 2030 (2024)</a> · <a href="https://en.wikipedia.org/wiki/Chief_technology_officer">CTO reference entry</a></cite>
      </div>
    </div>
    <p class="muted small" style="margin-top:14px">More sources: <a href="https://www.sec.gov/newsroom/press-releases/2023-139">SEC press release 2023-139</a> · <a href="https://www.ians.com/blog/ians-research/what-is-the-ideal-ciso-reporting-structure">IANS: the ideal CISO reporting structure</a> · <a href="https://www.prnewswire.com/news-releases/2026-report-finds-executive-level-ciso-titles-more-prevalent-than-ever-302662594.html">IANS and Artico Search, 2026 State of the CISO</a></p>
  </div>
</section>

<script>
(function () {
  // Spotlight a role column
  var cmp = document.getElementById('cmp');
  document.querySelectorAll('.role-switch button').forEach(function (b) {
    b.addEventListener('click', function () {
      document.querySelectorAll('.role-switch button').forEach(function (x) { x.setAttribute('aria-pressed', x === b ? 'true' : 'false'); });
      var f = b.getAttribute('data-focus');
      if (f) cmp.setAttribute('data-focus', f); else cmp.removeAttribute('data-focus');
    });
  });

  // Who owns it? game
  var S = <?= json_encode($scenarios, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>;
  var names = { cio: 'CIO', ciso: 'CISO', cto: 'CTO' };
  var i = 0, score = 0, answered = false;
  var q = document.getElementById('g-q'), cnt = document.getElementById('g-count'), res = document.getElementById('g-result'),
      nxt = document.getElementById('g-next'), sc = document.getElementById('g-score'), picks = document.querySelectorAll('#g-picks button');
  function show() {
    answered = false; nxt.hidden = true; res.innerHTML = '';
    if (i >= S.length) {
      q.textContent = 'You scored ' + score + ' of ' + S.length + '.';
      cnt.textContent = 'Done';
      res.innerHTML = score >= 8 ? 'You know the seats well. The hard part is having someone in them.' : 'That is the point: even experienced teams mix these up, which is how work falls between the seats.';
      picks.forEach(function (p) { p.disabled = true; p.classList.remove('correct', 'partner'); });
      nxt.textContent = 'Start over'; nxt.hidden = false; return;
    }
    cnt.textContent = 'Situation ' + (i + 1) + ' of ' + S.length;
    q.textContent = S[i][0];
    picks.forEach(function (p) { p.disabled = false; p.classList.remove('correct', 'partner'); });
    sc.textContent = 'Score: ' + score;
  }
  picks.forEach(function (p) {
    p.addEventListener('click', function () {
      if (answered) return; answered = true;
      var s = S[i], pick = p.getAttribute('data-role'), ok = pick === s[1];
      if (ok) score++;
      picks.forEach(function (x) {
        var r = x.getAttribute('data-role'); x.disabled = true;
        if (r === s[1]) x.classList.add('correct'); else if (s[2].indexOf(r) > -1) x.classList.add('partner');
      });
      var partners = s[2].length ? ' Partners: ' + s[2].map(function (r) { return names[r]; }).join(' and ') + '.' : '';
      res.innerHTML = '<strong>' + (ok ? 'Right.' : 'Primary owner: ' + names[s[1]] + '.') + '</strong> ' + s[3] + partners;
      sc.textContent = 'Score: ' + score;
      nxt.textContent = i === S.length - 1 ? 'See your score' : 'Next situation'; nxt.hidden = false; nxt.focus();
    });
  });
  nxt.addEventListener('click', function () { if (i >= S.length) { i = 0; score = 0; } else { i++; } show(); });
  show();

  // Venn
  var Z = <?= json_encode($overlaps, JSON_UNESCAPED_UNICODE | JSON_HEX_TAG) ?>;
  var panel = document.getElementById('venn-panel');
  function zone(k) {
    document.querySelectorAll('.venn .zone').forEach(function (z) { z.setAttribute('aria-pressed', z.getAttribute('data-zone') === k ? 'true' : 'false'); });
    panel.querySelector('h3').textContent = Z[k][0]; panel.querySelector('p').textContent = Z[k][1];
  }
  document.querySelectorAll('.venn .zone').forEach(function (z) {
    z.addEventListener('click', function () { zone(z.getAttribute('data-zone')); });
    z.addEventListener('keydown', function (e) { if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); zone(z.getAttribute('data-zone')); } });
  });
  zone('all');

  // Need finder: time split CIO / CISO / CTO
  var P = {
    runs: ['CIO-led, with security built in', [60, 30, 10], 'Your money leaks through vendor contracts, aging systems, and manual processes. Lead with Operate: spend baseline, contract renegotiation, and a 12-month roadmap. Security runs alongside because customers and insurers will ask. CTO work shows up for integrations and AI tools.'],
    sells: ['CTO-led, with a security partner', [15, 25, 60], 'The product is the business. Lead with Innovate: architecture, build vs buy, delivery speed, and the engineering team. Put security into the product early, because enterprise buyers check it before they sign.'],
    regulated: ['CISO-led until the audit passes', [25, 55, 20], 'Questionnaires, audits, and insurance requirements are setting your calendar. Lead with Secure: own the answers, close the gaps, and build the evidence once so you stop rebuilding it for every customer.'],
    transition: ['Interim leader across all three', [40, 30, 30], 'Someone has to hold the seat now. Stabilize the team, keep renewals and projects moving, cover security, then help hire the permanent leader and hand off cleanly.']
  };
  function pick(k) {
    document.querySelectorAll('#finder button').forEach(function (b) { b.setAttribute('aria-pressed', b.getAttribute('data-p') === k ? 'true' : 'false'); });
    var d = P[k];
    document.getElementById('f-title').textContent = d[0];
    ['cio', 'ciso', 'cto'].forEach(function (r, n) {
      document.getElementById('f-' + r).style.width = d[1][n] + '%';
      document.getElementById('l-' + r).textContent = d[1][n] + '%';
    });
    document.getElementById('f-body').textContent = d[2];
  }
  document.querySelectorAll('#finder button').forEach(function (b) { b.addEventListener('click', function () { pick(b.getAttribute('data-p')); }); });
  pick('runs');
})();
</script>
<?php require __DIR__ . '/../includes/footer.php'; ?>
