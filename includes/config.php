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

// top
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

define('ABOUTME_TITLE', '空間デザインで<br>新たな価値を創造する');
define('ABOUTME_TEXT1', '私たちはインテリアをデザインするだけでなく、空間全体をデザインすることでその空間に新たな価値を創造します。');
define('ABOUTME_TEXT2', '人が喜び感動し、そして心を通い合わせるようなそんな空間創りのお手伝いをいたします。');
define('ABOUTME_GALLERY', 'ソファ、デスク、チェア、ダイニングを中心に、オリジナルのインテリアをデザインしています。');
define('ABOUTME_ACHIEVEMENTS', '住む人やその空間を利用されるお客様が笑顔になるような空間のデザインを行なっています。');

// gallery
define('GALLERY_DESCRIPTION', '私たちがデザインするインテリアをご紹介します。<br>ソファやデスク、チェア、ダイニングまわりを中心にオリジナルのインテリアをご提案いたします。');

// achievements
define('ACHIEVEMENTS_DESCRIPTION', '住空間及び商業空間のデザインを行なっています。<br>住む人やその空間を利用されるお客様が笑顔になるような空間創りを心掛けています。');
define('ACHIEVEMENTS_DESCRIPTION2', '私たちがこれまでに手がけてきた住居と店舗デザインの一部をご紹介いたします。');

// faq

// contact