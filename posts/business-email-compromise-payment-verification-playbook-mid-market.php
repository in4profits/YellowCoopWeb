<?php
$title = 'How to Stop Business Email Compromise: A Payment Verification Playbook for Mid-Market Owners and Operators — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'BEC losses reported to the FBI topped $3 billion in 2025. A payment playbook: callbacks to known numbers, dual approval, and a fast bank recall plan.';
$meta_keywords = 'business email compromise prevention, vendor payment fraud, wire fraud prevention, payment verification callback, BEC incident response';
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
                <img class="hero" src="/posts/images/business-email-compromise-payment-verification-playbook-mid-market-hero.webp" alt="How to Stop Business Email Compromise: A Payment Verification Playbook for Mid-Market Owners and Operators">
                <h1>How to Stop Business Email Compromise: A Payment Verification Playbook for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-20</p>

                <p><strong>The takeaway:</strong> Business email compromise is a payment-process problem wearing an email costume. The fix isn’t a smarter spam filter. It’s three rules nobody gets to skip: no change to where money goes takes effect because of an email, every change is confirmed by calling a number you already had on file, and a second person approves any payment headed somewhere new. Add a plan for the moment money leaves, because recovery depends on speed.</p>

                <h2>What business email compromise is, and how much it costs</h2>
                <p>The FBI defines business email compromise (BEC) as a scam aimed at businesses and individuals who work with suppliers or regularly make wire transfers. Fraudsters compromise email, phone, or video meeting accounts through trickery or hacking, then move the money (<a href="https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf">FBI IC3 2025 Internet Crime Report</a>).</p>
                <p>In 2025, victims filed 24,768 BEC complaints with the FBI’s Internet Crime Complaint Center (IC3) and reported $3,046,598,558 in losses. That’s second only to investment fraud and up from $2,770,151,146 in 2024 (same report). These are reported losses only.</p>
                <p>The Association for Financial Professionals (AFP) surveyed 465 U.S. treasury practitioners in January 2026 and released the results April 14, 2026. 74% said BEC affected their organization in 2025 (<a href="https://www.financialprofessionals.org/about/learn-more/press-releases/Details/over-75-percent-of-us-firms-experienced-payments-fraud-in-2025-while-ai-adoption-for-fraud-mitigation-lags">AFP</a>). AFP says fraudsters mostly pose as vendors or executives asking to change payment instructions. Among organizations under $1 billion in revenue that experienced payments fraud, 48% took a loss, and 24% of those recovered nothing (<a href="https://7185359.hs-sites.com/hubfs/Research%20Surveys/SURVEYS/2026%20AFP%20Payments%20Fraud%20and%20Control%20Survey%20Report%20Highlights.pdf">AFP report highlights</a>).</p>

                <h2>Step 1: Map every place a payment instruction can change</h2>
                <p>List the doors first. For most mid-market companies they are:</p>
                <ul>
                    <li>Vendor bank detail changes and new vendor setup</li>
                    <li>“Urgent” payment requests that seem to come from an executive</li>
                    <li>Employee direct-deposit changes</li>
                    <li>Large one-off transfers, like deal closings</li>
                </ul>
                <p>For each, write down who can make the change and what proof they need. If the answer is “an email,” that’s your first gap.</p>

                <h2>Step 2: Make the callback rule non-negotiable</h2>
                <p>Out-of-band verification means confirming through a different channel than the request used. The FBI’s guidance is specific: verify payment changes in person or with a known phone number (<a href="https://www.ic3.gov/PSA/2020/PSA200406">IC3 PSA, April 6, 2020</a>), and use previously known numbers, not the ones in the email request (<a href="https://www.ic3.gov/PSA/2017/PSA170504">IC3 PSA, May 4, 2017</a>).</p>
                <p>AFP’s report quotes an anonymous respondent’s near miss. Someone posing as a client sent new bank details, and accounts payable “called the number on the email to confirm.” Only a system glitch kept the money going to the real account.</p>
                <p>Make the rule concrete:</p>
                <ul>
                    <li>Pull the number from your vendor file or a signed contract, never the request.</li>
                    <li>Confirm the full new account details, not just “did you send this?”</li>
                    <li>Log who called, when, and who answered.</li>
                    <li>Hold the change for a set period (we suggest at least one business day) before the first payment goes out.</li>
                </ul>

                <h2>Step 3: Require two people for money going somewhere new</h2>
                <p>The FBI suggests a secondary sign-off by company staff when a vendor’s payment location changes (<a href="https://www.ic3.gov/PSA/2017/PSA170504">IC3 PSA, 2017</a>). In practice:</p>
                <ul>
                    <li>The person who edits vendor bank details can’t also release payments.</li>
                    <li>Your banking portal requires dual approval above a set amount and for any new payee.</li>
                    <li>Executives follow the same rule. A CFO who can skip the callback is the one fraudsters will impersonate.</li>
                </ul>

                <h2>Step 4: Train for pressure, not just bad grammar</h2>
                <p>The FBI tells businesses to watch for requests for secrecy, pressure to act fast, and sudden changes in how a contact communicates, such as a switch to a personal email address (<a href="https://www.ic3.gov/PSA/2017/PSA170504">IC3 PSA, 2017</a>).</p>
                <p>Video isn’t proof either. In a case Hong Kong police described in February 2024, a finance employee at engineering firm Arup’s Hong Kong office joined a video call with what looked like the CFO and other colleagues. Police said all of them were deepfake re-creations, and the employee sent about $25.6 million across 15 transactions. Arup confirmed to CNN that “fake voices and images were used” (<a href="https://www.cnn.com/2024/05/16/tech/arup-deepfake-scam-loss-hong-kong-intl-hnk">CNN, May 16, 2024</a>). Same fix: hang up and call back on a number you already have.</p>

                <h2>Step 5: Tighten the email side</h2>
                <p>The FBI recommends multi-factor authentication on all email accounts (<a href="https://www.ic3.gov/PSA/2020/PSA200406">IC3 PSA, 2020</a>) and registering domains that are close misspellings of yours (<a href="https://www.ic3.gov/PSA/2017/PSA170504">IC3 PSA, 2017</a>). Know the limit: AFP found 39% of organizations still receive genuine emails that fraudsters intercepted. A message from a hijacked real account passes sender checks, which is why Step 2 matters more.</p>

                <h2>Step 6: Plan for the moment money goes out</h2>
                <p>The FBI’s advice is blunt: “time is of the essence.” Contact your bank right away to request a recall of the funds, then file a complaint at <a href="https://www.ic3.gov">ic3.gov</a> no matter the amount (<a href="https://www.ic3.gov/PSA/2024/PSA240911">IC3 PSA, September 11, 2024</a>).</p>
                <p>Speed works. In 2025, the IC3’s Recovery Asset Team acted on 3,900 incidents involving $1,163,919,846 in attempted theft and froze $679,013,183, which IC3 reports as a 58% success rate. In one April 2025 case, an Oregon city government office lost more than $6 million to BEC. The receiving account was already frozen from an earlier complaint, so the receiving bank alerted the city’s bank, which recalled the wire (<a href="https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf">IC3 2025 report</a>).</p>
                <p>Put your bank’s fraud line and who makes the call on one printed page.</p>

                <h2>Five questions for your controller or AP lead this week</h2>
                <ol>
                    <li>Can a vendor’s bank details change on an email alone?</li>
                    <li>Where does the callback number come from?</li>
                    <li>Can one person both change a payee and release a payment?</li>
                    <li>What’s our dual-approval threshold at the bank?</li>
                    <li>Who calls the bank if a wire goes wrong?</li>
                </ol>

                <h2>Where outside help fits</h2>
                <p>A written incident response plan with a leadership tabletop exercise, cyber insurance application support with a control gap list, and vendor risk reviews are part of Yellow Coop’s Secure work (<a href="/what-we-do/#secure">what we do</a>). It comes as virtual advisory, fractional, or interim leadership (<a href="/how-we-engage/">how we engage</a>). If your payment controls live in someone’s head, <a href="/contact/">book a 20-minute call</a>.</p>
                <p>Internal links: <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/contact/">Contact</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf">2025 IC3 Annual Report</a> — Federal Bureau of Investigation, Internet Crime Complaint Center (2026); BEC definition, 2023–2025 BEC complaint and loss figures, Recovery Asset Team Financial Fraud Kill Chain results, and Oregon case</li>
                    <li><a href="https://www.financialprofessionals.org/about/learn-more/press-releases/Details/over-75-percent-of-us-firms-experienced-payments-fraud-in-2025-while-ai-adoption-for-fraud-mitigation-lags">Over 75% of US Firms Experienced Payments Fraud in 2025, While AI Adoption for Fraud Mitigation Lags</a> — Association for Financial Professionals, press release, April 14, 2026; 2026 AFP Payments Fraud and Control Survey, 465 U.S. treasury practitioners, January 2026, underwritten by Truist</li>
                    <li><a href="https://7185359.hs-sites.com/hubfs/Research%20Surveys/SURVEYS/2026%20AFP%20Payments%20Fraud%20and%20Control%20Survey%20Report%20Highlights.pdf">2026 AFP Payments Fraud and Control Survey Report: Key Highlights</a> (PDF) — Association for Financial Professionals; loss and recovery figures, intercepted email finding, and respondent quote</li>
                    <li><a href="https://www.ic3.gov/PSA/2017/PSA170504">Business E-mail Compromise E-mail Account Compromise: The 5 Billion Dollar Scam</a> — FBI IC3, Public Service Announcement I-050417-PSA, May 4, 2017</li>
                    <li><a href="https://www.ic3.gov/PSA/2020/PSA200406">Cyber Criminals Conduct Business Email Compromise through Exploitation of Cloud-Based Email Services</a> — FBI IC3, Public Service Announcement, April 6, 2020</li>
                    <li><a href="https://www.ic3.gov/PSA/2024/PSA240911">Business Email Compromise: The $55 Billion Scam</a> — FBI IC3, Public Service Announcement I-091124-PSA, September 11, 2024</li>
                    <li><a href="https://www.cnn.com/2024/05/16/tech/arup-deepfake-scam-loss-hong-kong-intl-hnk">British engineering giant Arup revealed as $25 million deepfake scam victim</a> — Kathleen Magramo, CNN Business, May 16, 2024</li>
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
