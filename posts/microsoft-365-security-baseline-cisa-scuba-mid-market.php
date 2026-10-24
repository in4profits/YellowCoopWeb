<?php
$title = 'Microsoft 365 Security Baseline: How Mid-Market Owners and Operators Can Use CISA’s Free SCuBA Checklist — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Use CISA\'s free SCuBA baselines and ScubaGear tool to check your Microsoft 365 setup, fix the settings attackers lean on most, and log your exceptions.';
$meta_keywords = 'Microsoft 365 security baseline, CISA SCuBA, ScubaGear, block legacy authentication, Microsoft 365 admin roles';
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
                <img class="hero" src="/posts/images/microsoft-365-security-baseline-cisa-scuba-mid-market-hero.webp" alt="Microsoft 365 Security Baseline: How Mid-Market Owners and Operators Can Use CISA’s Free SCuBA Checklist">
                <h1>Microsoft 365 Security Baseline: How Mid-Market Owners and Operators Can Use CISA’s Free SCuBA Checklist</h1>
                <p class="meta">2026-10-24</p>

                <p><strong>Takeaway:</strong> If your company runs on Microsoft 365, you don’t have to invent a security standard. The U.S. Cybersecurity and Infrastructure Security Agency (CISA) already publishes one, called SCuBA, plus a free tool that grades your setup against it. Run the report, fix the handful of settings attackers lean on most, and write down why you’re skipping anything you skip.</p>

                <p>Quick definition: your Microsoft 365 “tenant” is your company’s own instance of Microsoft 365, with its users, mailboxes, files, and settings. Many of its security protections are settings someone has to turn on deliberately.</p>

                <h2>What SCuBA is, and why it isn’t just for government</h2>

                <p>CISA started the <a href="https://www.cisa.gov/resources-tools/services/secure-cloud-business-applications-scuba-project">Secure Cloud Business Applications (SCuBA) project</a> in 2022 to address security gaps exposed by intrusions into cloud software. Its main goal is protecting federal agencies, but CISA says plainly that “all organizations can use SCuBA.” The project publishes secure configuration baselines for Microsoft 365 and Google Workspace, and two no-cost assessment tools introduced in 2023: ScubaGear for Microsoft 365 and ScubaGoggles for Google Workspace.</p>

                <p>On December 17, 2024, CISA issued <a href="https://www.cisa.gov/news-events/directives/bod-25-01-implementing-secure-practices-cloud-services">Binding Operational Directive (BOD) 25-01</a>, which required federal civilian agencies to implement the mandatory SCuBA policies by June 20, 2025. Your company isn’t bound by it. Still, a list of settings the federal government made mandatory for itself is a sensible starting list for everyone else.</p>

                <h2>Step 1: Run the free report</h2>

                <p><a href="https://github.com/cisagov/ScubaGear">ScubaGear</a> is a PowerShell tool that reads your tenant’s settings, compares them with the SCuBA baselines, and produces HTML, JSON, and CSV reports. CISA’s documentation says the first run makes no changes; it shows you where you stand. It needs an administrator with the right permissions to run it, usually your IT lead or managed service provider.</p>

                <p>What you get is a pass/fail list mapped to specific policies. That turns “are we secure?” into a punch list.</p>

                <h2>Step 2: Fix the settings attackers love first</h2>

                <p>The baselines are long. These five items, all on the <a href="https://www.cisa.gov/resources-tools/services/bod-25-01-implementing-secure-practices-cloud-services-required-configurations">BOD 25-01 mandatory list</a>, are a good first pass.</p>

                <h3>Block legacy authentication</h3>

                <p>Legacy authentication means older sign-in methods (think old email protocols) that can’t enforce multifactor authentication (MFA). SCuBA policy MS.AAD.1.1 says it “SHALL be blocked.” <a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/policy-block-legacy-authentication">Microsoft’s own guidance</a> says that, based on its analysis, more than 97 percent of credential stuffing attacks and more than 99 percent of password spray attacks use legacy authentication. Check the sign-in logs for anything still using it before you flip the switch, and test in Microsoft’s report-only mode first.</p>

                <h3>Require MFA for everyone, phishing-resistant where you can</h3>

                <p>The baseline calls for phishing-resistant MFA for all users (MS.AAD.3.1) and requires it for highly privileged roles (MS.AAD.3.6). A <a href="https://arxiv.org/abs/2305.00945">2023 study by Microsoft researchers</a> (Meyer et al.) of Azure Active Directory accounts reviewed for suspicious activity between April and September 2022 estimated that MFA reduced the risk of compromise by 99.22%. In a separate sample of 128,000 accounts with leaked passwords, it also found SMS codes less effective than an authenticator app. Note that it’s Microsoft studying its own product, using 2022 data.</p>

                <h3>Shrink the number of Global Administrators</h3>

                <p>Global Administrator is the master key to your tenant. Policy MS.AAD.7.1 calls for at least two and no more than eight; the baseline notes Microsoft recommends fewer than five. MS.AAD.7.2 says privileged users should get narrower roles instead. Check whether anyone who no longer needs it still holds one.</p>

                <h3>Restrict who can approve third-party apps</h3>

                <p>When an employee clicks “Accept” on an app that asks to read their mail or files, they may be granting that app ongoing access. Policy MS.AAD.5.2 says user consent to applications “SHALL be restricted,” and the BOD list pairs it with an admin approval workflow so legitimate requests still get through.</p>

                <h3>Turn off auto-forwarding to outside domains, and turn on mailbox auditing</h3>

                <p>Policy MS.EXO.1.1 disables automatic forwarding to external domains. The <a href="https://github.com/cisagov/ScubaGear/blob/main/PowerShell/ScubaGear/baselines/exo.md">Exchange Online baseline</a> explains why: “Adversaries can use automatic forwarding to gain persistent access to a victim’s email.” MS.EXO.13.1 requires mailbox auditing, so if something does go wrong, you have records to investigate.</p>

                <p>While you’re in there, look at file sharing: MS.SHAREPOINT.1.1 limits SharePoint external sharing to existing guests or people inside your organization.</p>

                <h2>Step 3: Write down your exceptions</h2>

                <p>Not every setting fits every business. BOD 25-01 lets an agency’s authorizing official accept the risk of a deviation, as long as it’s identified and explained. ScubaGear supports the same idea through its configuration file, where you document exclusions and risk acceptances.</p>

                <p><strong>Your version:</strong> keep a one-page exception log. For each skipped setting, note the business reason, the owner, and a date to revisit it. Auditors, insurers, and future you will all appreciate it.</p>

                <h2>Step 4: Re-run it on a schedule</h2>

                <p>Settings drift, and baselines change. ScubaGear includes a feature for comparing two runs, and BOD 25-01 asks agencies that report manually to do so quarterly. Quarterly is a reasonable rhythm for a mid-market company too.</p>

                <h2>What this won’t cover</h2>

                <p>SCuBA hardens Microsoft 365 configuration. It doesn’t cover laptops, backups, vendor access, or your people. Treat it as one strong piece of a security program, not the whole program.</p>

                <h2>The bottom line</h2>

                <p>A free government checklist plus a free scanner removes most of the guesswork from Microsoft 365 security. The hard parts are prioritizing the fixes, rolling them out without locking anyone out, and keeping them in place. That’s the kind of work Yellow Coop’s fractional CTOs handle for growing companies. <a href="/contact/">Let’s talk</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.cisa.gov/resources-tools/services/secure-cloud-business-applications-scuba-project">Secure Cloud Business Applications (SCuBA) project</a> — CISA; accessed October 24, 2026</li>
                    <li><a href="https://www.cisa.gov/news-events/directives/bod-25-01-implementing-secure-practices-cloud-services">BOD 25-01: Implementing Secure Practices for Cloud Services</a> — CISA, December 17, 2024</li>
                    <li><a href="https://www.cisa.gov/resources-tools/services/bod-25-01-implementing-secure-practices-cloud-services-required-configurations">BOD 25-01 Required Configurations</a> — CISA</li>
                    <li><a href="https://github.com/cisagov/ScubaGear">ScubaGear repository and README</a> — CISA</li>
                    <li><a href="https://github.com/cisagov/ScubaGear/blob/main/PowerShell/ScubaGear/baselines/exo.md">SCuBA Exchange Online baseline</a> — CISA; MS.EXO.1.1 rationale, MS.EXO.13.1</li>
                    <li><a href="https://github.com/cisagov/ScubaGear/blob/main/PowerShell/ScubaGear/baselines/aad.md">SCuBA Entra ID baseline</a> — CISA; MS.AAD.1.1, 3.1, 3.6, 5.2, 7.1, 7.2</li>
                    <li><a href="https://github.com/cisagov/ScubaGear/blob/main/PowerShell/ScubaGear/baselines/sharepoint.md">SCuBA SharePoint baseline</a> — CISA; MS.SHAREPOINT.1.1</li>
                    <li><a href="https://learn.microsoft.com/en-us/entra/identity/conditional-access/policy-block-legacy-authentication">Block legacy authentication with Conditional Access</a> — Microsoft Learn; accessed October 24, 2026</li>
                    <li><a href="https://arxiv.org/abs/2305.00945">How effective is multifactor authentication at deterring cyberattacks?</a> — Meyer et al., arXiv 2305.00945, May 2023; Microsoft researchers, Azure AD data April–September 2022, leaked-credential sample of 128,000 accounts</li>
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
