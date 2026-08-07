<?php
require_once __DIR__ . '/../includes/config.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>

    <!-- OGP設定 -->
    <meta property="og:title" content="thicca | イラストレーター / VTuber 夢毬てちか">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo SITE_URL; ?>/">
    <meta property="og:description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta property="og:image" content="<?php echo OGP_IMAGE; ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:locale" content="ja_JP">

    <!-- X(Twitter)カード設定 -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo X_ID; ?>">
    <meta name="twitter:image" content="<?php echo OGP_IMAGE; ?>">

    <!-- 表示系設定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/common/favicon.ico">
    <link rel="apple-touch-icon" href="img/common/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/top.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1><?php echo SITE_NAME; ?></h1>
        <p><?php echo FULL_TITLE; ?></p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="gallery.php">Gallery</a>
        <a href="contact.php">Contact</a>
    </nav>

    <main>
        <section>
            <h2>Welcome</h2>
            <p>イラストレーター・VTuberとして活動している「thicca」の公式サイトです。準備中のページもありますが、少しずつ更新していきます。</p>
        </section>
    </main>

    <footer>
        <p><?php echo COPYRIGHT; ?></p>
    </footer>

</body>
</html>