<?php
$title = 'Domain and DNS Ownership: A Hygiene Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Domain and DNS Ownership: A Hygiene Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Who owns your domain? A checklist to lock your registrar account, make renewal someone\'s job, and clean up risky DNS records, using CISA, ICANN, and NIST.';
$meta_keywords = 'domain and DNS ownership, domain registrar security, DNS hijacking prevention, domain renewal, dangling DNS records';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/domain-dns-ownership-hygiene-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Domain and DNS Ownership: A Hygiene Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Domain and DNS Ownership: A Hygiene Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-30 · By the Yellow Coop Team</p>

                <p>Your website and your email both hang off one thing most companies treat like a parking permit: the domain name. The takeaway up front: <strong>know exactly who owns your domain, lock it, put strong login protection on every account that can change it, and review its DNS records on a schedule.</strong> It’s an afternoon of work that protects the address your business lives at.</p>

                <h2>Why a boring registrar account deserves attention</h2>

                <p>A few plain definitions first:</p>

                <ul>
                    <li><strong>Registrar:</strong> the company you pay to hold your domain (example.com).</li>
                    <li><strong>DNS (Domain Name System):</strong> the internet’s address book. DNS records tell the world where your website lives and which servers take your email.</li>
                    <li><strong>Registrar lock:</strong> a status setting that blocks transfers or changes to your domain until someone deliberately unlocks it.</li>
                </ul>

                <p>In January 2019, CISA issued Emergency Directive 19-01 after tracking a campaign of DNS infrastructure tampering that hit multiple federal agency domains. CISA described the pattern: attackers compromised credentials for an account that could change DNS records, altered records such as website (A), mail (MX), and name server (NS) entries to point at infrastructure they controlled, and then obtained valid encryption certificates for the victim’s domain. That let them decrypt redirected traffic without users seeing a browser warning.</p>

                <p>The directive applied to federal agencies, and CISA has since closed it, saying its purposes were met. Its four required actions still make a good checklist: audit DNS records, change passwords on DNS accounts, add multi-factor authentication (MFA), and monitor certificate logs.</p>

                <h2>The checklist</h2>

                <h3>1. Find out who actually owns the domain</h3>

                <p>ICANN’s Security and Stability Advisory Committee (SSAC), in its registrant guide SAC 044 (November 5, 2010), recommends registering domains in the name of the business and using role-based contacts, such as a “domain administrator” address, instead of one person’s name or inbox. The point is that responsibility can pass from one employee to a successor “without the threat of an employee claiming ownership of the domain registration.”</p>

                <p>If your domain sits in a former marketing manager’s personal account, or with the web agency you fired in 2019, fix that first.</p>

                <h3>2. Lock the login and the domain</h3>

                <p>CISA’s directive required MFA on every account that can change DNS records, including registrar accounts, and recommended phishing-resistant options over text-message codes. If your registrar doesn’t offer MFA, CISA’s FAQ says to move the domain to one that does.</p>

                <p>SAC 044 encourages registrants to make sure the transfer lock (clientTransferProhibited) and update lock (clientUpdateProhibited) are set. It also suggests considering a registry lock, an extra layer applied at the registry level, as a complement for your most important domains.</p>

                <h3>3. Make renewal someone’s job</h3>

                <p>Losing a domain to an expired credit card is the least glamorous outage there is. SAC 044 notes that a lapsed registration can be picked up by another party and may force “a potentially expensive and time-consuming dispute resolution process” to get it back.</p>

                <p>For generic top-level domains like .com, ICANN’s Expired Registration Recovery Policy (updated February 21, 2024) requires registrars to send at least two reminders, roughly one month and one week before expiration, plus one more within five days after. Most gTLD registries (sponsored ones excepted) must also offer a 30-day Redemption Grace Period after deletion. Country-code domains can follow different rules, so check yours.</p>

                <p>Reminders only help if a human reads them. The policy’s suggested best practices tell registrars to advise a secondary email contact that isn’t on the domain itself, since an expired domain can take its own email down with it. Turn on auto-renew, put the date on the finance calendar, and keep the card on file current.</p>

                <h3>4. Clean up dangling DNS records</h3>

                <p>NIST SP 800-81r3, the <em>Secure Domain Name System (DNS) Deployment Guide</em> (final March 2026), warns about two leftovers:</p>

                <ul>
                    <li><strong>Dangling CNAME:</strong> a record pointing a subdomain (say, promo.example.com) at an outside service or domain you no longer control. NIST says attackers can register the abandoned target and make your subdomain resolve to their infrastructure.</li>
                    <li><strong>Lame delegation:</strong> a subdomain still handed off to a DNS hosting provider after the contract lapses. NIST says this “can result in domain hijacking.”</li>
                </ul>

                <p>NIST’s fix: review records regularly, delete CNAMEs you no longer need, and when you retire a service, remove the delegation as well as the zone data.</p>

                <h3>5. Watch for certificates you didn’t order</h3>

                <p>Certificate Transparency (CT) logs are public records of certificates issued for domains. CISA’s directive required agencies to monitor them for certificates they didn’t request; its FAQ notes free and paid monitoring services exist. An unexpected certificate for your domain is a smoke alarm worth hearing.</p>

                <h3>6. Add domains to offboarding</h3>

                <p>SAC 044 recommends that employee termination and transfer processes check whether the person has domain registration access, the same way you’d check bank access. When people with access change roles, issue new credentials and revoke the old ones.</p>

                <h2>A quarterly 30-minute review</h2>

                <p>Once a quarter, confirm the registrant name, contacts, expiration dates, locks, and MFA for every domain; read the DNS record list and ask “what is this for?” about anything unfamiliar; and check CT alerts and registrar change notices.</p>

                <h2>Conclusion</h2>

                <p>Your domain is a business asset nobody tracks until it breaks. Own it in the company’s name, lock it down, make renewal a named job, and prune old DNS records before someone else adopts them.</p>

                <p>If you’d like help, Yellow Coop’s <strong>Operate</strong> work includes an inventory of systems, licenses, and contracts with owners and renewal dates, and our <strong>Secure</strong> work covers the security questions customers and insurers ask. You can get it as Virtual advisory hours or as a Fractional engagement of 1 to 4 days a week. <strong>Book a 20-minute call</strong> to talk it through.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/news-events/directives/ed-19-01-mitigate-dns-infrastructure-tampering">Emergency Directive 19-01: Mitigate DNS Infrastructure Tampering</a> — CISA, January 22, 2019 (closed; closure note dated January 8, 2026)</li>
                    <li><a href="https://www.icann.org/en/system/files/files/sac-044-en.pdf">SAC 044: A Registrant’s Guide to Protecting Domain Name Registration Accounts</a> — ICANN SSAC, November 5, 2010</li>
                    <li><a href="https://www.icann.org/en/contracted-parties/consensus-policies/expired-registration-recovery-policy/expired-registration-recovery-policy-21-02-2024-en">Expired Registration Recovery Policy</a> — ICANN, updated February 21, 2024</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/81/r3/final">NIST SP 800-81r3, Secure Domain Name System (DNS) Deployment Guide</a> — NIST, March 2026</li>
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
