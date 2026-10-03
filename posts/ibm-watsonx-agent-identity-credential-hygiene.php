<?php
$title = 'IBM Just Gave Agents Their Own Identity — Stop Sharing Service Accounts With Software — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'IBM’s Agent Identity preview puts agents in your IdP. Treat agent credentials like prod access, not shared keys.';
$meta_keywords = 'AI agent governance, credential hygiene, AI ops control plane, agent sprawl, fractional CTO AI strategy';
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
                <img class="hero" src="/posts/images/ibm-watsonx-agent-identity-credential-hygiene-hero.webp" alt="IBM Just Gave Agents Their Own Identity — Stop Sharing Service Accounts With Software">
                <h1>IBM Just Gave Agents Their Own Identity — Stop Sharing Service Accounts With Software</h1>
                <p class="meta">2026-10-03</p>

                <p>IBM just made a quiet but important move in watsonx Orchestrate: <strong>Agent Identity</strong>, now in preview, gives each agent a unique, verifiable identity managed through the identity provider your security team already runs — IBM Verify or Microsoft Entra in the private preview (<a href="https://www.ibm.com/new/announcements/new-in-ibm-watsonx-orchestrate-expanded-third-party-agent-management-and-agent-identities">IBM</a>).</p>
                <p>Same release also stretches the AI Gateway across Microsoft Foundry and Google Gemini Enterprise Agent Platform (on top of Amazon Bedrock), so multi-cloud agent sprawl can sit in one inventory with one policy set. The headline owners and operators should hear is not “IBM shipped another control plane.” It is: <strong>stop letting agents borrow human credentials and hope the audit log sorts it out later.</strong></p>

                <h2>The operator takeaway</h2>
                <p>If an agent can act, it needs its own identity, least privilege, and a kill switch in the IdP — the same way you treat a privileged service, not a chat widget.</p>
                <p>Most teams still authenticate agents with shared service accounts, static API keys, or the user’s own credentials. That makes it hard to tell what a person did from what software did on their behalf, and it usually over-grants access for the task at hand. IBM’s framing is blunt: a distinct agent identity, short-lived tokens scoped to the task, and an audit trail that keeps the link between the requesting user, the agent, and the tool it called (<a href="https://www.ibm.com/new/announcements/new-in-ibm-watsonx-orchestrate-expanded-third-party-agent-management-and-agent-identities">IBM</a>).</p>

                <h2>Why this matters if you are not on watsonx</h2>
                <p>You do not need to buy IBM to absorb the lesson. Agent identity is becoming table stakes wherever agents touch Workday, Salesforce, email, or finance systems. If your current design is “the agent runs as Alice,” you have already decided that every agent failure is Alice’s blast radius.</p>
                <p>The multi-cloud piece is the second half of the same story. Enterprises build agents on more than one platform. Platform-native tooling only governs what lives on that platform. A cross-cloud inventory plus shared policies is how you find duplicate agents, retire the ones nobody owns, and stop pretending each cloud’s console is a security program (<a href="https://www.ibm.com/new/announcements/new-in-ibm-watsonx-orchestrate-expanded-third-party-agent-management-and-agent-identities">IBM</a>).</p>

                <h3>A practical agent-identity checklist</h3>
                <ol>
                    <li><strong>Inventory agents like services.</strong> Name, owner, purpose, platforms, data classes touched, and last review date. If it is not on the list, it does not get production credentials.</li>
                    <li><strong>Ban shared “agent” service accounts for anything sensitive.</strong> One agent, one identity. If you disable that identity in the IdP, the agent stops. Shared keys are how “temporary automation” becomes permanent liability.</li>
                    <li><strong>Scope tokens to the task, not the user.</strong> Prefer short-lived, narrowly scoped credentials over inheriting Alice’s entire SaaS admin entitlements. Over-privilege is the default failure mode of agent demos.</li>
                    <li><strong>Keep a three-party audit trail.</strong> User who requested → agent that acted → tool that executed. “Alice accessed Workday” is not enough when Alice’s agent did it while Alice was in a meeting.</li>
                    <li><strong>Put evaluation cost where risk lives.</strong> IBM’s same drop also lets tenants tune LLM-as-a-Judge sampling (toxicity, hallucination, helpfulness, and friends) instead of evaluating everything at full rate. That is an ops budget lever, not a science project — spend evaluation where reputational or financial risk concentrates (<a href="https://www.ibm.com/new/announcements/new-in-ibm-watsonx-orchestrate-expanded-third-party-agent-management-and-agent-identities">IBM</a>).</li>
                    <li><strong>Align CIO / CISO / CTO ownership early.</strong> Identity and access is usually CISO or CIO turf. Agent product design is CTO turf. If those seats do not share one policy, you get shadow agents with VIP keys. For how those roles split in smaller companies, see <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>.</li>
                </ol>

                <h2>Build vs buy without the theater</h2>
                <p>You do not need a full multi-cloud agent control plane tomorrow. You do need a stance:</p>
                <ul>
                    <li><strong>Buy / adopt platform identity features</strong> when agents already write to production systems of record.</li>
                    <li><strong>Build process first</strong> when you are still in human-watched pilots — but design the identity model before you widen blast radius.</li>
                    <li><strong>Avoid</strong> “we’ll just use the founder’s API key” as a temporary plan. Temporary keys are how incident timelines start.</li>
                </ul>

                <h2>Soft next step</h2>
                <p><a href="/what-we-do/">Yellow Coop</a> helps owners and operators put fractional CTO / CISO judgment around AI agents: who owns them, what they can touch, and how you prove it after the fact. If agents are starting to look like coworkers with admin rights, we can help you give them identities before they inherit yours. Start at <a href="/contact/">contact</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.ibm.com/new/announcements/new-in-ibm-watsonx-orchestrate-expanded-third-party-agent-management-and-agent-identities">watsonx Orchestrate Agent Identity / third-party agent management</a> — IBM</li>
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
