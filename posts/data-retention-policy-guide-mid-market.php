<?php
$title = 'Data Retention Policy: How Mid-Market Owners and Operators Decide What to Keep and What to Delete — Yellow Coop';
$seo_title = 'Data Retention Policy: What to Keep and Delete | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Old data is breach fuel. Build a data retention schedule that sets a purpose, owner, and deletion date for each data type, using FTC and NIST guidance.';
$meta_keywords = 'data retention policy, data retention schedule, data minimization, secure data deletion, NIST SP 800-88';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/data-retention-policy-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Data Retention Policy: How Mid-Market Owners and Operators Decide What to Keep and What to Delete"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Data Retention Policy: How Mid-Market Owners and Operators Decide What to Keep and What to Delete</h1>
                <p class="meta">2026-10-29</p>

                <p>Data you no longer need can’t help you, but it can still be stolen. The cheapest record to protect is the one you deleted on schedule.</p>

                <p>That’s the job of a data retention schedule: a plain list of what data you keep, why, who owns it, and when it gets deleted. It shrinks what a breach can expose, and it’s now something federal regulators write into orders against companies that got it wrong.</p>

                <h2>Why “keep everything” stopped being free</h2>

                <p>Two Federal Trade Commission cases show where the line is moving.</p>

                <p><strong>Blackbaud.</strong> The FTC said a hacker exploited weaknesses in the software company’s network in early 2020, went undetected for three months, and removed large amounts of unencrypted sensitive consumer data belonging to Blackbaud’s customers. The FTC’s <a href="https://www.ftc.gov/news-events/news/press-releases/2024/05/ftc-finalizes-order-blackbaud-related-allegations-firms-security-failures-led-data-breach">final order (May 20, 2024)</a> requires Blackbaud to delete data it no longer needs and to put a data retention schedule in place. The <a href="https://www.ftc.gov/system/files/ftc_gov/pdf/Blackbaud-D%26O.pdf">order text</a> gets specific: for customer backup files, the schedule must state the purpose, the business need, and “a set timeframe for Deletion” that rules out keeping data indefinitely, and it also covers former customers’ data.</p>

                <p><strong>Drizly.</strong> The FTC’s <a href="https://www.ftc.gov/news-events/news/press-releases/2023/01/ftc-finalizes-order-online-alcohol-marketplace-security-failures-exposed-personal-data-25-million">final order (January 10, 2023)</a> against the alcohol delivery marketplace, after a breach the FTC said exposed data on about 2.5 million people, requires it to destroy personal data it doesn’t need and to collect or store personal information only for purposes listed in a retention schedule. The order also follows CEO James Cory Rellas: if he later becomes majority owner, CEO, or a senior officer with security duties at a business holding data on 25,000 or more consumers, he must put an information security program in place there too.</p>

                <p>These are consent orders against specific companies, not a rule that binds everyone. But they show what the FTC considers reasonable, and that kind of language tends to show up in customer security questionnaires and insurance applications.</p>

                <p>The FTC’s own small-business guide, <a href="https://www.ftc.gov/business-guidance/resources/protecting-personal-information-guide-business">Protecting Personal Information: A Guide for Business</a>, boils data security down to five principles: take stock, scale down, lock it, pitch it, and plan ahead. A retention schedule is how you do “scale down” and “pitch it” on purpose instead of never.</p>

                <h2>Build your retention schedule in five steps</h2>

                <h3>1. Inventory data types, not just systems</h3>

                <p>Start with categories: customer records, payment data, employee and HR files, job applicant resumes, email, backups, spreadsheet exports in shared drives, and data in software you stopped using. For each, note where it lives. This is the FTC’s “take stock” step, and it’s where most companies find their surprises.</p>

                <h3>2. Give every data type four answers</h3>

                <p>For each category, write down:</p>

                <ul>
                    <li><strong>Purpose:</strong> why you collected it</li>
                    <li><strong>Business need:</strong> why you still keep it</li>
                    <li><strong>Owner:</strong> the person who answers for it</li>
                    <li><strong>Deletion timeframe:</strong> a set period, never “indefinitely”</li>
                </ul>

                <p>Those first and last columns mirror the language in the FTC orders above. Legal minimums (tax, employment, industry rules) come from your accountant and counsel; write the source next to each minimum so nobody has to guess later.</p>

                <h3>3. Don’t forget backups, exports, and old systems</h3>

                <p>The Blackbaud order specifically names customer backup files and former customers’ data. That’s where “deleted” data tends to live on: in backups nobody expires, in exports someone saved to their desktop, and in a system you migrated off but never shut down. When you leave a vendor, get their deletion confirmation in writing.</p>

                <h3>4. Make deletion automatic and boring</h3>

                <p>Use the retention settings built into your email, file storage, and business software wherever they exist. For the rest, put a quarterly purge on the calendar with a named owner. Build in one exception: a legal hold. Even the Blackbaud order lets the company keep data that law, regulation, or a court requires, including evidence for pending litigation. Your schedule should say who can place a hold and who lifts it.</p>

                <h3>5. Dispose of devices the right way</h3>

                <p>Deleting files isn’t the same as wiping a laptop. <a href="https://csrc.nist.gov/pubs/sp/800/88/r2/final">NIST SP 800-88 Revision 2</a> (published September 26, 2025) shifted its focus to setting up an organization-wide media sanitization program for disposal and reuse, and it keeps cryptographic erase (destroying the encryption key so encrypted data becomes unreadable) as a method for encrypted media (<a href="https://csrc.nist.gov/news/2025/guidelines-for-media-sanitization-rev-2">NIST summary of changes</a>). Practically: encrypt company laptops from day one, and get written confirmation from your disposal vendor of the method they used.</p>

                <h2>Bonus: less data makes AI safer</h2>

                <p>AI assistants that search your files will happily surface the 2017 salary spreadsheet nobody remembered was shared. Trimming old data and fixing who can see what before you turn those tools on is cheaper than cleaning up after.</p>

                <h2>Quick wins for this month</h2>

                <ul>
                    <li>Name an owner for your five biggest stores of personal data.</li>
                    <li>Delete stale exports and copies in shared drives.</li>
                    <li>Close out software you’ve stopped paying for, and get the vendor to confirm deletion.</li>
                    <li>Set a retention period on email and chat.</li>
                </ul>

                <h2>The bottom line</h2>

                <p>A data retention schedule is a one-page decision about what you’re willing to defend. Keep what has a purpose, delete the rest on a timer, and make sure backups follow the same rules.</p>

                <p>An inventory of systems with owners is part of the Chief Information Officer work Yellow Coop offers, and a vendor risk review for the systems that hold your data is part of our Chief Information Security Officer work. See <a href="/what-we-do/">what we do</a> and <a href="/how-we-engage/">how we engage</a>, or <a href="/contact/">get in touch</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.ftc.gov/news-events/news/press-releases/2024/05/ftc-finalizes-order-blackbaud-related-allegations-firms-security-failures-led-data-breach">FTC finalizes order with Blackbaud</a> — FTC press release, May 20, 2024</li>
                    <li><a href="https://www.ftc.gov/system/files/ftc_gov/pdf/Blackbaud-D%26O.pdf">Blackbaud Decision and Order</a> — FTC, 2024</li>
                    <li><a href="https://www.ftc.gov/news-events/news/press-releases/2023/01/ftc-finalizes-order-online-alcohol-marketplace-security-failures-exposed-personal-data-25-million">FTC finalizes order with Drizly</a> — FTC press release, January 10, 2023</li>
                    <li><a href="https://www.ftc.gov/business-guidance/resources/protecting-personal-information-guide-business">Protecting Personal Information: A Guide for Business</a> — FTC</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/88/r2/final">NIST SP 800-88 Rev. 2, Guidelines for Media Sanitization</a> — NIST, September 26, 2025</li>
                    <li><a href="https://csrc.nist.gov/news/2025/guidelines-for-media-sanitization-rev-2">NIST CSRC news: SP 800-88r2 changes</a> — NIST, September 26, 2025</li>
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
