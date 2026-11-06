<?php
$title = 'Help Desk Password Reset Verification: A Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Help Desk Password Reset Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Attackers call the help desk and ask for a password or MFA reset. A practical verification checklist for mid-market owners and operators.';
$meta_keywords = 'help desk password reset verification, help desk social engineering, MFA reset process, account recovery, IT support identity verification';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/help-desk-password-reset-verification-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Help Desk Password Reset Verification: A Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Help Desk Password Reset Verification: A Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-11-06 · By the Yellow Coop Team</p>

                <p>Your help desk exists to be helpful. Attackers know that, and a calm, slightly stressed voice saying “I got a new phone and I’m locked out” is cheaper than breaking in. One successful call can hand over a real password and a real MFA device, which is how a stranger becomes “you” inside your email, files, and finance systems.</p>

                <p>The short version: treat a password or MFA reset as an identity decision, not a favor. Verify the person with something a caller can’t just look up, make MFA changes harder than password resets, tell the real account owner, and write the script so your help desk is allowed to say no.</p>

                <h2>What the attackers actually do</h2>

                <p>The joint FBI–CISA advisory on Scattered Spider (<a href="https://www.cisa.gov/news-events/cybersecurity-advisories/aa23-320a">AA23-320A</a>, first published November 16, 2023, revised July 29, 2025) is blunt. The July 2025 update says the group has “posed as employees to convince IT and/or helpdesk staff to provide sensitive information, reset the employee’s password, and transfer the employee’s MFA to a device they control.” It also describes layered social engineering over several calls, the early ones built to learn what a reset requires. Translation: the first call may be reconnaissance.</p>

                <p>New Zealand’s National Cyber Security Centre (<a href="https://www.ncsc.govt.nz/insights-and-research/insights-reports/quarter-two-cyber-security-insights-2025/attack-on-the-helpdesk/">Quarter Two 2025 insights report</a>) lists the usual pressure tactics: urgency, appeals to authority (“your boss will be angry”), and sympathy, backed by public details from LinkedIn or breach data. Tom Roberts, its Response and Investigations Team Lead, says not everyone who calls “desperate for a password reset is who they say they are.”</p>

                <p>The UK’s National Cyber Security Centre made the same ask in a <a href="https://www.ncsc.gov.uk/blog-post/incidents-impacting-retailers">May 4, 2025 blog post</a> by Jonathon Ellison, Director of National Resilience, and Ollie Whitehouse, Chief Technology Officer: review helpdesk password reset processes, including how the helpdesk authenticates staff, “especially those with escalated privileges.”</p>

                <h2>The checklist</h2>

                <h3>1. Make “what you know” worthless</h3>

                <p>Birthdate, employee ID, manager’s name: easy to find or guess. NIST’s <a href="https://pages.nist.gov/800-63-4/sp800-63a.html">SP 800-63A-4</a> (final July 31, 2025) says knowledge-based verification “SHALL NOT be used for identity verification.” It targets government digital services, so treat it as a strong signal, not your rulebook.</p>

                <h3>2. Verify through a channel you control</h3>

                <p>Call back on the number in your HR system, or send a prompt to a device already enrolled. Never use a number or email the caller offers. NIST’s account-recovery rules in <a href="https://pages.nist.gov/800-63-4/sp800-63b.html">SP 800-63B-4</a> (final July 31, 2025) lean on things set up in advance: saved recovery codes, codes sent to pre-registered addresses, recovery contacts, or repeating the original identity check. Same idea: the proof should exist before the call.</p>

                <h3>3. Make MFA changes harder than password resets</h3>

                <p>A new MFA device is a key to the building. NCSC New Zealand notes attackers try to add devices they control or downgrade to weaker methods like text messages. NIST’s recovery rules for accounts with MFA ask for more than one piece of evidence, such as two recovery codes delivered by different methods. Your version: no MFA changes on a phone call alone.</p>

                <h3>4. Tell the real owner</h3>

                <p>NIST requires account recovery to trigger a notification to the account holder, with clear instructions if they didn’t request it. Copy that: message the contact already on file, and the manager, when a reset or new device is approved. A real employee who didn’t ask will object fast.</p>

                <h3>5. Raise the bar for admins and finance</h3>

                <p>Those accounts are the prize, which is why the UK NCSC singled out escalated privileges. Require a second approver and a video check before resetting them.</p>

                <h3>6. Give your help desk permission to say no</h3>

                <p>Write the script: what to ask for, and what to do when the caller can’t verify. NCSC New Zealand recommends clear criteria for what staff need before resetting passwords or changing MFA, including that fallback, plus regular training, ideally several times a year. Then add the rule that matters most: it applies to everyone, including the CEO calling from the airport. Nobody gets scolded for a polite refusal.</p>

                <h3>7. Log it, and need fewer resets</h3>

                <p>Record who asked, who verified, and how. CISA’s July 2025 update recommends watching for “risky logins,” so a reset followed by a sign-in from somewhere new deserves an alert. CISA also recommends FIDO/WebAuthn or PKI-based MFA, which it says resists push bombing and SIM swaps. Give each person a spare key, and a lost phone stops being an invitation.</p>

                <h2>The takeaway</h2>

                <p>Your reset process is a login with a human in the middle. If a confident voice can talk past it, your MFA is doing less than you think.</p>

                <p>If nobody can say who verifies a reset today, or your provider can’t show you its written procedure, start there. Yellow Coop’s <a href="/what-we-do">Operate work</a> includes a help desk and managed service provider review with service levels you can hold them to, and our <a href="/what-we-do">Secure work</a> covers a written incident response plan and a tabletop exercise with leadership. Engagements run <a href="/how-we-engage">Virtual (1–4 hours/week), Fractional (1–4 days/week), or Interim</a>. <a href="/contact">Get in touch</a> to talk it through.</p>

                <h2>Sources</h2>
                <ul>
                    <li>CISA/FBI, Scattered Spider (AA23-320A), Nov 16, 2023, rev. July 29, 2025: <a href="https://www.cisa.gov/news-events/cybersecurity-advisories/aa23-320a">https://www.cisa.gov/news-events/cybersecurity-advisories/aa23-320a</a></li>
                    <li>UK NCSC, “Incidents impacting retailers,” May 4, 2025: <a href="https://www.ncsc.gov.uk/blog-post/incidents-impacting-retailers">https://www.ncsc.gov.uk/blog-post/incidents-impacting-retailers</a></li>
                    <li>NCSC NZ, Quarter Two 2025 Cyber Security Insights, “Attack on the helpdesk”: <a href="https://www.ncsc.govt.nz/insights-and-research/insights-reports/quarter-two-cyber-security-insights-2025/attack-on-the-helpdesk/">https://www.ncsc.govt.nz/insights-and-research/insights-reports/quarter-two-cyber-security-insights-2025/attack-on-the-helpdesk/</a></li>
                    <li>NIST SP 800-63A-4, final July 31, 2025: <a href="https://pages.nist.gov/800-63-4/sp800-63a.html">https://pages.nist.gov/800-63-4/sp800-63a.html</a></li>
                    <li>NIST SP 800-63B-4, final July 31, 2025: <a href="https://pages.nist.gov/800-63-4/sp800-63b.html">https://pages.nist.gov/800-63-4/sp800-63b.html</a></li>
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
