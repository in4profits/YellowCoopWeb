<?php
$title = 'Deepfake Impersonation: A Verification Playbook for Fake Exec Calls, Video Meetings, and Job Candidates — Yellow Coop';
$seo_title = 'Deepfake Impersonation Playbook | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'Cloned voices and fake video calls can fool staff. A 7-step deepfake verification playbook: call-backs, codes, payment rules, and candidate checks.';
$meta_keywords = 'deepfake impersonation, deepfake fraud prevention, AI voice cloning scam, video call verification, fake job candidates';
$pillar = 'Secure';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/deepfake-impersonation-verification-playbook-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="A matte black egg-shaped form resting on a smaller yellow sphere, on a dark slate surface"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>Deepfake Impersonation: A Verification Playbook for Fake Exec Calls, Video Meetings, and Job Candidates</h1>
                <p class="meta">2026-11-16 · By the Yellow Coop Team</p>

                <p><strong>Takeaway:</strong> A cloned voice or a fake face on a video call can now sound and look like your CFO. Don't count on your staff to spot the fake. Build habits that make the fake irrelevant: a call-back rule, shared verification codes for sensitive requests, a "no money on one call" policy, and identity checks in hiring. Then rehearse it once.</p>

                <h2>Why "I'd know my boss's voice" isn't a plan</h2>

                <p>A deepfake is audio, video, or an image generated or altered by artificial intelligence (AI) to show someone saying or doing something they never did. Voice cloning is the audio version: software that mimics a specific person's voice from samples.</p>

                <p>The people who track this for a living are not reassuring:</p>

                <ul>
                    <li>The FBI's <a href="https://www.ic3.gov/PSA/2024/PSA241203">December 3, 2024 public service announcement (I-120324-PSA)</a> warns that criminals "generate videos for real time video chats with alleged company executives."</li>
                    <li>Its <a href="https://www.ic3.gov/PSA/2025/PSA250515">May 15, 2025 announcement (I-051525-PSA)</a> on impersonation of senior US officials says a real contact and an AI-cloned voice "can sound nearly identical," and that AI-generated content "is often difficult to identify."</li>
                    <li>FinCEN, the Treasury bureau that tracks financial crime, said in its <a href="https://www.fincen.gov/sites/default/files/shared/FinCEN-Alert-DeepFakes-Alert508FINAL.pdf">November 13, 2024 alert (FIN-2024-Alert004)</a> that starting in 2023 and continuing in 2024 it saw an increase in banks' suspicious activity reports describing suspected deepfake use. It notes criminals have reportedly impersonated executives to get staff to send large payments.</li>
                </ul>

                <h2>What it looks like in real life</h2>

                <p><strong>The multi-person video call.</strong> In early 2024, a Hong Kong finance employee at the engineering firm Arup joined a video call with people he believed were the chief financial officer and other colleagues. Hong Kong police said all of them were deepfake re-creations. He went on to send HK$200 million (about $25.6 million) across 15 transactions, <a href="https://www.cnn.com/2024/05/16/tech/arup-deepfake-scam-loss-hong-kong-intl-hnk">CNN reported</a> (May 16, 2024). Arup confirmed to CNN that "fake voices and images were used." He'd been suspicious of the original email. The video call is what convinced him.</p>

                <p><strong>The bad-connection pivot.</strong> A joint <a href="https://media.defense.gov/2023/Sep/12/2003298925/-1/-1/0/CSI-DEEPFAKE-THREATS.PDF">NSA, FBI, and CISA information sheet, "Contextualizing Deepfake Threats to Organizations"</a> (September 2023), describes a May 2023 attempt: a poor-quality WhatsApp audio call from a fake executive, then a Teams meeting that appeared to show the executive in their office. The connection was "very poor," so the caller suggested switching to text and pushed for a wire. The employee got suspicious and hung up. Good instincts, and a pattern worth memorizing.</p>

                <p><strong>The candidate who isn't.</strong> Back on <a href="https://www.ic3.gov/PSA/2022/PSA220628">June 28, 2022 (I-062822-PSA)</a>, the FBI warned of deepfakes and stolen identities used to apply for remote IT and software jobs, some with access to customer and financial data. In a <a href="https://www.ic3.gov/PSA/2025/PSA250123">January 23, 2025 update (I-012325-PSA)</a>, it said North Korean IT workers have used "artificial intelligence and face-swapping technology during video job interviews."</p>

                <h2>The verification playbook</h2>

                <h3>1. Treat the tells as a bonus, not a defense</h3>

                <p>The FBI lists things to watch for: distorted hands or faces, odd shadows, lag, and unnatural movements. Its 2022 alert noted lips that didn't match the audio, and coughs or sneezes out of sync with the video. FinCEN flags people who claim "repeated technical glitches" or ask to switch communication methods during identity checks. Teach these, but assume a good fake won't show any.</p>

                <h3>2. Hang up and call back</h3>

                <p>The FBI's advice: research the person, "independently identify a phone number" for them, and call to verify. That means a number from your own directory, not the one that just called, and not one in the email. Make the call-back mandatory for any request involving money, credentials, data, or secrecy. "This is confidential, don't tell anyone" is a reason to verify, not skip it.</p>

                <h3>3. Set up verification codes for sensitive requests</h3>

                <p>The FBI recommends families create "a secret word or phrase" to verify each other. Borrow the idea. The NSA/FBI/CISA sheet recommends identity checks that work during live calls, such as a one-time password or PIN, or known personal details, "especially important" for financial transactions. Keep codes off email and chat, and change them if anyone with access leaves.</p>

                <h3>4. No money moves on one conversation</h3>

                <p>The Arup call had several "colleagues" on it. Headcount isn't proof. Require a second channel and a second approver before money leaves, no matter who appears on screen or how urgent they sound.</p>

                <h3>5. Verify candidates, not just résumés</h3>

                <p>The FBI's 2025 guidance says to run identity verification "during interviewing, onboarding, and throughout the employment" of remote workers, cross-check applicants for duplicate résumés and contact details, and do as much hiring and onboarding in person as possible. For remote roles with data access, at least one live, on-camera identity check against a government ID is reasonable.</p>

                <h3>6. Shrink the raw material</h3>

                <p>Cloning needs samples. The NSA/FBI/CISA sheet recommends protecting the public media of high-priority people, and the FBI suggests limiting public images and voice recordings where you can. You won't scrub your CEO from the internet, but you can decide what goes up next.</p>

                <h3>7. Rehearse it once</h3>

                <p>The same sheet recommends planning, tabletop exercises with likely targets, executives included, and training staff on deepfake techniques and reporting. Run a 30-minute drill: "the CEO" calls the controller with an urgent, secret wire. Did anyone call back?</p>

                <h2>The bottom line</h2>

                <p>You can't out-stare a deepfake. You can make it pointless: no single call, voice, or face should be enough to move money, reset access, or hire someone.</p>

                <p>If nobody owns that playbook today, Yellow Coop can, as your fractional CIO, CTO, and CISO, including a <a href="https://yellowcoop.com/what-we-do/">written incident response plan and a tabletop exercise with leadership</a>. See <a href="https://yellowcoop.com/how-we-engage/">how we engage</a>, or <a href="https://yellowcoop.com/contact/">book a call</a>.</p>
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
