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

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1><?php echo SITE_NAME; ?></h1>
        <p>イラストレーター / VTuber「夢毬てちか」</p>
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
        <p>&copy; <?php echo date("Y"); ?> thicca</p>
    </footer>

</body>
</html>