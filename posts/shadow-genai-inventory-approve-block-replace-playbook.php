<?php
$title = 'How to Inventory Shadow GenAI: Approve, Block, or Replace for Mid-Market Owners and Operators — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Find unsanctioned GenAI in use, decide approve/block/replace, and set data boundaries—an inventory playbook for owners and operators.';
$meta_keywords = 'shadow GenAI inventory, unsanctioned AI tools, GenAI acceptable use policy, AI data boundaries, GenAI data security, AI data loss prevention, credential hygiene, fractional CTO AI strategy, NIST AI 600-1 inventory, model-as-a-service data risk';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/shadow-genai-inventory-approve-block-replace-playbook-hero.webp" width="1280" height="720" fetchpriority="high" alt="How to Inventory Shadow GenAI: Approve, Block, or Replace for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>How to Inventory Shadow GenAI: Approve, Block, or Replace for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-15</p>

                <p><strong>The takeaway:</strong> Assume staff already use unsanctioned GenAI. Inventory what is in use, classify data that can leave, decide approve / block / replace, and write boundaries into policy and contracts. <a href="https://doi.org/10.6028/NIST.AI.600-1">NIST AI 600-1</a> (July 26, 2024) tells organizations to enumerate generative AI (GAI) systems. CISA’s joint <a href="https://www.cisa.gov/resources-tools/resources/ai-data-security-best-practices-securing-data-used-train-operate-ai-systems"><em>AI Data Security</em></a> guidance (May 2025) and the <a href="https://www.ftc.gov/policy/advocacy-research/tech-at-ftc/2024/01/ai-companies-uphold-your-privacy-confidentiality-commitments">FTC’s January 9, 2024 tech note</a> explain why data entering a model-as-a-service product is a business risk.</p>
                <p>Owners and operators do not need a “shadow AI” panic. They need a 30-day discovery pass and a short decision table.</p>

                <h2>Why inventory comes before policy</h2>
                <p>NIST AI 600-1’s GOVERN 1.6 actions tell organizations to enumerate GAI systems, adjust inventory fields for GAI risks, and define exemptions in policy. Entries should capture data provenance, known issues, human oversight roles, rights around personal or proprietary data, underlying foundation models/versions, and access modes.</p>
                <p>Its Data Privacy section describes how GAI can leak, generate, or correctly infer sensitive information — including training-data memorization. Information Security risks include lowered barriers for offensive cyber use. You cannot govern tools you have not listed.</p>
                <p>CISA, NSA, FBI, and partners’ <em>AI Data Security</em> CSI (May 2025) treats training and operating data as a critical supply-chain component. Practices include encryption, provenance tracking, secure storage, and access controls — plus attention to data supply chain integrity, poisoned data, and data drift.</p>

                <h2>Step 1 — Find what is already in use</h2>
                <p>Run discovery from four places in parallel (one week is enough for a first pass):</p>
                <ol>
                    <li><strong>Expense and card data.</strong> Look for AI, “Copilot,” “GPT,” “Claude,” transcription, and image-generation merchants.</li>
                    <li><strong>Identity and SSO logs.</strong> Which AI apps have OAuth grants or SCIM provisioning?</li>
                    <li><strong>Browser and endpoint signals.</strong> Extensions, unmanaged desktop apps, and browser destinations that process documents.</li>
                    <li><strong>A short staff survey.</strong> Ask what people already use for drafting, summarization, coding, support replies, and meeting notes — without punishing honesty on the first pass.</li>
                </ol>
                <p>Add AI features embedded in existing SaaS. NIST AI 600-1 also pushes inventories of third parties with access to organizational content and use-case-based supplier risk assessment.</p>

                <h2>Step 2 — Classify data boundaries</h2>
                <p>For each tool, answer:</p>
                <ul>
                    <li><strong>Allowed inputs:</strong> public marketing copy only? Internal process docs? Customer PII? Source code? Credentials (never)?</li>
                    <li><strong>Retention and training:</strong> Does the vendor train on your prompts or files? Can you opt out in writing?</li>
                    <li><strong>Access path:</strong> Browser only, API keys in a shared vault, or connectors into Drive/email/CRM?</li>
                </ul>
                <p>The FTC’s Office of Technology note (January 9, 2024) warns that model-as-a-service incentives to ingest more data can conflict with privacy commitments; customers may paste internal documents and even their users’ data into models; and firms can be liable when they break secondary-use promises or bury material facts. Treat “we don’t train on your data” as contract and configuration work.</p>
                <p>CISA stresses classifying data, access controls in deploy-and-use, and encryption proportional to need. Pair with credential hygiene: unique accounts, SSO where available, no shared API keys in chat.</p>

                <h2>Step 3 — Approve, block, or replace</h2>
                <p>Use a three-bucket table:</p>
                <table>
                    <tr><th>Decision</th><th>When it fits</th><th>What you still require</th></tr>
                    <tr><td><strong>Approve</strong></td><td>Clear business value; vendor meets data and auth bar; owner named</td><td>Written acceptable use; allowed data classes; monitoring owner</td></tr>
                    <tr><td><strong>Block</strong></td><td>Credentials or regulated data routinely pasted; no SSO/logging; vendor refuses retention answers</td><td>Network or IdP block; staff alternative named</td></tr>
                    <tr><td><strong>Replace</strong></td><td>Useful workflow, wrong risk profile</td><td>Approved enterprise SKU or self-hosted option with a migration date</td></tr>
                </table>
                <p>Update acceptable-use policy for proprietary and open-source GAI and third parties — NIST AI 600-1 GV-6.1-010. Review contracts for secondary data use, incident notice, and liability (GV-6.2-007). Prefer tools where logs and SSO ship in the baseline product.</p>

                <h2>Step 4 — Make the inventory durable</h2>
                <p>Revisit monthly for 90 days, then quarterly. Off-cycle triggers: new AI in a core SaaS product, a prompt/connector incident, a material vendor policy change, or a customer questionnaire on GenAI. Write residual risk when you approve a tool with known limits.</p>

                <h2>What good looks like in 90 days</h2>
                <p>You have a living GenAI inventory, a data boundary sheet, approve/block/replace decisions, and SSO or accepted exceptions. Fractional technology leadership helps when discovery and vendor terms need one owner next to IT and security — Secure and Innovate on <a href="/what-we-do/">what we do</a>, at virtual (1–4 hours/week), fractional (1–4 days/week), or interim on <a href="/how-we-engage/">how we engage</a>. See <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a> for who owns inventory versus the build roadmap.</p>
                <p>If GenAI is spreading faster than policy, <a href="/contact/">start with a 20-minute call</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/track-record/">Track Record</a>, <a href="/contact/">Contact</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://doi.org/10.6028/NIST.AI.600-1">Artificial Intelligence Risk Management Framework: Generative Artificial Intelligence Profile (NIST AI 600-1)</a> — NIST, Jul 2024 (<a href="https://nvlpubs.nist.gov/nistpubs/ai/NIST.AI.600-1.pdf">PDF</a>)</li>
                    <li><a href="https://www.cisa.gov/resources-tools/resources/ai-data-security-best-practices-securing-data-used-train-operate-ai-systems">AI Data Security: Best Practices for Securing Data Used to Train &amp; Operate AI Systems</a> — NSA AISC, CISA, FBI and international partners, May 2025 (<a href="https://www.ic3.gov/CSA/2025/250522.pdf">PDF</a>)</li>
                    <li><a href="https://www.ftc.gov/policy/advocacy-research/tech-at-ftc/2024/01/ai-companies-uphold-your-privacy-confidentiality-commitments">AI Companies: Uphold Your Privacy and Confidentiality Commitments</a> — FTC Office of Technology, Jan 9, 2024</li>
                    <li><a href="/what-we-do/">Fractional CIO, CTO &amp; CISO Services</a> — Yellow Coop</li>
                    <li><a href="/how-we-engage/">Virtual, Fractional &amp; Interim CIO and CTO</a> — Yellow Coop</li>
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
