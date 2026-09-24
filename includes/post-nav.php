<?php
// Shared top bar for blog posts. Posts keep their own layout; this adds site navigation.
require_once __DIR__ . '/config.php';
?>
<style>
.yc-nav{border-bottom:1px solid #262626;background:#111;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif}
.yc-nav .row{max-width:1120px;margin:0 auto;padding:0 16px;min-height:60px;display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap}
.yc-nav .logo{display:inline-flex;align-items:center;gap:8px;font-weight:800;font-size:18px;color:#fff;text-decoration:none}
.yc-nav .links{display:flex;gap:18px;align-items:center;flex-wrap:wrap;font-size:14px;padding:8px 0}
.yc-nav .links a{color:#bbb;text-decoration:none}.yc-nav .links a:hover{color:#F7B51E;text-decoration:none}
.yc-nav .links a.btn{background:linear-gradient(90deg,#F7B51E,#F0851F);color:#111;font-weight:700;border-radius:6px;padding:8px 14px}
@media(max-width:640px){.yc-nav .links .hide-sm{display:none}}
.yc-cta{margin:36px 0 8px;padding:20px;border-radius:10px;background:linear-gradient(90deg,#F7B51E,#F0851F);color:#13294B}
.yc-cta strong{color:#13294B!important}
.yc-cta p{color:#13294B!important;margin:0 0 12px!important;font-size:17px!important}
.yc-cta a{display:inline-block;background:#13294B;color:#fff!important;padding:9px 14px;border-radius:6px;font-weight:700;text-decoration:none;font-size:14px;margin-right:8px}
</style>
<header class="yc-nav"><div class="row">
  <a class="logo" href="/"><img src="/assets/mark.svg" alt="" width="26" height="22"><span>yellow coop</span></a>
  <nav class="links" aria-label="Main">
    <a class="hide-sm" href="/what-we-do/">What We Do</a>
    <a class="hide-sm" href="/how-we-engage/">How We Engage</a>
    <a href="/blog.php">Insights</a>
    <a class="btn" href="<?= htmlspecialchars(booking_href($site), ENT_QUOTES, 'UTF-8') ?>">Book a call</a>
  </nav>
</div></header>
