<?php
$title = 'Using AI in Hiring: A Risk Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Using AI in Hiring: A Risk Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Using AI to screen job candidates? A 7-step checklist: map AI use, test for bias, notify candidates, keep records, and vet vendors.';
$meta_keywords = 'AI in hiring, AI hiring compliance, AI resume screening bias, automated employment decision tools, AI hiring checklist';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/ai-hiring-tools-risk-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Using AI in Hiring: A Risk Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Using AI in Hiring: A Risk Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-11-08 · By the Yellow Coop Team</p>

                <p><strong>The takeaway:</strong> If software screens, scores, or ranks your job candidates, the hiring decision and the legal risk are still yours. Before you turn on an AI hiring feature, map where it touches decisions, test what it does to different groups, tell candidates, keep records, and make the vendor show its work.</p>

                <p>AI rarely arrives in hiring as a project. Your applicant tracking system (ATS, the software that collects and routes applications) adds "smart ranking," or a recruiter pastes 200 resumes into a chatbot and asks for the top ten. Nobody calls that a hiring AI project, but it is one.</p>

                <h2>Why this risk is real</h2>

                <p><strong>The research.</strong> University of Washington researchers Kyra Wilson and Aylin Caliskan tested three open-source AI language models on a simulated resume screen, using 554 resumes and 571 job descriptions across nine occupations and more than three million resume-to-job comparisons (<a href="https://arxiv.org/abs/2407.20371">Wilson &amp; Caliskan, arXiv, July 2024; presented at AIES, October 2024</a>). Across 27 tests, resumes with White-associated names were preferred in 85.1% of them and Black-associated names in 8.6%. Male-associated names were preferred in 51.9% of tests and female-associated names in 11.1%. These were three open-source models in a lab setup, not commercial hiring products. Results also shifted with resume length and how common a name was, so you can't predict a tool's behavior without testing it.</p>

                <p><strong>The litigation.</strong> In <em>Mobley v. Workday</em>, U.S. District Judge Rita F. Lin of the Northern District of California granted preliminary certification of an Age Discrimination in Employment Act (ADEA) collective action on May 16, 2025 (<a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.128.0.pdf">order, May 16, 2025</a>). The plaintiffs allege that Workday's AI applicant recommendation system discriminated against applicants. These are allegations, not findings. The court framed the central issue for that collective as whether the system has a "disparate impact" on applicants over forty, meaning a neutral-looking practice that disproportionately harms a protected group. That ADEA collective is separate from a class action. In a June 22, 2026 order, the court dismissed a race disparate-impact claim and claims about Workday's own hiring, and it let a disability claim and other Fair Employment and Housing Act claims proceed (<a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.360.0.pdf">order, June 22, 2026</a>). On September 14, 2026, the plaintiffs filed a separate motion to certify classes under Federal Rule of Civil Procedure 23 (<a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.418.0.pdf">motion, September 14, 2026</a>). As of November 8, 2026, that motion was pending. A July 13, 2026 scheduling order sets the opposition to the class motion, and any motion to decertify the ADEA collective, for November 10, 2026, with a hearing on March 9, 2027 (<a href="https://www.courtlistener.com/docket/66831340/mobley-v-workday-inc/">RECAP docket, entry 395</a>).</p>

                <h2>The rules already on the books</h2>

                <p>This is a quick map, not legal advice. Have employment counsel confirm what applies where you hire.</p>

                <ul>
                    <li><strong>New York City, Local Law 144.</strong> Enforcement began July 5, 2023. Employers can't use an automated employment decision tool unless it has had a bias audit within one year of use, a summary of that audit is public, and candidates get notice (<a href="https://www.nyc.gov/site/dca/about/automated-employment-decision-tools.page">NYC DCWP</a>). DCWP's own guidance says the notice must go out 10 business days before the tool is used. A December 2, 2025 audit by the New York State Comptroller found that DCWP had surveyed 32 companies and identified a single issue of non-compliance, while the auditors found at least 17 instances of potential non-compliance at the same companies (<a href="https://www.osc.ny.gov/state-agencies/audits/2025/12/02/enforcement-local-law-144-automated-employment-decision-tools">NYS Comptroller, Dec. 2, 2025</a>).</li>
                    <li><strong>Illinois, HB 3773 (Public Act 103-0804).</strong> Effective January 1, 2026. It's a civil rights violation for an employer to use AI that "has the effect of subjecting employees to discrimination" based on protected classes in recruiting, hiring, promotion, discipline, and similar decisions, or to use ZIP codes as a proxy for protected classes. The law also makes it a civil rights violation to fail to provide notice to an employee that the employer is using artificial intelligence for those purposes (<a href="https://www.ilga.gov/documents/legislation/publicacts/103/103-0804.htm">Illinois Public Act 103-0804</a>). In the statute, "employee" includes a person performing services for pay, an apprentice, and an applicant for an apprenticeship. It does not expressly include job applicants generally. The Department of Human Rights is directed to adopt rules on when notice is required, the time period, and how notice is given. It proposed rules in May 2026, described in the <a href="https://www.ilga.gov/documents/commission/jcar/flinn/20260515_May%2015,%202026%20-%20Issue%2020.pdf">May 15, 2026 JCAR Flinn Report</a>; proposed rules are not binding. As of November 8, 2026, we could not confirm final Illinois rules specifying notice timing and format or clarifying notice to job applicants; have employment counsel check current IDHR requirements.</li>
                    <li><strong>California, Civil Rights Council regulations.</strong> Effective October 1, 2025. They make clear that using an automated-decision system may violate state law if it harms applicants or employees based on protected characteristics. They also require employers to keep employment records, including automated-decision data, for at least four years (<a href="https://calcivilrights.ca.gov/2025/06/30/civil-rights-council-secures-approval-for-regulations-to-protect-against-employment-discrimination-related-to-artificial-intelligence/">California Civil Rights Department, June 30, 2025</a>). The state describes the rules as clarifying how existing anti-discrimination law applies to AI.</li>
                </ul>

                <h2>The checklist</h2>

                <h3>1. Map every place AI touches a hiring decision</h3>

                <p>Include ATS features, scheduling bots, video-interview scoring, assessments, and the chatbot your recruiter uses on the side. For each, ask one question: does it score, sort, rank, or screen people? If so, it's on the list.</p>

                <h3>2. Decide what AI may and may not do</h3>

                <p>Drafting job descriptions or scheduling interviews is low risk. Rejecting candidates with no person looking is high risk. Write those lines into your AI use policy.</p>

                <h3>3. Test outcomes by group, before and after go-live</h3>

                <p>Compare how often each group advances or gets rejected at each stage, and keep checking after launch. A tool covered by NYC's law needs an independent bias audit, not a vendor brochure. Watch for proxies: Illinois names ZIP codes outright, and graduation year could stand in for age.</p>

                <h3>4. Tell candidates and employees</h3>

                <p>Put a plain-language notice in job postings or the application flow that says what the tool does and what it looks at. New York City requires notice to candidates before a covered automated employment decision tool is used. Illinois requires notice to employees. Notice to job applicants is not a confirmed Illinois requirement; giving it anyway can be prudent.</p>

                <h3>5. Keep the records</h3>

                <p>Log the tool and version, settings, who reviewed the output, and the decision. California's four-year rule is a sensible baseline anywhere.</p>

                <h3>6. Make the vendor show its work</h3>

                <p>Ask the vendor:</p>

                <ul>
                    <li>Has the tool had a bias audit? Who did it, when, and on what data?</li>
                    <li>Can we see selection-rate data for our own applicants?</li>
                    <li>Can we turn off automatic rejection?</li>
                    <li>What happens to candidate data, and how long is it kept?</li>
                </ul>

                <h3>7. Keep a human with real authority</h3>

                <p>A reviewer who can only click "approve" is a rubber stamp. Give reviewers the time, information, and authority to overrule the tool, especially on rejections.</p>

                <h2>The bottom line</h2>

                <p>AI can save your recruiters real hours. It can't take the legal blame for you. Treat every hiring tool like a new interviewer: know what it's judging, check its results, and be ready to explain them.</p>

                <p>If a vendor is pitching AI for hiring and nobody in-house can evaluate the claims, that's the kind of work Yellow Coop does. Our Secure work includes an AI use policy covering which tools, which data, and who approves. At the Virtual level, we can give you a second opinion on vendors, contracts, and proposals before you sign. <a href="https://yellowcoop.com/contact/">Start with a conversation</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li>Kyra Wilson and Aylin Caliskan, "Gender, Race, and Intersectional Bias in Resume Screening via Language Model Retrieval," arXiv, July 2024 (AIES, October 2024): <a href="https://arxiv.org/abs/2407.20371">https://arxiv.org/abs/2407.20371</a></li>
                    <li><em>Mobley v. Workday, Inc.</em>, No. 23-cv-00770-RFL (N.D. Cal.), Order Granting Preliminary Collective Certification, May 16, 2025: <a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.128.0.pdf">https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.128.0.pdf</a></li>
                    <li><em>Mobley v. Workday, Inc.</em>, Order Granting in Part and Denying in Part Motion to Dismiss, June 22, 2026 (Dkt. 360): <a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.360.0.pdf">https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.360.0.pdf</a></li>
                    <li><em>Mobley v. Workday, Inc.</em>, Plaintiffs' Motion for Class Certification, filed September 14, 2026 (Dkt. 418): <a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.418.0.pdf">https://storage.courtlistener.com/recap/gov.uscourts.cand.408645/gov.uscourts.cand.408645.418.0.pdf</a></li>
                    <li><em>Mobley v. Workday, Inc.</em>, RECAP docket, scheduling order July 13, 2026 (entry 395; hearing March 9, 2027): <a href="https://www.courtlistener.com/docket/66831340/mobley-v-workday-inc/">https://www.courtlistener.com/docket/66831340/mobley-v-workday-inc/</a></li>
                    <li>NYC Department of Consumer and Worker Protection, Automated Employment Decision Tools (Local Law 144 of 2021; enforcement from July 5, 2023): <a href="https://www.nyc.gov/site/dca/about/automated-employment-decision-tools.page">https://www.nyc.gov/site/dca/about/automated-employment-decision-tools.page</a></li>
                    <li>Office of the New York State Comptroller, "Enforcement of Local Law 144 – Automated Employment Decision Tools," December 2, 2025: <a href="https://www.osc.ny.gov/state-agencies/audits/2025/12/02/enforcement-local-law-144-automated-employment-decision-tools">https://www.osc.ny.gov/state-agencies/audits/2025/12/02/enforcement-local-law-144-automated-employment-decision-tools</a></li>
                    <li>Illinois Public Act 103-0804 (HB 3773), enacted August 9, 2024, effective January 1, 2026: <a href="https://www.ilga.gov/documents/legislation/publicacts/103/103-0804.htm">https://www.ilga.gov/documents/legislation/publicacts/103/103-0804.htm</a></li>
                    <li>Illinois General Assembly, Joint Committee on Administrative Rules, The Flinn Report, Vol. 50, Issue 20, May 15, 2026 (proposed Department of Human Rights rules, 56 IAC 2520; 50 Ill. Reg. 6794; not a binding rule): <a href="https://www.ilga.gov/documents/commission/jcar/flinn/20260515_May%2015,%202026%20-%20Issue%2020.pdf">https://www.ilga.gov/documents/commission/jcar/flinn/20260515_May%2015,%202026%20-%20Issue%2020.pdf</a></li>
                    <li>California Civil Rights Department, "Civil Rights Council Secures Approval for Regulations…," June 30, 2025 (effective October 1, 2025): <a href="https://calcivilrights.ca.gov/2025/06/30/civil-rights-council-secures-approval-for-regulations-to-protect-against-employment-discrimination-related-to-artificial-intelligence/">https://calcivilrights.ca.gov/2025/06/30/civil-rights-council-secures-approval-for-regulations-to-protect-against-employment-discrimination-related-to-artificial-intelligence/</a></li>
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
                <span class="sep">·</span>
                <?php echo phone_link($site); ?>
            </div>
            &copy; <?php echo (int) $year_start; ?>–<?php echo (int) $year_end; ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
