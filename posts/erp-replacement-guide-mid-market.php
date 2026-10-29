<?php
$title = 'ERP Replacement Without the Wreckage: A Decision and Rollout Guide for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'ERP Replacement Guide for Mid-Market Firms | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'How to replace your ERP without breaking the business: fix processes first, limit customization, rehearse cutover, and learn from ECSS and Revlon.';
$meta_keywords = 'ERP replacement, ERP implementation, ERP selection, business process reengineering, fractional CTO';
$pillar = 'Operate';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/erp-replacement-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="ERP Replacement Without the Wreckage: A Decision and Rollout Guide for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>ERP Replacement Without the Wreckage: A Decision and Rollout Guide for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-22</p>

                <p><strong>The takeaway:</strong> Most of the risk in an ERP replacement isn’t in the software. It’s in your processes, your people, and your go-live plan. Decide which processes will change before you pick a vendor, keep customization on a short leash, and treat cutover as a business event, not an IT task.</p>

                <p>An ERP (enterprise resource planning) system is the software that runs the back office: orders, inventory, purchasing, billing, and the general ledger. Replacing one is open-heart surgery on the company, and the patient has to keep shipping product during the operation. Two well-documented public cases show where it goes wrong.</p>

                <h2>Two cautionary tales worth reading</h2>

                <p><strong>The U.S. Air Force’s ECSS.</strong> A July 7, 2014 staff report from the U.S. Senate Permanent Subcommittee on Investigations found that the Air Force’s Expeditionary Combat Support System, a logistics ERP built on commercial Oracle software, was a “waste of $1.1 billion in taxpayer money” and “a loss of eight years of effort.” The Air Force chose commercial software partly because it thought that would reduce the need for customization. Then, according to the report, staff resisted changing their processes and asked the integrator to alter the software to fit existing practices. The program had six program managers in eight years, and the report counted more than 150 modifications to the original contract, covering everything from program management to design, worth about $527 million.</p>

                <p><strong>Revlon’s SAP launch.</strong> In its 2018 Form 10-K (filed March 2019), Revlon said its February 2018 launch of a new SAP ERP system caused service disruptions at its Oxford, N.C. plant. The company estimated it couldn’t fulfill shipments representing about $64 million of 2018 net sales and took $53.6 million in incremental charges. Revlon also reported a material weakness in internal controls tied to the implementation; its auditor, KPMG, noted the company hadn’t kept enough knowledgeable, trained personnel in the affected operations.</p>

                <p>One is a giant government program and the other a global consumer brand, but the lessons scale down nicely to a 300-person distributor.</p>

                <h2>Step 1: Decide whether you actually need a new ERP</h2>

                <p>Before you shop, write down the five business problems that hurt most: month-end close takes two weeks, inventory counts never match, quoting lives in spreadsheets. For each, ask: is this a software limit, a process problem, or a training problem? If the honest answer is mostly “process” or “training,” a new system will faithfully automate the same mess. Sometimes a targeted fix or an add-on beats a full replacement.</p>

                <h2>Step 2: Redesign the process before you pick the software</h2>

                <p>The ECSS report’s core finding was a failure of business process reengineering (BPR), which is a plain way of saying “rethinking how the work gets done before you automate it.” Map your key flows, order to cash, procure to pay, and plan to produce, and decide which steps are true competitive advantages and which are just habits. Habits should bend to the software’s standard way of working. Advantages can earn a customization.</p>

                <h2>Step 3: Run scripted demos with your own data</h2>

                <p>This is where ERP selection usually goes sideways: vendors love a polished demo. Instead, hand two or three finalists the same script: your real product codes, a messy customer order, a return, a partial shipment, and a month-end close. Score each one on how much of your script works without custom code. Ask for references from companies near your size and industry, and call them.</p>

                <h2>Step 4: Configure first, customize last</h2>

                <p>Configuration means using the settings the vendor built in. Customization means changing or adding code. The ECSS report says best practice is to keep customization to a minimum, and that customizing to protect outdated procedures made the needed capability impossible to deliver. A practical rule: every customization needs a named business owner, a written reason, and an estimate of what it will cost to maintain through future upgrades.</p>

                <h2>Step 5: Treat go-live as a business event</h2>

                <p>The riskiest day of any ERP implementation is the day you switch over. Revlon’s disclosures show that a go-live problem doesn’t stay in IT. It shows up in shipments, customer service, and financial controls. Before you flip the switch:</p>

                <ul>
                    <li><strong>Rehearse the cutover.</strong> Do at least one full dress rehearsal of data migration, including opening balances and open orders.</li>
                    <li><strong>Train the people who touch transactions,</strong> not just the project team. The auditor’s finding at Revlon was about trained personnel and controls.</li>
                    <li><strong>Protect your biggest customers.</strong> Build a little extra inventory ahead of go-live and agree on a manual fallback for critical orders.</li>
                    <li><strong>Staff a “hypercare” period:</strong> a stretch after launch when project experts sit with users and fix problems daily.</li>
                    <li><strong>Re-check financial controls</strong> like reconciliations and journal-entry approvals in the new system, not just in the old one.</li>
                </ul>

                <h2>Step 6: Name one accountable owner who stays</h2>

                <p>Six program managers in eight years is a pattern the ECSS report tied to lost knowledge and costly customization. Pick an executive sponsor with the authority to settle process arguments, and keep that person in the seat through stabilization. If you don’t have a technology leader who has run a core-system replacement, borrow one.</p>

                <h2>The bottom line</h2>

                <p>An ERP replacement succeeds or fails on decisions made long before go-live: which processes change, how much you customize, and who owns the outcome. Get those right and the software is the easy part.</p>

                <p>If you’re weighing a replacement and want an experienced hand to run selection, keep vendors honest, and steer cutover, Yellow Coop’s fractional CTO and CIO services can help, part-time, one to four days a week. See <a href="/what-we-do/">what we do</a> or <a href="/contact/">book a call</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.hsgac.senate.gov/wp-content/uploads/imo/media/doc/PSI%20REPORT%20-%20The%20Air%20Force%27s%20ECSS%20(July%207%202014).pdf">The Air Force’s Expeditionary Combat Support System (ECSS): A Cautionary Tale on the Need for Business Process Reengineering and Complying with Acquisition Best Practices</a> — U.S. Senate Permanent Subcommittee on Investigations, staff report, July 7, 2014 (S. Prt. 113-27) (PDF; <a href="https://www.govinfo.gov/content/pkg/CPRT-113SPRT89869/html/CPRT-113SPRT89869.htm">GPO version</a>)</li>
                    <li><a href="https://www.sec.gov/Archives/edgar/data/887921/000088792119000004/rev201810-k.htm">Revlon, Inc., Form 10-K for fiscal year ended December 31, 2018</a> — filed March 2019; Item 1A risk factors and Item 9A, including KPMG LLP’s report on internal control dated March 28, 2019</li>
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
