<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = SITE_NAME;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'top';
?>
<!DOCTYPE html>
<html lang="ja">
<?php require_once __DIR__ . '/../includes/head.php'; ?>
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

        <section class="profile fadein">
            <h2 class="section-title">ABOUT</h2>

            <div class="flex">
                <div class="img">
                    <img src="images/top/about.png" alt="">
                </div>

                <div class="text">
                    <p class="title"><?php echo ABOUT_TITLE; ?></p>
                    <p class="description"><?php echo ABOUT_DESCRIPTION; ?></p>
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

            <a class="btn" href="products.php">VIEW MORE</a>
        </section>

        <section class="works fadein">
            <div class="text">
                <h2 class="section-title">WORKS</h2>
                <p class="description">住空間及び商業空間のデザインを行なっています。<br>
                住む人やその空間を利用されるお客様が笑顔になるような空間創りを心掛けています。</p>
                <p class="description">私たちがこれまでに手がけてきた住居と店舗デザインの一部をご紹介いたします。</p>
                <a class="btn" href="works.php">VIEW MORE</a>
            </div>

            <ul class="works-list">
                <li><img src="images/top/works1.jpg" alt=""></li>
                <li><img src="images/top/works2.jpg" alt=""></li>
                <li><img src="images/top/works3.jpg" alt=""></li>
                <li><img src="images/top/works4.jpg" alt=""></li>
            </ul>
        </section>

        <div class="faq-contact fadein">
            <a class="item" href="faq.php">
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

            <a class="item" href="contact.php">
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