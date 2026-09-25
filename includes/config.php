<?php
// Site-wide settings. Edit values here, not in individual pages.
$site = [
    'name'       => 'Yellow Coop',
    'tagline'    => 'Cooperate · Create · Grow',
    'url'        => 'https://yellowcoop.com',
    'email'      => 'info@yellowcoop.com',
    'newsletter' => 'https://4393au.share-na2.hsforms.com/27zXzNBOAQ9OzMK-Nck6Hxw',
    'year_start' => 2025,
    // HubSpot Meetings link. Leave '' until it exists; buttons then go to /contact/.
    'booking_url' => 'https://meetings-na2.hubspot.com/john-pall',
    // HubSpot contact form embed. Fill all three to show the form on /contact/.
    'hs_region'   => 'na2',
    'hs_portal'   => '',
    'hs_form'     => '',
];

$nav = [
    'what-we-do'    => ['What We Do', '/what-we-do/'],
    'how-we-engage' => ['How We Engage', '/how-we-engage/'],
    'roles'         => ['CIO · CTO · CISO', '/cio-vs-cto-vs-ciso/'],
    'insights'      => ['Insights', '/blog.php'],
    'about'         => ['About', '/about/'],
    'faq'           => ['FAQ', '/faq/'],
];

// Pillar for posts published before $pillar was added to the post template.
$legacy_pillars = [
    'agent-sprawl-ops-governance-control-plane'          => 'Operate',
    'dreamforce-2026-koa-aiforce-enterprise-ai-interfaces' => 'Innovate',
    'ai-software-factory-funding-mid-market-founders'    => 'Innovate',
    'continuous-compliance-agent-era-soc2'               => 'Secure',
    'ai-agent-production-failures-observability'         => 'Operate',
    'plugin4shell-ai-coding-agent-security'              => 'Secure',
    'ai-agent-containment-founder-checklist'             => 'Secure',
    'silent-agent-failures-production-control-plane'     => 'Operate',
    'ai-cloud-compute-founder-buy-strategy'              => 'Innovate',
    'genai-data-loss-prevention-founder-checklist'       => 'Secure',
    'ai-model-price-wars-founder-ops-checklist'          => 'Operate',
    'continuous-ai-red-teaming-security-baseline'        => 'Secure',
    'ai-regulation-fragmentation-founder-compliance-plan' => 'Secure',
    'process-knowledge-map-before-ai-agents-scale'       => 'Operate',
];

function e($s) { return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8'); }

function booking_href($site) {
    return $site['booking_url'] !== '' ? $site['booking_url'] : '/contact/';
}

// External booking page opens in a new tab so the visitor keeps yellowcoop.com open.
function booking_attrs($site) {
    return $site['booking_url'] !== '' ? ' target="_blank" rel="noopener" title="Opens the scheduler in a new window"' : '';
}

// Reads posts/*.php without executing them. Order follows sitemap.xml (newest first),
// then date for any post not yet in the sitemap.
function load_posts($root) {
    global $legacy_pillars;
    $order = [];
    $sm = @file_get_contents($root . '/sitemap.xml');
    if ($sm && preg_match_all('#/posts/([a-z0-9-]+)\.php#', $sm, $m)) {
        foreach ($m[1] as $i => $slug) { if (!isset($order[$slug])) $order[$slug] = $i; }
    }
    $posts = [];
    foreach (glob($root . '/posts/*.php') as $file) {
        $slug = basename($file, '.php');
        $src = file_get_contents($file);
        $title = preg_match("#\\\$title\s*=\s*'((?:[^'\\\\]|\\\\.)*)'#", $src, $t) ? stripslashes($t[1]) : $slug;
        $title = preg_replace('/\s+[—-]\s+Yellow Coop$/u', '', $title);
        $desc = preg_match("#\\\$meta_description\s*=\s*'((?:[^'\\\\]|\\\\.)*)'#", $src, $d) ? stripslashes($d[1]) : '';
        $date = preg_match('#<p class="meta">\s*([0-9]{4}-[0-9]{2}-[0-9]{2})#', $src, $dt) ? $dt[1] : '';
        if (preg_match("#\\\$pillar\s*=\s*'(Operate|Secure|Innovate)'#", $src, $p)) { $pillar = $p[1]; }
        else { $pillar = $legacy_pillars[$slug] ?? 'Operate'; }
        $img = '/posts/images/' . $slug . '-hero.png';
        $posts[] = [
            'slug' => $slug, 'title' => $title, 'desc' => $desc, 'date' => $date, 'pillar' => $pillar,
            'url' => '/posts/' . $slug . '.php',
            'img' => file_exists($root . $img) ? $img : '',
            'rank' => $order[$slug] ?? -1,
        ];
    }
    usort($posts, function ($a, $b) {
        if ($a['rank'] === -1 || $b['rank'] === -1) {
            if ($a['rank'] === $b['rank']) return strcmp($b['date'], $a['date']);
            // Posts missing from the sitemap sort by date against the rest.
            $c = strcmp($b['date'], $a['date']);
            return $c !== 0 ? $c : ($a['rank'] === -1 ? -1 : 1);
        }
        return $a['rank'] <=> $b['rank'];
    });
    return $posts;
}
