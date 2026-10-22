<?php
$title = 'Password Policy for Mid-Market Companies: What NIST’s Current Guidelines Say to Stop Doing and Start Doing — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Still forcing password changes? NIST\'s current guidelines say stop. Build a password policy on length, breach screening, password managers, and MFA.';
$meta_keywords = 'password policy, NIST password guidelines, business password manager, compromised password screening, credential hygiene';
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
                <img class="hero" src="/posts/images/password-policy-nist-guidelines-mid-market-hero.webp" alt="Password Policy for Mid-Market Companies: What NIST’s Current Guidelines Say to Stop Doing and Start Doing">
                <h1>Password Policy for Mid-Market Companies: What NIST’s Current Guidelines Say to Stop Doing and Start Doing</h1>
                <p class="meta">2026-10-22</p>

                <p><strong>The takeaway:</strong> If your password policy still forces quarterly changes and demands a capital letter, a number, and a symbol, it’s built on advice the U.S. National Institute of Standards and Technology (NIST) now tells its own audience not to follow. A modern password policy is shorter to write and easier to live with: require long passwords, screen them against known-compromised lists, hand everyone a business password manager, and pair passwords with multifactor authentication (MFA).</p>

                <h2>Why passwords still deserve a policy</h2>

                <p>Stolen logins remain one of attackers’ favorite tools. Verizon’s 2026 Data Breach Investigations Report (published May 19, 2026), which analyzed more than 31,000 security incidents including more than 22,000 confirmed breaches, found credential abuse was the first known way in for 13% of the roughly 20,000 breaches it analyzed for initial access (excluding errors and insider misuse). That’s down from 22% in the 2025 report, but partly because Verizon added a new “pretexting” category this year; without that change the figure would have been 16%. Exploiting software vulnerabilities, at 31%, has now overtaken stolen credentials as the top entry point. Still, the report says that counting credential abuse at any point in an attack, not just at the start, it sits on top at 39% of breaches.</p>

                <p>Translation: credentials aren’t the only door, but they’re a door attackers walk through constantly.</p>

                <h2>What changed: NIST SP 800-63B-4</h2>

                <p>NIST finalized Special Publication 800-63B-4, <em>Digital Identity Guidelines: Authentication and Authenticator Management</em>, on July 31, 2025. It replaces the earlier version of SP 800-63B. When this post says NIST password guidelines, this is the document it means. A fair caveat: it’s written for U.S. government systems and says it isn’t meant to constrain standards outside that purpose. But it’s a widely used public reference on passwords, and its logic travels well to private businesses.</p>

                <h2>Stop doing these five things</h2>

                <ol>
                    <li><strong>Forcing scheduled password changes.</strong> NIST says systems “SHALL NOT require subscribers to change passwords periodically.” Force a change only when there’s evidence a password was compromised. (You may have watched <code>Spring2026!</code> quietly become <code>Summer2026!</code>.)</li>
                    <li><strong>Composition rules.</strong> Mandatory mixes of uppercase, numbers, and symbols are out. NIST says no composition rules beyond length and the blocklist check below.</li>
                    <li><strong>Security questions.</strong> NIST says not to prompt users for knowledge-based questions (“What was your first pet’s name?”) when choosing passwords. Your first pet’s name is often one social media post away.</li>
                    <li><strong>Password hints</strong> that anyone can see before logging in. Also prohibited.</li>
                    <li><strong>Blocking paste and password managers.</strong> NIST says systems shall allow password managers and autofill, and should allow pasting. If an internal app blocks paste, it’s pushing people toward short, memorable, guessable passwords.</li>
                </ol>

                <h2>Start doing these five things</h2>

                <ol>
                    <li><strong>Require length.</strong> NIST requires at least 15 characters when a password is the only factor, and at least 8 when it’s used only as part of MFA. It also says systems should accept at least 64 characters, spaces included. The U.S. Cybersecurity and Infrastructure Security Agency (CISA) tells small and medium businesses to require at least 16. If you want one number that satisfies both, use 16.</li>
                    <li><strong>Add compromised password screening.</strong> NIST requires checking new passwords against a blocklist of commonly used, expected, or compromised values: passwords from earlier breaches, dictionary words, and context-specific words like your company or app name. If your identity platform offers this, turn it on.</li>
                    <li><strong>Limit guessing.</strong> NIST caps consecutive failed attempts on an account at no more than 100 before the authenticator is disabled, and suggests options like increasing wait times to avoid locking out real users.</li>
                    <li><strong>Give everyone a business password manager.</strong> CISA’s guidance for small and medium businesses says to provide a company-wide password manager so employees remember one strong master password and let the tool generate and fill the rest. NIST notes password managers have been shown to make stronger passwords more likely.</li>
                    <li><strong>Pair passwords with MFA.</strong> NIST states plainly that “passwords are not phishing-resistant.” CISA recommends phishing-resistant MFA along with strong passwords. A good password policy reduces risk; it doesn’t replace the second factor.</li>
                </ol>

                <h2>A practical rollout for a mid-market company</h2>

                <ul>
                    <li><strong>Find every place a password gets set.</strong> Email and office suite, VPN, accounting or ERP, payroll, line-of-business apps, and admin consoles. Each may have its own settings.</li>
                    <li><strong>Change the settings, then the document.</strong> Update length, remove rotation and complexity rules, and turn on breach screening where available. Then rewrite the written policy to match.</li>
                    <li><strong>Start with the riskiest accounts.</strong> Admins, finance, and anyone who can move money or change vendor bank details go first.</li>
                    <li><strong>Clean up shared accounts.</strong> Move shared logins into the password manager’s shared vaults with named owners, and rotate them when someone with access leaves.</li>
                    <li><strong>Explain the “why.”</strong> Telling staff “we’re dropping the quarterly password change” earns goodwill you can spend on the password manager rollout.</li>
                </ul>

                <p>Good credential hygiene isn’t glamorous, but it’s one of the easier security changes to sell to staff.</p>

                <h2>The bottom line</h2>

                <p>The modern password policy is simple: long, screened, managed, and backed by MFA. Drop the rules that annoy people without protecting anything.</p>

                <p>If you want help turning this into a written policy, configuring it across your systems, and answering the password questions on your next cyber insurance application or customer security questionnaire, Yellow Coop’s fractional CISO and CTO services can help. Start with <a href="/what-we-do/">what we do</a> or <a href="/contact/">book a call</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/63/b/4/final">SP 800-63B-4, <em>Digital Identity Guidelines: Authentication and Authenticator Management</em></a> — NIST, final, July 31, 2025 (publication page)</li>
                    <li><a href="https://pages.nist.gov/800-63-4/sp800-63b.html">SP 800-63B-4 full text</a> — NIST; Sec. 3.1.1 Passwords; Sec. 3.2.2 Rate Limiting</li>
                    <li><a href="https://www.cisa.gov/audiences/small-and-medium-businesses/secure-your-business/require-strong-passwords">Require Strong Passwords</a> — CISA, Small and Medium Businesses guidance</li>
                    <li><a href="https://www.verizon.com/business/resources/Te26/reports/2026-dbir-data-breach-investigations-report.pdf">2026 Data Breach Investigations Report</a> — Verizon, published May 19, 2026 (PDF)</li>
                    <li><a href="https://www.verizon.com/about/news/breach-industry-wide-dbir-finds">Vulnerability exploitation top breach entry point, 2026 industry-wide DBIR finds</a> — Verizon news release, May 19, 2026</li>
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
