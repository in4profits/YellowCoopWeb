<?php
$title = 'Vercel\'s CEO Wants the Compiler to Catch Your AI Agent\'s Missing Auth Check — Make Security Rules Machine-Enforced — Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Vercel CEO Guillermo Rauch\'s gdp-ts makes TypeScript reject code that skips permission checks. Why AI-written code needs rules the build enforces.';
$meta_keywords = 'gdp-ts, compile-time authorization, AI-generated code security, broken access control, AI coding agent security, verification engineering';
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
                <img class="hero" src="/posts/images/gdp-ts-compile-time-authorization-ai-generated-code-hero.webp" alt="Vercel's CEO Wants the Compiler to Catch Your AI Agent's Missing Auth Check — Make Security Rules Machine-Enforced">
                <h1>Vercel's CEO Wants the Compiler to Catch Your AI Agent's Missing Auth Check — Make Security Rules Machine-Enforced</h1>
                <p class="meta">2026-10-06</p>

                <p>On October 5, Guillermo Rauch, CEO of the web hosting company Vercel, released <strong>gdp-ts</strong>, an open-source tool that makes the code itself refuse to compile when a sensitive action skips its permission check (<a href="https://x.com/rauchg/status/2107119811444748555">Guillermo Rauch on X</a>).</p>
                <p>His reason is the headline for every operator: “Agents are writing more code than we can review, and they <em>thrive</em> in tight loops with hard constraints that would frustrate us.”</p>
                <p><strong>The takeaway:</strong> if AI is writing a growing share of your code, your most important security rules cannot live in a reviewer’s head. They need to live somewhere a machine checks on every build.</p>

                <h2>What gdp-ts does, in plain words</h2>
                <p>Most apps protect sensitive actions, like deleting a project or changing a password, with an authorization check: code that confirms this user is allowed to do this thing. The classic bug is simple. Someone adds a new path to that action and forgets the check.</p>
                <p>gdp-ts works with <strong>TypeScript</strong>, a popular version of JavaScript that adds a “type checker,” a tool that inspects code for mistakes before it ever runs. With gdp-ts, a sensitive function demands a “proof” that the permission check already happened for that exact user and that exact resource. No proof, no build. Rauch describes it as “a library, linter and AI skill,” meaning it ships as code you import, an automated style checker, and a set of instructions coding agents can follow (<a href="https://x.com/rauchg/status/2107119811444748555">Guillermo Rauch on X</a>).</p>
                <p>The project’s example mirrors a real Vercel rule: changing the password on a project requires proof of a certain role plus a certain entitlement (<a href="https://x.com/rauchg/status/2107119811444748555">Guillermo Rauch on X</a>). The real permission lookup still happens when the code runs. gdp-ts just makes it impossible to call the sensitive function without having done it.</p>

                <h2>This is an old idea finally getting its moment</h2>
                <p>The pattern comes from Haskell, a programming language popular with researchers, and is named after “Ghosts of Departed Proofs,” a 2018 paper by Matt Noonan. Rauch credits Noonan and Haskell developer Ollie Charles for the research. His argument is that the approach stayed niche because it added work for humans: extra syntax to write and extra code to review. Now the cost lands on agents, and agents do not mind (<a href="https://x.com/rauchg/status/2107119811444748555">Guillermo Rauch on X</a>).</p>
                <p>That logic holds well beyond one library. The more code a machine writes, the cheaper strict rules become and the more expensive “we’ll catch it in review” gets.</p>

                <h2>Why this bug class deserves the attention</h2>
                <p>This is not a niche worry. Broken access control, meaning users reaching data or actions they should not, is ranked number one in the OWASP Top 10:2025, the widely used list of web app security risks from the nonprofit Open Worldwide Application Security Project. OWASP says it has the most occurrences of any category in its data (<a href="https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/">OWASP</a>).</p>
                <p>Now picture that bug class meeting a coding agent that ships twenty pull requests a day. Your reviewer gets tired by PR number six. The type checker does not.</p>

                <h3>A five-step plan for owners, operators, and engineering leads</h3>
                <ol>
                    <li><strong>List your crown-jewel actions.</strong> Write down the ten or so operations that would hurt most if the wrong person triggered them: billing changes, data exports, role changes, deletes, password resets. Start there, not everywhere.</li>
                    <li><strong>Put the real checks in one small, trusted place.</strong> Permission logic scattered across a codebase is how checks get forgotten. Centralize it in a small module that humans review carefully. Everything else, including agent-written code, has to go through it.</li>
                    <li><strong>Make the build fail, not the reviewer.</strong> Whether you use gdp-ts, your language’s type system, or custom lint rules, the goal is the same: a missing check should break the build in CI (the automated pipeline that tests every change), not wait for someone to notice.</li>
                    <li><strong>Tell your agents the rules.</strong> Coding agents follow written instructions. Put your security patterns in the project’s agent instruction files so the agent writes code the right way the first time.</li>
                    <li><strong>Keep your runtime safety net.</strong> Compile-time checks do not replace tests, logging, or a security review of the trusted module. They shrink the space where mistakes can hide.</li>
                </ol>
                <p>One caution: gdp-ts is days old and published under <a href="https://github.com/rauchg/gdp-ts">Rauch’s personal GitHub account</a>, not as a Vercel platform product. Review it like any new dependency before you bet production on it.</p>

                <h2>Soft next step</h2>
                <p>The bottleneck in AI-assisted development is no longer writing code. It is trusting it. <strong>Turn your most important security rules into checks a machine runs every time</strong>, and save human review for the parts that genuinely need judgment.</p>
                <p><a href="/what-we-do/">Yellow Coop</a> helps owners and operators set guardrails for AI coding agents, audit access control, and build a review process that scales with agent output — including a clear answer on <a href="/cio-vs-cto-vs-ciso/">who owns application security</a>. See our <a href="/track-record/">track record</a>, or start at <a href="/contact/">contact</a>.</p>
                <p>Internal links: <a href="/what-we-do/#secure">Secure</a>, <a href="/what-we-do/">What We Do</a>, <a href="/how-we-engage/">How We Engage</a>, <a href="/cio-vs-cto-vs-ciso/">CIO vs CTO vs CISO</a>, <a href="/track-record/">Track Record</a>, <a href="/blog.php">Insights</a>.</p>

                <h2>Sources</h2>
                <ul>
                    <li><a href="https://x.com/rauchg/status/2107119811444748555">Guillermo Rauch (Vercel CEO): Introducing gdp-ts</a> — X, Oct 5, 2026</li>
                    <li><a href="https://github.com/rauchg/gdp-ts">gdp-ts repository</a> — GitHub</li>
                    <li><a href="https://owasp.org/Top10/2025/A01_2025-Broken_Access_Control/">OWASP Top 10:2025 — A01 Broken Access Control</a> — OWASP</li>
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
