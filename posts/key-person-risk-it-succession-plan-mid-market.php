<?php
$title = 'Key-Person Risk in IT: What Happens If Your One Tech Person Quits (or Gets Hit by a Bus)? — Yellow Coop';
$seo_title = 'Key-Person Risk in IT | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Who holds your company\'s tech keys? Find single points of failure, share access, write run-books, cross-train a backup, and test it before someone leaves.';
$meta_keywords = 'key-person risk, bus factor, IT succession plan, IT documentation, cross-training IT staff';
$pillar = 'Operate';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/key-person-risk-it-succession-plan-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="A long black beam resting on a single dark column, with a second amber column standing beside it to share the load, against a dark background"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Key-Person Risk in IT: What Happens If Your One Tech Person Quits (or Gets Hit by a Bus)?</h1>
                <p class="meta">2026-11-18 · By the Yellow Coop Team</p>

                <p><strong>Takeaway:</strong> If one person holds the passwords, the code, the vendor relationships, and the "restart that every Tuesday" lore, your company has a single point of failure with a pulse. The fix isn't keeping them happy forever. It's finding what only they know, writing it down, sharing access, training a backup, and testing the plan before you need it.</p>

                <h2>What "key-person risk" means in technology</h2>

                <p>Key-person risk is the damage done when one specific person becomes unavailable. Software teams have a darker name for it: the "truck factor" or "bus factor."</p>

                <p>In <a href="https://arxiv.org/abs/1604.06766">A Novel Approach for Estimating Truck Factors</a> (IEEE ICPC 2016; arXiv April 22, 2016), researchers led by Guilherme Avelino, a computer scientist at Brazil's Federal University of Minas Gerais, use the agile community's definition: "the number of people on your team that have to be hit by a truck (or quit) before the project is in serious trouble."</p>

                <h2>How common is a truck factor of one?</h2>

                <p>More common than you'd hope. The team estimated truck factors for 133 popular open-source projects on GitHub. In 45 of them (34%), the truck factor was one. Another 42 (31%) had a truck factor of two. So 65% hinged on one or two people. Asked what softens the loss of a top contributor, developers mentioned documentation most (36 answers), ahead of community, automated tests, and readable code.</p>

                <p>Those are open-source projects, but if famous code clusters around one or two people, your IT person's 11 p.m. scripts probably do too. A later study, <a href="https://arxiv.org/abs/2202.01523">Bus Factor in Practice</a> (ICSE 2022 SEIP track; arXiv February 3, 2022), surveyed 269 engineers and found the bus factor "is perceived as an important problem in collective development."</p>

                <h2>The cautionary tale everyone gets slightly wrong</h2>

                <p>QuadrigaCX was a Canadian crypto trading platform. Its co-founder and CEO, Gerald Cotten, died in India on December 9, 2018. The popular story: he died holding the only passwords, and the money vanished with him.</p>

                <p>The Ontario Securities Commission's staff report, <a href="https://www.osc.ca/quadrigacxreport/">QuadrigaCX: A Review by Staff of the Ontario Securities Commission</a> (dated April 14, 2020; <a href="https://www.osc.ca/en/news-events/news/osc-publishes-investigative-report-quadrigacx">published June 11, 2020</a>), says otherwise. Staff found that most of the at least $169 million in client losses came from Cotten's fraud, not from lost or inaccessible keys. (These are staff views, not tested before a tribunal or court.)</p>

                <p>The key-person lesson is sharper than the myth. From 2016 on, staff wrote, Cotten "was in sole control" of the company, with "no proper system of internal oversight or controls or proper books and records." One contractor said: "Gerry was the gatekeeper. Everything had to go through him."</p>

                <p>Your IT lead is almost certainly honest. But "only one person can see it" is still a problem when that person is on a beach without cell service.</p>

                <h2>Step 1: Find where one person holds the keys</h2>

                <p>List each system, who can get in, who understands it, and what breaks if they vanish. Hunt in four places:</p>

                <ul>
                    <li><strong>Credentials:</strong> admin logins for email, cloud, firewall, backups, payroll, domain registrar, plus recovery phone numbers that ring one person's cell.</li>
                    <li><strong>Code:</strong> custom apps, scripts, integrations, macro-laden spreadsheets. Where does the code live? (If the answer is "his laptop," circle it twice.)</li>
                    <li><strong>Vendor relationships:</strong> who's on the contract, whose card pays the bill.</li>
                    <li><strong>Undocumented processes:</strong> month-end jobs, certificate renewals, "the restart thing."</li>
                </ul>

                <p>CISA's <a href="https://www.cisa.gov/cybersecurity-performance-goals-2-0-cpg-2-0">Cross-Sector Cybersecurity Performance Goals 2.0</a> (December 2025) back this up: goal 2.A recommends a regularly updated inventory of "data, hardware, software, systems, facilities, and personnel."</p>

                <h2>Step 2: Share access the right way</h2>

                <p>The goal is that no critical system has exactly one way in. Put shared credentials in a company-owned password manager. Give at least two trusted people admin access to anything critical. Move domains, cloud accounts, and contracts into company names and company email.</p>

                <p>This overlaps with admin-account cleanup and domain hygiene, but the question differs: if this person disappeared tonight, could someone else get in tomorrow? CPG 2.0 also recommends separation of duties, "distributing responsibilities across multiple individuals or roles to reduce the risk of unauthorized actions, errors, or fraud." That's Quadriga in one sentence.</p>

                <h2>Step 3: Write run-books, not novels</h2>

                <p>A run-book is a short, step-by-step sheet for a routine or emergency task: restoring a backup, renewing a certificate. Aim for "a competent stranger could follow this," not a 40-page manual.</p>

                <p><a href="https://csrc.nist.gov/pubs/sp/800/34/r1/upd1/final">NIST SP 800-34 Rev. 1</a>, NIST's contingency planning guide (May 2010, updated November 11, 2010), calls the plan "a living document that is updated regularly." Set a calendar reminder.</p>

                <h2>Step 4: Cross-train a real backup</h2>

                <p>Name a backup for each critical system: an employee, your managed service provider (MSP), or an outside partner. Have them shadow, then do the task while the expert watches. NIST's guide says contingency training "should be provided at least annually," with the goal that people can carry out their recovery roles without the plan document in hand.</p>

                <h2>Step 5: Test it</h2>

                <p>Pick a system. Ask the primary person to step away for a day while the backup runs it from the run-book. Every question exposes a gap. Per NIST, testing validates recovery capabilities, and exercising the plan "identifies planning gaps."</p>

                <p>For planned exits, CPG 2.0 calls for a defined offboarding process that includes "the revocation of all access to systems and facilities." Easy, if Step 1 tells you what access exists.</p>

                <h2>The bottom line</h2>

                <p>Good people leave. The failure is when a resignation letter becomes a business continuity event. A list, shared access, run-books, a trained backup, and a yearly test: that's an IT succession plan.</p>

                <p>If no one owns that work today, Yellow Coop can help as your fractional CIO, CTO, and CISO, starting with an <a href="https://yellowcoop.com/what-we-do/">inventory of systems, licenses, and contracts with owners and renewal dates</a>. If your technology leader just left, an interim engagement fills the seat and <a href="https://yellowcoop.com/how-we-engage/">hands off to the new hire with a written transition plan</a>. Or <a href="https://yellowcoop.com/contact/">book a call</a>.</p>
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
