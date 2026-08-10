<?php
/**
 * フッター用用php
 * 各ページから require_once で読み込んで使用する
 */
?>
<footer id="footer">
    <div class="info-area">
        <a class="logo" href="index.php">
            <img src="images/common/logo-w.svg" alt="<?php echo SITE_NAME; ?>">
        </a>
        <p class="copyright"><?php echo COPYRIGHT; ?></p>
    </div>

    <div class="menu-area">
        <div class="menu-col">
            <p class="menu-title"><a href="profile.php"><?php echo PROFILE; ?></a></p>
            <ul class="menu-list">
                <li><a href="profile.php#philosophy">企業理念</a></li>
                <li><a href="profile.php#service">事業紹介</a></li>
                <li><a href="profile.php#overview">会社概要</a></li>
                <li><a href="profile.php#access">アクセス</a></li>
            </ul>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="gallery.php">商品一覧</a></p>
            <p class="menu-title"><a href="achievements.php">実績紹介</a></p>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="faq.php"><?php echo FAQ; ?></a></p>
            <p class="menu-title"><a href="contact.php">お問い合わせ</a></p>
        </div>
    </div>
</footer>