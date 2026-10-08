<?php
$title = 'Meta and Sierra Want a Standard Front Door for AI Agents — Decide What Your Customers\' Bots Can Touch Before They Knock — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Meta and Sierra\'s Personal Agent Protocol wants to set rules for customers\' AI agents. Here\'s how to get your business agent-ready now.';
$meta_keywords = 'Personal Agent Protocol, AI agents and customer accounts, agentic commerce readiness, AI agent authentication, PACT protocol, fractional CTO AI strategy';
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
                <img class="hero" src="/posts/images/personal-agent-protocol-ai-agents-customer-access-hero.webp" alt="Meta and Sierra Want a Standard Front Door for AI Agents — Decide What Your Customers' Bots Can Touch Before They Knock">
                <h1>Meta and Sierra Want a Standard Front Door for AI Agents — Decide What Your Customers' Bots Can Touch Before They Knock</h1>
                <p class="meta">2026-10-08</p>

                <p>On October 6, 2026, Sierra, the enterprise AI startup co-founded by former Salesforce co-CEO Bret Taylor, announced the <strong>Personal Agent Protocol (PAP)</strong> with Meta. The partner list includes Genesys, Instinct, Rocket, Shopify, Stripe, and Walmart (<a href="https://sierra.ai/blog/introducing-personal-agent-protocol">Sierra, October 6, 2026</a>). The goal is shared rules for how <em>personal agents</em> (AI assistants that act for one consumer, like booking an appointment or changing an order) deal with businesses.</p>
                <p>The same day, Decagon, which builds AI agents for customer-service teams, open-sourced a related protocol called PACT (<a href="https://decagon.ai/blog/introducing-the-personal-agent-consent-trust-protocol-pact">Decagon, October 6, 2026</a>).</p>
                <p><strong>The takeaway for operators:</strong> your customers’ AI agents are already knocking. You don’t have to pick the winning standard this month. You do have to decide what an agent may see and do on a customer’s behalf, before a bot decides for you.</p>

                <h2>What PAP actually is (and isn’t yet)</h2>
                <p>Here’s what the announcement, written by Sierra co-founders Bret Taylor and Clay Bavor, describes (<a href="https://sierra.ai/blog/introducing-personal-agent-protocol">Sierra</a>):</p>
                <ul>
                    <li><strong>Discovery starts on your website.</strong> An agent learns what the company offers and how to reach it.</li>
                    <li><strong>Guest first.</strong> An agent can start without logging in, enough to check stock or ask about a returns policy.</li>
                    <li><strong>The customer controls access.</strong> When a task needs the account, the customer signs in on the company’s own page (or uses credentials already set up with their agent) and chooses read-only or write access.</li>
                    <li><strong>It’s built on OAuth.</strong> OAuth is the standard behind “Sign in with Google”: the business issues a limited, revocable token instead of the agent holding a password.</li>
                    <li><strong>You pick the door.</strong> Agents can work through your website, your APIs (using standards like OpenAPI or MCP, the Model Context Protocol, a common way for AI tools to plug into software), or your own AI agent.</li>
                </ul>
                <p>What’s missing is the actual specification. Sierra says a v0.1 spec, design workshops, and a reference implementation are coming “later this month,” and lists payments, push notifications, and finer-grained permissions as future work. Cobus Greyling, who writes about AI agents on his Substack, tried to build a prototype on October 7 and found no schema, endpoint list, or token format published yet (<a href="https://cobusgreyling.substack.com/p/personal-agent-protocol">Cobus Greyling, October 7, 2026</a>). Translation: this is a direction, not something you can install.</p>

                <h2>Why the rush</h2>
                <p>Meta launched Muse, its personal agent, on September 8, 2026. A week later it was the No. 1 free app in Apple’s U.S. App Store (<a href="https://www.geekwire.com/2026/amazon-blocks-metas-muse-ai-assistant-in-new-standoff-over-agentic-shopping/">GeekWire, September 20, 2026</a>). When a service has no API, Meta says Muse can use it through a browser “the way you would.”</p>
                <p>That’s where it got messy. Amazon blocked Muse from shopping in its online store, saying Meta never asked, the agent doesn’t identify itself, and it appears to capture and store customer credentials. Meta has said Muse has no visibility into passwords or payment methods and keeps credentials in secure storage (<a href="https://www.geekwire.com/2026/amazon-blocks-metas-muse-ai-assistant-in-new-standoff-over-agentic-shopping/">GeekWire</a>).</p>
                <p>Taylor, who is also chairman of OpenAI, told CNBC: “It is kind of chaos until such a standard exists.” David Singleton, vice president of engineering and consumer products at Meta Superintelligence Labs, compared the goal to email, a standard everyone can use to talk to each other. OpenAI and Anthropic haven’t joined yet, though Taylor said he expects them to (<a href="https://www.cnbc.com/2026/10/06/meta-joins-companies-to-tame-chaos-of-doing-business-with-ai-bots.html">CNBC, October 6, 2026</a>).</p>

                <h2>PAP isn’t the only standard in the room</h2>
                <ul>
                    <li><strong>PACT (Personal Agent Consent &amp; Trust Protocol)</strong> from Decagon and Instinct already has a published spec and code. It builds on OAuth 2.0 and A2A (Agent2Agent, an open protocol for AI agents to message each other). It keeps <em>which agent is calling</em> separate from <em>what the customer allowed it to do</em>, lets each business define permissions like <code>orders:read</code> or <code>orders:cancel</code>, and returns signed receipts of actions taken. Decagon says it’s also joining the PAP working group (<a href="https://decagon.ai/blog/introducing-the-personal-agent-consent-trust-protocol-pact">Decagon</a>).</li>
                    <li><strong>Visa’s Trusted Agent Protocol</strong>, announced October 14, 2025, helps merchants verify AI agents and tell them apart from malicious bots (<a href="https://usa.visa.com/about-visa/newsroom/press-releases.releaseId.21716.html">Visa, October 14, 2025</a>). The Next Web notes that Stripe and Shopify now back both Visa’s effort and PAP (<a href="https://thenextweb.com/news/personal-agent-protocol-sierra-meta">The Next Web, October 6, 2026</a>).</li>
                </ul>
                <p>Overlapping standards are normal early on. Betting your roadmap on just one of them is not.</p>

                <h3>How to get agent-ready without picking a winner</h3>
                <ol>
                    <li><strong>Find out who’s already visiting.</strong> Check analytics, bot logs, and support transcripts. If some “customers” finish a 12-field form in two seconds, you already have agent traffic.</li>
                    <li><strong>Write a permission menu.</strong> List what a guest agent can do (hours, stock, policies), what needs read access (order status, balances), and what needs write access (cancel, rebook, refund). Both PAP and PACT assume the business sets these limits, so this work carries over whichever standard wins.</li>
                    <li><strong>Make your API the front door.</strong> Bots clicking through web pages is slow and brittle. A clean, documented API for your top five customer tasks is the most standard-proof investment you can make.</li>
                    <li><strong>Stop relying on shared passwords.</strong> If the only path is “give the bot your login,” you inherit Amazon’s problem. Plan for token-based access you can scope and revoke.</li>
                    <li><strong>Label and log agent actions.</strong> When an agent cancels the wrong booking, you’ll want a record of which agent acted, for whom, and with what permission. PACT’s signed receipts are a good model.</li>
                    <li><strong>Give it an owner.</strong> This sits between product, security, and customer service, which is how things fall through cracks. Not sure who should own it? Our <a href="/cio-vs-cto-vs-ciso/">CIO vs. CTO vs. CISO breakdown</a> can help.</li>
                </ol>

                <h2>Soft next step</h2>
                <p>PAP doesn’t have a spec yet, and PACT and Visa’s protocol are already in the mix. The businesses that come out ahead won’t be the ones that guessed the right acronym. They’ll be the ones that already know what an agent may see and do, and have the API and logs to enforce it.</p>
                <p><a href="/what-we-do/">Yellow Coop</a> helps owners and operators map customer journeys for agent access, clean up APIs, and set AI policy — fractional CTO judgment before the bots knock. See the API and integration work in our <a href="/track-record/">track record</a>, or start at <a href="/contact/">contact</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://sierra.ai/blog/introducing-personal-agent-protocol">Bret Taylor and Clay Bavor: Introducing Personal Agent Protocol</a> — Sierra, Oct 6, 2026</li>
                    <li><a href="https://www.cnbc.com/2026/10/06/meta-joins-companies-to-tame-chaos-of-doing-business-with-ai-bots.html">Kate Rooney: Meta joins with group of companies to tame ‘chaos’ of doing business with AI bots</a> — CNBC, Oct 6, 2026</li>
                    <li><a href="https://thenextweb.com/news/personal-agent-protocol-sierra-meta">Sierra announces Personal Agent Protocol, an open standard for personal AI agents</a> — The Next Web, Oct 6, 2026</li>
                    <li><a href="https://decagon.ai/blog/introducing-the-personal-agent-consent-trust-protocol-pact">Harry Gao and Gram Liu: Introducing the Personal Agent Consent &amp; Trust Protocol (PACT)</a> — Decagon, Oct 6, 2026</li>
                    <li><a href="https://cobusgreyling.substack.com/p/personal-agent-protocol">Cobus Greyling: Personal Agent Protocol</a> — Substack, Oct 7, 2026</li>
                    <li><a href="https://www.geekwire.com/2026/amazon-blocks-metas-muse-ai-assistant-in-new-standoff-over-agentic-shopping/">Todd Bishop: Amazon blocks Meta’s Muse AI assistant in new standoff over agentic shopping</a> — GeekWire, Sep 20, 2026 (updated Sep 22, 2026)</li>
                    <li><a href="https://usa.visa.com/about-visa/newsroom/press-releases.releaseId.21716.html">Visa Introduces Trusted Agent Protocol: An Ecosystem-Led Framework for AI Commerce</a> — Visa, Oct 14, 2025</li>
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
