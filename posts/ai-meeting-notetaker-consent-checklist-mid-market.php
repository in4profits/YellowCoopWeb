<?php
$title = 'AI Meeting Note-Takers: A Consent and Data Checklist for Mid-Market Owners and Operators — Yellow Coop';
$seo_title = 'AI Meeting Note-Takers: Consent and Data Checklist | Yellow Coop';
$year_start = 2025;
$year_end = 2026;
$email = 'info@yellowcoop.com';
$newsletter = 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw';
$meta_description = 'AI note-takers save time, but they record everyone on the call. A checklist for consent, settings, and data before you let them into meetings.';
$meta_keywords = 'AI meeting notetaker, AI notetaker policy, call recording consent, meeting transcription privacy, AI acceptable use policy';
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
                <div class="yc-pager"><img class="hero" src="/posts/images/ai-meeting-notetaker-consent-checklist-mid-market-hero.webp" width="1280" height="720" fetchpriority="high" alt="AI Meeting Note-Takers: A Consent and Data Checklist for Mid-Market Owners and Operators"><?php include __DIR__ . '/../includes/post-pager.php'; ?></div>
                <h1>AI Meeting Note-Takers: A Consent and Data Checklist for Mid-Market Owners and Operators</h1>
                <p class="meta">2026-11-04 · By the Yellow Coop Team</p>

                <p>AI note-takers are one of the easiest AI wins a company can get: no more scribbled action items, no more “wait, what did we agree to?” But a note-taker is also a recording device that joins your calls, and the people on the other end may never have agreed to it. Before you let one loose, decide which tools are allowed, which meetings are off-limits, how consent works, and where the recordings end up.</p>

                <p>Here’s a checklist to do that without killing the convenience.</p>

                <h2>Why this deserves ten minutes of policy</h2>

                <h3>Recording law isn’t the same everywhere</h3>

                <p>Federal wiretap law, <a href="https://www.law.cornell.edu/uscode/text/18/2511">18 U.S.C. § 2511(2)(d)</a>, generally allows recording when one party to the conversation consents, unless the recording is made “for the purpose of committing any criminal or tortious act.” Some states set a higher bar. California’s <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=PEN&amp;sectionNum=632">Penal Code § 632</a> makes it a crime to record a “confidential communication” without “the consent of all parties,” with fines of up to $2,500 per violation for a first offense. Your team may be in a one-party state while the customer on the call is not.</p>

                <p>This post isn’t legal advice. If you record calls across state lines or with sensitive topics, get your attorney to sign off on the consent language.</p>

                <h3>A live lawsuit shows where the risk sits</h3>

                <p>In August 2025, a California man named Justin Brewer filed a proposed class action against Otter.ai in federal court in Northern California, <a href="https://www.npr.org/2025/08/15/g-s1-83087/otter-ai-transcription-class-action-lawsuit">NPR reported</a> on Aug. 15, 2025. The case, now consolidated as <em>In re Otter.ai Privacy Litigation</em>, alleges that when an account holder connects their calendar, the Otter Notetaker can join meetings and record them without getting affirmative consent from every participant, and that Otter uses the recordings to train its speech recognition models.</p>

                <p>Those are allegations, not findings. But on Aug. 13, 2026, U.S. District Judge Eumi K. Lee <a href="https://cases.justia.com/federal/district-courts/california/candce/5:2025cv06911/454675/68/0.pdf">declined to dismiss most of the case</a>, letting the federal wiretap claim and several state-law claims move forward while dismissing others. The court noted that the one-party exception doesn’t apply if a recording is made for a “criminal or tortious” purpose, and, citing an earlier ruling, that “committing a tort and seeking a profit are not mutually exclusive.”</p>

                <p>The lawsuit targets the vendor, not the companies whose employees used it. Still, the guests in the suit were people who didn’t know they were being recorded. That’s the exact situation your policy should prevent.</p>

                <h2>The checklist</h2>

                <h3>1. Pick the approved tools</h3>

                <p>Decide which note-takers staff may use, and block or discourage the rest. If you already have an AI use policy, add note-takers to it by name. Shadow tools are where you lose track of where recordings go.</p>

                <h3>2. Turn off auto-join</h3>

                <p>Calendar-connected bots that join every meeting by default are convenient and risky. Make joining a deliberate choice per meeting, at least for anything with outside guests.</p>

                <h3>3. Make consent visible and simple</h3>

                <p>Announce the note-taker at the start (“We’re using an AI note-taker; anyone mind?”) and put a line in the calendar invite. If anyone objects, turn it off. For external meetings, ask the guest first. Your attorney can tell you whether verbal notice is enough where you operate.</p>

                <h3>4. Name the no-record meetings</h3>

                <p>Some conversations shouldn’t be transcribed by a third-party tool at all: HR and performance discussions, legal strategy, health or benefits matters, deal negotiations, and anything under a confidentiality agreement. Write the list down so nobody has to make the call on the fly.</p>

                <h3>5. Read the vendor’s data terms</h3>

                <p>Before approving a tool, find out whether it uses your recordings or transcripts to train its models, whether you can opt out, how long it keeps audio and text, and who on the vendor side can access it. The Otter complaint centers on training use, so this is the question to ask first.</p>

                <h3>6. Set retention and access</h3>

                <p>Treat transcripts like any other business record. Decide how long they’re kept, who can see them, and how they’re deleted, and fold that into your data retention policy. A searchable archive of every candid conversation is a gift to the next litigator or attacker.</p>

                <h3>7. Have a human check the summary</h3>

                <p>AI summaries can drop context or misattribute who said what. Before a summary becomes the official record of a decision, the meeting owner should skim it.</p>

                <h2>The takeaway</h2>

                <p>AI note-takers are worth having. Just treat them like what they are: a recorder with a cloud account attached. Approve the tools, turn off auto-join, ask before you record, keep sensitive meetings off the tape, and know where the data goes.</p>

                <p>If you’d like help putting this in writing, Yellow Coop’s fractional technology leadership covers it. Our Secure work includes an AI use policy (which tools, which data, who approves) and vendor risk reviews for the systems that hold your data. <a href="/contact/">Get in touch</a> to talk it through.</p>

                <h2>Sources</h2>
                <ul>
                    <li>18 U.S.C. § 2511 (party-consent exception at § 2511(2)(d)), via Cornell LII: <a href="https://www.law.cornell.edu/uscode/text/18/2511">https://www.law.cornell.edu/uscode/text/18/2511</a></li>
                    <li>California Penal Code § 632 (amended by Stats. 2016, Ch. 855, effective Jan. 1, 2017): <a href="https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=PEN&amp;sectionNum=632">https://leginfo.legislature.ca.gov/faces/codes_displaySection.xhtml?lawCode=PEN&amp;sectionNum=632</a></li>
                    <li>NPR, “Lawsuit claims AI service Otter secretly records private chats,” Aug. 15, 2025: <a href="https://www.npr.org/2025/08/15/g-s1-83087/otter-ai-transcription-class-action-lawsuit">https://www.npr.org/2025/08/15/g-s1-83087/otter-ai-transcription-class-action-lawsuit</a></li>
                    <li>In re Otter.ai Privacy Litigation, No. 5:25-cv-06911-EKL (N.D. Cal.), Consolidated Class Action Complaint (ECF No. 35): <a href="https://storage.courtlistener.com/recap/gov.uscourts.cand.454675/gov.uscourts.cand.454675.35.0.pdf">https://storage.courtlistener.com/recap/gov.uscourts.cand.454675/gov.uscourts.cand.454675.35.0.pdf</a></li>
                    <li>In re Otter.ai Privacy Litigation, Order Granting in Part and Denying in Part Motion to Dismiss (ECF No. 68), Aug. 13, 2026: <a href="https://cases.justia.com/federal/district-courts/california/candce/5:2025cv06911/454675/68/0.pdf">https://cases.justia.com/federal/district-courts/california/candce/5:2025cv06911/454675/68/0.pdf</a></li>
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
