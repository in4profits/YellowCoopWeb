<?php
$title = 'SPF, DKIM, and DMARC Setup: An Email Authentication Playbook for Mid-Market Owners and Operators — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Set up SPF and DKIM, start DMARC at p=none, read the reports, then tighten in stages. An email authentication playbook built on RFC 9989, CISA, and NIST.';
$meta_keywords = 'SPF DKIM DMARC setup, DMARC p=none to p=reject, email authentication for business, prevent email spoofing, Gmail bulk sender requirements, business email compromise prevention';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/spf-dkim-dmarc-email-authentication-playbook-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="SPF, DKIM, and DMARC Setup: An Email Authentication Playbook for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>SPF, DKIM, and DMARC Setup: An Email Authentication Playbook for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-18</p>

                <p><strong>The takeaway:</strong> Unless you tell the world’s mail servers how to check, anyone can send email that claims to come from your domain. Three DNS records do the telling: SPF, DKIM, and DMARC. Set up the first two for every service that sends mail as you, publish DMARC in monitoring mode, read the reports for at least a month, then tighten the policy in stages. Jump straight to “reject” without reading reports, and the first email you block may be your own invoice.</p>

                <h2>The three records, in plain words</h2>
                <ul>
                    <li><strong>SPF (Sender Policy Framework):</strong> a public list, in your DNS, of the servers allowed to send mail for your domain.</li>
                    <li><strong>DKIM (DomainKeys Identified Mail):</strong> a digital signature on each message that receivers check against a public key in your DNS.</li>
                    <li><strong>DMARC (Domain-based Message Authentication, Reporting, and Conformance):</strong> a DNS record that says what receivers should do when a message fails, and where to send reports. A message passes only if SPF or DKIM passes <em>and</em> that domain matches (“aligns with”) the domain in the visible From: address (<a href="https://www.rfc-editor.org/info/rfc9989/">RFC 9989</a>).</li>
                </ul>
                <p>NIST’s <em>Trustworthy Email</em> guide recommends all three and says it “will also be useful for small or medium sized organizations” (<a href="https://csrc.nist.gov/pubs/sp/800/177/r1/final">NIST SP 800-177 Rev. 1, February 2019</a>).</p>

                <h2>Why owners and operators should care</h2>
                <p><strong>Fraud.</strong> Business email compromise (BEC), where fraudsters compromise email accounts or other communications to steer payments, drew 24,768 complaints and about $3.05 billion in reported losses to the FBI’s Internet Crime Complaint Center in 2025 (<a href="https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf">FBI IC3 2025 report</a>). Those are complaints filed with IC3, not every incident.</p>
                <p>Be clear about the limits. DMARC fights exact-domain spoofing only; the standard says it doesn’t address look-alike domains or fake display names (<a href="https://www.rfc-editor.org/info/rfc9989/">RFC 9989, sec. 2.2</a>). It also does nothing if a criminal logs into a real mailbox. That’s a job for MFA.</p>
                <p><strong>Deliverability.</strong> Since February 1, 2024, Gmail has required all senders to use SPF or DKIM. Bulk senders, roughly 5,000 or more messages a day to personal Gmail accounts, need SPF, DKIM, a DMARC record (p=none is acceptable), and alignment (<a href="https://support.google.com/a/answer/81126">Google</a>). Starting November 2025, Gmail began ramping up enforcement, including temporary and permanent rejections (<a href="https://support.google.com/a/answer/14229414">Google FAQ</a>). Yahoo has similar bulk-sender rules (<a href="https://senders.yahooinc.com/best-practices/">Yahoo Sender Hub</a>), and Outlook.com rejects noncompliant high-volume mail with error 550 5.7.515 (<a href="https://support.microsoft.com/en-us/outlook/fix-ndr-error-550-5-7-515-in-outlook-com">Microsoft Support</a>).</p>

                <h2>Step 1: List everyone who sends as you</h2>
                <p>Your email platform, marketing tool, CRM, billing system, help desk, payroll notifications, website forms, and the copier that emails scans. RFC 9989 notes that in all but the simplest setups, owners overlook a server or a third-party sender. Finding them is what monitoring mode is for.</p>

                <h2>Step 2: Clean up SPF and respect the 10-lookup limit</h2>
                <p>Publish one SPF record that covers your senders. SPF allows at most 10 terms that trigger DNS lookups, such as “include”; go over and SPF returns an error (<a href="https://www.rfc-editor.org/info/rfc7208/">RFC 7208, sec. 4.6.4</a>). Every SaaS tool that says “just add our include” spends one of the 10. RFC 9989 also warns that a hard-fail “-all” can get mail rejected before DMARC is ever checked.</p>

                <h2>Step 3: Turn on DKIM everywhere</h2>
                <p>Enable DKIM signing with your domain in every sending service. Google requires keys of at least 1024 bits for personal Gmail accounts and recommends 2048. DKIM carries the most weight: forwarding usually breaks SPF but leaves DKIM intact, so RFC 9989 says any domain publishing p=reject MUST sign with DKIM, not rely on SPF alone.</p>

                <h2>Step 4: Publish DMARC at p=none and read the reports</h2>
                <p>Start in monitoring mode with a record like <code>v=DMARC1; p=none; rua=mailto:dmarc@yourdomain.com</code>. The “rua” address collects aggregate reports from receivers showing who sent as your domain and whether it passed. The reports are XML, so use a parsing tool or service. Fix every legitimate sender that fails. RFC 9989 says getting confident can take many months, depending on how often you send.</p>

                <h2>Step 5: Tighten in stages</h2>
                <p>Move to p=quarantine (failures go to spam), then consider p=reject (receivers refuse them). RFC 9989 adds a test flag, t=y, that asks receivers to apply one level below your stated policy while you test. It takes over part of what the old pct= tag did.</p>
                <p><strong>Where the guidance differs.</strong> CISA’s Binding Operational Directive 18-01 (October 16, 2017) required federal agencies to reach p=reject within a year, calling reject “the strongest protection against spoofed email” (<a href="https://www.cisa.gov/news-events/directives/bod-18-01-enhance-email-and-web-security">CISA BOD 18-01</a>). RFC 9989, published May 2026, is more cautious: domains whose users might post to mailing lists SHOULD NOT publish p=reject, and any that do should run p=none for at least a month, then p=quarantine for as long, and warn users that mailing-list participation may be hindered.</p>
                <p>A practical middle path:</p>
                <ul>
                    <li><strong>Domains that never send mail</strong> (parked or defensive ones): head to p=reject after a p=none check of the reports, the sequence CISA set out for agencies.</li>
                    <li><strong>Your main domain:</strong> quarantine is a solid stop. Go to reject only when reports are clean, DKIM covers every sender, and you’ve weighed the mailing-list tradeoff.</li>
                </ul>

                <h2>Step 6: Keep it from rotting</h2>
                <p>Name an owner. Review reports monthly. Add “Does this send email as us?” to every new software purchase, and recheck everything when you change email platforms.</p>

                <h2>Where outside help fits</h2>
                <p>The records are small; the sender inventory and report reading are where projects stall. Email authentication often surfaces on the control gap list an insurer or big customer hands you, which is part of Yellow Coop’s Secure work (<a href="/what-we-do/#secure">what we do</a>), in fractional engagements of 1 to 4 days a week (<a href="/how-we-engage/">how we engage</a>). If you don’t know what your DMARC record says today, <a href="/contact/">book a 20-minute call</a>.</p>
                <p>Internal links: <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/contact/">Contact</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf">Internet Crime Report 2025</a> — Federal Bureau of Investigation, Internet Crime Complaint Center (calendar year 2025 data), BEC complaint and loss tables and definition</li>
                    <li><a href="https://www.rfc-editor.org/info/rfc9989/">Domain-Based Message Authentication, Reporting, and Conformance (DMARC)</a> — T. Herr and J. Levine, eds., RFC 9989, IETF, May 2026 (obsoletes RFC 7489 and RFC 9091), sections 2.2, 3.2.10, 4.7, 5.1, 7.1, 7.4, and 8</li>
                    <li><a href="https://www.rfc-editor.org/info/rfc7208/">Sender Policy Framework (SPF) for Authorizing Use of Domains in Email, Version 1</a> — S. Kitterman, RFC 7208, IETF, April 2014, section 4.6.4</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/177/r1/final">Trustworthy Email</a> — Scott Rose, Stephen Nightingale, Simson Garfinkel, and Ramaswamy Chandramouli, NIST SP 800-177 Rev. 1, February 2019</li>
                    <li><a href="https://www.cisa.gov/news-events/directives/bod-18-01-enhance-email-and-web-security">BOD 18-01: Enhance Email and Web Security</a> — Cybersecurity and Infrastructure Security Agency (DHS), October 16, 2017</li>
                    <li><a href="https://support.google.com/a/answer/81126">Email sender guidelines</a> — Google, Gmail Help (accessed October 18, 2026)</li>
                    <li><a href="https://support.google.com/a/answer/14229414">Email sender guidelines FAQ</a> — Google, Gmail Help (accessed October 18, 2026)</li>
                    <li><a href="https://senders.yahooinc.com/best-practices/">Sender Best Practices</a> — Yahoo, Yahoo Sender Hub (accessed October 18, 2026)</li>
                    <li><a href="https://support.microsoft.com/en-us/outlook/fix-ndr-error-550-5-7-515-in-outlook-com">Fix NDR error “550 5.7.515” in Outlook.com</a> — Microsoft Support (accessed October 18, 2026)</li>
                    <li><a href="/what-we-do/">What we do</a> and <a href="/how-we-engage/">How we engage</a> — Yellow Coop</li>
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
