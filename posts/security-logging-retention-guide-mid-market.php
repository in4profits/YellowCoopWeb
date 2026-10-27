<?php
$title = 'Security Logging for Mid-Market Companies: What to Log, How Long to Keep It, and Who Watches It — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'What to log, how long to keep it, and who watches it: a security logging guide for mid-market owners and operators, built on CISA-backed guidance.';
$meta_keywords = 'security logging, log retention policy, Microsoft 365 audit log, centralized log management, incident investigation';
$pillar = 'Secure';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/security-logging-retention-guide-mid-market-hero.webp" alt="Security Logging for Mid-Market Companies: What to Log, How Long to Keep It, and Who Watches It"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Security Logging for Mid-Market Companies: What to Log, How Long to Keep It, and Who Watches It</h1>
                <p class="meta">2026-10-25</p>

                <p><strong>Takeaway:</strong> Most mid-market companies already generate the logs they’d need to investigate a breach. The trouble is that nobody chose which ones matter, the defaults delete them too soon, and nobody looks at them until it’s too late. Pick your high-value sources, keep them long enough to be useful, store them where an attacker can’t quietly erase them, and give one person the job of watching.</p>

                <p>Quick definition: a log is the running record a system keeps of who did what and when, such as a sign-in, a password reset, a firewall connection, or someone opening a mailbox. Logs don’t stop attacks. They tell you what happened, which is the first thing your insurer, your lawyer, and your customers will ask.</p>

                <h2>The lesson from a premium log</h2>

                <p>In 2023, a hacking group Microsoft calls Storm-0558 got into Microsoft Exchange Online mailboxes at 22 organizations, including the U.S. State Department. According to the <a href="https://www.cisa.gov/sites/default/files/2024-03/CSRB%20Review%20of%20the%20Summer%202023%20MEO%20Intrusion%20Final_508c.pdf">Cyber Safety Review Board’s report (March 20, 2024)</a>, State was the first victim to notice. Its security team had built a custom alert on a log called MailItemsAccessed, which records access to mailboxes. State could only see that log because it paid for Microsoft’s premium audit tier. During its access, the group downloaded roughly 60,000 emails from the State Department alone.</p>

                <p>Two things changed afterward. Microsoft <a href="https://www.microsoft.com/en-us/security/blog/2023/07/19/expanding-cloud-logging-to-give-customers-deeper-security-visibility/">announced on July 19, 2023</a> that standard-tier customers would get detailed email-access logs and more than 30 other previously premium log types at no added cost, with rollout starting that September. And the lesson stuck: a log only helps if it exists, you can reach it, and someone has decided what to look for in it.</p>

                <h2>Step 1: Write a one-page logging policy</h2>

                <p>The joint guidance <a href="https://www.cisa.gov/resources-tools/resources/best-practices-event-logging-and-threat-detection">Best Practices for Event Logging and Threat Detection (August 21, 2024)</a>, led by Australia’s ASD with CISA, the FBI, the NSA and other partners, starts with an enterprise-approved logging policy. For a mid-market company, that’s one page answering four questions: what we log, where it goes, how long we keep it, and who reviews it.</p>

                <h2>Step 2: Start with the sources attackers touch first</h2>

                <p>The guidance gives a priority list. Translated for a typical mid-market company, start here:</p>

                <ul>
                    <li><strong>Identity:</strong> sign-ins, MFA changes, new admin accounts, and role changes in Microsoft Entra ID, Google Workspace, or Active Directory.</li>
                    <li><strong>Email and files:</strong> the Microsoft 365 or Google Workspace audit log, including mailbox access.</li>
                    <li><strong>The network edge:</strong> firewalls, VPNs, and any remote-access tool.</li>
                    <li><strong>Critical systems and data:</strong> your ERP, finance system, and file servers holding customer data.</li>
                    <li><strong>Admin workstations and your security tools:</strong> the endpoint protection console and anything your IT provider uses to manage machines.</li>
                </ul>

                <p>Lower on the list come user computers, DNS, web proxies, and older systems. Collect them when you can, but don’t let them delay the top five.</p>

                <h2>Step 3: Check what is actually turned on</h2>

                <p>Don’t assume. In Microsoft 365, the <a href="https://learn.microsoft.com/en-us/purview/audit-solutions-overview">Audit (Standard) tier</a> is on by default for eligible subscriptions and keeps records for 180 days (raised from 90 days for logs created on or after October 17, 2023). Microsoft’s <a href="https://learn.microsoft.com/en-us/purview/audit-log-retention-policies">retention policy documentation</a> says one-year default retention for Exchange, SharePoint, OneDrive, and Entra records applies only to users with E5-level licenses or certain add-ons. On firewalls and servers, check storage as well as settings: the ASD-led guidance warns that many systems overwrite old logs when their storage allocation runs out.</p>

                <h2>Step 4: Set retention by risk, not by default</h2>

                <p>The guidance is blunt: “Default log retention periods are often insufficient.” It notes that discovering an incident can take up to 18 months and that some malware sits on a network for 70 to 200 days before causing visible harm.</p>

                <p>For a reference point, look at the U.S. federal rule. <a href="https://www.whitehouse.gov/wp-content/uploads/2026/05/M-26-14-Ensuring-Effective-and-Efficient-Agency-Logging-and-Network-Visibility-to-Defend-Against-Evolving-Cyber-Threats.pdf">OMB Memorandum M-26-14 (May 22, 2026)</a> requires federal agencies to keep logs searchable for at least 6 months and retrievable for a year. It replaced a 2021 memo, and OMB said some of the old requirements, such as keeping vast quantities of log data without clear utility, proved “neither operationally feasible nor cost-effective for most agencies.” That rule doesn’t bind private companies, but “6 months searchable, 12 months retrievable” is a sensible floor for your most important logs. Then check whether your regulators, customer contracts, or cyber insurer require more.</p>

                <h2>Step 5: Centralize it and protect it</h2>

                <p>Send your priority logs to one place, whether that’s a security information and event management (SIEM) tool, a managed detection provider, or cloud storage your IT team controls. Restrict who can delete or change them, so an intruder with stolen admin rights can’t cover their tracks. Sync every system’s clock to the same trusted time source; the guidance prefers Coordinated Universal Time (UTC) so timestamps line up across systems during an investigation.</p>

                <h2>Step 6: Name the person who looks</h2>

                <p>State’s alert worked because someone wrote a rule and someone investigated it, even though that alert had produced false alarms before. You don’t need a 24/7 operations center to apply that. Pick five to ten alerts that matter (a new global admin, MFA removed from an executive, mail forwarding to an outside address, a sign-in from an unexpected country) and give each one an owner and a response time.</p>

                <h2>Step 7: Test it before you need it</h2>

                <p>At your next incident response tabletop, ask three questions and time the answers. Who signed in to the CFO’s mailbox last Tuesday? What did our firewall see from that IP address? Can we prove nobody deleted those records? If the answer is “we’d have to call the vendor,” you’ve found your gap.</p>

                <h2>The bottom line</h2>

                <p>Logging isn’t glamorous, and buying a tool won’t finish the job. The work is deciding what matters, paying for the right retention, and making sure someone reads the results. Yellow Coop’s CISO work includes a written incident response plan with a leadership tabletop exercise and a control gap list for cyber insurance applications, and a fractional engagement can own the security program outright. <a href="/contact/">Let’s talk</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/resources-tools/resources/best-practices-event-logging-and-threat-detection">Best Practices for Event Logging and Threat Detection</a> — ASD’s ACSC, CISA, FBI, NSA et al., August 21, 2024</li>
                    <li><a href="https://www.cisa.gov/sites/default/files/2024-03/CSRB%20Review%20of%20the%20Summer%202023%20MEO%20Intrusion%20Final_508c.pdf">Review of the Summer 2023 Microsoft Exchange Online Intrusion</a> — Cyber Safety Review Board, March 20, 2024</li>
                    <li><a href="https://www.microsoft.com/en-us/security/blog/2023/07/19/expanding-cloud-logging-to-give-customers-deeper-security-visibility/">Expanding cloud logging to give customers deeper security visibility</a> — Vasu Jakkal (CVP, Microsoft Security), Microsoft Security Blog, July 19, 2023</li>
                    <li><a href="https://www.whitehouse.gov/wp-content/uploads/2026/05/M-26-14-Ensuring-Effective-and-Efficient-Agency-Logging-and-Network-Visibility-to-Defend-Against-Evolving-Cyber-Threats.pdf">OMB Memorandum M-26-14, Ensuring Effective and Efficient Agency Logging and Network Visibility</a> — OMB, May 22, 2026</li>
                    <li><a href="https://learn.microsoft.com/en-us/purview/audit-solutions-overview">Learn about auditing solutions in Microsoft Purview</a> — Microsoft Learn; accessed October 25, 2026</li>
                    <li><a href="https://learn.microsoft.com/en-us/purview/audit-log-retention-policies">Manage audit log retention policies</a> — Microsoft Learn; accessed October 25, 2026</li>
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
