<?php
/**
 * <head>の共通化できるものをまとめたhtml
 * 各ページから require_once で読み込んで使用する
 */
$page = isset($cssFile) ? $cssFile : 'top';
$pageCss = $page . '.css';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME; ?></title>

    <!-- 追加:正規URL -->
    <link rel="canonical" href="<?php echo isset($pageUrl) ? $pageUrl : SITE_URL . '/'; ?>">

    <!-- OGP設定 -->
    <meta property="og:title" content="<?php echo CIRCLE_NAME; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo isset($pageUrl) ? $pageUrl : SITE_URL . '/'; ?>">
    <meta property="og:description" content="<?php echo isset($pageDescription) ? $pageDescription : SITE_DESCRIPTION; ?>">
    <meta property="og:image" content="<?php echo OGP_IMAGE; ?>">
    <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
    <meta property="og:locale" content="ja_JP">

    <!-- X(Twitter)カード設定 -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo X_ID; ?>">
    <meta name="twitter:image" content="<?php echo OGP_IMAGE; ?>">

    <!-- 表示系設定 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/common/thicca_emote9.ico">
    <link rel="apple-touch-icon" href="/images/common/thicca_emote9.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- キャッシュバスティング(バージョン番号を付与) -->
    <link rel="stylesheet" href="/css/style.css?v=<?php echo filemtime(__DIR__ . '/../public/css/style.css'); ?>">
    <?php if (isset($pageCss)): ?>
    <link rel="stylesheet" href="/css/<?php echo $pageCss; ?>?v=<?php echo filemtime(__DIR__ . '/../public/css/' . $pageCss); ?>">
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/jquery.inview.min.js"></script>
    <script src="/js/main.js"></script>
</head>