<?php
$title = 'How to Buy a Penetration Test: A Scoping Guide for Owners and Operators — Yellow Coop';
$seo_title = 'How to Buy a Penetration Test | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'A pen test checks how well you manage vulnerabilities on test day. How owners and operators scope one, pick a tester, and use the report.';
$meta_keywords = 'penetration testing, how to buy a penetration test, penetration test scope, vulnerability scanning vs penetration testing, penetration test report';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/how-to-buy-penetration-test-scoping-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="A wireframe building inside an amber dashed hexagonal boundary, with an amber probe beam approaching from the right, against a dark background"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>How to Buy a Penetration Test: A Scoping Guide for Owners and Operators</h1>
                <p class="meta">2026-11-20 · By the Yellow Coop Team</p>

                <p>A customer's security questionnaire asks when you last had a penetration test, and now you're shopping for something you can't easily judge. The takeaway: a penetration test is an audit of how you manage vulnerabilities, not a replacement for doing it. Do the basics first, scope the test around what actually worries you, and judge the vendor by the report and the follow-up, not by how scary the sales deck sounds.</p>

                <h2>Pen test vs. vulnerability scan, in plain words</h2>

                <ul>
                    <li><strong>Vulnerability scan:</strong> an automated tool checks your systems for known weaknesses. NIST's testing guide, SP 800-115 (September 2008, still the current version), notes that scanning finds hosts, open ports, and known vulnerabilities but "has high false positive rates."</li>
                    <li><strong>Penetration test:</strong> NIST defines it as "security testing in which assessors mimic real-world attacks to identify methods for circumventing the security features of an application, system, or network." Testers often chain weaknesses together to gain more access than any single one allows.</li>
                </ul>

                <p>The UK's National Cyber Security Centre (NCSC) puts it bluntly: a pen test "should be viewed as a method for gaining assurance in your organisation's vulnerability assessment and management processes, not as a primary method for identifying vulnerabilities." NCSC compares it to a financial audit, and says that ideally "you should know what the penetration testers are going to find, before they find it."</p>

                <h2>Step 1: Do the cheap stuff first</h2>

                <p>NIST says that because of the cost and potential impact, an annual pen test "may be sufficient," with regular scanning in between. NCSC adds that a test only shows you weren't vulnerable to known issues <em>on the day of the test</em>, and a year or more often passes between tests.</p>

                <p>For the in-between part, check whether you qualify for CISA's free Cyber Hygiene services. They include weekly vulnerability scanning of internet-facing systems and web application scanning. They're open to U.S. government bodies and to public and private critical infrastructure organizations.</p>

                <h2>Step 2: Pick the kind of test</h2>

                <ul>
                    <li><strong>External vs. internal:</strong> an external test comes in from the internet. In an internal test, per NIST, testers start inside your network with the access a standard employee would have, then try to escalate (gain more privileges).</li>
                    <li><strong>Open box vs. closed box:</strong> NCSC describes open box as sharing full information with the testers, which checks how well your own vulnerability management works. Closed box shares nothing and better mimics an outsider, but the lack of information can leave weaknesses unfound in the time allotted.</li>
                    <li><strong>Web application tests:</strong> for custom software. Ask which methodology the tester follows; the OWASP Web Security Testing Guide (current release v4.2) is a common reference.</li>
                    <li><strong>Scenario tests:</strong> NCSC's examples include a lost laptop, an unauthorized device plugged into your network, and a compromised server in your DMZ (the network zone that faces the internet). Pick scenarios based on incidents you've actually had.</li>
                </ul>

                <h2>Step 3: Put the scope in writing</h2>

                <p>NCSC says scoping should involve the people who own the risk, technical staff who know the systems, and someone from the test team. The resulting document should cover:</p>

                <ul>
                    <li>Technical boundaries (what's in, what's off-limits)</li>
                    <li>Types of test</li>
                    <li>Timeframe and effort, usually in tester-days</li>
                    <li>Any scenarios</li>
                    <li>What the testers need from you, like test accounts</li>
                    <li>Compliance requirements</li>
                    <li>Reporting format, such as severity ratings</li>
                </ul>

                <p>NIST SP 800-115 includes a Rules of Engagement template (Appendix B). Think of it as the signed permission slip that says what testers may do and when.</p>

                <p>Don't skip the risk talk. NIST warns that systems "may be damaged or otherwise rendered inoperable" during testing, and experienced testers can reduce that risk but it "can never be fully eliminated." Tests can be designed to stop before an action would cause damage. NCSC says to keep a technical contact reachable at all times during testing.</p>

                <h2>Step 4: Choose the tester, not the logo</h2>

                <p>NCSC says the quality of a test "is closely linked to the abilities of the penetration testers involved." If you run anything unusual, like old mainframes or custom hardware, flag it in the bid so firms can staff the right skills. Accreditation helps. CREST, an industry body, accredits security testing companies, and NCSC recommends its CHECK scheme for UK government bodies. Ask for a redacted sample report before you sign.</p>

                <h2>Step 5: Judge the report, then do the work</h2>

                <p>Per NCSC, a good report includes each issue, its risk level, how to fix it, an opinion on how accurate your own vulnerability assessment was, and advice for improving your process. Ask for a debrief meeting too.</p>

                <p>Then remember who owns the risk. NCSC says testers may rate issues higher or lower than you would, and "risk assessment and decisions on the application of fixes are your responsibility." The fix doesn't have to be a patch; uninstalling software nobody needs also counts. Give special attention to anything you didn't already know about: it points to a gap in your own process.</p>

                <h2>The bottom line</h2>

                <p>A pen test is worth buying when you're ready to learn from it. Scan regularly, scope carefully, and treat the report as homework, not a trophy.</p>

                <p>Yellow Coop's CISO work includes risk-based patching and vulnerability management, plus ownership of customer security questionnaires. Through Virtual advisory you can also get a second opinion on vendors, contracts, and proposals, pen test quotes included. <a href="https://yellowcoop.com/contact/">Let's talk</a>.</p>
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
