<?php
$page_title = 'The Real Yellow Coop';
$page_desc = 'Yellow Coop is named after a real chicken coop my three daughters pitched, planned and built with me. Here is that story, and what it means for how we work.';
$page_path = '/about/story/';
$page_image = '/assets/story/og.jpg';
$active = 'about';
require __DIR__ . '/../../includes/header.php';

// Build stages: [heading, text, [[image, caption], ...]]
$stages = [
  ['The run', 'A white frame wrapped in chicken wire, with a door, a ramp and room to move.', [
    ['run-frame', 'Run framed and the wire going on'],
    ['run-base', 'The base frame for the run'],
  ]],
  ['The walls go up', 'Pine boards, one row at a time, with openings cut for windows and the doors the hens would use.', [
    ['walls', 'Framing the coop, plank by plank'],
    ['walls-inside', 'Looking down into the shell'],
  ]],
  ['A nesting box on the side', 'A box built onto the outside wall, so eggs could be collected without walking into the coop.', [
    ['nest-box-frame', 'The nesting box takes shape, and the first coat of yellow'],
    ['openings', 'Openings cut and framed'],
  ]],
  ['Yellow, of course', 'The color was never up for debate.', [
    ['paint', 'First full side painted'],
    ['door', 'The people door, before its own coat of paint'],
  ]],
  ['A roof and the details', 'Corrugated roofing on a slope, sliding pop doors for the hens, white trim to finish it.', [
    ['roof', 'Roof on'],
    ['trim', 'White trim, vents and the people door'],
  ]],
  ['The nesting box lid', 'A hinged lid, so eggs can be collected from outside the coop.', [
    ['nest-box-lid', 'Lift the lid, collect the eggs'],
    ['nest-box', 'The finished box'],
  ]],
];
?>
<style>
.story { --paper:#f4efe3; }
.story .serif { font-family: Georgia, "Times New Roman", serif; }
.story-hero { display:grid; grid-template-columns: 1.15fr 1fr; gap: 40px; align-items:center; padding-top:56px; padding-bottom:48px; }
.story-hero h1 { font-family: Georgia, "Times New Roman", serif; font-size: 48px; line-height:1.1; margin: 8px 0 18px; }
.story-hero p { font-size: 19px; color:#d0d0d0; max-width: 560px; margin-bottom: 14px; }
.polaroid { background:#fbfaf6; padding:12px 12px 14px; border-radius:3px; box-shadow: 0 10px 30px rgba(0,0,0,.45); display:inline-block; }
.polaroid img { display:block; width:100%; height:auto; border-radius:2px; }
.polaroid figcaption { font-family: Georgia, serif; font-style: italic; color:#3a3a3a; font-size:14px; margin-top:10px; text-align:center; }
.story-hero .polaroid { transform: rotate(1.5deg); max-width: 380px; justify-self:center; }
.story-text { max-width: 720px; }
.story-text h2 { font-family: Georgia, "Times New Roman", serif; font-size: 32px; margin-bottom: 14px; }
.story-text p { font-size: 18px; line-height: 1.7; color:#d6d6d6; margin-bottom: 16px; }
.stage { display:grid; grid-template-columns: 260px 1fr; gap: 32px; padding: 34px 0; border-top: 1px dashed #3a3222; }
.stage h3 { font-family: Georgia, serif; font-size: 24px; color:#fff; margin-bottom: 8px; }
.stage .num { color: var(--y); font-weight:800; font-size:13px; letter-spacing:2px; }
.stage p { color:#bdbdbd; font-size:16px; }
.stage .photos { display:flex; gap: 22px; flex-wrap: wrap; align-items:flex-start; }
.stage .photos .polaroid { width: 220px; }
.stage .photos .polaroid:nth-child(odd) { transform: rotate(-1.2deg); }
.stage .photos .polaroid:nth-child(even) { transform: rotate(1deg); margin-top: 14px; }
.finale { display:grid; grid-template-columns: 1fr 1.1fr; gap: 40px; align-items:center; }
.finale .polaroid { transform: rotate(-1deg); max-width: 400px; justify-self:center; }
.promise { background: var(--paper); color:#1d1d1d; border-radius: 10px; padding: 34px 32px; }
.promise h2 { font-family: Georgia, serif; color:#13294B; font-size: 30px; margin-bottom: 12px; }
.promise p { color:#2b2b2b; font-size: 18px; line-height: 1.65; margin-bottom: 14px; max-width: 760px; }
.promise ul { list-style: none; margin: 18px 0 6px; display:grid; grid-template-columns: 1fr 1fr; gap: 14px 28px; }
.promise li { font-size: 16.5px; color:#2b2b2b; padding-left: 18px; border-left: 3px solid var(--y); }
.promise li strong { display:block; color:#13294B; font-size:17px; margin-bottom:2px; }
.signoff { font-family: Georgia, serif; font-style: italic; font-size: 20px; color:#13294B; margin-top: 18px; }
@media (max-width: 860px) {
  .story-hero, .finale { grid-template-columns: 1fr; }
  .story-hero h1 { font-size: 36px; }
  .stage { grid-template-columns: 1fr; gap: 16px; }
  .stage .photos .polaroid { width: calc(50% - 11px); }
  .promise ul { grid-template-columns: 1fr; }
}
</style>

<div class="story">
<section class="container story-hero">
  <div>
    <span class="eyebrow">The real Yellow Coop</span>
    <h1>It started with a pitch from three girls.</h1>
    <p>Yellow Coop is named after an actual chicken coop. It's yellow, it has a corrugated roof, and my three daughters and I built it in our driveway.</p>
    <p>They wanted chickens. They didn't just ask for them. They put together a presentation for my wife and me, made their case, and got a yes. Then the four of us built their dream coop together.</p>
  </div>
  <figure class="polaroid">
    <img src="/assets/story/pop-doors-roof.webp" width="540" height="720" alt="The yellow coop with its dark corrugated roof and two white sliding pop doors.">
    <figcaption>Yellow, with a roof and two pop doors</figcaption>
  </figure>
</section>

<section class="section">
  <div class="container">
    <div class="story-text">
      <h2>How it came together</h2>
      <p>No kit, no contractor. A plan, a lot of lumber, a can of yellow paint and four sets of hands.</p>
    </div>
    <?php foreach ($stages as $i => [$h, $t, $photos]): ?>
    <div class="stage">
      <div>
        <span class="num">STEP <?= $i + 1 ?></span>
        <h3><?= e($h) ?></h3>
        <p><?= e($t) ?></p>
      </div>
      <div class="photos">
        <?php foreach ($photos as [$img, $cap]):
          $size = @getimagesize(__DIR__ . '/../../assets/story/' . $img . '.webp') ?: [360, 480]; ?>
        <figure class="polaroid">
          <img src="/assets/story/<?= e($img) ?>.webp" width="<?= (int) $size[0] ?>" height="<?= (int) $size[1] ?>" loading="lazy" alt="<?= e($cap) ?>">
          <figcaption><?= e($cap) ?></figcaption>
        </figure>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container finale">
    <figure class="polaroid">
      <img src="/assets/story/finished.webp" width="360" height="480" loading="lazy" alt="The finished yellow coop in the back yard with its wire run, ramp and feeder.">
      <figcaption>Done: coop, run and feeder</figcaption>
    </figure>
    <div class="story-text">
      <h2>The part that matters</h2>
      <p>Ask any of my three girls and they'll tell you building that coop was one of the best experiences of their lives.</p>
      <p>That's the standard I hold Yellow Coop to. When an engagement ends, I want every client to feel the same way: that the work was one of the best experiences they've had.</p>
    </div>
  </div>
</section>

<section class="container" style="padding-bottom: 20px">
  <div class="promise">
    <h2>What the coop taught me about this work</h2>
    <p>Building a coop with three kids isn't so different from leading technology for a growing company. The same things make it go well.</p>
    <ul>
      <li><strong>You make the case.</strong>The girls pitched the idea. Clients know their business best; my job is to help sharpen the case and get to a clear yes.</li>
      <li><strong>We build it together.</strong>They held the boards and drove the screws. Your team works alongside me, so the knowledge stays with you.</li>
      <li><strong>One piece at a time.</strong>Walls, then paint, then roof, then doors. Each step works before the next one starts. No big-bang rebuilds.</li>
      <li><strong>It's yours when we're done.</strong>The coop is theirs. When an engagement ends, you own the plan, the systems and the documentation.</li>
    </ul>
    <p class="signoff">&mdash; JP, founder of Yellow Coop</p>
  </div>
</section>
</div>

<?php require __DIR__ . '/../../includes/footer.php'; ?>
