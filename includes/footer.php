<?php
/**
 * フッター用用php
 * 各ページから require_once で読み込んで使用する
 */
?>
<footer id="footer">
    <div class="info-area">
        <a class="logo" href="index">
            <img src="images/common/logo-w.svg" alt="<?php echo SITE_NAME; ?>">
        </a>
        <p class="credit">本サイトの制作にあたり、書籍<?php echo REFERENCE_BOOK; ?>を参考にしました。</p>
        <p class="copyright"><?php echo COPYRIGHT; ?></p>
    </div>

    <div class="sns-links">
        <a href="<?php echo SNS_X; ?>" target="_blank" rel="noopener noreferrer" aria-label="X">
            <img src="images/icons/x.svg" alt="X">
        </a>
        <a href="<?php echo SNS_YOUTUBE; ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
            <img src="images/icons/youtube_logo.png" alt="YouTube">
        </a>
        <a href="<?php echo SNS_TWITCH; ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitch">
            <img src="images/icons/twitch_logo.png" alt="Twitch">
        </a>
        <a href="<?php echo SNS_WICK; ?>" target="_blank" rel="noopener noreferrer" aria-label="Wick">
            <img src="images/icons/Wick_logo-BG-01.png" alt="Wick">
        </a>
        <a href="<?php echo SNS_PIXIV; ?>" target="_blank" rel="noopener noreferrer" aria-label="pixiv">
            <img src="images/icons/pixiv_logo_icon_r.png" alt="pixiv">
        </a>
        <a href="<?php echo SNS_BOOTH; ?>" target="_blank" rel="noopener noreferrer" aria-label="BOOTH">
            <img src="images/icons/booth_logo.svg" alt="BOOTH">
        </a>
        <a href="<?php echo SNS_RAIDORI; ?>" target="_blank" rel="noopener noreferrer" aria-label="raidori">
            <img src="images/icons/raidori_selfmade.svg" alt="raidori">
        </a>
        <a href="<?php echo SNS_WISHLIST; ?>" target="_blank" rel="noopener noreferrer" aria-label="Wishlist">
            <img src="images/icons/amazon-icon.svg" alt="Wishlist">
        </a>
        <a href="<?php echo SNS_SOUNDCLOUD; ?>" target="_blank" rel="noopener noreferrer" aria-label="SoundCloud">
            <img src="images/icons/soundcloud-icon-logo-by-Vexels.png" alt="SoundCloud">
        </a>
    </div>

    <div class="menu-area">
        <div class="menu-col">
            <p class="menu-title"><a href="profile"><?php echo PROFILE; ?></a></p>
            <ul class="menu-list">
                <li><a href="profile#aboutme"><?php echo ABOUTME; ?></a></li>
                <li><a href="profile#works"><?php echo WORKS; ?></a></li>
                <li><a href="profile#ability"><?php echo ABILITY; ?></a></li>
                <li><a href="profile#certificate"><?php echo CERTIFICATE; ?></a></li>
                <li><a href="profile#history"><?php echo HISTORY; ?></a></li>
            </ul>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="news"><?php echo NEWS; ?></a></p>
            <p class="menu-title"><a href="gallery"><?php echo GALLERY; ?></a></p>
            <p class="menu-title"><a href="achievements"><?php echo ACHIEVEMENTS; ?></a></p>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="faq"><?php echo FAQ; ?></a></p>
            <p class="menu-title"><a href="contact"><?php echo CONTACT; ?></a></p>
        </div>
    </div>
</footer>