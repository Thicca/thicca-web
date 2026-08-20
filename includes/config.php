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
define('CONTACT_EMAIL', 'thicca.work@gmail.com');

// SMTP (アプリ名: thicca-web)
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'thicca.work@gmail.com');
define('SMTP_PASSWORD', 'cgqljyxnfhkfjsnz');

// SNS
define('X_ID', '@thicca_view');
define('SNS_X', 'https://x.com/thicca_view');
define('SNS_X_SUB', 'https://x.com/thicca_model');
define('SNS_YOUTUBE', 'https://www.youtube.com/@TechikaYumari_Thicca');
define('SNS_TWITCH', 'https://www.twitch.tv/thicca_view');
define('SNS_PIXIV', 'https://www.pixiv.net/users/76840280');
define('SNS_BOOTH', 'https://thicca.booth.pm/');
define('SNS_SOUNDCLOUD', 'https://soundcloud.com/thicca');
define('SNS_RAIDORI', 'https://raidori.com/@thicca_view');
define('SNS_WICK', 'https://wick-sns.com/sns/profile/2e8ded13-806e-4d6c-afdf-b229b3eb171c');
define('SNS_TSUNAGU', 'https://tsunagu.cloud/users/thicca_view');
define('SNS_WISHLIST', 'https://www.amazon.co.jp/hz/wishlist/ls/JLR1S8BKQYNZ?ref_=wl_share');

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
define('ABOUT_DESCRIPTION', '「てぃっか」の名前でインターネットにイラストを投稿する形で活動を開始。<br><br>後に配信活動も開始し、イラストとLive2Dモデリングでバーチャルアバターを自作してVTuber「夢毬てちか」としても活動することになる。<br><br>興味を持ったものは自分で作ったり、勉強して身に付けたりしないと気が済まないタイプ。<br><br>このWEBサイトも自作。ドメインとVPSを購入・取得してコーディングして作成。初のWEBページ開発だったが、参考文献一冊(フッターに記載)とClaude(無料版)とこれまでのコーディング経験を活かしてなんとか完成できた。');
define('ABOUT_GALLERY', '私がこれまで作ったイラストを掲載します。<br>オリジナルイラスト、二次創作イラスト、漫画など。');
define('ABOUT_ACHIEVEMENTS', '私の実績を紹介します。');
define('ABOUT_ACHIEVEMENTS2', '依頼のイラストやアパレルブランドのデザインコンテスト受賞歴、デジタルカードゲームの大会の入賞歴など。');
define('COPYRIGHT', '&copy; ' . date('Y') . ' ' . CIRCLE_NAME);

// section
define('NEWS', '更新情報');
define('PROFILE', 'プロフィール');
define('GALLERY', 'イラスト一覧');
define('ACHIEVEMENTS', '実績紹介');
define('FAQ', '勝手にQ&A');
define('CONTACT', 'お仕事依頼');

// news
define('NEWS_ITEMS_PER_PAGE', 10);
define('NEWS_PAGE_DESCRIPTION', 'このWEBサイトの更新情報についてまとめています。');

// profile
define('ABOUTME', '私について');
define('WORKS', '作品紹介');
define('ABILITY', 'できること');
define('CERTIFICATE', '所持資格');
define('DECK', '所持デッキ');
define('HISTORY', '略歴');

define('PROFILE_PAGE_DESCRIPTION', 'イラストレーター「てぃっか」/ VTuber「夢毬てちか」のプロフィール。経歴、資格、使用ソフトなどを紹介しています。');
define('ABOUTME_TITLE', '自分の手で全て創る。<br>やりたいこと全部やる。<br>インターネットお絵描きカードゲーマー地雷系セルフ受肉マルチクリエイティブ個人勢VTuber。');
define('ABOUTME_TEXT1', '「てぃっか」の名前でインターネットにイラストを投稿する形で活動を開始。好きなVTuberや原神、遊戯王、デュエマといった二次創作イラスト及びオリジナルイラストを描いては投稿している。');
define('ABOUTME_TEXT2', '後にTwitchにて配信活動を開始。その活動の最中でイラストとLive2Dモデリングでバーチャルアバターを自作し、いわゆるVライバーになる。後にYouTubeでも配信活動を開始し、VTuber「夢毬てちか」を名乗って活動することにもなる。');
define('ABOUTME_TEXT3', '興味を持ったものは自分で作ったり、勉強して身に付けたりしないと気が済まないタイプ。');
define('ABOUTME_TEXT4', 'このWEBサイトも自作。ドメインとVPSを購入・取得してコーディングして作成。初のWEBページ開発だったが、参考文献一冊(フッターに記載)とClaude(無料版)とこれまでのコーディング経験を活かしてなんとか完成できた。');
define('ABOUTME_TEXT5', '普段はデュエマやデュエプレ、シャドバWB(少し前までは遊戯王も)といったカードゲームをよく遊んでいたり、絵を描いたりしている。');
define('ABOUTME_GALLERY', '私がこれまで描いたイラストを掲載しています。');
define('ABOUTME_ACHIEVEMENTS', 'アパレルブランドのデザインコンテストやデジタルカードゲームの大会など、私の実績を紹介しています。');

define('TITLENAME', 'イラストレーター「てぃっか」<br>個人勢VTuber/Vライバー「夢毬てちか(ゆまりてちか)」<br>(※普段はフルタイムで働いている在宅勤務の正社員です。休みは暦通り)');
define('STREAM_CONTENTS', '[YouTube] デュエプレ、デュエマ開封、ヴァンガードディアデイズ2　等<br>[Twitch] お絵描き、作業雑談、シャドバWB、ポケモンシリーズ、魔法少女ノ魔女裁判、パルワールド、遊戯王マスターデュエル、他単発ゲー（ウクレレ休止中）　等');
define('ANNIVERSARY', '2023年<b>11月13日</b>: 配信活動開始日(Twitchにて)<br>2023年<b>12月8日</b>: Twitch収益化(Twitchアフィリエイト)<br>2024年<b>1月28日</b>: Live2Dアバター完成＆お披露目<br>2024年<b>8月29日</b>: YouTube初配信<br>2025年<b>3月15日</b>: YouTube収益化');
define('BIRTHDAY', '6月28日');
define('HOMETOWN', '鹿児島県');
define('ILLUSTRATION', '[イラスト] CLIP STUDIO PAINT EX Version 1.12.3');
define('DAW', '[DAW] Cubase Pro 13');
define('FACE_TRACKING', '[フェイストラッキング] VTube Studio / nizima LIVE');
define('SOFTWARE', ILLUSTRATION . '<br>' . DAW . '<br>' . FACE_TRACKING);
define('PC_OS', '- OS: Windows11');
define('PC_CPU', '- CPU: Intel Core i7-11700F');
define('PC_RAM', '- RAM: 32GB');
define('PC_GPU', '- GPU: NVIDIA GeForce RTX 3060');
define('PENTABLET', '[ペンタブ] Wacom Cintiq 16');
define('MIDI', '[MIDIキーボード] NEKTAR IMPACT LX88+');
define('DEVICES', '[PC]<br>' . PC_OS . '<br>' . PC_CPU . '<br>' . PC_RAM . '<br>' . PC_GPU . '<br>' . PENTABLET . '<br>' . MIDI);

define('ABILITY_HOBBY', 'お絵描き / カードゲーム / 可愛い服を着ること(地雷系多め) / 配信');
define('ABILITY_SKILL', 'お絵描き / Live2Dモデリング / 作曲(DTM) / プログラミング / 暗記 / 英語 / ウクレレ');
define('ABILITY_GAME', 'デジタルカードゲーム / ポケモン / 原神 / ブルーアーカイブ / パルワールド / 魔法少女ノ魔女裁判 等');
define('ABILITY_CARDGAME', 'デュエル・マスターズ / ヴァイスシュヴァルツ / 遊戯王OCG / 遊戯王ラッシュデュエル / ヴァンガード');
define('ABILITY_DCG', 'デュエル・マスターズ プレイス / Shadowverse: Worlds Beyond / 遊戯王マスターデュエル');
define('ABILITY_PROGRAMMING', '・言語: C / C++ / Java / Python / PHP / CSS / HTML / JavaScript 等 基本的なコーディング、既存コードの修正<br>・Python: 進化計算、機械学習、深層学習等の人工知能ライブラリ使用経験有<br>・PHP: MVCモデル(CodeIgniter)を用いた既存コード修正・追加コーディング経験有<br>・OS: Linux(CentOS,Ubuntu) 基本的なコマンド操作<br>・DB: MySQL 基本的なSQL記述やクエリ実行');
define('DECK_DESCRIPTION', '　私が持っているカードゲームのデッキ一覧です。現在はデュエル・マスターズをメインで遊んでいます。<br>　遊戯王OCGはかつてもっと沢山のデッキを持っていましたが、隠居を機に（かつ金銭的な事情で）多くを手放しました。かつて持っていた『ヴァレット』『ウィッチクラフト』『破械』『氷水ラー』『ドラゴンメイド』『氷水』『ドラグマ粛声』『AtoZオベリスク』『ゲート・ガーディアン』『キマイラ』等のデッキは、遊戯王マスターデュエルの方で生き続けています。<br>　ヴァイスシュヴァルツもかつて『潤羽るしあ』や『がうる・ぐら』、『ライスシャワー』等のサインカードを持っていましたが、金銭的に生活が困窮になった際に断腸の思いで手放しました。<br>　ヴァンガードのデッキリストの写真は、知人が私に作ってくれた画像をそのまま掲載しています。');

// gallery
define('GALLERY_PAGE_DESCRIPTION', 'オリジナル、二次創作、ご依頼作品など、てぃっかが描いたイラスト作品をまとめたギャラリーページです。');
define('GALLERY_DESCRIPTION', '私がこれまで描いたイラスト（落書きからご依頼のものまで）を掲載しています。<br>漫画など複数枚あるやつはクリックして出てくるウィンドウをスクロールすることで見れます。');
define('GALLERY_ITEMS_PER_PAGE', 4);

// achievements
define('ACHIEVEMENTS_PAGE_DESCRIPTION', 'デザインコンテスト受賞歴やゲーム大会での実績など、これまでの活動実績をまとめています。');
define('ACHIEVEMENTS_DESCRIPTION', '私の雑多すぎる実績を紹介しています。');
define('ACHIEVEMENTS_DESCRIPTION2', 'Skebでご依頼頂いたイラスト、アパレルブランドのデザインコンテストで入賞＆商品化したもの、デジタルカードゲーム大会の上位入賞など。<br>実績というほどでもないですが、自分用に作った曲もイラスト一覧ページとは分けてこちらのページに掲載します。');

// faq
define('FAQ_PAGE_DESCRIPTION', '自分の好きな○○について答えています。お仕事の依頼の仕方についての内容も答えています。');
define('FAQ_DESCRIPTION', '自分に関するQ&Aを勝手に作りました。<br>何か思いついたら追加していきます。');

// contact
define('CONTACT_PAGE_DESCRIPTION', 'イラストのご依頼や配信のお仕事のご相談はこちらから。お気軽にお問い合わせください。');
define('PRIVACY_POLICY_TEXT', '本フォームでお預かりした個人情報は、ご依頼・お問い合わせへの回答および必要なやり取りの目的にのみ使用し、ご本人の同意なく第三者に開示・提供することはありません。');

// reference
define('REFERENCE_BOOK', '「HTML&CSS Webデザイン 現場レベルのコーディング・スキルが身につく実践入門」(小豆沢健 / 技術評論社)');