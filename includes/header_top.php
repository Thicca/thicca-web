<?php
/**
 * ヘッダー用html
 * index.phpのページから require_once で読み込んで使用する
 */
?>
<header id="header">
    <div class="logo-area">
        <h1 class="logo">
            <a href="/">
                <img src="images/common/logo.svg" alt="<?php echo SITE_NAME; ?>">
            </a>
        </h1>
        <?php require_once __DIR__ . '/header_sns.php'; ?>
    </div>
    <?php require_once __DIR__ . '/nav.php'; ?>
</header>