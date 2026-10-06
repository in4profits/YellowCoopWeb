<?php
$title = 'OpenAI Just Started Watermarking ChatGPT Text in the EU — Your AI Disclosure Policy Can\'t Be Invisible Ink — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'OpenAI now watermarks ChatGPT and Codex text in the EU. Here is what the invisible signal cannot prove and the AI disclosure policy you still need.';
$meta_keywords = 'AI text watermarking, EU AI Act Article 50, AI disclosure policy, OpenAI textGrain, continuous compliance AI, fractional CTO AI strategy';
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
                <img class="hero" src="/posts/images/openai-textgrain-eu-watermark-ai-disclosure-policy-hero.webp" alt="OpenAI Just Started Watermarking ChatGPT Text in the EU — Your AI Disclosure Policy Can't Be Invisible Ink">
                <h1>OpenAI Just Started Watermarking ChatGPT Text in the EU — Your AI Disclosure Policy Can't Be Invisible Ink</h1>
                <p class="meta">2026-10-06</p>

                <p>On October 5, OpenAI said it will start adding an invisible watermark to text that ChatGPT and Codex produce for users in the European Union. It is doing this to meet the EU AI Act, the European law that requires AI providers to make generated text identifiable by machines (<a href="https://openai.com/index/eu-text-provenance">OpenAI</a>).</p>
                <p><strong>The takeaway for operators:</strong> a vendor watermark is the vendor’s compliance, not yours. It cannot tell anyone why your team used AI, who checked the output, or whether you followed your own rules. You still need a disclosure policy that a human can read.</p>

                <h2>What OpenAI actually shipped</h2>
                <p>The watermark is called <strong>textGrain</strong>. It does not insert hidden characters. Instead, it nudges the model’s word choices so that, across a long enough passage, a detector holding a secret key can spot a statistical pattern (<a href="https://cdn.openai.com/pdf/e9508624-d767-41b6-a26d-e34ca798ada6/textgrain-entropy-calibrated-watermarking-for-language-model-text.pdf">OpenAI technical report</a>).</p>
                <p>The rollout has three parts (<a href="https://openai.com/index/eu-text-provenance">OpenAI</a>):</p>
                <ul>
                    <li><strong>EU ChatGPT and Codex users</strong> on all plans get watermarked text over the coming weeks. It is not a global default.</li>
                    <li><strong>API customers anywhere</strong> (companies building on OpenAI’s developer interface) can opt in for select models starting now. It stays off unless you turn it on.</li>
                    <li><strong>The detector</strong> is limited at first to approved researchers and expert organizations. Regular users and businesses do not get one.</li>
                </ul>
                <p>OpenAI is not alone. The Verge notes that Anthropic announced its own watermarking in August, built on Google DeepMind’s SynthID approach, for the same EU reason (<a href="https://www.theverge.com/ai-artificial-intelligence/1004880/openai-chatgpt-text-watermarks-eu-ai-act">The Verge</a>).</p>

                <h2>The numbers that matter</h2>
                <p>OpenAI was refreshingly upfront about the limits. At a 1% false-positive target, the detector found the watermark in about 80% of 200-token passages and about 95% of 400-token passages (a token is roughly three-quarters of a word). Detection is much weaker on text where word choice is predictable, like math (<a href="https://openai.com/index/eu-text-provenance">OpenAI</a>).</p>
                <p>Editing hurts it fast. Search Engine Journal walked through OpenAI’s test: swapping 10% of words for synonyms dropped detection from about 92% to 66%, and swapping 25% dropped it to 17% (<a href="https://www.searchenginejournal.com/openai-to-watermark-chatgpt-text-in-the-eu-opens-api-opt-in/592014/">Search Engine Journal</a>). TechRepublic adds that EU guidance does not expect watermarks on code snippets or responses under 200 tokens (<a href="https://www.techrepublic.com/article/news-openai-chatgpt-codex-watermark-emea-eu/">TechRepublic</a>).</p>
                <p>So a light human edit, a short answer, or a code block can all slip past. That is not a scandal. It is just what this technology can do today.</p>

                <h2>What a watermark cannot tell you</h2>
                <p>OpenAI itself says a text watermark does not verify accuracy, decide who owns the text, measure how much a human contributed, or prove human authorship (<a href="https://www.theverge.com/ai-artificial-intelligence/1004880/openai-chatgpt-text-watermarks-eu-ai-act">The Verge</a>). TechRepublic puts it plainly: an invisible marker cannot document why AI was used, how a draft changed afterward, or whether its use followed an employer, client, or school rule (<a href="https://www.techrepublic.com/article/news-openai-chatgpt-codex-watermark-emea-eu/">TechRepublic</a>).</p>
                <p>Those are exactly the questions your customers, auditors, and lawyers will ask.</p>

                <h2>The deadlines are real</h2>
                <p>The EU AI Act’s transparency rules (Article 50) began applying on August 2, 2026. AI systems already on the market before that date have until December 2 to meet the marking and detection obligation (<a href="https://www.searchenginejournal.com/openai-to-watermark-chatgpt-text-in-the-eu-opens-api-opt-in/592014/">Search Engine Journal</a>). If you sell into Europe, or your product puts AI text in front of European users, this is a Q4 item, not a someday item.</p>

                <h3>A five-step disclosure plan for operators</h3>
                <ol>
                    <li><strong>Map where AI text leaves the building.</strong> List every place generated text reaches a customer: support replies, sales emails, product copy, reports, chatbots. Flag anything that reaches EU users.</li>
                    <li><strong>Decide on the API opt-in on purpose.</strong> If you build on OpenAI’s API, watermarking is off by default. Turning it on may help your transparency story. Leaving it off should be a written decision with a reason, not an accident.</li>
                    <li><strong>Write a policy humans can follow.</strong> One page is enough: which tools are approved, when AI use must be disclosed, who reviews output before it ships, and what never goes through AI. A watermark is a footnote to this policy, not a substitute for it.</li>
                    <li><strong>Keep your own provenance log.</strong> Record which model drafted what, who edited it, and who approved it. That record answers the questions a watermark cannot, and it works across every vendor you use.</li>
                    <li><strong>Do not treat detection as proof.</strong> Nobody on your team should accuse an employee, freelancer, or vendor of anything based on a watermark score. With 17% detection after heavy edits and short text exempt, a “clean” result proves nothing either way.</li>
                </ol>

                <h2>Soft next step</h2>
                <p>OpenAI did the responsible thing by publishing its numbers, and those numbers make the point for you: watermarks are a useful signal, not a governance program. <strong>Own your disclosure policy, keep your own records, and let the watermark be a bonus.</strong></p>
                <p><a href="/what-we-do/">Yellow Coop</a> helps owners and operators map AI use across the company, choose vendors, and turn EU AI Act requirements into a practical checklist — with fractional CTO judgment on <a href="/cio-vs-cto-vs-ciso/">who should own AI compliance</a>. See our <a href="/track-record/">track record</a>, or start at <a href="/contact/">contact</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://openai.com/index/eu-text-provenance">Our approach to EU text provenance rules</a> — OpenAI, Oct 5, 2026</li>
                    <li><a href="https://cdn.openai.com/pdf/e9508624-d767-41b6-a26d-e34ca798ada6/textgrain-entropy-calibrated-watermarking-for-language-model-text.pdf">textGrain technical report</a> — OpenAI, Oct 5, 2026</li>
                    <li><a href="https://www.theverge.com/ai-artificial-intelligence/1004880/openai-chatgpt-text-watermarks-eu-ai-act">OpenAI ChatGPT text watermarks and the EU AI Act</a> — The Verge, Oct 5, 2026</li>
                    <li><a href="https://www.searchenginejournal.com/openai-to-watermark-chatgpt-text-in-the-eu-opens-api-opt-in/592014/">OpenAI to watermark ChatGPT text in the EU, opens API opt-in</a> — Search Engine Journal, Oct 2026</li>
                    <li><a href="https://www.techrepublic.com/article/news-openai-chatgpt-codex-watermark-emea-eu/">OpenAI ChatGPT and Codex watermark in the EU</a> — TechRepublic, Oct 2026</li>
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
