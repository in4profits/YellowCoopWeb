<?php
$title = 'Zenity Labs Took Over Every AWS AgentCore Agent in an Account and Region With One Prompt — Scope Each AI Agent\'s Permissions Like an Employee\'s — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'One prompt to one public AWS AgentCore agent exposed every agent in its account and region. What owners and operators should check in their own AI agents.';
$meta_keywords = 'AI agent security, AWS Bedrock AgentCore, least privilege AI agents, AgentCorruption, AI agent permissions, cloud credentials for AI agents';
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
                <img class="hero" src="/posts/images/aws-agentcore-agentcorruption-ai-agent-permissions-hero.webp" alt="Zenity Labs Took Over Every AWS AgentCore Agent in an Account and Region With One Prompt — Scope Each AI Agent's Permissions Like an Employee's">
                <h1>Zenity Labs Took Over Every AWS AgentCore Agent in an Account and Region With One Prompt — Scope Each AI Agent's Permissions Like an Employee's</h1>
                <p class="meta">2026-10-10</p>

                <p><strong>The takeaway:</strong> A customer-facing AI agent is only as safe as the permissions it carries. On October 8, 2026, security firm Zenity Labs showed that a single chat message to one public AWS agent could unlock every other agent in the same account and region, because they all shared one overly broad default role. AWS has since tightened that default, but the lesson applies to any agent you run: give each one only the access its job needs.</p>

                <h2>What happened</h2>
                <p>Amazon Bedrock AgentCore is AWS’s managed service for building and running AI agents. On October 8, 2026, Zenity Labs, an AI agent security vendor, disclosed a chain of flaws it calls “AgentCorruption” (<a href="https://zenity.io/press-release/zenity-labs-discloses-agentcorruption-a-chain-of-aws-agentcore-flaws">Zenity press release, Oct. 8, 2026</a>). The research was presented at the SecTor 2026 conference in Toronto (<a href="https://thenextweb.com/news/aws-agentcore-zenity-agentcorruption-one-prompt-agents">The Next Web, Oct. 8, 2026</a>).</p>
                <p>As Zenity tells it, the chain had two parts:</p>
                <ol>
                    <li><strong>The agent could reach its machine’s credential service.</strong> Cloud servers have an internal “metadata service” (AWS calls it IMDS) that hands out temporary login credentials to software running on that machine. Zenity’s prompt asked a public support agent to fetch that address, and the agent returned the credentials (<a href="https://zenity.io/press-release/zenity-labs-discloses-agentcorruption-a-chain-of-aws-agentcore-flaws">Zenity press release, Oct. 8, 2026</a>). This is a form of server-side request forgery (SSRF): tricking a server into making a request on the attacker’s behalf (<a href="https://www.theregister.com/security/2026/10/09/aws-agentcore-security-undone-by-prompt-requesting-credentials/5302436">The Register, Oct. 9, 2026</a>).</li>
                    <li><strong>Those credentials belonged to a role that covered every agent.</strong> The default AgentCore role was scoped to all AgentCore resources in the account and region, not to the single agent (<a href="https://www.theregister.com/security/2026/10/09/aws-agentcore-security-undone-by-prompt-requesting-credentials/5302436">The Register, Oct. 9, 2026</a>).</li>
                </ol>
                <p>With that role, Zenity says it could invoke internal agents it was never meant to reach, read private conversations, pull secrets from AWS Secrets Manager, and plant “memories” that persistently changed agent behavior (<a href="https://labs.zenity.io/post/agentcorruption-how-a-single-prompt-collapsed-the-entire-cloud-security-model">Zenity Labs blog, Oct. 8, 2026</a>). The Next Web adds that the researchers downloaded each agent’s container image and source code (<a href="https://thenextweb.com/news/aws-agentcore-zenity-agentcorruption-one-prompt-agents">The Next Web, Oct. 8, 2026</a>).</p>

                <h2>The fix took nine months</h2>
                <p>Zenity’s published timeline (<a href="https://labs.zenity.io/post/agentcorruption-how-a-single-prompt-collapsed-the-entire-cloud-security-model">Zenity Labs blog, Oct. 8, 2026</a>):</p>
                <ul>
                    <li><strong>December 25, 2025:</strong> Zenity reports the metadata-service access to AWS.</li>
                    <li><strong>January 12, 2026:</strong> Zenity reports the overprivileged default role.</li>
                    <li><strong>February 14, 2026:</strong> AgentCore switches to IMDSv2 only for newly deployed agents (per AWS’s reply to Zenity). IMDSv2 requires a session token for each request, which blocks simple forged requests.</li>
                    <li><strong>April 12, 2026:</strong> AWS closes the first report as “informative.”</li>
                    <li><strong>June 22, 2026:</strong> Zenity finds the default role unchanged.</li>
                    <li><strong>September 29, 2026:</strong> Zenity finds AWS has removed the permissions to invoke other agents, read conversations and access Secrets Manager.</li>
                </ul>
                <p>The Register independently reported the same sequence (<a href="https://www.theregister.com/security/2026/10/09/aws-agentcore-security-undone-by-prompt-requesting-credentials/5302436">The Register, Oct. 9, 2026</a>), and The Next Web noted the disclosure includes no CVE identifier (<a href="https://thenextweb.com/news/aws-agentcore-zenity-agentcorruption-one-prompt-agents">The Next Web, Oct. 8, 2026</a>).</p>
                <p><strong>Important:</strong> the IMDSv2 change applies to <em>newly deployed</em> agents. If you deployed AgentCore agents before February 14, 2026, or customized their roles, don’t assume the new defaults reached you.</p>

                <h2>Why this matters beyond AWS</h2>
                <p>AWS’s own documentation states the core risk plainly: “any code or actor running inside the VM can access these credentials by calling the metadata endpoint” (<a href="https://docs.aws.amazon.com/bedrock-agentcore/latest/devguide/security-credentials-management.html">AWS AgentCore credentials documentation</a>). An AI agent that can browse, run code or make web requests can be talked into doing things. The question is how much damage it can do once it is.</p>
                <p>The same pattern shows up wherever a business wires an agent into tools with a shared API key or an admin account. The blast radius is set by the credentials, not by the prompt.</p>

                <h2>What to check this week</h2>
                <h3>If you run agents on AWS AgentCore</h3>
                <ul>
                    <li><strong>Redeploy or verify older agents</strong> so they run with IMDSv2 only (<a href="https://labs.zenity.io/post/agentcorruption-how-a-single-prompt-collapsed-the-entire-cloud-security-model">Zenity Labs blog, Oct. 8, 2026</a>).</li>
                    <li><strong>Give each agent its own execution role</strong> with least privilege, and make sure that role has “equal or fewer privileges than the users who can invoke it” (<a href="https://docs.aws.amazon.com/bedrock-agentcore/latest/devguide/security-credentials-management.html">AWS AgentCore credentials documentation</a>).</li>
                    <li><strong>Restrict who can invoke agents</strong> and scope invoke permissions to specific runtime resources (<a href="https://docs.aws.amazon.com/bedrock-agentcore/latest/devguide/runtime-security-best-practices.html">AWS AgentCore Runtime security best practices</a>).</li>
                </ul>
                <h3>For any AI agent, on any platform</h3>
                <ul>
                    <li><strong>Separate public agents from internal ones.</strong> A chatbot on your website should not share credentials with the agent that reads your finance data.</li>
                    <li><strong>Keep secrets out of the agent’s reach</strong> unless the task truly requires them, and rotate any that were exposed.</li>
                    <li><strong>Review agent memory and logs</strong> for instructions you didn’t put there.</li>
                    <li><strong>Ask vendors one question:</strong> “If this agent is tricked, what can its credentials touch?”</li>
                </ul>

                <h2>Soft next step</h2>
                <p>AgentCorruption is patched, but the design lesson isn’t AWS-specific. Treat every AI agent like a new hire: its own account, only the access its job needs, and someone watching what it does. If you’d like a second set of eyes on how your agents and cloud permissions are set up, <a href="/what-we-do/">Yellow Coop</a>’s <a href="/how-we-engage/">fractional CTO</a> and <a href="/what-we-do/#innovate">AI teams</a> can help you map the blast radius before someone else does.</p>
                <p>See cloud and security work in our <a href="/track-record/">track record</a>, including the <a href="/track-record/cloud-security-delivery-turnaround.php">Cloud, Security &amp; Delivery Turnaround</a> and <a href="/track-record/zero-trust-security-program.php">Zero Trust Security Program</a> case studies; see <a href="/cio-vs-cto-vs-ciso/">who owns agent security</a>; or start at <a href="/contact/">contact</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/what-we-do/#innovate">Innovate</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/track-record/cloud-security-delivery-turnaround.php">Cloud, Security &amp; Delivery Turnaround</a>, <a href="/track-record/zero-trust-security-program.php">Zero Trust Security Program</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://zenity.io/press-release/zenity-labs-discloses-agentcorruption-a-chain-of-aws-agentcore-flaws">Zenity: Zenity Labs Discloses AgentCorruption, a Chain of AWS AgentCore Flaws (press release)</a> — Oct 8, 2026</li>
                    <li><a href="https://labs.zenity.io/post/agentcorruption-how-a-single-prompt-collapsed-the-entire-cloud-security-model">Tamir Ishay Sharbat and Lana Salameh: AgentCorruption: How A Single Prompt Collapsed The Entire Cloud Security Model</a> — Zenity Labs, Oct 8, 2026</li>
                    <li><a href="https://www.theregister.com/security/2026/10/09/aws-agentcore-security-undone-by-prompt-requesting-credentials/5302436">Thomas Claburn: AWS AgentCore security undone by prompt requesting credentials</a> — The Register, Oct 9, 2026</li>
                    <li><a href="https://thenextweb.com/news/aws-agentcore-zenity-agentcorruption-one-prompt-agents">Zenity says one prompt took over every AgentCore agent in an AWS account</a> — The Next Web, Oct 8, 2026</li>
                    <li><a href="https://docs.aws.amazon.com/bedrock-agentcore/latest/devguide/security-credentials-management.html">AWS documentation: Understanding Credentials Management in Amazon Bedrock AgentCore</a> — accessed Oct 10, 2026</li>
                    <li><a href="https://docs.aws.amazon.com/bedrock-agentcore/latest/devguide/runtime-security-best-practices.html">AWS documentation: Security best practices for AgentCore Runtime</a> — accessed Oct 10, 2026</li>
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
