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
define('SITE_NAME', 'てぃっかのHP');
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
define('CATCHPHRASE', '自分の手で、<br>全て創る。<br>');
define('ABOUT_TITLE', '全て"自作"のマルチクリエイター');
define('ABOUT_DESCRIPTION', '「てぃっか」の名前でインターネットにイラストを投稿する形で活動を開始。後にTwitchにて配信活動を開始。その活動の最中でイラストとLive2Dモデリングでバーチャルアバターを自作し、いわゆるVライバーになる。後にYouTubeでも配信活動を開始し、VTuber「夢毬てちか」を名乗って活動することになる。<br>興味を持ったものは自分で作ったり、勉強して身に付けたりしないと気が済まないタイプ。');
define('COPYRIGHT', '&copy; ' . date('Y') . ' ' . CIRCLE_NAME);

// section
define('PROFILE', 'プロフィール');
define('GALLERY', 'イラスト一覧');
define('ACHIEVEMENTS', '実績紹介');
define('FAQ', '勝手にQ&A');
define('CONTACT', 'お仕事依頼');

// profile
define('ABOUTME', '私について');
define('WORKS', '作品紹介');
define('ABILITY', 'できること');
define('CERTIFICATE', '所持資格');
define('HISTORY', '略歴');