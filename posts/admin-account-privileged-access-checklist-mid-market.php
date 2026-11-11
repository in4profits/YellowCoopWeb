<?php
$title = 'Who Holds the Keys? An Admin Account Cleanup Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Admin Account Cleanup Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Mixing admin and everyday logins is one of NSA and CISA\'s top 10 misconfigurations. An 8-step checklist to lock down your admin accounts.';
$meta_keywords = 'admin account security, privileged access management, least privilege access, break glass account, Microsoft 365 Global Administrator, local admin password';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/admin-account-privileged-access-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="A single yellow key hangs from one hook on a black key rack against a dark textured wall"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Who Holds the Keys? An Admin Account Cleanup Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-11-11 · By the Yellow Coop Team</p>

                <p><strong>The takeaway:</strong> Count your admins, give each one a separate admin login, and protect those logins harder than anything else you own. The NSA and CISA list "improper separation of user/administrator privilege" among the ten most common misconfigurations their assessment teams find, and most of the fix costs attention, not money.</p>

                <h2>Why admin accounts are the whole ballgame</h2>

                <p>An admin account (also called a privileged account) is any login that can change settings, create users, reset passwords, or read everyone's data. Attackers prize them because one stolen admin login opens nearly every door.</p>

                <p>In a joint advisory published October 5, 2023, the <a href="https://www.cisa.gov/news-events/cybersecurity-advisories/aa23-278a">NSA and CISA</a> describe an assessment team that phished an employee whose everyday account had admin rights and "compromised a domain in under a business day." The same advisory warns about "privilege creep": as companies grow and people change roles, they pile up access they no longer need.</p>

                <p><a href="https://www.uber.com/newsroom/security-update/">Uber's own incident update</a> (September 19, 2022) shows the same pattern from the victim's side. An attacker kept triggering MFA approval prompts on a contractor's account until the contractor accepted one, then accessed other employee accounts "which ultimately gave the attacker elevated permissions" to tools including G-Suite and Slack.</p>

                <h2>The admin account checklist</h2>

                <h3>1. Count who has admin rights, everywhere</h3>

                <p>Pull the admin list from every system that runs the business: Microsoft 365 or Google Workspace, accounting, CRM, payroll, the website, the domain registrar, the firewall, and the backup console. Write down the number and the date.</p>

                <p>Two benchmarks worth comparing against. <a href="https://learn.microsoft.com/en-us/entra/identity/role-based-access-control/best-practices">Microsoft recommends</a> assigning the Global Administrator role (the master key to a Microsoft 365 tenant) to fewer than five people and keeping privileged role assignments under ten. <a href="https://knowledge.workspace.google.com/admin/users/security-best-practices-for-administrator-accounts">Google recommends</a> more than one super admin, each managed by a separate person, so losing one account doesn't lock you out.</p>

                <h3>2. Downgrade everyone to the smallest role that does the job</h3>

                <p>Least privilege means people get exactly the access their job needs and nothing more. Microsoft frames it as three dials: which permissions, over what scope, for how long. Most "I need admin" requests turn out to be "I need to reset passwords" or "I need to manage billing," and both Microsoft 365 and Google Workspace have narrower built-in roles for those.</p>

                <h3>3. Separate the admin login from the everyday login</h3>

                <p>Google is blunt about this: give each super admin two accounts, one for admin tasks and one for daily work, and sign out of the admin account when the task is done. NSA and CISA likewise say to restrict privileged accounts from general tasks such as email and web browsing. The reason is simple. Email and browsing are where phishing happens. If the account that reads email can't change the company's settings, a successful phish costs you one inbox, not the whole company.</p>

                <h3>4. Put the strongest MFA on admin accounts first</h3>

                <p>Google calls security keys "the most secure form" of two-step verification and says they help resist phishing. NSA and CISA call for phishing-resistant MFA, meaning security keys or passkeys that can't be tricked into approving a fake login. The Uber case is the argument in one sentence: a push prompt can be worn down, and a hardware key can't be talked into anything.</p>

                <h3>5. Make admin rights temporary where you can</h3>

                <p>"Just-in-time" access means someone requests admin rights for a task, gets them for a few hours, and loses them automatically. NSA and CISA recommend reducing permanent privileged assignments, and Microsoft offers this through Privileged Identity Management (PIM). Mind the license catch: Microsoft's documentation says PIM requires Entra ID P2 or Entra ID Governance. If that isn't in the budget, the quarterly review in step 8 is your fallback.</p>

                <h3>6. Set up two break-glass accounts, and actually test them</h3>

                <p>A break-glass account is an emergency admin login for the day normal sign-in fails: an identity outage, lost phones, or the only admin quitting. <a href="https://learn.microsoft.com/en-us/entra/identity/role-based-access-control/security-emergency-access">Microsoft's guidance</a> calls for at least two, cloud-only, not tied to any one person, protected with a passkey or certificate, stored securely, alerting on every use, and validated at least every 90 days. An untested break-glass account is a comforting story, not a plan.</p>

                <h3>7. Stop reusing local admin passwords on laptops and servers</h3>

                <p>Many companies set the same local administrator password on every PC. <a href="https://learn.microsoft.com/en-us/windows-server/identity/laps/laps-overview">Microsoft notes</a> that shared local admin passwords are something "bad actors can exploit to move laterally across your environment." Windows LAPS (Local Administrator Password Solution) has been built into supported Windows versions since the April 11, 2023 update, rotates a unique password per device, and costs nothing extra. While you're there, look for service accounts (logins that software uses to talk to other software) with more rights than they need, and for passwords sitting in spreadsheets on shared drives. NSA and CISA flag both as common weak spots.</p>

                <h3>8. Review every quarter and at every departure</h3>

                <p>Microsoft recommends recurring access reviews because people move teams and "amass unnecessary access over time." Add "remove admin roles" to your offboarding checklist and rerun step 1 every quarter. Ten minutes per system beats explaining to your insurer why a former contractor still had the keys.</p>

                <h2>What good looks like</h2>

                <ul>
                    <li>A short, named list of admins for each system, reviewed quarterly</li>
                    <li>No shared admin logins, so the audit log shows who did what (Google's point exactly)</li>
                    <li>Phishing-resistant MFA on every admin account</li>
                    <li>Two tested break-glass accounts</li>
                    <li>A unique local admin password on every device</li>
                </ul>

                <h2>The bottom line</h2>

                <p>Admin sprawl is quiet right up until it's catastrophic. The fixes above are mostly configuration and habit, and the free ones (separate logins, role downgrades, Windows LAPS) can start this week. If you'd rather not run it alone, Yellow Coop's fractional CISO work, the Secure side of <a href="https://yellowcoop.com/what-we-do/">what we do</a>, includes cyber insurance application support with a control gap list, vendor risk reviews, and incident response planning. <a href="https://yellowcoop.com/contact/">Let's talk</a>.</p>
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
