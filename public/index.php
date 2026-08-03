<?php
$siteTitle = "thicca | イラストレーター / VTuber";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($siteTitle); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <h1>thicca</h1>
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