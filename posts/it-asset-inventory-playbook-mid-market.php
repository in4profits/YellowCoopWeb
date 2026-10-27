<?php
$title = 'IT Asset Inventory: A Starter Playbook for Mid-Market Owners and Operators — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'An IT asset inventory comes first: list devices and software, name an owner for each, handle unknown devices weekly, and flag anything out of support.';
$meta_keywords = 'IT asset inventory, CIS Control 1, software inventory, unauthorized devices, end-of-support devices';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/it-asset-inventory-playbook-mid-market-hero.webp" alt="IT Asset Inventory: A Starter Playbook for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>IT Asset Inventory: A Starter Playbook for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-21</p>

                <p><strong>The takeaway:</strong> An IT asset inventory is the least glamorous security control and the one everything else depends on. You can’t patch, back up, insure, or retire what you don’t know you have. Start with a simple list of devices and software, give every row an owner, deal with unknown devices weekly, and flag anything the vendor no longer supports.</p>

                <h2>Why the boring list comes first</h2>

                <p>The Cybersecurity and Infrastructure Security Agency (CISA) put it plainly in an October 3, 2022 directive to federal civilian agencies: “Continuous and comprehensive asset visibility is a basic pre-condition for any organization to effectively manage cybersecurity risk” (<a href="https://www.cisa.gov/news-events/directives/bod-23-01-improving-asset-visibility-and-vulnerability-detection-federal-networks">CISA BOD 23-01</a>).</p>

                <p>The directive binds only federal agencies, but the same idea runs through guidance written for everyone. Inventory is Control 1 (hardware) and Control 2 (software) of the Center for Internet Security’s CIS Critical Security Controls v8.1 (<a href="https://www.cisecurity.org/controls/inventory-and-control-of-enterprise-assets">CIS Control 1</a>, <a href="https://www.cisecurity.org/controls/inventory-and-control-of-software-assets">CIS Control 2</a>). Subcategories ID.AM-01 and ID.AM-02 of the NIST Cybersecurity Framework 2.0, published February 26, 2024, call for maintained inventories of hardware, software, services, and systems (<a href="https://nvlpubs.nist.gov/nistpubs/CSWP/NIST.CSWP.29.pdf">NIST CSWP 29</a>). And CISA’s Cross-Sector Cybersecurity Performance Goals 2.0, dated December 2025, rate goal 2.A, “Manage Organizational Assets,” as low cost and high impact, with moderate ease of implementation (<a href="https://www.cisa.gov/sites/default/files/2025-12/CPG_Report_2.0_508c.pdf">CISA CPG 2.0</a>).</p>

                <p>Low cost, high impact. That’s a rare combination in security.</p>

                <h2>Step 1: Decide what counts</h2>

                <p>CIS Safeguard 1.1 covers every asset that can “store or process data”: laptops and phones, network gear, servers, Internet of Things (IoT) devices like cameras and smart TVs, and assets in the cloud. It also covers devices “regularly connected” to your network “even if they are not under control of the enterprise,” such as a personal phone on the office Wi-Fi (<a href="https://www.cisecurity.org/controls/cis-controls-navigator">CIS Controls Navigator v8.1</a>).</p>

                <p>CISA’s version is broader still: data, hardware, software, systems, facilities, and personnel (<a href="https://www.cisa.gov/sites/default/files/2025-12/CPG_Report_2.0_508c.pdf">CPG 2.0</a>). Start with devices and software. Add the rest once the habit sticks.</p>

                <h2>Step 2: Capture a few fields, not fifty</h2>

                <p>For each device, CIS asks for the network address (if fixed), hardware address, machine name, owner, department, and whether it’s approved to connect. For each piece of software, Safeguard 2.1 asks for the title, publisher, install date, and business purpose (<a href="https://www.cisecurity.org/controls/cis-controls-navigator">CIS Navigator</a>).</p>

                <p>The field that matters most for an operator is <strong>owner</strong>. A device with no owner never gets patched, and a subscription with no owner never gets canceled.</p>

                <h2>Step 3: Build it from systems you already pay for</h2>

                <p>You probably don’t need a new tool on day one. Pull lists from:</p>

                <ul>
                    <li>Your device management or endpoint security console</li>
                    <li>Your router or firewall’s list of connected devices (CIS Safeguard 1.4 suggests DHCP logs, the record of which devices got a network address)</li>
                    <li>Your cloud provider consoles</li>
                    <li>Accounts payable and company card statements, which tend to surface software subscriptions nobody told IT about</li>
                </ul>

                <p>Then reconcile. Anything that shows up in one list and not another is a question worth asking.</p>

                <h2>Step 4: Deal with unknowns on a schedule</h2>

                <p>CIS Safeguard 1.2 says to address unauthorized devices “on a weekly basis” by removing them, blocking remote access, or quarantining them. For software, Safeguard 2.3 says unauthorized software is removed or gets a documented exception, reviewed monthly (<a href="https://www.cisecurity.org/controls/cis-controls-navigator">CIS Navigator</a>).</p>

                <p>The point isn’t to play network police. It’s that an unknown device is either harmless and should be listed, or not harmless and should be gone.</p>

                <h2>Step 5: Flag what the vendor no longer supports</h2>

                <p>Safeguard 2.2 says only currently supported software should be authorized. If you must keep something unsupported, document an exception “detailing mitigating controls and residual risk acceptance,” and check support status at least monthly (<a href="https://www.cisecurity.org/controls/cis-controls-navigator">CIS Navigator</a>).</p>

                <p>This is where inventory pays off fast. In a February 5, 2026 directive, CISA ordered federal agencies to deal with end-of-support devices on the edge of their networks, like firewalls and routers. It said such devices no longer receive vendor updates, and that agencies should “identify hardware and software nearing their EOS dates” and plan replacements (<a href="https://www.cisa.gov/news-events/directives/bod-26-02-mitigating-risk-end-support-edge-devices">CISA BOD 26-02</a>). You can’t do that without a list with dates on it.</p>

                <h2>Step 6: Set a review rhythm</h2>

                <p>CIS calls for reviewing and updating the full device inventory “bi-annually, or more frequently” (<a href="https://www.cisecurity.org/controls/cis-controls-navigator">CIS Navigator</a>). CISA adds that IT and operational technology assets “critical for business or operational functions” should be updated more often (<a href="https://www.cisa.gov/sites/default/files/2025-12/CPG_Report_2.0_508c.pdf">CPG 2.0</a>). For comparison, BOD 23-01 required federal civilian agencies to run automated asset discovery every 7 days starting April 3, 2023 (<a href="https://www.cisa.gov/news-events/directives/bod-23-01-improving-asset-visibility-and-vulnerability-detection-federal-networks">CISA BOD 23-01</a>). That’s a federal benchmark, not your legal requirement, but it shows how often the pros look.</p>

                <p>CIS Safeguards 1.1, 1.2, 2.1, 2.2, and 2.3 all sit in Implementation Group 1, which CIS defines as “essential cyber hygiene” that every enterprise should start with (<a href="https://www.cisecurity.org/controls/implementation-groups">CIS Implementation Groups</a>).</p>

                <h2>Five questions for your IT lead or provider</h2>

                <ol>
                    <li>How many laptops, servers, and network devices do we have, and where’s the list?</li>
                    <li>Who owns each one?</li>
                    <li>What happens when an unknown device joins our network?</li>
                    <li>Which of our systems are past end of support?</li>
                    <li>When was the list last reviewed?</li>
                </ol>

                <h2>Where outside help fits</h2>

                <p>An inventory of systems, licenses, and contracts with owners and renewal dates is a standard Yellow Coop deliverable, alongside risk-based patching priorities and cyber insurance application support with a control gap list (<a href="/what-we-do/">what we do</a>). We do it as virtual advisory hours or fractional leadership at 1 to 4 days a week (<a href="/how-we-engage/">how we engage</a>). If nobody can answer question one, <a href="/contact/">book a call</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/news-events/directives/bod-23-01-improving-asset-visibility-and-vulnerability-detection-federal-networks">BOD 23-01: Improving Asset Visibility and Vulnerability Detection on Federal Networks</a> — Cybersecurity and Infrastructure Security Agency, October 3, 2022</li>
                    <li><a href="https://www.cisa.gov/news-events/directives/bod-26-02-mitigating-risk-end-support-edge-devices">BOD 26-02: Mitigating Risk From End-of-Support Edge Devices</a> — Cybersecurity and Infrastructure Security Agency, February 5, 2026</li>
                    <li><a href="https://www.cisa.gov/sites/default/files/2025-12/CPG_Report_2.0_508c.pdf">Cross-Sector Cybersecurity Performance Goals, Version 2.0</a> — Cybersecurity and Infrastructure Security Agency, December 2025; goal 2.A, Manage Organizational Assets (PDF)</li>
                    <li><a href="https://nvlpubs.nist.gov/nistpubs/CSWP/NIST.CSWP.29.pdf">The NIST Cybersecurity Framework (CSF) 2.0</a> — National Institute of Standards and Technology, NIST CSWP 29, February 26, 2024; subcategories ID.AM-01 and ID.AM-02 (PDF)</li>
                    <li><a href="https://www.cisecurity.org/controls/inventory-and-control-of-enterprise-assets">CIS Critical Security Control 1: Inventory and Control of Enterprise Assets</a> — Center for Internet Security, CIS Controls v8.1</li>
                    <li><a href="https://www.cisecurity.org/controls/inventory-and-control-of-software-assets">CIS Critical Security Control 2: Inventory and Control of Software Assets</a> — Center for Internet Security, CIS Controls v8.1</li>
                    <li><a href="https://www.cisecurity.org/controls/cis-controls-navigator">CIS Controls Navigator v8.1</a> — Center for Internet Security; Safeguards 1.1–1.4 and 2.1–2.3</li>
                    <li><a href="https://www.cisecurity.org/controls/implementation-groups">CIS Critical Security Controls Implementation Groups</a> — Center for Internet Security</li>
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
