<?php
$title = 'Before You Sign an AI Vendor Contract: A Buyer’s Checklist for Mid-Market Owners and Operators — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Five contract terms to settle before you buy an AI tool: data use, testing rights, change notice, exit terms, and pricing. Built on OMB M-25-22.';
$meta_keywords = 'AI vendor evaluation, AI contract terms, AI vendor lock-in, AI data training opt-out, AI procurement checklist';
$pillar = 'Innovate';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/ai-vendor-contract-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="Before You Sign an AI Vendor Contract: A Buyer’s Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Before You Sign an AI Vendor Contract: A Buyer’s Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-10-24</p>

                <p><strong>Takeaway:</strong> The demo shows you what an AI tool can do. The contract decides what happens to your data, whether you can test the thing honestly, and how painful it will be to leave. Before you sign, settle five things in writing: data use, testing rights, change notice, exit terms, and pricing.</p>

                <p>Most AI buying regrets aren’t about picking the “wrong model.” They come from signing paper that quietly hands away leverage you’ll want back later.</p>

                <h2>Borrow the federal government’s homework</h2>

                <p>On April 3, 2025, the White House Office of Management and Budget (OMB) issued <a href="https://www.whitehouse.gov/wp-content/uploads/2025/02/M-25-22-Driving-Efficient-Acquisition-of-Artificial-Intelligence-in-Government.pdf">Memorandum M-25-22, “Driving Efficient Acquisition of Artificial Intelligence in Government”</a>. It’s written for federal agencies and is still listed as active on <a href="https://www.whitehouse.gov/omb/information-resources/guidance/memoranda/">OMB’s memoranda page</a>, but it doubles as one of the clearest public checklists for buying AI. Each section below translates one requirement into mid-market terms.</p>

                <h2>1. Pin down what the vendor can do with your data</h2>

                <p>M-25-22 tells agencies to write contracts that “permanently prohibit” a vendor from using nonpublic agency inputs and outputs to further train publicly or commercially available AI, unless the agency explicitly consents. It also says vendors should collect and keep agency data only when “reasonably necessary” for the contract.</p>

                <p><strong>Your version:</strong> get written answers to these questions.</p>

                <ul>
                    <li>Do you train on our prompts, files, or outputs? Does the answer change by plan tier?</li>
                    <li>What about usage data (how we use the product, not what we put in)?</li>
                    <li>How long do you keep our data, and where is it stored?</li>
                </ul>

                <p><strong>Why the fine print matters:</strong> In 2023, Zoom drew backlash over terms-of-service language about AI training. The <a href="https://apnews.com/article/fact-check-zoom-ai-privacy-terms-of-service-06ff47e47439c2173390a4ca1389f652">Associated Press reported</a> that language added that March separated “customer content” from “service generated data” and allowed the latter to be used for training AI models. Zoom revised its <a href="https://www.zoom.com/en/trust/terms/">terms of service</a> on August 11, 2023, to state that it does not use audio, video, chat, and similar customer content to train Zoom or third-party AI models, and <a href="https://www.zoom.com/en/blog/zooms-term-service-ai/">explained the change on its blog</a>. The lesson isn’t “avoid Zoom.” It’s to read the definitions: a promise about one kind of data can leave another kind open, and terms change.</p>

                <h2>2. Get the right to test it on your own work</h2>

                <p>M-25-22 says agencies must, to the greatest extent practicable, test proposed AI solutions before award. It asks for demonstrations that closely reflect the real working environment. It also requires contract terms that let agencies run their own evaluations on data the vendor can’t see, and that don’t stop agencies from sharing test results internally.</p>

                <p><strong>Your version:</strong> build a small test set from real work, such as a few dozen past invoices or support tickets with known correct answers, and keep the answers from the vendor. Agree in writing on what “good enough” means before the pilot starts, and tie the full rollout to hitting it.</p>

                <h2>3. Require notice before the product changes under you</h2>

                <p>M-25-22 suggests requiring vendors to notify the agency before adding new AI features. It also encourages requiring vendors to meet agreed performance standards before releasing a new version, or to roll back if a new version falls short.</p>

                <p><strong>Your version:</strong> ask for advance notice of model swaps, new AI features switched on by default, and new subprocessors (the other companies that handle your data on the vendor’s behalf). Ask what happens if an update makes results worse.</p>

                <h2>4. Write your exit before your entrance</h2>

                <p>M-25-22 lists protections against vendor lock-in: knowledge transfer, data and model portability, clear licensing terms, and transparent pricing. When a contract ends, it says both sides should agree on the format and usability of any data, and on a plan for transferring it. The <a href="https://nvlpubs.nist.gov/nistpubs/ai/NIST.AI.100-1.PDF">NIST AI Risk Management Framework</a> (January 2023) makes a related point in its GOVERN 6.2 subcategory: have contingency processes for failures or incidents in third-party AI systems you consider high-risk.</p>

                <p><strong>Your version:</strong></p>

                <ul>
                    <li>What export format do we get (CSV, JSON, documented API), and does it cost extra?</li>
                    <li>Who owns the prompts, workflows, and custom models we pay you to build?</li>
                    <li>How long can we reach our data after we cancel, and will you confirm deletion in writing?</li>
                    <li>If you shut this product down, how much notice do we get?</li>
                </ul>

                <h2>5. Make pricing boringly predictable</h2>

                <p>A footnote in M-25-22 flags pricing practices that push buyers to concentrate spend with one vendor: bulk pricing arrangements, tying, minimum spend requirements, and exclusive discounts. Those can be good deals or handcuffs.</p>

                <p><strong>Your version:</strong> know whether you pay per seat or per use (for AI, often per “token,” a small chunk of text the model reads or writes). Ask for usage caps, overage alerts, and a cap on renewal price increases. Model a heavy month, not just an average one.</p>

                <h2>Who should be at the table</h2>

                <p>M-25-22 asks agencies to assemble a cross-functional team, naming expertise such as acquisition, IT, cybersecurity, privacy, legal, budgeting, and data. The <a href="https://airc.nist.gov/airmf-resources/playbook/govern/">NIST AI RMF Playbook</a> (GOVERN 6.1) likewise suggests policies on transparency into third-party AI systems and thorough testing. For a mid-market company, that usually means four people: the leader who owns the process, whoever runs IT or security, finance, and someone who can review contracts.</p>

                <h2>The one-page checklist</h2>

                <ul>
                    <li>Data: no training on our inputs or outputs without written consent; retention limits stated.</li>
                    <li>Testing: a pilot on our own data, success criteria agreed in advance.</li>
                    <li>Change: notice before model, feature, or subprocessor changes.</li>
                    <li>Exit: export format, ownership of what we build, post-termination access, deletion confirmation.</li>
                    <li>Price: unit of billing, caps, alerts, renewal limits.</li>
                </ul>

                <h2>The bottom line</h2>

                <p>Good AI vendors won’t flinch at these questions, and vague answers tell you something too. If you’d like a seasoned second opinion on an AI vendor shortlist or contract, that’s the kind of work a Yellow Coop fractional CTO takes on. <a href="/contact/">Get in touch</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://www.whitehouse.gov/wp-content/uploads/2025/02/M-25-22-Driving-Efficient-Acquisition-of-Artificial-Intelligence-in-Government.pdf">OMB M-25-22, Driving Efficient Acquisition of Artificial Intelligence in Government</a> — April 3, 2025 (PDF)</li>
                    <li><a href="https://www.whitehouse.gov/omb/information-resources/guidance/memoranda/">OMB memoranda index</a> — lists M-25-22; accessed October 24, 2026</li>
                    <li><a href="https://nvlpubs.nist.gov/nistpubs/ai/NIST.AI.100-1.PDF">NIST AI Risk Management Framework (AI RMF 1.0), NIST AI 100-1</a> — January 2023; GOVERN 6.2 (PDF)</li>
                    <li><a href="https://airc.nist.gov/airmf-resources/playbook/govern/">NIST AI RMF Playbook: Govern</a> — GOVERN 6.1</li>
                    <li><a href="https://apnews.com/article/fact-check-zoom-ai-privacy-terms-of-service-06ff47e47439c2173390a4ca1389f652">AP fact check on Zoom AI terms</a> — Associated Press, August 2023</li>
                    <li><a href="https://www.zoom.com/en/trust/terms/">Zoom Terms of Service</a> — effective August 11, 2023</li>
                    <li><a href="https://www.zoom.com/en/blog/zooms-term-service-ai/">How Zoom’s terms of service and practices apply to AI features</a> — Zoom blog, August 7, 2023; updated February 7, 2024</li>
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
