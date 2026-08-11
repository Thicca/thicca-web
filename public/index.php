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
            <h2 class="section-title">ABOUT ME</h2>

            <div class="flex">
                <div class="img">
                    <img src="images/top/about.png" alt="">
                </div>

                <div class="text">
                    <p class="title"><?php echo ABOUT_TITLE; ?></p>
                    <p class="description"><?php echo ABOUT_DESCRIPTION; ?></p>
                    <a class="btn" href="profile">VIEW MORE</a>
                </div>
            </div>
        </section>

        <section class="gallery fadein">
            <div class="text">
                <h2 class="section-title">GALLERY</h2>
                <p class="description"><?php echo ABOUT_GALLERY; ?></p>
            </div>

            <div class="gallery-list-area">
                <ul class="gallery-list">
                    <li><img src="images/top/gallery1.png" alt=""></li>
                    <li><img src="images/top/gallery2.png" alt=""></li>
                    <li><img src="images/top/gallery3.png" alt=""></li>
                    <li><img src="images/top/gallery4.png" alt=""></li>
                    <li><img src="images/top/gallery5.png" alt=""></li>
                    <li><img src="images/top/gallery6.png" alt=""></li>
                </ul>
                <ul class="gallery-list">
                    <li><img src="images/top/gallery1.png" alt=""></li>
                    <li><img src="images/top/gallery2.png" alt=""></li>
                    <li><img src="images/top/gallery3.png" alt=""></li>
                    <li><img src="images/top/gallery4.png" alt=""></li>
                    <li><img src="images/top/gallery5.png" alt=""></li>
                    <li><img src="images/top/gallery6.png" alt=""></li>
                </ul>
            </div>

            <a class="btn" href="gallery">VIEW MORE</a>
        </section>

        <section class="achievements fadein">
            <div class="text">
                <h2 class="section-title">ACHIEVEMENTS</h2>
                <p class="description"><?php echo ABOUT_ACHIEVEMENTS; ?></p>
                <p class="description"><?php echo ABOUT_ACHIEVEMENTS2; ?></p>
                <a class="btn" href="achievements">VIEW MORE</a>
            </div>

            <ul class="achievements-list">
                <li><img src="images/top/works1.png" alt=""></li>
                <li><img src="images/top/works2.png" alt=""></li>
                <li><img src="images/top/works3.png" alt=""></li>
                <li><img src="images/top/works4.png" alt=""></li>
            </ul>
        </section>

        <div class="faq-contact fadein">
            <a class="item" href="faq">
                <div class="img">
                    <img src="images/top/faq.png" alt="">
                </div>
                <p class="title">
                    <span class="en">FAQ</span>
                    <span class="ja"><?php echo FAQ; ?></span>
                </p>
                <div class="arrow">
                    <img src="images/top/arrow.svg" alt="">
                </div>
            </a>

            <a class="item" href="contact">
                <div class="img">
                    <img src="images/top/contact.png" alt="">
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