<?php
$title = 'How to Run a 90-Minute Ransomware Tabletop Exercise: A Playbook for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Run a 90-Minute Ransomware Tabletop Exercise | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'A 90-minute ransomware tabletop exercise plan for mid-market owners and operators: who to invite, four scenarios, and which gaps to fix after.';
$meta_keywords = 'ransomware tabletop exercise, incident response tabletop exercise, cyber tabletop exercise for small business, incident response plan, ransomware preparedness, backup restore testing, CISA tabletop exercise package, credential hygiene';
$pillar = 'Secure';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($seo_title ?? $title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords, ENT_QUOTES, 'UTF-8'); ?>">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body {
            height: 100%;
            background: #111;
            color: #ddd;
            font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
        }
        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .wrap {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            justify-content: flex-start;
            padding: 24px 24px 0;
            text-align: left;
            max-width: 40rem;
            margin: 0 auto;
            width: 100%;
        }
        a { color: #fff; }
        a:hover { text-decoration: underline; }
        .hero {
            max-width: 100%;
            height: auto;
            margin: 0 0 24px;
        }
        article h1 {
            font-size: 28px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 8px;
            line-height: 1.25;
        }
        article .meta {
            font-size: 14px;
            color: #999;
            margin-bottom: 28px;
        }
        article h2 {
            font-size: 20px;
            font-weight: 600;
            color: #fff;
            margin: 32px 0 12px;
            line-height: 1.3;
        }
        article h3 {
            font-size: 17px;
            font-weight: 600;
            color: #fff;
            margin: 24px 0 10px;
            line-height: 1.35;
        }
        article p {
            font-size: 16px;
            line-height: 1.65;
            margin-bottom: 14px;
            color: #ddd;
        }
        article ul, article ol {
            margin: 0 0 16px 1.35rem;
            padding: 0;
        }
        article li {
            font-size: 16px;
            line-height: 1.65;
            margin-bottom: 8px;
        }
        article strong { color: #fff; font-weight: 600; }
        article em { font-style: italic; }
        footer {
            text-align: center;
            padding: 20px 16px 28px;
            font-size: 14px;
            line-height: 1.6;
            color: #bbb;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
        footer .links {
            margin-bottom: 6px;
        }
        footer .sep {
            margin: 0 10px;
            color: #666;
        }
    </style>
<?php include __DIR__ . '/../includes/post-head.php'; ?>
</head>
<body>
<?php include __DIR__ . '/../includes/post-nav.php'; ?>
    <div class="page">
        <main id="main" class="wrap">
            <article>
                <div class="yc-pager"><img class="hero" src="/posts/images/ransomware-tabletop-exercise-playbook-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="How to Run a 90-Minute Ransomware Tabletop Exercise: A Playbook for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>How to Run a 90-Minute Ransomware Tabletop Exercise: A Playbook for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-13</p>

                <p><strong>The takeaway:</strong> A written incident response plan you’ve never rehearsed is a guess. A 90-minute tabletop exercise, a guided “what would we do?” walk-through of a fake attack, will show you who can make decisions, whether your backups really restore, and which vendor calls nobody knows how to make. Run one this quarter, then keep running them.</p>

                <h2>Why this belongs on the leadership calendar</h2>
                <p>Ransomware is malicious software that locks your files and systems until you pay. It showed up in <strong>48% of the breaches</strong> in Verizon’s 2026 Data Breach Investigations Report, up from 44% the year before. The report covers more than 22,000 breaches from incidents between Nov. 1, 2024, and Oct. 31, 2025 (<a href="https://www.verizon.com/business/resources/Tab5/reports/2026-dbir-data-breach-investigations-report.pdf">Verizon DBIR 2026</a>; <a href="https://www.verizon.com/business/resources/reports/dbir/">Verizon DBIR overview page</a>; <a href="https://www.verizon.com/about/news/breach-industry-wide-dbir-finds">Verizon news release, May 19, 2026</a>). Verizon’s summary says small organizations are “disproportionally impacted by Ransomware,” often with fewer resources to respond (<a href="https://www.verizon.com/business/resources/executivebriefs/dbir-2026-executive-summary.pdf">DBIR 2026 Executive Summary</a>).</p>
                <p>Slow response is expensive too. IBM’s 2026 Cost of a Data Breach Report, run by Ponemon Institute across <strong>602 breached organizations</strong> (breaches from March 2025 through February 2026), put the global average cost at <strong>$4.99 million</strong>, and <strong>$11.5 million in the U.S.</strong> Breaches that took more than 200 days to identify and contain averaged <strong>$5.65 million</strong>, compared with <strong>$4.32 million</strong> for faster ones (<a href="https://www-api.ibm.com/adobe/assets/urn:aaid:aem:21111142-1251-4369-86fb-57b82f5bb108/original/as/Cost-of-a-Data-Breach-Report-2026.pdf">IBM Cost of a Data Breach Report 2026</a>; <a href="https://newsroom.ibm.com/2026-07-29-ibm-study-one-in-four-malicious-breaches-are-ai-enabled,-costing-companies-6-million-on-average">IBM news release, July 29, 2026</a>). Both reports are the latest editions as of this writing. Averages from big samples won’t match your exact numbers, but the direction is clear: speed and preparation matter.</p>
                <p>The U.S. Cybersecurity and Infrastructure Security Agency (CISA) tells small businesses to host <strong>quarterly</strong> tabletop exercises and to have senior leaders take part (<a href="https://www.cisa.gov/cyber-guidance-small-businesses">CISA Cyber Guidance for Small Businesses</a>).</p>

                <h2>Before the session (one hour of prep)</h2>
                <ul>
                    <li><strong>Pick a facilitator.</strong> It can be your IT lead, your MSP (the outside firm that runs your IT), or a fractional CTO. CISA’s free <a href="https://www.cisa.gov/resources-tools/services/cisa-tabletop-exercise-packages">Tabletop Exercise Packages</a> include template objectives, scenarios, and discussion questions, and the <a href="https://www.cisa.gov/resources-tools/training/cisa-tabletop-exercise-package-documentation">package documentation</a> adds invitation, feedback, and after-action report templates. There’s a ransomware situation manual, dated September 2023 (<a href="https://www.cisa.gov/resources-tools/resources/cybersecurity-scenarios">CISA Cybersecurity Scenarios</a>).</li>
                    <li><strong>Invite decision-makers, not just IT.</strong> That means the CEO or owner, finance, operations, HR, whoever handles customer communications, and your MSP.</li>
                    <li><strong>Print the plan and the contact list.</strong> CISA says your incident response plan should include an address book you can use if the network is down (<a href="https://www.cisa.gov/cyber-guidance-small-businesses">CISA</a>). If it only lives on the file server, that’s your first finding.</li>
                    <li><strong>Find your cyber insurance policy</strong> and its breach hotline number.</li>
                </ul>

                <h2>The 90-minute agenda</h2>
                <h3>0–15 min: The first call</h3>
                <p><em>Scenario: At 7:40 a.m. Monday, an accounts payable clerk finds a ransom note on their laptop.</em> That’s close to the common scenario CISA itself describes: one employee finding their laptop blocked by ransomware (<a href="https://www.cisa.gov/cyber-guidance-small-businesses">CISA</a>).</p>
                <p>Ask: who do they call? Who has the authority to declare an incident? What does “declare” actually trigger?</p>
                <h3>15–35 min: It spreads</h3>
                <p><em>The file server and the accounting system are now encrypted.</em></p>
                <p>Ask: who can order systems shut down or disconnected, even if that stops shipping or billing? Is the MSP’s contract clear on after-hours response? Does your insurer require you to use its approved responders before you hire anyone?</p>
                <h3>35–55 min: The backup moment of truth</h3>
                <p>Ask: when did we last do a <strong>full</strong> restore, not just confirm that the backup job ran? How many hours would it take to bring back payroll or the ERP? CISA warns that many ransomware victims had no backups or incomplete or damaged ones, and that some found restores took significantly longer than expected. That’s why it says to regularly test both partial and full restores (<a href="https://www.cisa.gov/cyber-guidance-small-businesses">CISA</a>).</p>
                <h3>55–75 min: Extortion and the vendor twist</h3>
                <p><em>The attackers threaten to leak customer data. The entry point turns out to be a vendor’s remote-access account.</em></p>
                <p>Ask: who talks to customers, and when? Who calls legal counsel and law enforcement? Who makes the ransom decision, and on what criteria? For context, 69% of ransomware victims in Verizon’s dataset didn’t pay, and the median payment was $139,875. Breaches involving a third party reached 48% of the total (<a href="https://www.verizon.com/business/resources/Tab5/reports/2026-dbir-data-breach-investigations-report.pdf">DBIR 2026</a>).</p>
                <h3>75–90 min: The hot wash</h3>
                <p>List every “we don’t know” from the session. Give each one an owner and a due date. NIST’s incident response guide, SP 800-61 Revision 3 (Apr. 3, 2025), says lessons learned should feed continuous improvement across the whole program, and should often be shared as soon as they’re identified rather than after recovery ends (<a href="https://csrc.nist.gov/pubs/sp/800/61/r3/final">NIST SP 800-61r3</a>).</p>

                <h2>Gaps to look for</h2>
                <ul>
                    <li>Nobody is named as the person who can declare an incident or authorize shutdowns.</li>
                    <li>The contact list lives on systems that would be encrypted.</li>
                    <li>Backups “succeed” every night, but nobody has timed a full restore.</li>
                    <li>Vendor remote access isn’t covered by multifactor authentication (a second login step beyond the password) or isn’t reviewed.</li>
                    <li>Customer and employee messaging gets written for the first time during the crisis.</li>
                </ul>

                <h2>Make it a habit</h2>
                <p>Rotate scenarios: a stolen laptop next quarter, a vendor breach after that. Keep the after-action list short and actually close the items.</p>
                <p>If you’d like an outside facilitator for your first session, or help closing what it uncovers (from backup restore testing to vendor access reviews), Yellow Coop’s <a href="/what-we-do/">fractional CTO and technology project work</a> is built for exactly that kind of follow-through. <a href="/contact/">Let’s talk</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/track-record/">Track Record</a>, <a href="/contact/">Contact</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.verizon.com/business/resources/Tab5/reports/2026-dbir-data-breach-investigations-report.pdf">2026 Data Breach Investigations Report</a> — Verizon, 2026</li>
                    <li><a href="https://www.verizon.com/business/resources/reports/dbir/">Data Breach Investigations Report overview</a> — Verizon</li>
                    <li><a href="https://www.verizon.com/about/news/breach-industry-wide-dbir-finds">Verizon news release</a> — Verizon, May 19, 2026</li>
                    <li><a href="https://www.verizon.com/business/resources/executivebriefs/dbir-2026-executive-summary.pdf">DBIR 2026 Executive Summary</a> — Verizon, 2026</li>
                    <li><a href="https://www-api.ibm.com/adobe/assets/urn:aaid:aem:21111142-1251-4369-86fb-57b82f5bb108/original/as/Cost-of-a-Data-Breach-Report-2026.pdf">Cost of a Data Breach Report 2026</a> — IBM and Ponemon Institute, 2026</li>
                    <li><a href="https://newsroom.ibm.com/2026-07-29-ibm-study-one-in-four-malicious-breaches-are-ai-enabled,-costing-companies-6-million-on-average">IBM Study: One in four malicious breaches are AI-enabled, costing companies $6 million on average</a> — IBM Newsroom, Jul 29, 2026</li>
                    <li><a href="https://www.cisa.gov/cyber-guidance-small-businesses">Cyber Guidance for Small Businesses</a> — CISA</li>
                    <li><a href="https://www.cisa.gov/resources-tools/services/cisa-tabletop-exercise-packages">CISA Tabletop Exercise Packages</a> — CISA</li>
                    <li><a href="https://www.cisa.gov/resources-tools/training/cisa-tabletop-exercise-package-documentation">CISA Tabletop Exercise Package Documentation</a> — CISA</li>
                    <li><a href="https://www.cisa.gov/resources-tools/resources/cybersecurity-scenarios">Cybersecurity Scenarios</a> — CISA</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/61/r3/final">SP 800-61 Rev. 3: Incident Response Recommendations and Considerations for Cybersecurity Risk Management</a> — NIST, Apr 3, 2025</li>
                </ul>
                <?php include __DIR__ . '/../includes/post-cta.php'; ?>
            </article>
        </main>
        <footer>
            <div class="links">
                <a href="/">Home</a>
                <span class="sep">·</span>
                <a href="mailto:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">Contact</a>
                <span class="sep">·</span>
                <a href="<?php echo htmlspecialchars($newsletter, ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">Subscribe</a>
                <span class="sep">·</span>
                <a href="/privacy/">Privacy</a>
            </div>
            &copy; <?php echo (int) $year_start; ?>–<?php echo (int) $year_end; ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
