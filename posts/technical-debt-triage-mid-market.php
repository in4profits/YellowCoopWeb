<?php
$title = 'Technical Debt Triage: How Mid-Market Owners and Operators Decide What to Fix, Fund, or Leave Alone — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Tech debt isn\'t spread evenly. A triage plan for owners and operators: list it by system, price the interest, fix the costly few, leave the rest alone.';
$meta_keywords = 'technical debt triage, tech debt prioritization, measuring technical debt, software modernization planning, fractional CTO';
$pillar = 'Innovate';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
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
        <div class="wrap">
            <article>
                <div class="yc-pager"><img class="hero" src="/posts/images/technical-debt-triage-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Technical Debt Triage: How Mid-Market Owners and Operators Decide What to Fix, Fund, or Leave Alone"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Technical Debt Triage: How Mid-Market Owners and Operators Decide What to Fix, Fund, or Leave Alone</h1>
                <p class="meta">2026-10-21</p>

                <p><strong>The takeaway:</strong> Technical debt triage beats a big rewrite. Most companies don’t need to pay off all their tech debt, and shouldn’t try. List it system by system, price the “interest” each one charges you every month, fix the few systems that cost the most, and leave the cheap stuff alone on purpose.</p>

                <h2>What technical debt actually is</h2>

                <p>The debt metaphor goes back to a March 26, 1992 experience report by software developer Ward Cunningham on his team’s WyCash portfolio system: “Shipping first time code is like going into debt. A little debt speeds development so long as it is paid back promptly with a rewrite.” The catch: “Every minute spent on not-quite-right code counts as interest on that debt” (<a href="http://c2.com/doc/oopsla92.html">Cunningham, 1992</a>).</p>

                <p>McKinsey splits it the same way a CFO would. The <strong>principal</strong> is all the work needed to modernize your technology: deferred upgrades, heavy customizations of packaged software, nonstandard data. The <strong>interest</strong> is the “complexity tax” every project pays today: fragile integrations, manual workarounds, data that has to be cleaned before anyone trusts it (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/tech-debt-reclaiming-tech-equity">McKinsey, October 6, 2020</a>).</p>

                <p>For a mid-market company, that looks like the ERP nobody dares upgrade, the spreadsheet that bridges two systems, and the integration only one contractor understands.</p>

                <h2>How big the bill gets</h2>

                <p>The best-known numbers come from big companies, so treat them as direction, not a benchmark. In a July 2020 McKinsey survey of 50 CIOs at financial-services and technology companies with more than $1 billion in revenue, CIOs said 10 to 20 percent of the technology budget meant for new products gets diverted to tech debt issues. They estimated tech debt at 20 to 40 percent of the value of their entire technology estate before depreciation (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/tech-debt-reclaiming-tech-equity">McKinsey, 2020</a>).</p>

                <p>McKinsey’s April 25, 2023 follow-up adds an observation from its client work: tech debt “is not spread evenly.” There is “always a set of ten to 15 assets that are responsible for the majority of the tech debt in an enterprise,” and “some tech debt is best left alone” (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/breaking-technical-debts-vicious-cycle-to-modernize-your-business">McKinsey, 2023</a>). In a smaller company, we’d expect that list to be shorter still. That’s the whole case for triage.</p>

                <h2>Step 1: List the debt by system, not by complaint</h2>

                <p>Make one row per system or integration: what it does, who owns it, what breaks, and what workarounds people use. Include the bridging spreadsheets and the manual re-keying. Those count.</p>

                <p>Look hardest at structure. A Carnegie Mellon Software Engineering Institute (SEI) survey of 1,831 participants, mostly engineers and architects on long-lived projects at three large organizations, found architectural decisions were the most important source of technical debt. Of 544 who ranked 14 possible sources, 54% put “bad architecture choices” in their top three (<a href="https://www.sei.cmu.edu/library/measure-it-manage-it-ignore-it-software-practitioners-and-technical-debt/">SEI, August 30, 2015</a>). Old data, big organizations, but the lesson travels: the expensive debt usually lives in how systems connect, not in one ugly screen.</p>

                <h2>Step 2: Price the interest in plain numbers</h2>

                <p>For each row, estimate:</p>

                <ul>
                    <li>Staff hours lost per month to workarounds and fixes</li>
                    <li>Outages or errors in the past year, and what they cost</li>
                    <li>Projects delayed or blocked because “that system can’t do it”</li>
                    <li>Security exposure, like software the vendor no longer supports</li>
                </ul>

                <p>Rough numbers are fine. You’re ranking, not auditing.</p>

                <h2>Step 3: Sort into four buckets</h2>

                <ul>
                    <li><strong>Fix now:</strong> high interest and it touches revenue, customers, or security.</li>
                    <li><strong>Pay down steadily:</strong> real interest, but it can be chipped away.</li>
                    <li><strong>Leave alone:</strong> low interest. Martin Fowler, chief scientist at Thoughtworks, notes that debt in “a rarely touched part of the code-base” may not be worth paying down if the interest is small (<a href="https://martinfowler.com/bliki/TechnicalDebtQuadrant.html">Fowler, October 14, 2009</a>).</li>
                    <li><strong>Retire or replace:</strong> the system costs more to carry than to swap. McKinsey calls these “bankrupt” areas and treats a rebuild as a last resort (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/tech-debt-reclaiming-tech-equity">McKinsey, 2020</a>).</li>
                </ul>

                <h2>Step 4: Budget it steadily, not as a megaproject</h2>

                <p>McKinsey advises against “a big-bang approach,” recommending a portion of the IT budget earmarked for paying down debt “consistently, predictably” (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/tech-debt-reclaiming-tech-equity">McKinsey, 2020</a>). Its 2023 piece adds that carving out a percentage alone “is insufficient.” Tie each dollar to a specific result, like better resiliency or new revenue (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/breaking-technical-debts-vicious-cycle-to-modernize-your-business">McKinsey, 2023</a>).</p>

                <h2>Step 5: Stop taking on reckless debt</h2>

                <p>Fowler separates prudent debt (a deliberate shortcut to hit a date) from reckless debt (a mess made from not knowing better, or from rushing) (<a href="https://martinfowler.com/bliki/TechnicalDebtQuadrant.html">Fowler, 2009</a>). Shortcuts are fine when they’re decisions. So make them decisions: every one gets a named owner, a written reason, and a payback date. McKinsey describes one company that required CEO approval for any tech debt exception (<a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/breaking-technical-debts-vicious-cycle-to-modernize-your-business">McKinsey, 2023</a>). You may not need to go that far. You do need a list.</p>

                <h2>Four questions for your next leadership meeting</h2>

                <ol>
                    <li>Which three systems cost us the most staff time in workarounds?</li>
                    <li>Which project got delayed this year because of an old system?</li>
                    <li>Which shortcuts did we take on purpose, and who owns paying them back?</li>
                    <li>What are we deliberately leaving alone, and why?</li>
                </ol>

                <h2>Where outside help fits</h2>

                <p>Architecture reviews, build vs. buy decisions with cost and risk side by side, and a 12-month IT roadmap and budget the CFO can read are all part of Yellow Coop’s work (<a href="/what-we-do/">what we do</a>). That comes as virtual advisory hours or fractional leadership at 1 to 4 days a week (<a href="/how-we-engage/">how we engage</a>). If your tech debt list lives in one developer’s head, <a href="/contact/">book a call</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="http://c2.com/doc/oopsla92.html">The WyCash Portfolio Management System</a> — Ward Cunningham, OOPSLA ’92 experience report, March 26, 1992</li>
                    <li><a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/tech-debt-reclaiming-tech-equity">Tech debt: Reclaiming tech equity</a> — Vishal Dalal, Krish Krishnakanthan, Björn Münstermann, and Rob Patenge, McKinsey &amp; Company, October 6, 2020; survey of 50 CIOs of financial-services and technology companies with revenues over $1 billion, July 2020</li>
                    <li><a href="https://www.mckinsey.com/capabilities/mckinsey-digital/our-insights/breaking-technical-debts-vicious-cycle-to-modernize-your-business">Breaking technical debt’s vicious cycle to modernize your business</a> — Aamer Baig, Sven Blumberg, Arun Gundurao, and Basel Kayyali, McKinsey &amp; Company, April 25, 2023</li>
                    <li><a href="https://www.sei.cmu.edu/library/measure-it-manage-it-ignore-it-software-practitioners-and-technical-debt/">Measure It? Manage It? Ignore It? Software Practitioners and Technical Debt</a> — Neil Ernst, Stephany Bellomo, Ipek Ozkaya, Robert Nord, and Ian Gorton, Carnegie Mellon Software Engineering Institute / ACM ESEC/FSE 2015, August 30, 2015; survey of 1,831 participants</li>
                    <li><a href="https://martinfowler.com/bliki/TechnicalDebtQuadrant.html">Technical Debt Quadrant</a> — Martin Fowler, martinfowler.com, October 14, 2009</li>
                    <li><a href="/what-we-do/">What we do</a> and <a href="/how-we-engage/">How we engage</a> — Yellow Coop</li>
                </ul>
                <?php include __DIR__ . '/../includes/post-cta.php'; ?>
            </article>
        </div>
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
