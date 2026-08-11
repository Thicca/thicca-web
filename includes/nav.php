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
                <li><a href="profile.php#aboutme"><?php echo ABOUTME; ?></a></li>
                <li><a href="profile.php#works"><?php echo WORKS; ?></a></li>
                <li><a href="profile.php#ability"><?php echo ABILITY; ?></a></li>
                <li><a href="profile.php#certificate"><?php echo CERTIFICATE; ?></a></li>
            </ul>
        </li>
        <li><a href="gallery.php"><?php echo GALLERY; ?></a></li>
        <li><a href="achievements.php"><?php echo ACHIEVEMENTS; ?></a></li>
        <li><a href="faq.php"><?php echo FAQ; ?></a></li>
        <li class="menu-contact"><a href="contact.php"><?php echo CONTACT; ?></a></li>
    </ul>
</nav>

<div class="mask"></div>