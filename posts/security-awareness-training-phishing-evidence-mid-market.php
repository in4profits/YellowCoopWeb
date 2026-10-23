<?php
$title = 'Security Awareness Training: What the Evidence Says and How Mid-Market Owners and Operators Should Run It — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'A 19,500-employee study found phishing training barely moved click rates. Here\'s how to run awareness training backed by real controls.';
$meta_keywords = 'security awareness training, phishing training effectiveness, phishing simulation, phishing reporting, NIST SP 800-50';
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
                <img class="hero" src="/posts/images/security-awareness-training-phishing-evidence-mid-market-hero.webp" alt="Security Awareness Training: What the Evidence Says and How Mid-Market Owners and Operators Should Run It">
                <h1>Security Awareness Training: What the Evidence Says and How Mid-Market Owners and Operators Should Run It</h1>
                <p class="meta">2026-10-23</p>

                <p><strong>The takeaway:</strong> Keep security awareness training, but stop expecting it to stop phishing on its own. A study of more than 19,500 employees, which UC San Diego calls the largest of its kind to date, found that common training formats barely moved click rates. Train for a handful of specific behaviors, measure reporting instead of clicks, and put technical controls behind your people so one bad click doesn’t become a breach.</p>

                <h2>What the biggest study found</h2>

                <p>Over eight months, researchers from UC San Diego and UC San Diego Health ran a randomized controlled experiment that sent ten simulated phishing campaigns to more than 19,500 employees. The paper, by Grant Ho (University of Chicago), Ariana Mirian, Geoffrey M. Voelker (UC San Diego), and colleagues, was presented at the IEEE Symposium on Security and Privacy in May 2025 (<a href="https://www.sysnet.ucsd.edu/~voelker/pubs/phishtrain-oakland25.pdf">Understanding the Efficacy of Phishing Training in Practice</a>). Here’s what they found:</p>

                <ul>
                    <li><strong>Annual training didn’t show up in the results.</strong> There was no significant relationship between recently completing annual awareness training and failing a phishing simulation.</li>
                    <li><strong>“You clicked, here’s a lesson” training helped only a little.</strong> Users who got embedded training were 9.5% less likely to fail in relative terms, but in absolute terms the best-performing groups had only 1 to 4 percentage points lower failure rates on most lures.</li>
                    <li><strong>Almost nobody engaged with it.</strong> Over half of embedded training sessions ended within 10 seconds, and fewer than 24% of users formally completed the material.</li>
                    <li><strong>Most people clicked eventually.</strong> Over 56% of users clicked a phishing link at some point during the study.</li>
                    <li><strong>The lure mattered more than the training.</strong> One simulated email fooled 1.82% of recipients; another fooled 30.80%. UC San Diego’s write-up says the low one was an Outlook password update and the high one was a fake vacation policy update (<a href="https://today.ucsd.edu/story/cybersecurity-training-programs-dont-prevent-employees-from-falling-for-phishing-scams">UC San Diego Today, September 17, 2025</a>).</li>
                </ul>

                <p>Fair caveats: this is one large healthcare organization, and the authors tested training “in their current and commonly deployed forms.” Their conclusion is that those forms are “unlikely to offer significant practical value in reducing phishing risks,” not that people can’t learn.</p>

                <h2>Why you still train anyway</h2>

                <p>Government guidance still includes training, but as one layer. The joint phishing guidance from CISA, NSA, FBI, and MS-ISAC (October 2023) tells organizations to “implement user training on social engineering and phishing attacks” and stresses “the importance of reporting” suspicious emails. It lists that alongside technical controls such as phishing-resistant multifactor authentication (MFA), DMARC email authentication, and email and DNS filtering (<a href="https://www.cisa.gov/sites/default/files/2023-10/Phishing%20Guidance%20-%20Stopping%20the%20Attack%20Cycle%20at%20Phase%20One_508c.pdf">Phishing Guidance: Stopping the Attack Cycle at Phase One</a>).</p>

                <p>NIST’s updated guide, SP 800-50 Rev. 1 (published September 12, 2024), frames training as a learning program meant to “encourage behavior change as part of risk management,” complete with metrics and evaluation so you can tell whether it’s working (<a href="https://csrc.nist.gov/pubs/sp/800/50/r1/final">NIST SP 800-50r1</a>).</p>

                <p>And the attacks aren’t only in email. Verizon’s 2026 Data Breach Investigations Report (May 19, 2026) says social engineering by text and phone has a success rate 40% higher than traditional email phishing (<a href="https://www.verizon.com/about/news/breach-industry-wide-dbir-finds">Verizon 2026 DBIR announcement</a>). A program that only drills email is training for last year’s attack.</p>

                <h2>A program built for how people actually behave</h2>

                <h3>1. Teach four behaviors, not forty topics</h3>

                <ul>
                    <li>Report anything suspicious, fast, with one button.</li>
                    <li>Confirm any payment or bank-detail change by calling a number you already have on file.</li>
                    <li>Never share an MFA code or approve a sign-in prompt you didn’t start.</li>
                    <li>Treat texts and calls asking for passwords or money exactly like suspicious email.</li>
                </ul>

                <h3>2. Make reporting the scoreboard</h3>

                <p>Click rates mostly measure how hard the test email was (1.82% versus 30.80% in the same organization). Track how many people report a simulated or real phish and how quickly the first report arrives. A fast report lets IT pull the message from everyone else’s inbox.</p>

                <h3>3. Keep it short and role-based</h3>

                <p>NIST’s guide calls for role-based training. Finance, HR, executive assistants, and IT admins face different lures, so give them scenarios that match their jobs, in a few minutes at a time.</p>

                <h3>4. Celebrate the report, don’t shame the click</h3>

                <p>If clicking gets someone publicly scolded, they’ll stop telling you when they click. You want the opposite.</p>

                <h3>5. Put controls behind the people</h3>

                <p>The study’s authors suggest technical countermeasures likely offer a better return, naming hardware MFA and password managers that only fill in credentials on the correct site. Add the CISA list (email filtering and DMARC), plus a payment verification rule your finance team can’t skip.</p>

                <h2>Questions to ask your IT provider</h2>

                <ul>
                    <li>What’s our phishing report rate, and who triages reports, how fast?</li>
                    <li>Which phishing-resistant controls do we have today, and which accounts still lack them?</li>
                    <li>Do our simulations include text messages and phone calls?</li>
                    <li>How would we know if our training changed anything?</li>
                </ul>

                <h2>The bottom line</h2>

                <p>Training is a layer, not a wall. Keep it short, aim it at a few behaviors, measure reporting, and invest in the controls that catch what people miss.</p>

                <p>If you want an outside view of your security program, Yellow Coop’s fractional CTO engagements cover exactly this kind of practical review. See <a href="/what-we-do/">what we do</a>, <a href="/how-we-engage/">how we engage</a>, or <a href="/contact/">get in touch</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.sysnet.ucsd.edu/~voelker/pubs/phishtrain-oakland25.pdf">Understanding the Efficacy of Phishing Training in Practice</a> — Lin Liu, Grant Ho, Ariana Mirian, Elisa Luo, Khang Tong, Euyhyun Lee, Christopher A. Longhurst, Christian Dameff, Stefan Savage, and Geoffrey M. Voelker, 2025 IEEE Symposium on Security and Privacy (PDF)</li>
                    <li><a href="https://today.ucsd.edu/story/cybersecurity-training-programs-dont-prevent-employees-from-falling-for-phishing-scams">Cybersecurity Training Programs Don’t Prevent Employees from Falling for Phishing Scams</a> — UC San Diego Today, September 17, 2025</li>
                    <li><a href="https://www.cisa.gov/sites/default/files/2023-10/Phishing%20Guidance%20-%20Stopping%20the%20Attack%20Cycle%20at%20Phase%20One_508c.pdf">Phishing Guidance: Stopping the Attack Cycle at Phase One</a> — CISA, NSA, FBI, and MS-ISAC, October 2023 (PDF)</li>
                    <li><a href="https://csrc.nist.gov/pubs/sp/800/50/r1/final">SP 800-50 Rev. 1, Building a Cybersecurity and Privacy Learning Program</a> — NIST, September 12, 2024</li>
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
