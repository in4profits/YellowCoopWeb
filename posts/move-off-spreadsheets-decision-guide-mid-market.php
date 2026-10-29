<?php
$title = 'When to Move a Process Off Spreadsheets: A Decision Guide for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'When to Move a Process Off Spreadsheets | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Spreadsheets aren\'t the problem. Unowned, unchecked business-critical ones are. A guide to finding them and deciding to govern, rebuild, or replace.';
$meta_keywords = 'spreadsheet risk, business critical spreadsheets, spreadsheet errors, replace spreadsheets with software, process automation';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/move-off-spreadsheets-decision-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="When to Move a Process Off Spreadsheets: A Decision Guide for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>When to Move a Process Off Spreadsheets: A Decision Guide for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-25</p>

                <p><strong>Takeaway:</strong> Spreadsheets aren’t the problem. Business-critical spreadsheets with no owner, no second checker, and a manual copy-paste step are. Find the handful your company actually runs on, score them, and give each one of three fates: govern it, rebuild what feeds it, or replace it with a real system.</p>

                <h2>Two lessons from very large organizations</h2>

                <p>In October 2020, Public Health England <a href="https://www.gov.uk/government/news/phe-statement-on-delayed-reporting-of-covid-19-cases">reported</a> that 15,841 positive COVID-19 cases from September 25 to October 2 had been left out of daily figures. Its explanation: some files of test results “exceeded the maximum file size” in the process that loaded them into central systems. <a href="https://www.bbc.co.uk/news/uk-54422505">BBC News reported (October 5, 2020)</a> that the files were Excel templates in the old XLS format, which hold only about 65,000 rows, so in practice each template topped out at about 1,400 cases. When a template filled up, further cases were simply left off.</p>

                <p>Earlier, in its <a href="https://elischolar.library.yale.edu/cgi/viewcontent.cgi?article=1502&amp;context=ypfs-documents">January 16, 2013 Management Task Force report</a> on the 2012 “London Whale” trading losses, JPMorgan Chase found that a new risk model “suffered from significant operational shortcomings” and understated the risks of the trades. The report describes a model run through Excel spreadsheets that had to be completed manually by copying and pasting data from one sheet to another, plus a formula that divided by a sum where it should have divided by an average.</p>

                <p>Neither failure came from a lack of smart people. Both came from a critical process living somewhere that couldn’t warn anyone when it broke.</p>

                <h2>How common are spreadsheet errors?</h2>

                <p>The research base is older but consistent. Raymond Panko’s <a href="https://arxiv.org/abs/0802.3457">review of spreadsheet error studies</a> (presented at the European Spreadsheet Risks Interest Group, 2000) summarized seven field audits of real business spreadsheets from 1987 to 2000. Overall, 24% of 367 audited spreadsheets had errors, but the audits from 1997 on, which used more thorough methods, found errors in 91% of 54 spreadsheets. In lab experiments, 51% of spreadsheets had errors even though most were only 25 to 50 cells. Treat those exact figures as dated. The direction is what matters: Panko notes that human error rates in complex cognitive work tend to run about 2% to 5%, and big spreadsheets give those errors lots of room.</p>

                <h2>Step 1: Find the spreadsheets the business runs on</h2>

                <p>Ask each department head one question: “Which spreadsheet would hurt most if it were wrong for a month?” You’ll usually hear about pricing and quoting, commissions, inventory and reorder points, cash forecasts, payroll adjustments, and month-end reconciliations.</p>

                <p>The UK government’s <a href="https://www.gov.uk/guidance/the-aqua-book">AQuA Book on analytical quality assurance (2025 edition)</a> offers a useful test. It calls analysis “business critical” when it significantly influences finances or operations, is necessary to the business plan, or could cause significant reputational, economic, or legal harm if wrong. That works for a distribution company as well as a government department.</p>

                <h2>Step 2: Score each one in five minutes</h2>

                <p>Give one point for each “yes”:</p>

                <ul>
                    <li>Does money, a customer commitment, or a compliance filing depend on it?</li>
                    <li>Does it involve manual copy-paste or re-keying from another system?</li>
                    <li>Do more than two people edit it?</li>
                    <li>Is it growing toward a size or row limit, or getting slow?</li>
                    <li>Is there only one person who truly understands it?</li>
                </ul>

                <p>Zero or one point: leave it alone. Two or three: govern it. Four or five: plan to rebuild or replace it.</p>

                <h2>Step 3: Pick a fate</h2>

                <h3>Govern it</h3>

                <p>Most spreadsheets just need grown-up habits. The AQuA Book’s core rule is that the person who builds the analysis and the person who checks it should be different people, with checking effort proportionate to the risk. In practice, that means a named owner and a named reviewer, version history (store it in SharePoint or Google Drive, not someone’s desktop), locked formula cells, and a “sunset date” when someone must confirm the inputs and assumptions still hold. Add a control total, too: count the rows or dollars going in and coming out. Public Health England’s lost cases are exactly the kind of drop a simple in-versus-out count is designed to catch.</p>

                <h3>Rebuild what feeds it</h3>

                <p>If the risk is in the copy-paste, automate the inputs and keep the spreadsheet as the front end. Pull data straight from the ERP, CRM, or bank feed into a database or report, and let people keep Excel for analysis. It’s usually far less disruptive than a replacement, because the people at the end of the chain keep working the way they do today.</p>

                <h3>Replace it</h3>

                <p>When the spreadsheet has become the system of record for orders, inventory, or billing, with many editors and real money flowing through it, it’s time for software built for that job. Map the process first. If you skip the mapping, you’ll just rebuild the spreadsheet’s quirks in a more expensive tool.</p>

                <h2>The bottom line</h2>

                <p>You don’t need a war on Excel. You need to know which five or ten sheets carry the business, and make sure each has an owner, a checker, and a way to catch silent errors. Yellow Coop’s CIO work includes an inventory of systems with owners and process maps for the workflows AI tools will touch, and its CTO work lays out build vs. buy decisions with cost and risk side by side. <a href="/contact/">Let’s talk</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.gov.uk/government/news/phe-statement-on-delayed-reporting-of-covid-19-cases">PHE statement on delayed reporting of COVID-19 cases</a> — Public Health England, October 4, 2020; updated October 5, 2020</li>
                    <li><a href="https://www.bbc.co.uk/news/uk-54422505">Covid: Test error ‘should never have happened’ - Hancock</a> — BBC News, October 5, 2020</li>
                    <li><a href="https://elischolar.library.yale.edu/cgi/viewcontent.cgi?article=1502&amp;context=ypfs-documents">Report of JPMorgan Chase &amp; Co. Management Task Force Regarding 2012 CIO Losses</a> — January 16, 2013; executive summary and Appendix A on the VaR model; via Yale Program on Financial Stability library</li>
                    <li><a href="https://arxiv.org/abs/0802.3457">Spreadsheet Errors: What We Know. What We Think We Can Do</a> — Raymond R. Panko, Proc. EuSpRIG 2000; arXiv 0802.3457</li>
                    <li><a href="https://www.gov.uk/guidance/the-aqua-book">The AQuA Book</a> — UK Government Analysis Function, 2025 edition; accessed October 25, 2026</li>
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
