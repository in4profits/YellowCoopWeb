<?php
$title = 'How to Write an Incident Response Plan: A Practical Guide for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'How to Write an Incident Response Plan | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Write an incident response plan your team can use: roles, offline contacts, decision rights, and notification steps, built on NIST and CISA guidance.';
$meta_keywords = 'incident response plan, how to write an incident response plan, NIST SP 800-61, incident response roles, data breach notification';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/incident-response-plan-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="How to Write an Incident Response Plan: A Practical Guide for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>How to Write an Incident Response Plan: A Practical Guide for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-29 · By the Yellow Coop Team</p>

                <p>An incident response plan is mostly names, phone numbers, and decisions you made in advance. If yours lives only on the network it is supposed to protect, or it works only when one IT person picks up the phone, you don’t have a plan yet. You have a hope with a file name.</p>

                <p>Here’s how owners and operators can write one that holds up on a bad day, using free guidance from NIST and CISA.</p>

                <h2>What an incident response plan is (and isn’t)</h2>

                <p>CISA’s <a href="https://www.cisa.gov/resources-tools/resources/incident-response-plan-irp-basics">Incident Response Plan (IRP) Basics</a> fact sheet (published January 31, 2024) describes it as a written document, formally approved by senior leadership, that guides you before, during, and after a confirmed or suspected security incident. It clarifies roles and includes a list of the key people you’ll need in a crisis.</p>

                <p>It is not a 60-page binder of technical steps. Even NIST stepped away from that. <a href="https://csrc.nist.gov/pubs/sp/800/61/r3/final">NIST SP 800-61 Revision 3</a>, finalized April 3, 2025, replaced the 2012 Revision 2 handling guide and says the details of how to perform response “change so often” that a single static publication can no longer capture them. Instead it organizes incident response around the six functions of the NIST Cybersecurity Framework 2.0: Govern, Identify, and Protect as preparation, and Detect, Respond, and Recover as the response itself (<a href="https://csrc.nist.gov/projects/incident-response">NIST Incident Response project</a>).</p>

                <p>Translation: your plan decides who leads, who does the work, and who talks. Technical runbooks can hang off it later.</p>

                <h2>The five sections every plan needs</h2>

                <h3>1. Roles, each with a backup</h3>

                <p>CISA’s fact sheet names three core roles during an incident: an Incident Manager, a Tech Manager, and a Communications Manager. In a mid-market company that might be the COO or general manager, your internal IT lead or managed service provider, and whoever already speaks to customers.</p>

                <p>Give every role a named backup. Add two more seats: your attorney, and the person who can approve spending money fast (an outside forensics firm doesn’t start on a handshake).</p>

                <h3>2. A contact list that works when your systems don’t</h3>

                <p>CISA’s advice is blunt: print the plan and the contact list and hand a copy to everyone with a role, because email, chat, and document storage may be down during an incident. Your list should include:</p>

                <ul>
                    <li>Your outside incident response firm (CISA recommends choosing one in advance)</li>
                    <li>Your attorney</li>
                    <li>Your cyber insurer’s claims line</li>
                    <li>Your managed service provider and key software vendors’ support lines</li>
                    <li>Your bank’s fraud line</li>
                    <li>Your local FBI field office, the FBI’s <a href="https://www.ic3.gov">Internet Crime Complaint Center</a>, and <a href="https://www.cisa.gov/report">CISA’s reporting page</a></li>
                </ul>

                <p>Keep a printed copy somewhere physical and a copy on the core team’s personal phones.</p>

                <h3>3. Severity levels and a clear trigger</h3>

                <p>Decide what counts as an incident and who is allowed to declare one. A simple three-level scale works for most companies. Here is an example, not a standard:</p>

                <ul>
                    <li><strong>Level 1:</strong> a single phishing click with no sign of account access</li>
                    <li><strong>Level 2:</strong> a confirmed compromised account or malware on one machine</li>
                    <li><strong>Level 3:</strong> ransomware, data theft, payment fraud, or an outage customers notice</li>
                </ul>

                <p>For each level, write down who gets called and what happens next. Ambiguity is what turns a two-hour problem into a two-week one.</p>

                <h3>4. Decisions you make now, not at 2 a.m.</h3>

                <p>Settle these in writing while everyone is calm:</p>

                <ul>
                    <li>Who can authorize disconnecting systems or taking a site offline?</li>
                    <li>Who calls the insurer, and when? Read your policy for notice requirements and any rules about which vendors you may hire.</li>
                    <li>Who engages the outside firm and the attorney? CISA notes that attorneys often have preferences on how to engage incident response vendors and law enforcement, so have counsel review the plan.</li>
                    <li>What is your holding statement? CISA recommends preparing press responses in advance, so that a reporter asking about stolen files gets a calm answer instead of a “no comment” that sounds like a yes.</li>
                </ul>

                <h3>5. A notification map</h3>

                <p>Every U.S. state, plus D.C., Guam, Puerto Rico, and the U.S. Virgin Islands, has a security breach notification law, and they differ on what counts as personal information and how fast you must notify (<a href="https://www.ncsl.org/technology-and-communication/security-breach-notification-laws">NCSL</a>). Public companies have another clock: an <a href="https://www.sec.gov/newsroom/press-releases/2023-139">SEC Form 8-K Item 1.05</a> disclosure is generally due four business days after the company determines an incident is material (rule adopted July 26, 2023).</p>

                <p>Add the notice windows in your own customer and partner contracts. Your plan doesn’t make the legal call; it makes sure counsel hears about the incident early enough to make it.</p>

                <h2>Keep it alive</h2>

                <p>CISA recommends reviewing the plan quarterly, rehearsing it with a tabletop exercise (a facilitated walk-through of a made-up incident), and holding a blameless retrospective after every real incident to update procedures. NIST’s Revision 3 builds the same loop in: lessons learned feed back into every function.</p>

                <p>Also update the plan whenever a named person leaves, you change managed service providers, or you add a major system.</p>

                <h2>The one-minute test</h2>

                <p>Ask your leadership team five questions:</p>

                <ol>
                    <li>Who is in charge if the IT lead is on a plane?</li>
                    <li>Where is the printed contact list?</li>
                    <li>Who can approve shutting off the internet connection?</li>
                    <li>What is the insurer’s claims number?</li>
                    <li>Who drafts the customer notice?</li>
                </ol>

                <p>If any answer takes more than a minute, start there.</p>

                <h2>The bottom line</h2>

                <p>A good incident response plan is short, printed, approved by leadership, and rehearsed. Most of the value comes from decisions made before anything goes wrong.</p>

                <p>A written incident response plan and a tabletop exercise with leadership are part of the Chief Information Security Officer work Yellow Coop offers. If you’d rather not start from a blank page, see <a href="/what-we-do/">what we do</a> and <a href="/how-we-engage/">how we engage</a>, or <a href="/contact/">get in touch</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/resources-tools/resources/incident-response-plan-irp-basics">Incident Response Plan (IRP) Basics</a> — CISA, January 31, 2024</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/61/r3/final">NIST SP 800-61 Rev. 3</a> — NIST, April 3, 2025</li>
                    <li><a href="https://csrc.nist.gov/projects/incident-response">NIST Incident Response project page</a> — NIST</li>
                    <li><a href="https://www.ncsl.org/technology-and-communication/security-breach-notification-laws">Security Breach Notification Laws</a> — NCSL</li>
                    <li><a href="https://www.sec.gov/newsroom/press-releases/2023-139">SEC press release 2023-139</a> — SEC, July 26, 2023</li>
                    <li><a href="https://www.ic3.gov">FBI Internet Crime Complaint Center (IC3)</a> — FBI</li>
                    <li><a href="https://www.cisa.gov/report">Report a cyber issue</a> — CISA</li>
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
