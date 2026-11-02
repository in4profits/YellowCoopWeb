<?php
$title = 'Who Owns the Code You Paid For? A Software Ownership Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Who Owns the Code You Paid For? | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Paying for custom software doesn\'t automatically make you its owner. A checklist for contracts, repos, accounts, and handoffs before you need them.';
$meta_keywords = 'who owns custom software code, software development contract ownership, work made for hire software, intellectual property assignment clause, outsourced development oversight';
$pillar = 'Innovate';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/software-code-ownership-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Who Owns the Code You Paid For? A Software Ownership Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Who Owns the Code You Paid For? A Software Ownership Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-11-02 · By the Yellow Coop Team</p>

                <p><strong>The takeaway:</strong> Paying a developer or agency to build software does not, by itself, make your company the owner of that code. Under U.S. copyright law, ownership starts with whoever wrote it, and it moves to you only through employment or a signed written agreement. Fix the paperwork, the repositories, and the account logins now, while everyone is still friendly.</p>

                <h2>Why “we paid for it” isn’t the same as “we own it”</h2>

                <p>The <a href="https://www.copyright.gov/circs/circ30.pdf">U.S. Copyright Office’s Circular 30, </a><a href="https://www.copyright.gov/circs/circ30.pdf"><em>Works Made for Hire</em></a> (revised August 2024) lays out the default plainly: ordinarily, the author is the person who actually created the work. The Copyright Act says the same thing in <a href="https://www.law.cornell.edu/uscode/text/17/201">17 U.S.C. § 201(a)</a>: copyright “vests initially in the author or authors of the work.”</p>

                <p>There are two ways your company becomes the author or owner instead:</p>

                <ol>
                    <li><strong>Your employee wrote it as part of their job.</strong> Code written by an employee within the scope of employment is a “work made for hire,” and the employer is treated as the author (<a href="https://www.law.cornell.edu/uscode/text/17/101">17 U.S.C. § 101</a>; <a href="https://www.law.cornell.edu/uscode/text/17/201">§ 201(b)</a>).</li>
                    <li><strong>Someone signed a written transfer.</strong> A transfer of copyright ownership “is not valid unless” it is in writing and signed by the owner of the rights being conveyed (<a href="https://www.law.cornell.edu/uscode/text/17/204">17 U.S.C. § 204(a)</a>).</li>
                </ol>

                <h2>The contractor trap</h2>

                <p>Most mid-market software is built by freelancers, agencies, or offshore partners, not employees. That matters for two reasons.</p>

                <p><strong>First, “employee” is a legal test, not a job title.</strong> Circular 30 notes that the Supreme Court, in <em>Community for Creative Non-Violence v. Reid</em> (1989), told courts to use the general common law of agency to decide who counts as an employee. The factors include who supplied the tools, how long the relationship ran, how the person was paid, whether taxes were withheld, and whether they ran their own business. A contractor billing your company through their own LLC usually looks a lot less like an employee.</p>

                <p><strong>Second, writing “work made for hire” in a contractor agreement may not do what you think.</strong> For commissioned work, the label only works if the work fits one of nine categories listed in § 101: a contribution to a collective work, part of a motion picture or other audiovisual work, a translation, a supplementary work, a compilation, an instructional text, a test, answer material for a test, or an atlas. Circular 30 is blunt: if a work fails any of the requirements, “it is not a work made for hire.” Standalone custom software isn’t on that list. That is why it’s worth asking your attorney whether your contracts also include a signed <strong>assignment</strong> clause (a written transfer of ownership under § 204), not only the work-for-hire label.</p>

                <p><em>This is a practical checklist, not legal advice. Have your attorney review the contracts.</em></p>

                <h2>The software ownership checklist</h2>

                <h3>1. Paper: contracts that actually transfer rights</h3>

                <ul>
                    <li>A signed agreement with every outside developer, agency, and subcontractor that <strong>assigns</strong> copyright in the work to your company.</li>
                    <li>Language covering the agency’s own subcontractors. If the agency hired a freelancer, you need rights flowing from that person through the agency to you.</li>
                    <li>A clear license for any pre-existing tools or code the developer brings in and keeps owning, so you can keep running and changing the product if you part ways.</li>
                </ul>

                <h3>2. Code: repositories in your company’s name</h3>

                <ul>
                    <li>Source code lives in a repository owned by <strong>your</strong> company’s account, with the vendor added as a collaborator, not the other way around.</li>
                    <li>At least two people at your company hold admin access.</li>
                    <li>The build and deploy steps are written down, so a new team could ship a change without calling the old one.</li>
                </ul>

                <h3>3. Accounts: the keys to production</h3>

                <ul>
                    <li>Cloud hosting, domains, app store listings, email-sending services, and payment processors are registered to company accounts and company email addresses, not a developer’s personal Gmail.</li>
                    <li>Passwords and API keys sit in a company-controlled password manager or secrets vault.</li>
                    <li>Billing for each service runs on a company card, so nothing lapses when a vendor stops paying.</li>
                </ul>

                <h3>4. Components: know what you didn’t write</h3>

                <ul>
                    <li>Ask for a list of the open-source and third-party components in the product and their licenses. Some licenses carry obligations if you distribute the software. Your attorney can tell you which ones matter for your situation.</li>
                </ul>

                <h3>5. Handoff: rehearse the breakup</h3>

                <ul>
                    <li>Once a year, ask: if this vendor disappeared tomorrow, could we get the code, deploy it, and log into everything? If the honest answer is “probably,” that’s a no.</li>
                </ul>

                <h2>When to do this</h2>

                <p>The best time is before the first invoice. The next best time is before something forces the question: a due diligence request from a buyer or investor, a vendor dispute, or a key developer leaving. Cleaning up ownership in the middle of a sale or a fight costs more and gives you less leverage.</p>

                <h2>Conclusion</h2>

                <p>Ownership of your software comes down to three things you can check this quarter: signed paperwork that transfers rights, repositories and accounts in your company’s name, and a handoff you’ve actually tested. None of it is glamorous. All of it is cheaper than finding out the hard way.</p>

                <p>If an outsourced team builds your product and nobody in-house can vouch for the contracts, the code, or the access, that’s squarely the kind of outsourced partner oversight Yellow Coop covers in its <a href="/what-we-do/">fractional CTO work</a>. <a href="/contact/">Get in touch</a> to talk it through.</p>

                <h2>Sources</h2>
                <ul>
                    <li>U.S. Copyright Office, Circular 30, <em>Works Made for Hire</em> (revised August 2024): <a href="https://www.copyright.gov/circs/circ30.pdf">https://www.copyright.gov/circs/circ30.pdf</a></li>
                    <li>17 U.S.C. § 101, Definitions (“work made for hire”), via Cornell LII: <a href="https://www.law.cornell.edu/uscode/text/17/101">https://www.law.cornell.edu/uscode/text/17/101</a></li>
                    <li>17 U.S.C. § 201, Ownership of copyright, via Cornell LII: <a href="https://www.law.cornell.edu/uscode/text/17/201">https://www.law.cornell.edu/uscode/text/17/201</a></li>
                    <li>17 U.S.C. § 204, Execution of transfers of copyright ownership, via Cornell LII: <a href="https://www.law.cornell.edu/uscode/text/17/204">https://www.law.cornell.edu/uscode/text/17/204</a></li>
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
