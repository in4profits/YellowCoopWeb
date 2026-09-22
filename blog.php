<?php
$title = 'Blog — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yellow Coop: 25 years of technology experience offering fractional CTO services, management advisement, and project planning and delivery.">
    <title>Yellow Coop - Cooperate * Create * Grow</title>
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
            align-items: center;
            justify-content: center;
            padding: 24px 24px 0;
            text-align: center;
        }
        h1 {
            font-size: 28px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 12px;
        }
        .stub {
            font-size: 16px;
            color: #bbb;
        }
        .post-list {
            list-style: none;
            margin: 8px 0 0;
            padding: 0;
            width: min(100%, 40rem);
            text-align: left;
        }
        .post-list li {
            margin: 0 0 18px;
        }
        .post-list a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            font-weight: 500;
            line-height: 1.35;
        }
        .post-list a:hover {
            text-decoration: underline;
        }
        .post-list .date {
            display: block;
            margin-top: 6px;
            font-size: 14px;
            color: #999;
            font-weight: 400;
        }
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
</head>
<body>
    <div class="page">
        <div class="wrap">
            <h1>Blog</h1>
            <ul class="post-list">
                <li>
                    <a href="posts/genai-data-loss-prevention-founder-checklist.php">GenAI Data Loss Prevention Belongs on the Founder Checklist<span class="date">2026-09-22</span></a>
                </li>
                <li>
                    <a href="posts/ai-agent-production-failures-observability.php">AI Agents Are Shipping to Production. Catching Failures Quietly Is Now the Job<span class="date">2026-09-18</span></a>
                </li>
                <li>
                    <a href="posts/plugin4shell-ai-coding-agent-security.php">Plugin4Shell Explained: Why AI Coding Agent Security Is Now a Board Issue<span class="date">2026-09-18</span></a>
                </li>
                <li>
                    <a href="posts/continuous-compliance-agent-era-soc2.php">Your SOC 2 Was Fine Until You Shipped Another Agent<span class="date">2026-09-17</span></a>
                </li>
                <li>
                    <a href="posts/ai-software-factory-funding-mid-market-founders.php">Factory’s $5B Bet: What an AI Software Factory Means for Mid-Market Founders<span class="date">2026-09-16</span></a>
                </li>
                <li>
                    <a href="posts/dreamforce-2026-koa-aiforce-enterprise-ai-interfaces.php">Dreamforce 2026: Specialized Models and Agents Where Work Already Happens<span class="date">2026-09-15</span></a>
                </li>
                <li>
                    <a href="posts/agent-sprawl-ops-governance-control-plane.php">Agent Sprawl Without a Control Plane Is How You Buy Outages<span class="date">2026-09-15</span></a>
                </li>
            </ul>
        </div>
        <footer>
            <div class="links">
                <a href="/">Home</a>
                <span class="sep">·</span>
                <a href="mailto:<?= htmlspecialchars($email) ?>">Contact</a>
                <span class="sep">·</span>
                <a href="<?= htmlspecialchars($newsletter) ?>" target="_blank" rel="noopener">Subscribe</a>
            </div>
            &copy; <?= (int)$year_start ?>–<?= (int)$year_end ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
