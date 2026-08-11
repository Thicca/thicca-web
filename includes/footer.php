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
                <li><a href="profile.php#aboutme"><?php echo ABOUTME; ?></a></li>
                <li><a href="profile.php#works"><?php echo WORKS; ?></a></li>
                <li><a href="profile.php#ability"><?php echo ABILITY; ?></a></li>
                <li><a href="profile.php#certificate"><?php echo CERTIFICATE; ?></a></li>
                <li><a href="profile.php#history"><?php echo HISTORY; ?></a></li>
            </ul>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="gallery.php"><?php echo GALLERY; ?></a></p>
            <p class="menu-title"><a href="achievements.php"><?php echo ACHIEVEMENTS; ?></a></p>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="faq.php"><?php echo FAQ; ?></a></p>
            <p class="menu-title"><a href="contact.php"><?php echo CONTACT; ?></a></p>
        </div>
    </div>
</footer>