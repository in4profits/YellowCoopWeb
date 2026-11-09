<?php
$title = 'Before You Turn On an AI Assistant Across Company Files: An Oversharing Cleanup Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'AI Oversharing Cleanup Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'AI assistants show staff every file they can already open. A six-step checklist to fix oversharing before you turn on Microsoft Copilot or Gemini.';
$meta_keywords = 'AI oversharing, Microsoft Copilot readiness, Gemini for Google Workspace security, file permissions cleanup, AI data access controls';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/ai-assistant-oversharing-permissions-cleanup-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="A bright yellow sphere sits in a black mesh sieve hovering over a dark ceramic bowl on a slate surface"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Before You Turn On an AI Assistant Across Company Files: An Oversharing Cleanup Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-11-09 · By the Yellow Coop Team</p>

                <p><strong>The takeaway:</strong> Workplace AI assistants such as Microsoft Copilot and Gemini in Google Workspace only show people what they already have permission to open. That sounds safe until you remember how many files are shared with "everyone." AI doesn't create your oversharing problem. It makes it searchable. Fix the permissions before you flip the switch.</p>

                <h2>The permission promise, and its catch</h2>

                <p>Both big vendors are clear about how their assistants handle access. Microsoft says its assistant "only surfaces organizational data to which individual users have at least view permissions" (<a href="https://learn.microsoft.com/en-us/copilot/microsoft-365/microsoft-365-copilot-privacy">Microsoft Learn, Data, Privacy, and Security for Microsoft Copilot, updated November 4, 2026</a>). Google says, "If the user doesn't have access to a document or email, Gemini will not retrieve that content" (<a href="https://knowledge.workspace.google.com/admin/generative-ai/generative-ai-in-google-workspace-privacy-hub">Google Workspace Admin Help, Generative AI in Google Workspace Privacy Hub, accessed November 9, 2026</a>).</p>

                <p>Here's the catch: having permission isn't the same as being meant to see something. That compensation spreadsheet someone shared with the whole company in 2019 was protected mostly by obscurity, because nobody knew where to look. An assistant that cheerfully answers "What does the sales team get paid?" removes the obscurity.</p>

                <p><strong>Oversharing</strong>, in plain words, is access broader than anyone intended: files shared with the entire company, "anyone with the link" sharing, old project sites that still include former team members, and outside guests nobody removed.</p>

                <p>Microsoft takes this seriously enough that its deployment guidance for Copilot, a blueprint called Secure &amp; Governed Data Foundation for Microsoft Copilot (<a href="https://learn.microsoft.com/en-us/copilot/microsoft-365/microsoft-365-copilot-blueprint-oversharing">Microsoft Learn, updated November 3, 2026</a>), lists "Remediate oversharing" as its first pillar.</p>

                <h2>Why this is a leadership decision, not an IT ticket</h2>

                <p>The <a href="https://genai.owasp.org/llmrisk/llm022025-sensitive-information-disclosure/">OWASP Top 10 for LLM Applications 2025</a> (released November 18, 2024) lists Sensitive Information Disclosure as risk LLM02. Its first access-control fix is to "limit access to sensitive data based on the principle of least privilege," meaning people get only the access their job requires. CISA's Cross-Sector Cybersecurity Performance Goals 2.0 (<a href="https://www.cisa.gov/cybersecurity-performance-goals-2-0-cpg-2-0">CISA, December 2025</a>) make the same point in goal 3.H and add a cadence: "Perform quarterly reviews of access permissions and role assignments." CISA rates that goal low cost, high impact, and simple to implement.</p>

                <p>IT can run the reports. Only leadership can decide who <em>should</em> see board materials, payroll, or the acquisition folder.</p>

                <h2>The cleanup checklist</h2>

                <h3>1. Name the files that would hurt</h3>

                <p>List the categories that would cause real damage if the wrong employee asked the assistant about them: payroll and compensation, HR investigations, performance reviews, legal matters, board and M&amp;A materials, customer contracts, and any health or financial data about people. Give each category a named owner.</p>

                <h3>2. Run the reports you already pay for</h3>

                <p>On Microsoft 365, SharePoint's data access governance reports flag sites with the broadest access, including sites with thousands of users, external guests, or "Everyone except external users" permissions (<a href="https://learn.microsoft.com/en-us/sharepoint/data-access-governance-reports">Microsoft Learn, Data access governance reports</a>). Microsoft's blueprint says SharePoint Advanced Management, the toolset behind these reports, is included with a Copilot license. On Google Workspace, the privacy hub points admins to built-in classification and data loss prevention (DLP) rules, which find sensitive content and act on it automatically.</p>

                <h3>3. Close the broad doors first</h3>

                <p>Remove company-wide and "anyone with the link" sharing from sensitive locations. Remove stale guests. Archive project sites nobody has touched in a year.</p>

                <h3>4. Lock down what's truly sensitive</h3>

                <p>For the files that must stay tight, use labels and rights controls, not just folder permissions. Microsoft says Copilot "honors the usage rights granted to the user" when files are encrypted through its Purview labels. Google says that if Information Rights Management blocks a user from downloading, printing, or copying a file, "Gemini will not retrieve those files or their content on the user's behalf."</p>

                <h3>5. Pilot with a small group, then test like a nosy employee</h3>

                <p>Turn the assistant on for a handful of people first. Have someone ask it the questions you'd hate to see answered: salaries, the reorg plan, a colleague's review. If it answers, fix the permission on the source file. Don't just tweak the prompt.</p>

                <h3>6. Make access review a habit</h3>

                <p>Schedule a quarterly review, as CISA recommends, with each data owner signing off on who can reach their files.</p>

                <h2>Three mistakes to skip</h2>

                <ul>
                    <li><strong>Relying on instructions to the AI.</strong> OWASP warns that restrictions written into an assistant's instructions "may not always be honored and could be bypassed via prompt injection or other methods." Permissions are the real control.</li>
                    <li><strong>Letting the license date set the schedule.</strong> Paying for seats before the cleanup is done pressures teams to skip it.</li>
                    <li><strong>Locking everything down.</strong> An assistant that can't see anything useful is an expensive search bar. Aim for right-sized access, not zero access.</li>
                </ul>

                <h2>The bottom line</h2>

                <p>AI assistants inherit your file permissions, good and bad. A few weeks of cleanup before rollout costs far less than explaining why the whole company can now ask about the CEO's compensation.</p>

                <p>Yellow Coop's Innovate work includes AI data readiness: picking the use case, naming data owners, and fixing quality and sharing permissions before you turn on AI. Our Secure work includes an AI use policy covering which tools, which data, and who approves. If nobody owns that today, our Fractional level puts a Yellow Coop leader on it part-time. <a href="https://yellowcoop.com/contact/">Let's talk</a>.</p>
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
