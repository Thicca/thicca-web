<?php
/**
 * ヘッダーで共通するhtml
 * header.php及びheader.phpから require_once で読み込んで使用する
 */
?>
<div class="hamburger">
    <span></span>
    <span></span>
    <span></span>
</div>

<nav class="navi">
    <ul class="menu">
        <li class="menu-first">
            <span><?php echo PROFILE; ?></span>
            <ul class="menu-second">
                <li><a href="profile.php#philosophy">企業理念</a></li>
                <li><a href="profile.php#service">事業紹介</a></li>
                <li><a href="profile.php#overview">会社概要</a></li>
                <li><a href="profile.php#access">アクセス</a></li>
            </ul>
        </li>
        <li><a href="products.php">商品一覧</a></li>
        <li><a href="achievements.php">実績紹介</a></li>
        <li><a href="faq.php">よくある質問</a></li>
        <li class="menu-contact"><a href="contact.php">お問い合わせ</a></li>
    </ul>
</nav>

<div class="mask"></div>