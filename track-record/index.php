<?php
$page_title = 'Track Record';
$page_desc = 'Results from FedEx, FedEx Freight, Agility Solutions and a logistics carrier: $50M saved a year, a $100M+ platform, ISO 27001, 60% fewer incidents.';
$page_path = '/track-record/';
$page_image = '/assets/track-record/fedex-rfid-dock-automation-og.png';
$active = 'track-record';
$show_cta = false;
require __DIR__ . '/../includes/header.php';
?>
<section class="container page-hero">
    <span class="eyebrow">Track record</span>
    <h1>Results from 25 years running technology in logistics and security.</h1>
    <p>Delivered as a technology executive at FedEx, Agility Solutions and a mid-size trucking and logistics carrier. The same work Yellow Coop does for you, at enterprise scale.</p>
  </section>
  <section class="section">
    <div class="container" style="display:block">
      <div class="tr-grid">
      <a class="tr-card" href="/track-record/fedex-rfid-dock-automation.php">
        <img src="/assets/track-record/fedex-rfid-dock-automation.webp" width="1000" height="750" loading="lazy" alt="FedEx RFID and RTLS dock automation flow: RFID tag on freight, dock readers, RTLS platform, shipment management system, dock supervisor view. $50M saved annually.">
        <div class="tr-body">
          <span class="tr-tag">Innovate &middot; FedEx</span>
          <h3>FedEx $200M RFID Dock Automation</h3>
          <p class="tr-result">$50M saved annually</p>
          <span class="tr-more">Read the case study &rarr;</span>
        </div>
      </a>
      <a class="tr-card" href="/track-record/fedex-freight-dispatch-platform.php">
        <img src="/assets/track-record/fedex-freight-dispatch-platform.webp" width="1000" height="750" loading="lazy" alt="FedEx Freight dispatch platform architecture: driver handheld and in-cab devices feed a microservice platform that serves central dispatch, dock planning and on-road management. $100M+ program, 150+ engineers across 3 countries.">
        <div class="tr-body">
          <span class="tr-tag">Operate &middot; FedEx Freight</span>
          <h3>FedEx Freight $100M Dispatch Platform</h3>
          <p class="tr-result">$100M+ program, 150+ engineers in 3 countries</p>
          <span class="tr-more">Read the case study &rarr;</span>
        </div>
      </a>
      <a class="tr-card" href="/track-record/iso-tisax-certification.php">
        <img src="/assets/track-record/iso-tisax-certification.webp" width="1000" height="750" loading="lazy" alt="ISO and TISAX certification timeline: DR and contingency plan, controls in place, audit, certified. Compliance processes 30% leaner.">
        <div class="tr-body">
          <span class="tr-tag">Secure &middot; Mid-size trucking &amp; logistics carrier</span>
          <h3>ISO 27001 &amp; TISAX Certification for a Logistics Carrier</h3>
          <p class="tr-result">Certified; compliance processes 30% leaner</p>
          <span class="tr-more">Read the case study &rarr;</span>
        </div>
      </a>
      <a class="tr-card" href="/track-record/zero-trust-security-program.php">
        <img src="/assets/track-record/zero-trust-security-program.webp" width="1000" height="750" loading="lazy" alt="Zero Trust security program results: 40% lower threat exposure, 60% fewer security incidents, 95% phishing-training compliance.">
        <div class="tr-body">
          <span class="tr-tag">Secure &middot; Agility Solutions</span>
          <h3>Zero Trust Security Program</h3>
          <p class="tr-result">60% fewer incidents, 40% lower exposure</p>
          <span class="tr-more">Read the case study &rarr;</span>
        </div>
      </a>
      </div>
      <p class="tr-note">These results come from the executive roles of Yellow Coop's founder, before Yellow Coop. They are not Yellow Coop client engagements.</p>
    </div>
  </section>
<section class="container">
  <div class="cta-band">
    <p>Want results like these in your operation? That's what the first call is for.</p>
    <a class="btn btn-navy" href="<?= e(booking_href($site)) ?>"<?= booking_attrs($site) ?>>Book a 20-min call</a>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
