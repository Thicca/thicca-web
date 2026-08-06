<?php
/**
 * サイト全体の設定ファイル
 * 各ページから require_once で読み込んで使用する
 */

// このファイルへの直接アクセスを防ぐ
if (!defined('IN_APP')) {
    define('IN_APP', true);
}

// サイト基本情報
define('SITE_NAME', '夢の手毬跡');
define('SITE_URL', 'https://thicca-web.com');
define('SITE_DESCRIPTION', 'イラストレーター「てぃっか」/VTuber「夢毬てちか」の公式サイト');

// 連絡先
define('CONTACT_EMAIL', 'thicca.land@gmail.com');

// SNS
define('X_ID', '@thicca_view');

// パス関連
define('BASE_PATH', dirname(__DIR__));

// OGP関連
define('OGP_IMAGE', SITE_URL . '/images/ogp.png');