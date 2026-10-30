<?php
$title = 'How to Build a 12-Month IT Roadmap and Budget Your CFO Can Actually Read — Yellow Coop';
$seo_title = 'How to Build a 12-Month IT Roadmap and Budget | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Build a 12-month IT roadmap and budget in three buckets, price end-of-support deadlines, and find unused licenses, using GAO and NIST guidance.';
$meta_keywords = 'IT roadmap and budget, IT budget planning, technology roadmap, IT spending, software license management';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/it-roadmap-budget-planning-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="How to Build a 12-Month IT Roadmap and Budget Your CFO Can Actually Read"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>How to Build a 12-Month IT Roadmap and Budget Your CFO Can Actually Read</h1>
                <p class="meta">2026-10-30 · By the Yellow Coop Team</p>

                <p>Most mid-market IT budgets are last year’s number plus a hopeful percentage, with surprises paid for out of “miscellaneous.” The takeaway: <strong>build your IT roadmap and budget in three buckets (keep the lights on, must-do changes, and growth bets), give every line an owner and a date, and fund the predictable surprises before they show up.</strong> One page, no jargon, and a CFO who stops wincing.</p>

                <h2>Why “last year plus 5%” fails</h2>

                <p>Keeping existing systems running quietly eats the budget. The U.S. Government Accountability Office (GAO) reported on July 17, 2025 that federal agencies have typically reported spending about 80 percent of more than $100 billion in annual IT and cyber-related spending on operations and maintenance of existing IT. For fiscal year 2025, about $83 billion (79 percent) of planned IT spending across the 24 Chief Financial Officers Act agencies was slated for operations and maintenance.</p>

                <p>Your company isn’t a federal agency, and 80 percent isn’t a benchmark you should hit. It’s a warning about what happens when nobody separates “running” from “changing”: the running costs grow, and the change budget is whatever’s left.</p>

                <h2>Step 1: Inventory what you already pay for</h2>

                <p>You can’t plan spending you can’t see. List every system, license, and contract with:</p>

                <ul>
                    <li><strong>Owner:</strong> the person who decides whether it renews.</li>
                    <li><strong>Annual cost:</strong> total, and per user where it applies.</li>
                    <li><strong>Renewal date and notice period:</strong> many contracts auto-renew unless you cancel by a deadline.</li>
                    <li><strong>Seats bought vs. seats used.</strong></li>
                </ul>

                <p>That last column matters. In a January 29, 2024 report on federal software licenses, GAO identified two key activities for right-sizing: tracking licenses currently in use, and regularly comparing that inventory to purchase records. Doing so helps avoid over-purchasing (paying for seats nobody uses) and under-purchasing (which can trigger extra fees). Of nine agencies GAO reviewed, none had fully determined whether their five most widely used software licenses were over- or under-purchased. If big agencies struggle with this, it’s worth checking for empty seats in your own company.</p>

                <h2>Step 2: Sort spending into three buckets</h2>

                <p><strong>Run (keep the lights on).</strong> Licenses, hosting, help desk or managed service provider fees, connectivity, routine hardware refresh. Goal: flat or shrinking per user.</p>

                <p><strong>Must-do (non-negotiable changes).</strong> Things with an external deadline: software reaching end of support, a customer’s security requirement, an insurance renewal condition, a contract expiring. These aren’t optional. Only the timing is.</p>

                <p><strong>Grow (bets).</strong> New systems, automation, AI projects. Each one needs a stated outcome, such as hours saved, revenue enabled, or risk removed, plus a point at which you’ll check whether it’s working.</p>

                <h2>Step 3: Price the predictable surprises</h2>

                <p>A lot of “unexpected” IT spending was announced years in advance. Software end-of-support dates are the classic example.</p>

                <p>Microsoft ended support for Windows 10 on October 14, 2025. After that date, Windows 10 PCs keep working but stop getting security fixes unless they’re enrolled in Microsoft’s paid Extended Security Updates (ESU) program. For organizations, Microsoft lists ESU at $61 per device for Year One, with the price doubling each year for up to three years. It also says Year One started in November 2025, and that buying in Year Two means paying for Year One too.</p>

                <p>Here’s what that looks like for 50 PCs:</p>

                <table>
                    <tr><th>ESU year</th><th>Price per device</th><th>50 devices</th></tr>
                    <tr><td>Year One</td><td>$61</td><td>$3,050</td></tr>
                    <tr><td>Year Two</td><td>$122</td><td>$6,100</td></tr>
                    <tr><td>Year Three</td><td>$244</td><td>$12,200</td></tr>
                    <tr><td><strong>Three-year total</strong></td><td><strong>$427</strong></td><td><strong>$21,350</strong></td></tr>
                </table>

                <p>That table doesn’t settle whether to upgrade, replace, or pay for ESU. That depends on hardware age, upgrade eligibility, and labor. It shows why end-of-support dates belong in the Must-do bucket with real numbers, not in next year’s “miscellaneous.”</p>

                <h2>Step 4: Fund security on purpose</h2>

                <p>NIST’s Cybersecurity Framework 2.0 (February 26, 2024) includes a governance outcome, GV.RR-03, stating that “adequate resources are allocated commensurate with the cybersecurity risk strategy, roles, responsibilities, and policies.” In plain English: security spending should follow from the risks you’ve decided matter, not from whichever vendor called last.</p>

                <p>Practically, give security its own lines in the Run and Must-do buckets so it doesn’t get cut quietly when a Grow project runs over.</p>

                <h2>Step 5: Put it on one page</h2>

                <p>Your CFO wants to see:</p>

                <ol>
                    <li><strong>Total spend</strong>, split into Run, Must-do, and Grow, compared with last year.</li>
                    <li><strong>The top 10 contracts</strong> by cost, with renewal dates.</li>
                    <li><strong>Quarter-by-quarter roadmap:</strong> each item with an owner, budget, and date.</li>
                    <li><strong>Risks of not funding</strong> each Must-do item, in a sentence each.</li>
                    <li><strong>Savings found</strong> from the license and contract review.</li>
                </ol>

                <p>Then review it quarterly. A roadmap that’s never updated is just a wish list with formatting.</p>

                <h2>Common traps</h2>

                <ul>
                    <li><strong>Budgeting projects but not their running costs.</strong> A new system adds licenses and support to Run forever.</li>
                    <li><strong>No notice-period calendar.</strong> Auto-renewals are how unused tools survive.</li>
                    <li><strong>Grow items with no exit check.</strong> Decide up front what result means “keep going.”</li>
                </ul>

                <h2>Conclusion</h2>

                <p>A good IT budget isn’t a bigger number. It’s a clearer one. Separate running from changing, price the deadlines you already know about, and give every line an owner.</p>

                <p>A 12-month IT roadmap and budget the CFO can read is one of the typical deliverables in Yellow Coop’s <strong>Operate</strong> work, alongside an IT spend baseline and a vendor renegotiation and consolidation plan. You can get it through Virtual advisory hours or a Fractional engagement of 1 to 4 days a week. <strong>Book a 20-minute call</strong> to see which fits.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://files.gao.gov/reports/GAO-25-107795/index.html">GAO-25-107795, Information Technology: Agencies Need to Plan for Modernizing Critical Decades-Old Legacy Systems</a> — GAO, July 17, 2025</li>
                    <li><a href="https://www.gao.gov/products/gao-24-105717">GAO-24-105717, Federal Software Licenses: Agencies Need to Take Action to Achieve Additional Savings</a> — GAO, January 29, 2024</li>
                    <li><a href="https://nvlpubs.nist.gov/nistpubs/CSWP/NIST.CSWP.29.pdf">NIST CSWP 29, The NIST Cybersecurity Framework (CSF) 2.0</a> — NIST, February 26, 2024</li>
                    <li><a href="https://learn.microsoft.com/en-us/lifecycle/products/windows-10-home-and-pro">Windows 10 Home and Pro lifecycle</a> — Microsoft Learn (end of support October 14, 2025)</li>
                    <li><a href="https://learn.microsoft.com/en-us/windows/whats-new/extended-security-updates">Extended Security Updates (ESU) program for Windows 10</a> — Microsoft Learn</li>
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
                <span class="sep">·</span>
                <?php echo phone_link($site); ?>
            </div>
            &copy; <?php echo (int) $year_start; ?>–<?php echo (int) $year_end; ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
