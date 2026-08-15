<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = SITE_NAME;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'top';

// ニュースデータ読み込み
$newsItems = json_decode(file_get_contents(__DIR__ . '/../data/news.json'), true);

// 元の並び順(JSON内でのインデックス)を保持しておく
foreach ($newsItems as $index => &$item) {
    $item['_index'] = $index;
}
unset($item); // 参照を解除

// 日付の新しい順、同じ日付ならJSON内で後ろにある方を上に
usort($newsItems, function ($a, $b) {
    $dateCompare = strtotime(str_replace('.', '-', $b['date'])) - strtotime(str_replace('.', '-', $a['date']));
    if ($dateCompare !== 0) {
        return $dateCompare;
    }
    // 日付が同じ場合、_index(元の並び順)が大きい方(後ろにある方)を上に
    return $b['_index'] - $a['_index'];
});

// 表示件数を制限したい場合(例:最新5件だけ)
$latestNews = array_slice($newsItems, 0, 5);
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

        <section class="news-section">
            <h2 class="section-title">
                <span class="en">NEWS</span>
                <span class="ja">更新情報</span>
            </h2>
            <ul class="news-list">
                <?php foreach ($latestNews as $news): ?>
                <li>
                    <span class="news-date"><?php echo htmlspecialchars($news['date']); ?></span>
                    <span class="news-text"><?php echo htmlspecialchars($news['text']); ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>

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
            </a>

            <a class="item" href="contact">
                <div class="img">
                    <img src="images/top/contact.png" alt="">
                </div>
                <p class="title">
                    <span class="en">CONTACT</span>
                    <span class="ja"><?php echo CONTACT; ?></span>
                </p>
            </a>
        </div>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>