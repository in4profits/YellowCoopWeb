<?php
$title = 'Website Accessibility Checklist: What Mid-Market Owners and Operators Should Fix First — Yellow Coop';
$seo_title = 'Website Accessibility Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'A website accessibility checklist for owners and operators: what the DOJ says, what WCAG 2.2 asks, and the six fixes that cover most detected errors.';
$meta_keywords = 'website accessibility checklist, WCAG 2.2 compliance, ADA website accessibility, accessibility overlay, accessible web forms';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/website-accessibility-wcag-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Website Accessibility Checklist: What Mid-Market Owners and Operators Should Fix First"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Website Accessibility Checklist: What Mid-Market Owners and Operators Should Fix First</h1>
                <p class="meta">2026-11-07 · By the Yellow Coop Team</p>

                <p><em>This post is practical guidance, not legal advice. Talk to counsel about your specific obligations.</em></p>

                <p>If customers buy from you, book with you, or apply to you online, your website is part of how you serve the public. The U.S. Department of Justice has said that businesses open to the public must make what they offer online accessible to people with disabilities. The good news: most of what breaks is boring, fixable, and the same six problems almost everywhere. The bad news: a plug-in that promises to fix it all for you probably won't.</p>

                <h2>What the rules actually say</h2>

                <h3>The ADA, in plain words</h3>

                <p>The Americans with Disabilities Act (ADA) covers "public accommodations," which DOJ describes as businesses open to the public, such as retailers, banks, hotels, medical offices, and restaurants. In its <a href="https://www.ada.gov/resources/web-guidance/">March 18, 2022 web accessibility guidance</a>, DOJ says these businesses have flexibility in <em>how</em> they comply, but they "still must ensure" that the goods and services they provide online are accessible. DOJ does not set a detailed technical standard for private businesses, but it points to the Web Content Accessibility Guidelines (WCAG) and the federal Section 508 Standards as helpful references.</p>

                <p>State and local governments are a separate case. DOJ published specific web requirements for them in the Federal Register on April 24, 2024, as the same <a href="http://ada.gov">ada.gov</a> page notes. If you sell to cities, counties, or public universities, expect accessibility language in their contracts.</p>

                <h3>WCAG, the yardstick everyone uses</h3>

                <p>WCAG is the World Wide Web Consortium's standard for accessible web content. The current version, <a href="https://www.w3.org/TR/WCAG22/">WCAG 2.2</a> (W3C Recommendation, dated December 12, 2024), organizes its testable rules, called success criteria, into three levels: A, AA, and AAA. Most policies and contracts aim for Level AA. W3C itself says it does not recommend requiring AAA across a whole site, because some AAA criteria can't be met for some content.</p>

                <h3>If you sell into Europe</h3>

                <p>The <a href="https://eur-lex.europa.eu/EN/legal-content/summary/accessibility-of-products-and-services.html">European Accessibility Act</a> (Directive (EU) 2019/882) has applied since June 28, 2025, and covers services including e-commerce and banking. If EU consumers check out on your site, put this on your counsel's list.</p>

                <h2>How bad is the typical site?</h2>

                <p>Pretty bad, and getting slightly worse. WebAIM, a web accessibility organization, scans the home pages of the top one million websites every year. In its <a href="https://webaim.org/projects/million/">February 2026 WebAIM Million analysis</a>, 95.9% of home pages had automatically detected WCAG 2 failures, up from 94.8% in 2025, with an average of 56.1 detected errors per page.</p>

                <p>Two caveats WebAIM states itself: it only tests home pages, and automated tools can't catch every failure. A clean scan doesn't mean a page is accessible.</p>

                <p>The useful part is the pattern. The same six error types made up 96% of everything WebAIM detected:</p>

                <table>
                    <tr><th>Error type</th><th>Share of home pages</th></tr>
                    <tr><td>Low-contrast text</td><td>83.9%</td></tr>
                    <tr><td>Missing image alt text</td><td>53.1%</td></tr>
                    <tr><td>Missing form input labels</td><td>51%</td></tr>
                    <tr><td>Empty links</td><td>46.3%</td></tr>
                    <tr><td>Empty buttons</td><td>30.6%</td></tr>
                    <tr><td>Missing document language</td><td>13.5%</td></tr>
                </table>

                <h2>The checklist: fix these first</h2>

                <h3>1. Pick your money paths</h3>

                <p>Don't start with the whole site. List the three to five journeys that matter most: request a quote, book an appointment, check out, pay an invoice, apply for a job. WCAG conformance is judged on complete processes, so a pretty home page with a broken checkout doesn't count.</p>

                <h3>2. Clear the six common errors on those paths</h3>

                <ul>
                    <li><strong>Contrast:</strong> WCAG 2.2 asks for a contrast ratio of at least 4.5:1 for normal text and 3:1 for large text. Pale gray on white is the usual offender.</li>
                    <li><strong>Alt text:</strong> every meaningful image gets a short description; decorative images are marked so screen readers skip them.</li>
                    <li><strong>Form labels:</strong> every field has a real label, not just placeholder text that vanishes when you type.</li>
                    <li><strong>Links and buttons:</strong> every icon-only button or link has a name a screen reader can announce ("Search," not silence).</li>
                    <li><strong>Page language:</strong> set it in the page code. It's a one-line fix.</li>
                </ul>

                <h3>3. Do a 15-minute keyboard test</h3>

                <p>Unplug the mouse. Can you tab through the page, see where you are, open menus, and finish the form? WCAG requires all functionality to work from a keyboard and the focus indicator to be visible. This test catches problems scanners miss.</p>

                <h3>4. Check what's new in WCAG 2.2</h3>

                <p>Two new AA criteria are worth checking: click targets should be at least 24 by 24 CSS pixels (or spaced apart), and sticky headers or chat widgets shouldn't completely hide the element that has keyboard focus. Another new criterion, Accessible Authentication, says logins shouldn't depend on memory puzzles alone; W3C lists support for password managers and copy-and-paste as examples of ways to meet it.</p>

                <h3>5. Be careful with overlay widgets</h3>

                <p>Accessibility overlays are scripts that promise to fix a site automatically. On April 21, 2025, the Federal Trade Commission issued a <a href="https://search.ftc.gov/system/files/ftc_gov/pdf/d-o.222_3156_-_accessibe_final_consent_package_without_signatures-2.pdf">final order against accessiBe</a>, requiring a $1,000,000 payment and barring the company from claiming its automated technology can make any website WCAG-compliant unless it has competent and reliable evidence. A widget can't replace fixing the underlying pages.</p>

                <h3>6. Write it into vendor contracts</h3>

                <p>Many sites are built by an agency or run on a platform. Ask for WCAG 2.2 AA in the statement of work, a test report before launch, and a fix window for defects. Then keep a short public accessibility statement with a way for people to report problems and get help.</p>

                <h2>The bottom line</h2>

                <p>Accessibility is a maintenance habit, not a one-time project. Start with your money paths, clear the six common errors, test with a keyboard, skip the miracle widget, and make your web vendors accountable for the standard.</p>

                <p>If your website or customer portal is on next year's list, Yellow Coop's fractional CIO and CTO work covers the <a href="https://yellowcoop.com/what-we-do/">12-month IT roadmap and outsourced partner oversight</a> that keep projects like this on track. <a href="https://yellowcoop.com/contact/">Start a conversation</a>.</p>
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
