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
        <li><a href="news"><?php echo NEWS; ?></a></li>
        <li class="menu-first">
            <span><?php echo PROFILE; ?></span>
            <ul class="menu-second">
                <li><a href="profile#aboutme"><?php echo ABOUTME; ?></a></li>
                <li><a href="profile#works"><?php echo WORKS; ?></a></li>
                <li><a href="profile#ability"><?php echo ABILITY; ?></a></li>
                <li><a href="profile#certificate"><?php echo CERTIFICATE; ?></a></li>
                <li><a href="profile#deck"><?php echo DECK; ?></a></li>
                <li><a href="profile#history"><?php echo HISTORY; ?></a></li>
            </ul>
        </li>
        <li><a href="gallery"><?php echo GALLERY; ?></a></li>
        <li><a href="achievements"><?php echo ACHIEVEMENTS; ?></a></li>
        <li><a href="faq"><?php echo FAQ; ?></a></li>
        <li class="menu-contact"><a href="contact"><?php echo CONTACT; ?></a></li>
    </ul>
</nav>

<div class="mask"></div>