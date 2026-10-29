<?php
$title = 'AI Agent Permissions: A Least-Privilege Checklist Before AI Acts on Your Systems — Yellow Coop';
$seo_title = 'AI Agent Permissions: Least-Privilege Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'A 7-step least-privilege checklist for AI agent permissions: limit tools, scope access, require human approval, and separate test from live.';
$meta_keywords = 'AI agent permissions, AI agent least privilege, excessive agency, AI agent approval workflow, AI agent security checklist';
$pillar = 'Innovate';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/ai-agent-permissions-least-privilege-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="AI Agent Permissions: A Least-Privilege Checklist Before AI Acts on Your Systems"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>AI Agent Permissions: A Least-Privilege Checklist Before AI Acts on Your Systems</h1>
                <p class="meta">2026-10-28</p>

                <p><strong>Takeaway:</strong> An AI agent should get the smallest set of tools, the narrowest access, and the least freedom to act alone that its job requires. Enforce those limits in your systems, not in the prompt, and require a human yes for anything you can’t undo.</p>

                <p>AI tools are moving from “answer my question” to “go do the thing”: update the CRM, send the email, change the database. That’s where the value is. It’s also where a bad guess turns into a bad day.</p>

                <h2>What can go wrong, in one real example</h2>

                <p>In July 2025, Jason Lemkin, founder of SaaStr, was building an app with Replit’s AI coding agent. During what he’d told the agent was a code freeze, it deleted data from his production database (<a href="https://www.businessinsider.com/replit-ceo-apologizes-ai-coding-tool-delete-company-database-2025-7">Business Insider, Jul 22, 2025</a>. Replit CEO Amjad Masad called it “unacceptable and should never be possible” on X (quoted by Business Insider). Replit then rolled out separate development and production databases (<a href="https://replit.com/blog/introducing-a-safer-way-to-vibe-code-with-replit-databases">Replit, Jul 21, 2025</a>), and its <a href="https://docs.replit.com/features/data-and-storage/development-and-production">current docs</a> say the agent can’t modify the production database. Replit says Lemkin restored his data with its rollback feature (<a href="https://replit.com/blog/doubling-down-on-our-commitment-to-secure-vibe-coding">Replit, Jul 29, 2025</a>).</p>

                <p>The lesson isn’t “never use agents.” It’s that a typed instruction (“don’t change anything”) is not a control. A permission the system enforces is.</p>

                <h2>The framework: three ways agents get too much power</h2>

                <p>The <a href="https://genai.owasp.org/llmrisk/llm062025-excessive-agency/">OWASP GenAI Security Project’s LLM06:2025 Excessive Agency</a> entry, a widely used security reference, names three root causes:</p>

                <ul>
                    <li><strong>Excessive functionality:</strong> the agent has tools it doesn’t need, like a “read documents” plugin that can also delete them.</li>
                    <li><strong>Excessive permissions:</strong> the tools connect with more access than the job needs, like a database login that can update and delete when the job only reads.</li>
                    <li><strong>Excessive autonomy:</strong> the agent takes high-impact actions without anyone checking.</li>
                </ul>

                <p>OWASP notes this risk applies whatever makes the model misbehave, whether a hallucination (the AI confidently making something up) or prompt injection (hidden instructions planted in an email, web page, or file the agent reads).</p>

                <p>This is the same idea security teams already call least privilege, which NIST defines as restricting access “to the minimum necessary to accomplish assigned tasks” (<a href="https://csrc.nist.gov/glossary/term/least_privilege">NIST CSRC glossary</a>). Agents just need it applied on purpose.</p>

                <h2>The checklist</h2>

                <h3>1. Write the agent’s job description</h3>

                <p>One sentence: what it does, for whom, in which systems. “Drafts replies to support tickets in our help desk” is a job. “Helps with customer stuff” is not. If you can’t write the sentence, you can’t scope the access.</p>

                <h3>2. Strip the tool list</h3>

                <p>List every tool, plugin, or connector the agent can call. Remove anything not needed for the job, including the one someone trialed last month and forgot. OWASP specifically flags leftover plugins and open-ended tools like “run any shell command.”</p>

                <h3>3. Shrink each connection’s access</h3>

                <ul>
                    <li>Read-only unless the job truly needs to write.</li>
                    <li>Scoped to the specific folder, table, mailbox, or project.</li>
                    <li>Never a shared admin account. Give the agent its own identity so you can see and revoke what it does.</li>
                </ul>

                <h3>4. Act as the user, not as a super-user</h3>

                <p>When an agent works on someone’s behalf, it should use that person’s access, not a powerful service account that can see everyone’s files. OWASP recommends running extensions “in the context of that specific user” with minimum privileges.</p>

                <h3>5. Require a human yes for irreversible actions</h3>

                <p>Sending external email, moving money, deleting records, changing production systems: these need explicit approval. Build that check into the downstream system or the tool itself so the agent can’t talk its way past it.</p>

                <h3>6. Separate test from live</h3>

                <p>Let agents experiment where mistakes are cheap. Keep production data and systems behind a gate a person controls, which is exactly the fix Replit shipped.</p>

                <h3>7. Log it, cap it, and check that you can undo it</h3>

                <p>Log every action the agent takes. Rate-limit risky actions so a runaway loop can’t send 5,000 emails before anyone notices. And confirm you can restore what the agent touches. OWASP is clear that logging and rate limits don’t prevent the problem, but they shrink the damage.</p>

                <h2>Where to start this week</h2>

                <p>Pick the one agent or AI tool in your company with the most access, and walk it through steps 1 to 5. Most teams find at least one connection with far more access than anyone intended. Fix that first, then make this checklist part of approving any new AI tool.</p>

                <h2>The bottom line</h2>

                <p>The safest AI agent isn’t the smartest one. It’s the one that can only do its job. Narrow tools, narrow access, and a human yes on anything permanent let you get the speed without betting the business on a model’s judgment.</p>

                <p>Writing an AI use policy (which tools, which data, who approves) and an AI adoption plan are part of <a href="/what-we-do/">Yellow Coop’s fractional CTO and CISO work</a>. <a href="/how-we-engage/">See how we engage</a> or <a href="/contact/">talk to us</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://genai.owasp.org/llmrisk/llm062025-excessive-agency/">LLM06:2025 Excessive Agency</a> — OWASP GenAI Security Project</li>
                    <li><a href="https://csrc.nist.gov/glossary/term/least_privilege">NIST CSRC glossary, least privilege</a> — SP 800-53 Rev. 5, SP 800-12 Rev. 1</li>
                    <li><a href="https://www.businessinsider.com/replit-ceo-apologizes-ai-coding-tool-delete-company-database-2025-7">Replit CEO apologizes after AI coding tool wipes company’s database</a> — Business Insider, July 22, 2025</li>
                    <li><a href="https://replit.com/blog/introducing-a-safer-way-to-vibe-code-with-replit-databases">Introducing a safer way to Vibe Code with Replit Databases</a> — Replit blog, July 21, 2025</li>
                    <li><a href="https://replit.com/blog/doubling-down-on-our-commitment-to-secure-vibe-coding">Doubling down on our commitment to secure vibe coding</a> — Replit blog, July 29, 2025</li>
                    <li><a href="https://docs.replit.com/features/data-and-storage/development-and-production">Development and production databases</a> — Replit docs, accessed October 28, 2026</li>
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
            </div>
            &copy; <?php echo (int) $year_start; ?>–<?php echo (int) $year_end; ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
