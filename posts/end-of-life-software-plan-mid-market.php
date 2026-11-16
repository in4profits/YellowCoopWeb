<?php
$title = 'End-of-Life Software: A Practical Plan for the Tech Your Vendors Stopped Supporting — Yellow Coop';
$seo_title = 'End-of-Life Software Plan | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Past vendor support? A four-move plan for end-of-life software: list it, upgrade, replace, isolate, or accept on purpose, and budget the cost.';
$meta_keywords = 'end-of-life software, end of support planning, unsupported software risk, Windows 10 extended security updates, legacy system replacement';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/end-of-life-software-plan-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="A black hourglass with yellow sand partly run through, standing on a dark slate surface against a dark background"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>End-of-Life Software: A Practical Plan for the Tech Your Vendors Stopped Supporting</h1>
                <p class="meta">2026-11-16 · By the Yellow Coop Team</p>

                <p><strong>Takeaway:</strong> Every piece of software and hardware you own has an expiration date, after which the vendor stops fixing security holes. You can see it coming. Make a list of what's past (or near) end of support, pick one of four moves for each item (upgrade, replace, isolate, or accept on purpose), and put the cost in next year's budget instead of in next year's incident report.</p>

                <h2>What "end of life" actually means</h2>

                <p>"End of life" or "end of support" is the date a vendor stops sending updates for a product. Nothing looks different on Monday morning. What changes is that any new security flaw found after that date stays open forever.</p>

                <p><a href="https://csrc.nist.gov/pubs/sp/800/40/r4/final">NIST SP 800-40 Rev. 4</a> (April 2022), NIST's patch planning guide, puts it bluntly: when a vendor no longer supports software, "a patch for it will never be released because the software is at end-of-life."</p>

                <p>The UK's National Cyber Security Centre (NCSC) adds a second problem in its <a href="https://www.ncsc.gov.uk/collection/device-security-guidance/managing-deployed-devices/obsolete-products">guidance on obsolete products</a> (published June 29, 2021, reviewed May 13, 2025): older products also lack newer security protections, so a successful attack does more damage and is harder to spot. Its conclusion: "The only fully effective way to mitigate this risk is to stop using the obsolete product."</p>

                <p>CISA, the U.S. cybersecurity agency, went further. Its <a href="https://www.cisa.gov/BadPractices">Bad Practices list</a> (released 2021, now archived) calls use of unsupported or end-of-life software in critical infrastructure "dangerous," and "especially egregious in technologies accessible from the Internet." You may not run a power grid, but that last clause fits your VPN too.</p>

                <h2>A cautionary tale from the NHS</h2>

                <p>On May 12, 2017, the WannaCry ransomware hit England's National Health Service. The UK National Audit Office's <a href="https://www.nao.org.uk/reports/investigation-wannacry-cyber-attack-and-the-nhs/">investigation</a> (October 27, 2017) found at least 81 of 236 hospital trusts were affected, plus 603 primary care and other NHS organizations. NHS England identified 6,912 cancelled appointments and estimated more than 19,000 in total.</p>

                <p>The cause was not exotic. NHS Digital told auditors that infected organizations "had unpatched, or unsupported Windows operating systems." Trusts had been told in 2014 to have "robust plans" to move off old software such as Windows XP by April 2015. Amyas Morse, then head of the National Audit Office, called it "a relatively unsophisticated attack" that "could have been prevented by the NHS following basic IT security best practice."</p>

                <p>Translation: the plan existed on paper. Nobody checked that it happened.</p>

                <h2>Dates worth knowing right now</h2>

                <p>If you run Microsoft products, these are behind you or close:</p>

                <ul>
                    <li><strong>Windows 10</strong> reached <a href="https://learn.microsoft.com/en-us/windows/whats-new/extended-security-updates">end of support on October 14, 2025</a>, more than a year ago.</li>
                    <li><strong>Office 2016 and 2019, and Exchange Server 2016 and 2019</strong>, also hit <a href="https://learn.microsoft.com/en-us/lifecycle/end-of-support/end-of-support-2025">end of support on October 14, 2025</a>.</li>
                    <li><strong>Windows Server 2016</strong> reaches the <a href="https://learn.microsoft.com/en-us/lifecycle/products/windows-server-2016">end of extended support on January 12, 2027</a>, less than two months from now.</li>
                </ul>

                <p>Your firewall, accounting system, and that one machine on the shop floor have their own dates.</p>

                <h2>The four-move plan</h2>

                <h3>1. Build the end-of-support list</h3>

                <p>For every system, record what it is, the version, the owner, the business process that depends on it, and the vendor's end-of-support date. Ask your IT team or managed service provider (MSP). Include hardware: firewalls, routers, servers, anything with firmware.</p>

                <h3>2. Pick one move per item</h3>

                <p>NIST's guide lists four risk responses: accept, mitigate, transfer, and avoid. In plain terms:</p>

                <ul>
                    <li><strong>Upgrade:</strong> move to a supported version of the same product.</li>
                    <li><strong>Replace:</strong> retire it for something else, often a cloud (software-as-a-service) product where the vendor handles patching. Both NIST and NCSC point to SaaS as a way to hand off some of that work.</li>
                    <li><strong>Isolate:</strong> if it truly can't go yet, wall it off. NCSC recommends cutting off email, web browsing, and other routes for untrusted content to reach the device, and limiting what sensitive data it can touch.</li>
                    <li><strong>Accept, on purpose:</strong> a named executive signs off, with a review date. NCSC says to revisit that decision regularly. "We forgot about it" doesn't count as accepting.</li>
                </ul>

                <h3>3. Do the budget math</h3>

                <p>Extended support is a bridge, not a home. Microsoft's <a href="https://learn.microsoft.com/en-us/windows/whats-new/extended-security-updates">Extended Security Updates (ESU) program for Windows 10</a> costs organizations $61 per device for Year One, the price "doubles every consecutive year," and coverage maxes out at three years. It's also cumulative: buy in Year Two and you pay for Year One too. By our math from Microsoft's pricing, that's $183 per device to catch up for two years and $427 for all three, per machine, for a product that still ends. Price a replacement PC before you sign.</p>

                <h3>4. Buy with the end in mind</h3>

                <p>NIST's procurement questionnaire suggests asking vendors: "For how many years are you committed to correcting vulnerabilities in the software?" NCSC says to consider support lifetime whenever you buy hardware or license software. Put the answer in the contract file.</p>

                <h2>Questions to ask this month</h2>

                <ul>
                    <li>Which of our systems are already past end of support?</li>
                    <li>Which ones hit that date in the next 12 months?</li>
                    <li>Is anything unsupported reachable from the internet?</li>
                    <li>Is the replacement cost in next year's budget?</li>
                </ul>

                <h2>The bottom line</h2>

                <p>End of support is the most predictable risk in technology: the date is published years ahead. The companies that get hurt just never put it on anyone's calendar.</p>

                <p>If nobody inside your company owns that list, that's the kind of work Yellow Coop does as your fractional CIO, CTO, and CISO, starting with an <a href="https://yellowcoop.com/what-we-do/">inventory of systems, licenses, and contracts with owners and renewal dates</a> and a 12-month IT roadmap and budget the CFO can read. See <a href="https://yellowcoop.com/how-we-engage/">how we engage</a>, or <a href="https://yellowcoop.com/contact/">book a call</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/40/r4/final">https://csrc.nist.gov/pubs/sp/800/40/r4/final</a></li>
                    <li><a href="https://www.ncsc.gov.uk/collection/device-security-guidance/managing-deployed-devices/obsolete-products">https://www.ncsc.gov.uk/collection/device-security-guidance/managing-deployed-devices/obsolete-products</a></li>
                    <li><a href="https://www.cisa.gov/BadPractices">https://www.cisa.gov/BadPractices</a></li>
                    <li><a href="https://www.nao.org.uk/reports/investigation-wannacry-cyber-attack-and-the-nhs/">https://www.nao.org.uk/reports/investigation-wannacry-cyber-attack-and-the-nhs/</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/windows/whats-new/extended-security-updates">https://learn.microsoft.com/en-us/windows/whats-new/extended-security-updates</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/lifecycle/end-of-support/end-of-support-2025">https://learn.microsoft.com/en-us/lifecycle/end-of-support/end-of-support-2025</a></li>
                    <li><a href="https://learn.microsoft.com/en-us/lifecycle/products/windows-server-2016">https://learn.microsoft.com/en-us/lifecycle/products/windows-server-2016</a></li>
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
