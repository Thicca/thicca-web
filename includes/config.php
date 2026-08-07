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
define('SITE_NAME', 'てぃっか(てちか)のホームページ');
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

// 名義
define('THICCA_NAME', 'てぃっか');
define('TECHIKA_NAME', '夢毬てちか');
define('CIRCLE_NAME', '夢の手毬跡');

// 肩書き(単体)
define('THICCA_TITLE', 'マルチクリエイター「' . THICCA_NAME . '」');
define('TECHIKA_TITLE', 'VTuber「' . TECHIKA_NAME . '」');

// 肩書き(並記)
define('FULL_TITLE', THICCA_TITLE . ' / ' . TECHIKA_TITLE);

// フレーズ
define('CATCHPHRASE', '自分の手で全て創る。');
define('COPYRIGHT', '&copy; ' . date('Y') . ' ' . CIRCLE_NAME);