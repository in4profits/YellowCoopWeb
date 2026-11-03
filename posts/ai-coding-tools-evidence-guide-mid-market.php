<?php
$title = 'AI Coding Tools: What the Evidence Says and How Mid-Market Owners and Operators Should Manage Them — Yellow Coop';
$seo_title = 'AI Coding Tools: What the Evidence Says | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'AI coding tools can speed teams up or quietly add risk. What METR, DORA, and Stanford research found, and five controls owners should set.';
$meta_keywords = 'AI coding assistants, AI developer productivity, AI-generated code security, managing AI coding tools, software delivery stability';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/ai-coding-tools-evidence-guide-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="AI Coding Tools: What the Evidence Says and How Mid-Market Owners and Operators Should Manage Them"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>AI Coding Tools: What the Evidence Says and How Mid-Market Owners and Operators Should Manage Them</h1>
                <p class="meta">2026-11-03 · By the Yellow Coop Team</p>

                <h2>The takeaway</h2>

                <p>Your developers, or your outsourced development partner, are almost certainly using AI coding tools already. The research says those tools can help, but they don’t automatically make software arrive faster or safer, and people are bad at judging their own speedup. So don’t manage AI coding by vibes. Measure delivery, keep changes small, and keep human review and testing in front of anything that ships.</p>

                <h2>What the evidence actually says</h2>

                <h3>Developers feel faster than they measure</h3>

                <p>The research group METR ran a randomized trial with 16 experienced open-source developers working on 246 real tasks in projects they knew well. Each task was randomly assigned to allow or disallow AI tools. With AI allowed, tasks took 19% longer. Before starting, the developers predicted AI would cut their time by 24%; afterward, they still believed it had cut their time by 20% (<a href="https://metr.org/blog/2025-07-10-early-2025-ai-experienced-os-dev-study/">METR, July 10, 2025</a>; <a href="https://arxiv.org/abs/2507.09089">paper</a>).</p>

                <p>Newer data matters here. In February 2026, METR said those early-2025 results are out of date and that developers are likely sped up more now. Its follow-up study (57 developers, 800+ tasks) pointed toward speedups, but METR called that data only very weak evidence because many developers declined to work without AI, which skews the sample (<a href="https://metr.org/blog/2026-02-24-uplift-update/">METR, Feb. 24, 2026</a>).</p>

                <p>The durable lesson isn’t “AI slows developers down.” It’s that self-reported speedups are unreliable, so measure.</p>

                <h3>More code isn’t the same as better delivery</h3>

                <p>Google’s DORA research program surveys technology professionals every year. Its 2024 report estimated that a 25% increase in AI adoption was associated with a 1.5% drop in delivery throughput and a 7.2% drop in delivery stability. DORA’s hypothesis: AI makes it easy to produce more code, changes get bigger, and bigger changes are slower and more likely to break things (<a href="https://dora.dev/research/2024/dora-report/">DORA 2024 report</a>; <a href="https://cloud.google.com/blog/products/devops-sre/announcing-the-2024-dora-report">Google Cloud, Oct. 22, 2024</a>).</p>

                <p>The 2025 report, based on nearly 5,000 respondents, found a better picture: AI adoption now had a positive relationship with throughput, but still a negative one with stability. 90% of respondents used AI at work, and 30% reported little or no trust in AI-generated code. DORA’s summary: AI “amplifies what’s already there,” so strong teams get stronger and struggling teams see their problems intensify (<a href="https://cloud.google.com/blog/products/ai-machine-learning/announcing-the-2025-dora-report">Google Cloud, Sept. 23, 2025</a>).</p>

                <h3>Confidence can outrun security</h3>

                <p>Stanford researchers Neil Perry, Megha Srivastava, Deepak Kumar, and Dan Boneh ran a user study with 47 participants on five security-related programming tasks. Participants with an AI assistant wrote insecure solutions more often on four of the five tasks, and were more likely to believe their code was secure (<a href="https://arxiv.org/abs/2211.03622">Perry et al., ACM CCS 2023</a>). The tools have improved since that study was first posted in November 2022, so read it as a warning about overconfidence, not a current defect rate.</p>

                <h2>Five controls owners should set</h2>

                <p>You don’t need to read code to set these. You need to ask for them.</p>

                <h3>1. Decide which tools are approved and what data they can see</h3>

                <p>Name the approved AI coding tools, the account type (business accounts, not personal ones), and whether your source code and customer data can be sent to them. Put it in your AI use policy, and make it apply to contractors too.</p>

                <h3>2. Keep changes small</h3>

                <p>DORA’s own explanation for the stability drop is batch size. Ask your team or vendor to ship in small, reviewable changes. A 3,000-line change generated in an afternoon is a review problem, not a productivity win.</p>

                <h3>3. Require human review and automated tests before anything ships</h3>

                <p>Every change gets reviewed by a person who understands it, and automated tests and security scans run before release. DORA’s 2025 guidance points to the same safety nets: strong automated testing, mature version control, and fast feedback loops (<a href="https://cloud.google.com/blog/products/ai-machine-learning/announcing-the-2025-dora-report">Google Cloud, Sept. 23, 2025</a>).</p>

                <h3>4. Measure delivery, not vibes</h3>

                <p>Track a few numbers before and after rollout: how long a change takes to reach production, how often you deploy, how often a release causes a problem, and how fast you recover. These are DORA’s standard delivery measures, and they tell you whether AI is helping the business or just producing more code.</p>

                <h3>5. Put AI in your vendor conversations</h3>

                <p>If an outside firm builds your software, ask how they use AI, how they review its output, and who owns the result. Add it to the contract and the status report.</p>

                <h2>The short version</h2>

                <p>AI coding tools are worth using, but the gains show up where the basics are already solid. Approve the tools, keep changes small, review and test everything, measure delivery, and hold vendors to the same rules.</p>

                <p>If you’re not sure whether your team or development partner is getting real value, or quietly piling up risk, Yellow Coop’s CTO work covers architecture review and outsourced partner oversight, and our CISO work includes an AI use policy that spells out which tools, which data, and who approves. <a href="/contact/">Let’s talk</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li>METR, <a href="https://metr.org/blog/2025-07-10-early-2025-ai-experienced-os-dev-study/">Measuring the Impact of Early-2025 AI on Experienced Open-Source Developer Productivity</a>, Jul 10, 2025 (<a href="https://arxiv.org/abs/2507.09089">paper arXiv:2507.09089</a>)</li>
                    <li>METR, <a href="https://metr.org/blog/2026-02-24-uplift-update/">We are Changing our Developer Productivity Experiment Design</a>, Feb 24, 2026</li>
                    <li><a href="https://dora.dev/research/2024/dora-report/">DORA 2024 Accelerate State of DevOps Report</a> and <a href="https://cloud.google.com/blog/products/devops-sre/announcing-the-2024-dora-report">Google Cloud announcement</a>, Oct 22, 2024</li>
                    <li>Google Cloud, <a href="https://cloud.google.com/blog/products/ai-machine-learning/announcing-the-2025-dora-report">Announcing the 2025 DORA Report</a>, Sept 23, 2025</li>
                    <li>Perry, Srivastava, Kumar, Boneh, <a href="https://arxiv.org/abs/2211.03622">Do Users Write More Insecure Code with AI Assistants?</a>, ACM CCS 2023 (published Nov 21, 2023)</li>
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
