<?php
$title = 'Before You Put an AI Chatbot in Front of Customers: A Launch Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'Customer-Facing AI Chatbot Launch Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Your AI chatbot speaks for your business. A 7-step launch checklist, with lessons from Air Canada, NYC\'s MyCity bot, and DPD.';
$meta_keywords = 'customer service AI chatbot, AI chatbot risks, AI chatbot liability, chatbot launch checklist, prompt injection';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/customer-facing-ai-chatbot-launch-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Before You Put an AI Chatbot in Front of Customers: A Launch Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Before You Put an AI Chatbot in Front of Customers: A Launch Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-27</p>

                <p><strong>Takeaway:</strong> A customer-facing AI chatbot speaks for your company, and a tribunal has already held a business to what its bot said. Before launch, decide what the bot may answer, ground it in your real policies, test it like a hostile customer would, give people an easy way to reach a human, and assign someone to read its conversations every week.</p>

                <p>AI chatbots are one of the most tempting AI projects for a mid-market business. Support costs drop, customers get answers at 2 a.m., and the vendor demo looks great. But a chatbot is different from most internal AI tools in one important way: when it’s wrong, a customer sees it first, and the customer may act on it.</p>

                <h2>Three lessons from bots that went wrong</h2>

                <p><strong>Your bot’s answers are your answers.</strong> In <a href="https://decisions.civilresolutionbc.ca/crt/crtd/en/525448/1/document.do">Moffatt v. Air Canada, 2024 BCCRT 149</a> (February 14, 2024), British Columbia’s Civil Resolution Tribunal looked at a chatbot that told a grieving customer they could apply for a reduced bereavement fare retroactively, within 90 days of buying the ticket. Air Canada’s own bereavement page said otherwise. Air Canada argued it couldn’t be held liable for information from the chatbot. Tribunal member Christopher C. Rivers called that “a remarkable submission” and wrote that “it should be obvious to Air Canada that it is responsible for all the information on its website. It makes no difference whether the information comes from a static page or a chatbot.” He ordered Air Canada to pay CA$812.02. Small dollars, but a clear principle, and the case is from one Canadian small-claims tribunal, not a court of appeal.</p>

                <p><strong>Confident and wrong is the default failure.</strong> In <a href="https://themarkup.org/artificial-intelligence/2024/03/29/nycs-ai-chatbot-tells-businesses-to-break-the-law">an investigation published March 29, 2024</a>, The Markup found that New York City’s MyCity chatbot, built to help business owners, told testers that employers could take a cut of workers’ tips and that restaurants could go cash-free. Both answers were wrong under city law. The bot sounded authoritative the whole time.</p>

                <p><strong>Updates can break a working bot.</strong> Delivery firm DPD said it had run an AI element in its chat successfully for years, until “an error occurred after a system update.” A frustrated customer then got the bot to swear and write a poem about how bad the company was. DPD disabled the AI element, <a href="https://www.bbc.com/news/technology-68025677">the BBC reported</a> on January 19, 2024.</p>

                <h2>The launch checklist</h2>

                <h3>1. Pick a narrow job</h3>

                <p>Start with questions where the right answer is written down and rarely changes: order status, store hours, return windows, how to reset a password. Keep the bot away from refunds, pricing exceptions, legal, medical, or anything where a wrong answer creates an obligation, until you’ve seen it perform.</p>

                <h3>2. Ground it in your real policies, and keep them current</h3>

                <p>Most business chatbots answer from documents you feed them. If your policy pages disagree with each other, the bot will too. Air Canada’s bot and its bereavement page said different things. Pick one source of truth for each policy and name an owner who updates it.</p>

                <h3>3. Test it like a hostile customer</h3>

                <p>The OWASP Gen AI Security Project, a nonprofit security community, lists <a href="https://genai.owasp.org/llmrisk/llm01-prompt-injection/">prompt injection</a> as the first entry (LLM01) in its 2025 Top 10 for large language model applications. Prompt injection means a user’s input changes how the bot behaves in ways you didn’t intend. In the BBC’s account, the DPD customer simply asked the bot to “exaggerate and be over the top in your hatred.” OWASP says it’s unclear whether there are fool-proof ways to prevent it. Its recommended mitigations include constraining what the bot is allowed to do, filtering inputs and outputs, giving the bot only the access it needs, requiring human approval for high-risk actions, and running adversarial testing before and after launch. So before go-live, have staff try to make the bot promise discounts, badmouth you, or reveal information it shouldn’t.</p>

                <h3>4. Give the bot as little access as possible</h3>

                <p>A bot that can only read public help articles can embarrass you. A bot connected to your order system, customer records, or email can do real damage. Add each connection deliberately, and keep actions like refunds or account changes behind a human.</p>

                <h3>5. Make the human exit easy</h3>

                <p>DPD’s customer started experimenting with the bot after finding it, in his words to the BBC, “utterly useless at answering any queries.” Put “talk to a person” on screen, and make the bot hand off when it isn’t sure.</p>

                <h3>6. Re-test after every change</h3>

                <p>DPD’s problem started with a system update. Treat new models, new prompts, and new documents like a software release: run your test questions again before they go live.</p>

                <h3>7. Read the transcripts</h3>

                <p>Assign an owner to review a sample of conversations every week, track wrong answers, and fix the source document, not just the bot. That’s how you catch the MyCity-style errors before a reporter does.</p>

                <h2>The bottom line</h2>

                <p>A chatbot can earn its keep in customer service, but only if you treat it like a new employee who talks to customers: a defined job, approved material, supervision, and someone accountable for its mistakes. Yellow Coop’s CTO work includes an AI adoption plan tied to hours saved and headcount, not demos. Its CISO work includes an AI use policy that spells out which tools, which data, and who approves. <a href="/contact/">Let’s talk</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://decisions.civilresolutionbc.ca/crt/crtd/en/525448/1/document.do">Moffatt v. Air Canada, 2024 BCCRT 149</a> — BC Civil Resolution Tribunal, February 14, 2024</li>
                    <li><a href="https://themarkup.org/artificial-intelligence/2024/03/29/nycs-ai-chatbot-tells-businesses-to-break-the-law">NYC’s AI Chatbot Tells Businesses to Break the Law</a> — Colin Lecher, The Markup, March 29, 2024</li>
                    <li><a href="https://www.bbc.com/news/technology-68025677">DPD error caused chatbot to swear at customer</a> — Tom Gerken, BBC News, January 19, 2024</li>
                    <li><a href="https://genai.owasp.org/llmrisk/llm01-prompt-injection/">LLM01:2025 Prompt Injection</a> — OWASP Gen AI Security Project, OWASP Top 10 for LLM Applications 2025</li>
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
