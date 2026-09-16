<?php
$image = 'coop.jpeg';
$title = 'Yellow Coop';
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
            align-items: center;
            justify-content: center;
            padding: 24px 24px 0;
        }
        img {
            max-width: 90%;
            max-height: calc(100vh - 120px);
            object-fit: contain;
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
            <img src="<?= htmlspecialchars($image) ?>" alt="Yellow Coop">
        </div>
        <footer>
            <div class="links">
                <a href="mailto:<?= htmlspecialchars($email) ?>">Contact</a>
                <span class="sep">·</span>
                <a href="blog.php">Blog</a>
                <span class="sep">·</span>
                <a href="<?= htmlspecialchars($newsletter) ?>" target="_blank" rel="noopener">Subscribe</a>
            </div>
            &copy; <?= (int)$year_start ?>–<?= (int)$year_end ?> Yellow Coop. All rights reserved.
        </footer>
    </div>
</body>
</html>
