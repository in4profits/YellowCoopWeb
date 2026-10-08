<?php
$title = 'The FBI Says 86,000+ Fortinet Firewalls Were Opened With Stolen Passwords — Treat Your Network Edge Like a Login Page — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'FortiBleed compromised 86,644+ Fortinet devices with stolen passwords, not a new bug. Here\'s the edge-device checklist operators need this week.';
$meta_keywords = 'FortiBleed, Fortinet firewall security, credential stuffing, phishing-resistant MFA, VPN security for small business, fractional CTO cybersecurity';
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
                <img class="hero" src="/posts/images/fortibleed-fortinet-firewall-credential-security-checklist-hero.webp" alt="The FBI Says 86,000+ Fortinet Firewalls Were Opened With Stolen Passwords — Treat Your Network Edge Like a Login Page">
                <h1>The FBI Says 86,000+ Fortinet Firewalls Were Opened With Stolen Passwords — Treat Your Network Edge Like a Login Page</h1>
                <p class="meta">2026-10-08</p>

                <p>On October 6, 2026, the FBI and the U.S. Secret Service published a joint advisory warning that <strong>FortiBleed</strong>, a credential-theft campaign aimed at Fortinet FortiGate firewalls and VPN gateways, is still active. Citing security firm SOCRadar, the agencies say more than 86,644 devices across 194 countries have been compromised (<a href="https://www.ic3.gov/CSA/2026/261006.pdf">FBI and USSS advisory JCSA-20261006-01, October 6, 2026</a>).</p>
                <p>Quick definitions: a FortiGate is Fortinet’s firewall, the box that sits between your network and the internet. Many also run an <em>SSL VPN</em>, the login portal remote staff use to get inside.</p>
                <p><strong>The takeaway for operators:</strong> this isn’t an exotic zero-day. It’s passwords. Attackers walked in with reused or leaked credentials and, in some cases, changed the locks behind them. If your firewall or VPN has an internet-facing login without strong multi-factor authentication (MFA), it’s an identity system, and it needs to be managed like one.</p>

                <h2>What the attackers did</h2>
                <p>The operation came to light because the attackers accidentally left their own backend server exposed. According to the advisory, they:</p>
                <ul>
                    <li><strong>Scanned</strong> the internet for exposed FortiGate SSL VPN portals.</li>
                    <li><strong>Tried leaked logins</strong> from old Fortinet leak dumps and <em>infostealer logs</em> (passwords scraped by malware from infected computers). That meant <em>credential stuffing</em> (replaying leaked username and password pairs) and <em>password spraying</em> (trying a few common passwords across many accounts).</li>
                    <li><strong>Cracked more passwords</strong> by dumping password hashes from compromised devices and running them through a rented GPU cluster.</li>
                    <li><strong>Created new admin accounts</strong> to stay in, then moved deeper into networks by mapping Active Directory.</li>
                    <li><strong>Sold the access.</strong> Middlemen known as initial access brokers passed it to ransomware affiliates, including INC/Lynx and Payload.</li>
                </ul>
                <p>Then there’s the lockout. Attackers sometimes deleted or changed passwords on legitimate admin accounts, so victims “may find themselves locked out of their systems,” with fixes “beyond standard patching and password resets” (<a href="https://www.ic3.gov/CSA/2026/261006.pdf">FBI and USSS</a>).</p>

                <h2>“Not a new vulnerability” is the scary part</h2>
                <p>Fortinet said on June 19, 2026, that FortiBleed “is not a new Fortinet vulnerability.” It pointed to credentials reused from earlier incidents and brute-force attacks on devices with weak passwords and no MFA. Fortinet also noted the same actor reportedly breached other vendors’ devices the same way (<a href="https://www.fortinet.com/blog/psirt-blogs/analysis-of-reported-credential-compromise-of-fortigate-devices">Fortinet PSIRT blog, June 19, 2026</a>).</p>
                <p>So this week’s advisory isn’t news because the bug is new. It’s news because the campaign hasn’t stopped, months after it surfaced in June (<a href="https://www.infosecurity-magazine.com/news/fbi-secret-service-fortibleed/">Infosecurity Magazine, October 8, 2026</a>). The real scale may be bigger, too. Ensar Seker, chief information security officer at SOCRadar, told CyberScoop that his team later identified “more than 400,000 or 450,000 firewalls targeted by the wider operation” (<a href="https://cyberscoop.com/fortibleed-fortinet-vpn-ransomware-fbi-warning/">CyberScoop, October 6, 2026</a>).</p>
                <p>John Strand, owner of the security firm Black Hills Information Security, put it bluntly: “I’m terrified of the attacker who wants to quietly live inside that organization for as long as possible. This attack gives them exactly that kind of access” (<a href="https://www.infosecurity-magazine.com/news/fbi-secret-service-fortibleed/">Infosecurity Magazine</a>).</p>

                <h3>The edge-device checklist</h3>
                <p>Running Fortinet? Do this now. Running another brand? Do it anyway. The same playbook fits any internet-facing firewall or VPN. Steps 1 to 7 below come from the FBI and Secret Service advisory, with Fortinet’s guidance noted where it adds detail.</p>
                <ol>
                    <li><strong>Get admin off the internet.</strong> The advisory ranks the options: trusted hosts (good), a local-in policy (better), or no internet administration at all (best). In plain words, either only specific addresses can reach the admin page, or nobody on the internet can.</li>
                    <li><strong>Kill sessions, then reset everything.</strong> End all active admin and VPN sessions, then reset every VPN and admin password, starting with internet-facing systems.</li>
                    <li><strong>Turn on phishing-resistant MFA.</strong> This means methods like hardware security keys or passkeys, which can’t be tricked into handing a code to a fake login page. Require it on every remote-access and admin account.</li>
                    <li><strong>Audit the accounts you didn’t create.</strong> Compare your configuration with a known-good copy. Account names the FBI saw attackers create include <code>fortiAdmin</code>, <code>forticloud-sync</code>, <code>itadmin</code>, and <code>support_fortinet</code>. They’re designed to look boring.</li>
                    <li><strong>Check API keys.</strong> REST API keys let software manage the firewall automatically. Unknown ones are a back door. Remove them and refresh the legitimate ones.</li>
                    <li><strong>Upgrade how passwords are stored.</strong> The advisory blames legacy SHA-256 password storage for making cracking easier. Move admin credentials to PBKDF2, a deliberately slow hashing method that makes cracking far more expensive. Fortinet recommends upgrading to FortiOS 7.4, 7.6, or 8.0, which support it.</li>
                    <li><strong>Read the logs, including the domain controller.</strong> Look for unexpected admin logins, new VPN users, and signs of attackers moving between systems in your firewall, VPN, authentication, and domain controller logs. In the U.S., the agencies ask victims to report compromises to the FBI’s Internet Crime Complaint Center (IC3) or a local FBI or Secret Service field office.</li>
                </ol>

                <h2>The question nobody wants to ask</h2>
                <p>In plenty of growing companies, the firewall was set up years ago by a managed service provider or a long-gone IT lead, and nobody has logged in since. So ask three questions: Who has admin access? Is MFA on? When were the passwords last changed? If the answer is a shrug, you’ve found your project for the week. If nobody clearly owns the answer, our <a href="/cio-vs-cto-vs-ciso/">CIO vs. CTO vs. CISO breakdown</a> can help you decide who should.</p>

                <h2>Soft next step</h2>
                <p>FortiBleed is a reminder that the riskiest door into your company may be a login page you forgot you had. Patching matters, but it doesn’t fix stolen passwords. Lock down admin access, enforce strong MFA, and audit your accounts now, not after the lockout.</p>
                <p><a href="/what-we-do/">Yellow Coop</a> helps owners and operators review firewall, VPN, and identity setups — with fractional CTO ownership of security priorities alongside your IT provider. See the security and infrastructure work in our <a href="/track-record/">track record</a>, or start at <a href="/contact/">contact</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.ic3.gov/CSA/2026/261006.pdf">FBI and U.S. Secret Service: Joint Cybersecurity Advisory JCSA-20261006-01, FortiBleed Operations Continue Targeting Exposed Systems Leading to Reports of Lockouts</a> — Oct 6, 2026</li>
                    <li><a href="https://www.fortinet.com/blog/psirt-blogs/analysis-of-reported-credential-compromise-of-fortigate-devices">Carl Windsor: Analysis of Reported Credential Compromise of FortiGate Devices</a> — Fortinet PSIRT Blog, Jun 19, 2026</li>
                    <li><a href="https://cyberscoop.com/fortibleed-fortinet-vpn-ransomware-fbi-warning/">Tim Starks: Alert: FortiBleed remains active campaign, can lock out users or lead to ransomware attacks</a> — CyberScoop, Oct 6, 2026</li>
                    <li><a href="https://www.infosecurity-magazine.com/news/fbi-secret-service-fortibleed/">Phil Muncaster: FBI and Secret Service Warn of FortiBleed Lockout Threat</a> — Infosecurity Magazine, Oct 8, 2026</li>
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
            </div>
            &copy; <?php echo (int) $year_start; ?>–<?php echo (int) $year_end; ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
