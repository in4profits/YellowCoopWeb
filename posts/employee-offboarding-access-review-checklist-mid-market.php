<?php
$title = 'Employee Offboarding and Access Reviews: An IT Security Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Employee Offboarding and Access Review Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Disable every account when someone leaves, end live sessions, cover contractors, review access quarterly. An offboarding checklist using CISA and NIST.';
$meta_keywords = 'employee offboarding checklist, IT offboarding process, user access review, revoke access former employee, least privilege access, CISA performance goals';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/employee-offboarding-access-review-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Employee Offboarding and Access Reviews: An IT Security Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Employee Offboarding and Access Reviews: An IT Security Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-17 · By the Yellow Coop Team</p>

                <p><strong>The takeaway:</strong> Turning off someone’s email isn’t offboarding. When a person leaves, disable every account that day, end their live sessions, collect devices and badges, hand their files to a named owner, and change any shared password they knew. Then review who has access to what every quarter. The Cybersecurity and Infrastructure Security Agency’s (CISA) Cross-Sector Cybersecurity Performance Goals 2.0, released December 11, 2025 and aimed at businesses “of all sizes,” call for the core of this: a defined, enforced offboarding process that revokes all access, plus quarterly access reviews (<a href="https://www.cisa.gov/cybersecurity-performance-goals-2-0-cpg-2-0">CISA CPG 2.0</a>; <a href="https://www.cisa.gov/news-events/news/cisa-unveils-enhanced-cross-sector-cybersecurity-performance-goals">release, Dec 11, 2025</a>).</p>

                <h2>What it costs when access outlives the job</h2>
                <p>Two federal cases show both sides of the risk.</p>
                <ul>
                    <li><strong>Access that stayed open.</strong> A man who had worked for Cisco resigned around April 2018. On September 24, 2018, he got into Cisco’s cloud infrastructure on Amazon Web Services without permission and deployed code that deleted 456 virtual machines for WebEx Teams. More than 16,000 accounts were shut down for up to two weeks. Cisco spent about $1.4 million in employee time on repairs and refunded more than $1 million to customers, according to the U.S. Attorney’s Office, which announced his two-year sentence (<a href="https://www.justice.gov/usao-ndca/pr/san-jose-man-sentenced-two-years-imprisonment-damaging-cisco-s-network">DOJ, Dec 9, 2020</a>).</li>
                    <li><strong>Sabotage planted before the exit.</strong> After a 2018 realignment cut his responsibilities and system access, a software developer at an Ohio-based company planted code, including a “kill switch” that would lock out all users if his Active Directory account was disabled. It fired when he was placed on leave on September 9, 2019, hitting thousands of users (<a href="https://www.justice.gov/opa/pr/chinese-national-who-deployed-kill-switch-code-employers-network-sentenced-four-years-prison">DOJ, Aug 21, 2025</a>). He was sentenced to four years.</li>
                </ul>
                <p>The first case calls for same-day revocation everywhere, not just in the main directory. The second shows why technical staff who leave, or lose a role, need a review of what they built, not just a flipped switch.</p>

                <h2>Step 1: Map access before anyone resigns</h2>
                <p>You can’t revoke what you don’t know about. For each role, list single sign-on (one login that opens many apps) and email; apps people log into with their own password; admin consoles for cloud, firewall, website, domain, payroll, and bank; shared passwords; VPN and remote tools; phones and MFA tokens; and badges and keys. Apps someone signed up for with a company card are the usual blind spot.</p>

                <h2>Step 2: Make HR’s notice the trigger</h2>
                <p>NIST’s control catalog, SP 800-53 Rev. 5, suggests automated ways to notify the right people and disable access at termination, because in larger organizations not everyone who needs to know hears in time (control PS-4(2)) (<a href="https://csrc.nist.gov/pubs/sp/800/53/r5/upd1/final">NIST SP 800-53 Rev. 5</a>). The low-tech version: one offboarding ticket, opened by HR, with IT, finance, and the manager each signing off. Microsoft’s guidance for its Entra ID directory recommends automated deprovisioning (removing a user’s accounts in connected apps) plus a defined process for apps that can’t be automated (<a href="https://learn.microsoft.com/en-us/entra/identity/users/users-revoke-access">Microsoft Learn</a>).</p>

                <h2>Step 3: Run the day-of checklist</h2>
                <p>NIST’s PS-4 says that on termination you disable system access within a set time, revoke credentials, hold an exit interview, retrieve property, and keep access to information the person controlled. As a list:</p>
                <ol>
                    <li><strong>Disable accounts</strong> in your directory and every app on the access map.</li>
                    <li><strong>End live sessions.</strong> Disabling a login doesn’t end every session. Microsoft notes that access tokens from Entra ID last one hour by default, and that Entra can’t directly revoke session tokens issued by other apps. Use “Revoke sessions,” then sign the person out of apps that manage their own sessions.</li>
                    <li><strong>Change shared passwords</strong> and recovery codes they knew, and remove their phone from MFA on shared accounts.</li>
                    <li><strong>Collect laptops, phones, badges, and keys,</strong> then wipe or reissue them.</li>
                    <li><strong>Hand off data.</strong> Move the mailbox, files, and recurring jobs to a named owner before deleting anything.</li>
                    <li><strong>Cover the paperwork.</strong> NIST pairs exit interviews with reminders about nondisclosure agreements. Let your employment counsel decide what you say.</li>
                </ol>
                <p>NIST adds that timing is essential when someone is terminated for cause, and that organizations sometimes disable accounts before the person is told.</p>

                <h2>Step 4: Include contractors, vendors, and role changes</h2>
                <p>CISA’s offboarding goal (3.D) covers contractors and vendors, not just employees. NIST’s PS-5 adds transfers: when someone changes roles, confirm what they still need and remove the rest. Without that, a ten-year employee can end up with keys to every department they ever worked in.</p>

                <h2>Step 5: Review access every quarter</h2>
                <p>CISA’s least-privilege goal (3.H) recommends quarterly reviews of access permissions and role assignments. Goal 3.D adds disabling accounts inactive for a set period, such as 30 days, ideally automatically. Keep it simple: export users and admins from your ten most important systems, have each manager confirm their people, and remove anything nobody claims.</p>

                <h2>Step 6: Give admins a closer look</h2>
                <p>CISA’s goal 3.G says administrators should use separate accounts for admin work, and privileges should be re-evaluated regularly. When someone with admin rights leaves or loses a role, check scheduled tasks, scripts, and service accounts tied to their name.</p>

                <h2>Two numbers to track</h2>
                <p>Hours from HR notice to every account disabled, and orphaned accounts found per quarterly review. Both should shrink.</p>

                <h2>Where outside help fits</h2>
                <p>Offboarding falls between HR, IT, and finance, so steps get skipped. A fractional CTO or CISO can build the access map, set up the checklist, and run the first quarterly review. Yellow Coop does this under the Secure pillar on <a href="/what-we-do/#secure">what we do</a>, in fractional engagements of 1 to 4 days a week (<a href="/how-we-engage/">how we engage</a>). If you’re not sure who still has keys, <a href="/contact/">book a 20-minute call</a>.</p>
                <p>Internal links: <a href="/what-we-do/">What We Do</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/track-record/">Track Record</a>, <a href="/contact/">Contact</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/cybersecurity-performance-goals-2-0-cpg-2-0">Cybersecurity Performance Goals 2.0 (CPG 2.0)</a>, goals 3.D, 3.G and 3.H — CISA</li>
                    <li><a href="https://www.cisa.gov/news-events/news/cisa-unveils-enhanced-cross-sector-cybersecurity-performance-goals">CISA Unveils Enhanced Cross-Sector Cybersecurity Performance Goals</a> — CISA, Dec 11, 2025</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/53/r5/upd1/final">Security and Privacy Controls for Information Systems and Organizations (NIST SP 800-53 Rev. 5)</a>, controls PS-4 and PS-5 — NIST Joint Task Force, Sep 2020 (updates as of Dec 10, 2020)</li>
                    <li><a href="https://www.justice.gov/usao-ndca/pr/san-jose-man-sentenced-two-years-imprisonment-damaging-cisco-s-network">San Jose Man Sentenced To Two Years Imprisonment For Damaging Cisco’s Network</a> — U.S. Attorney’s Office, Northern District of California, Dec 9, 2020</li>
                    <li><a href="https://www.justice.gov/opa/pr/chinese-national-who-deployed-kill-switch-code-employers-network-sentenced-four-years-prison">Chinese National Who Deployed “Kill Switch” Code on Employer’s Network Sentenced to Four Years in Prison</a> — U.S. Department of Justice, Aug 21, 2025</li>
                    <li><a href="https://learn.microsoft.com/en-us/entra/identity/users/users-revoke-access">Revoke user access in an emergency in Microsoft Entra ID</a> — Microsoft Learn (accessed Oct 17, 2026)</li>
                    <li><a href="/what-we-do/">What we do</a> and <a href="/how-we-engage/">How we engage</a> — Yellow Coop</li>
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
