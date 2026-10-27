<?php
$title = 'How to Manage Your Managed Service Provider: An MSP Oversight Checklist for Mid-Market Owners and Operators — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Your MSP holds admin keys to your network. This checklist covers the contract terms, access limits, logs, and backups to require from your IT provider.';
$meta_keywords = 'MSP oversight, MSP contract checklist, MSP security requirements, managed IT services SLA, fractional CTO';
$pillar = 'Operate';
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
                <img class="hero" src="/posts/images/msp-oversight-checklist-mid-market-hero.webp" alt="How to Manage Your Managed Service Provider: An MSP Oversight Checklist for Mid-Market Owners and Operators">
                <h1>How to Manage Your Managed Service Provider: An MSP Oversight Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-27</p>

                <p><strong>Takeaway:</strong> Your managed service provider (MSP), the outside firm that runs your IT, probably holds admin access to almost everything you own. That makes it one of your biggest security risks as well as one of your most useful vendors. Write down who owns which security job, lock down the MSP’s own accounts, require logs and incident notice you can see, and review the arrangement on a schedule instead of waiting for something to break.</p>

                <p>Most mid-market companies outsource IT for good reasons: it’s cheaper than a full team, and a decent MSP knows more about patching and backups than an office manager ever will. The trouble starts when “we outsourced IT” quietly turns into “we outsourced thinking about IT.” Then nobody inside the business can say what the MSP is responsible for, what it can reach, or how you’d find out if it got breached.</p>

                <h2>Why your MSP is a security question, not just a service question</h2>

                <p>To do its job, an MSP needs privileged access (admin-level rights) across your network, often through remote monitoring and management (RMM) software that can push changes to every machine at once. Attackers know this. Breaking into one MSP can open the door to every one of its customers.</p>

                <p>That’s not a theory. On July 2, 2021, attackers exploited a vulnerability in on-premises Kaseya VSA, RMM software used by many MSPs, and pushed ransomware to MSPs and their downstream customers, according to <a href="https://www.cisa.gov/news-events/news/kaseya-ransomware-attack-guidance-affected-msps-and-their-customers">CISA’s guidance for affected organizations</a> (July 12, 2021). CISA and the FBI told affected customers to make sure backups were current and air-gapped (kept disconnected from the network), switch to manual patching, and put multi-factor authentication (MFA, a second login step beyond a password) and least privilege on admin accounts (<a href="https://www.cisa.gov/news-events/alerts/2021/07/04/cisa-fbi-guidance-msps-and-their-customers-affected-kaseya-vsa-supply-chain-ransomware-attack">CISA-FBI guidance</a>, last revised July 6, 2021).</p>

                <p>The broader numbers point the same way. Verizon’s <a href="https://www.verizon.com/about/news/2025-data-breach-investigations-report">2025 Data Breach Investigations Report</a> (released April 23, 2025, covering 12,195 confirmed breaches) found third-party involvement in breaches doubled to 30%. The <a href="https://www.verizon.com/about/news/breach-industry-wide-dbir-finds">2026 edition</a> (May 19, 2026) puts breaches involving a third party at 48%. Not all of those are MSPs, but your MSP is usually the third party with the most access.</p>

                <h2>The MSP oversight checklist</h2>

                <p>The best single source here is a joint advisory from the US, UK, Australian, Canadian, and New Zealand cyber agencies, <a href="https://www.cisa.gov/news-events/cybersecurity-advisories/aa22-131a">AA22-131A</a> (May 11, 2022). Its core message to customers: put the controls in the contract. Here’s how that translates for an owner or operator.</p>

                <h3>1. Write down who owns which security job</h3>

                <p>AA22-131A tells customers to make sure MSP contracts “transparently identify ownership” of security roles and responsibilities. In plain terms: for patching, backups, monitoring, user accounts, and incident response, is it you, the MSP, or nobody? “Nobody” is the answer you’re trying to find before an attacker does.</p>

                <h3>2. Lock down the MSP’s own accounts</h3>

                <p>The advisory says contracts should require MFA on all MSP accounts that reach your environment, and that MSPs should treat those accounts as privileged. Ask for a list of every account the MSP uses in your systems, who it belongs to, and whether it’s shared. Disable accounts that are no longer in use, and make account removal part of your offboarding steps if you ever change providers.</p>

                <h3>3. Require visibility into what the MSP does</h3>

                <p>If the MSP handles monitoring and logging, AA22-131A says the contract should require it to give you visibility into its own presence, activities, and connections to your network, and to notify you of confirmed or suspected security incidents on its infrastructure. The agencies also recommend keeping your most important logs for at least six months, because incidents can take months to detect.</p>

                <h3>4. Make backups and recovery explicit</h3>

                <p>Who owns backups, where they live, how often they’re tested, and how fast you get your data back belong in writing. Kaseya showed why at least one copy should sit somewhere your MSP’s tools can’t reach.</p>

                <h3>5. Hold them to service levels you can measure</h3>

                <p>Response times, patch timelines, and a monthly report you actually read. If the MSP sets its own priorities and you only hear from it at renewal, you have a vendor, not a partner.</p>

                <h3>6. Review it on a calendar</h3>

                <p>Once a year at minimum, walk through this list with the MSP. Compare the contract to what’s really happening. Treat changes in its staff, tools, or ownership as triggers for an extra review.</p>

                <h2>What this doesn’t mean</h2>

                <p>None of this says “fire your MSP.” A good provider will welcome clear terms, because they protect it too. The goal is that someone on your side understands the arrangement well enough to ask hard questions and judge the answers.</p>

                <h2>The bottom line</h2>

                <p>Your MSP has the keys. Make sure the contract says what it does with them, and that someone on your team checks. Yellow Coop’s CIO work includes a help desk and managed service provider review, with service levels you can hold them to. Its Virtual level puts an experienced technology executive on call as an escalation point for your IT lead or provider. <a href="/contact/">Let’s talk</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/news-events/cybersecurity-advisories/aa22-131a">AA22-131A, Protecting Against Cyber Threats to Managed Service Providers and their Customers</a> — US, UK, Australian, Canadian, and New Zealand cybersecurity authorities, May 11, 2022</li>
                    <li><a href="https://www.cisa.gov/news-events/news/kaseya-ransomware-attack-guidance-affected-msps-and-their-customers">Kaseya Ransomware Attack: Guidance for Affected MSPs and their Customers</a> — CISA, July 12, 2021</li>
                    <li><a href="https://www.cisa.gov/news-events/alerts/2021/07/04/cisa-fbi-guidance-msps-and-their-customers-affected-kaseya-vsa-supply-chain-ransomware-attack">CISA-FBI Guidance for MSPs and their Customers Affected by the Kaseya VSA Supply-Chain Ransomware Attack</a> — last revised July 6, 2021</li>
                    <li><a href="https://www.verizon.com/about/news/2025-data-breach-investigations-report">2025 Data Breach Investigations Report press release</a> — Verizon, April 23, 2025</li>
                    <li><a href="https://www.verizon.com/about/news/breach-industry-wide-dbir-finds">2026 DBIR press release</a> — Verizon, May 19, 2026</li>
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
