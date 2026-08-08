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
    <meta property="og:title" content="<?php echo CIRCLE_NAME; ?>">
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
    <link rel="icon" href="images/common/favicon.ico">
    <link rel="apple-touch-icon" href="images/common/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/top.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header_top.php'; ?>

    <main>
        <div class="mainvisual">
            <ul class="fade-images">
                <li><img src="images/top/playmat_techika1staniv_background.png" alt="メインビジュアル背景" class="fade-up img-1"></li>
                <li><img src="images/top/playmat_techika1staniv_transparent_ver2.png" alt="メインビジュアルてちか" class="fade-up img-2"></li>
                <li><img src="images/top/techika_name_logo.png" alt="メインビジュアルてちかロゴ" class="fade-up img-3"></li>
            </ul>
            <p class="catchphrase"><?php echo CATCHPHRASE; ?></p>
        </div>

        <section class="company fadein">
            <h2 class="section-title">ABOUT</h2>

            <div class="flex">
                <div class="img">
                    <img src="images/top/about.png" alt="">
                </div>

                <div class="text">
                    <p class="title">新たな価値を創造する</p>
                    <p class="description">私たちはインテリアを通して住居や店舗の空間をデザインし、その空間の中に新たな価値を創造します。</p>
                    <a class="btn" href="profile.php">VIEW MORE</a>
                </div>
            </div>
        </section>

        <section class="products fadein">
            <div class="text">
                <h2 class="section-title">PRODUCTS</h2>
                <p class="description">私たちがデザインするインテリアをご紹介します。<br>
                ソファやデスク、チェア、ダイニングまわりを中心にオリジナルのインテリアをご提案いたします。</p>
            </div>

            <div class="products-list-area">
                <ul class="products-list">
                    <li><img src="images/top/products1.jpg" alt=""></li>
                    <li><img src="images/top/products2.jpg" alt=""></li>
                    <li><img src="images/top/products3.jpg" alt=""></li>
                    <li><img src="images/top/products4.jpg" alt=""></li>
                    <li><img src="images/top/products5.jpg" alt=""></li>
                    <li><img src="images/top/products6.jpg" alt=""></li>
                </ul>
                <ul class="products-list">
                    <li><img src="images/top/products1.jpg" alt=""></li>
                    <li><img src="images/top/products2.jpg" alt=""></li>
                    <li><img src="images/top/products3.jpg" alt=""></li>
                    <li><img src="images/top/products4.jpg" alt=""></li>
                    <li><img src="images/top/products5.jpg" alt=""></li>
                    <li><img src="images/top/products6.jpg" alt=""></li>
                </ul>
            </div>

            <a class="btn" href="products.html">VIEW MORE</a>
        </section>

        <section class="works fadein">
            <div class="text">
                <h2 class="section-title">WORKS</h2>
                <p class="description">住空間及び商業空間のデザインを行なっています。<br>
                住む人やその空間を利用されるお客様が笑顔になるような空間創りを心掛けています。</p>
                <p class="description">私たちがこれまでに手がけてきた住居と店舗デザインの一部をご紹介いたします。</p>
                <a class="btn" href="works.html">VIEW MORE</a>
            </div>

            <ul class="works-list">
                <li><img src="images/top/works1.jpg" alt=""></li>
                <li><img src="images/top/works2.jpg" alt=""></li>
                <li><img src="images/top/works3.jpg" alt=""></li>
                <li><img src="images/top/works4.jpg" alt=""></li>
            </ul>
        </section>

        <div class="faq-contact fadein">
            <a class="item" href="faq.html">
                <div class="img">
                    <img src="images/top/faq.jpg" alt="">
                </div>
                <p class="title">
                    <span class="en">FAQ</span>
                    <span class="ja">よくある質問</span>
                </p>
                <div class="arrow">
                    <img src="images/top/arrow.svg" alt="">
                </div>
            </a>

            <a class="item" href="contact.html">
                <div class="img">
                    <img src="images/top/contact.jpg" alt="">
                </div>
                <p class="title">
                    <span class="en">CONTACT</span>
                    <span class="ja">お問い合わせ</span>
                </p>
                <div class="arrow">
                    <img src="images/top/arrow.svg" alt="">
                </div>
            </a>
        </div>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>