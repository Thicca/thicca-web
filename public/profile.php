<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = PROFILE;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'profile';
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/profile/techika_kfb.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">ABOUT ME</span>
            <span class="ja"><?php echo PROFILE; ?></span>
          </h1>
        </div>
      </div>

      <ul class="pagelink-list wrapper">
        <li><a href="#aboutme"><?php echo ABOUTME; ?></a></li>
        <li><a href="#works"><?php echo WORKS; ?></a></li>
        <li><a href="#ability"><?php echo ABILITY; ?></a></li>
        <li><a href="#certificate"><?php echo CERTIFICATE; ?></a></li>
        <li><a href="#history"><?php echo HISTORY; ?></a></li>
      </ul>

      <section id="aboutme">
        <h2 class="section-title"><span><?php echo ABOUTME; ?></span></h2>

        <div class="wrapper">
          <div class="text-area">
            <div class="inner">
              <p class="title"><?php echo ABOUTME_TITLE; ?></p>
              <p class="text"><?php echo ABOUTME_TEXT1; ?></p>
              <p class="text"><?php echo ABOUTME_TEXT2; ?></p>
              <p class="text"><?php echo ABOUTME_TEXT3; ?></p>
            </div>
          </div>
          <div class="img-top">
            <img src="images/profile/aboutme1.png" alt="">
          </div>
          <div class="img-bottom">
            <img src="images/profile/aboutme2.png" alt="">
          </div>
          <button class="more-toggle" id="moreToggle" aria-expanded="false" aria-controls="moreDetails">
          もっと見る
          <span class="arrow">▼</span>
          </button>

          <div class="more-details" id="moreDetails">
              <dl class="detail-list">
                  <div class="detail-item">
                      <dt>誕生日</dt>
                      <dd><?php echo BIRTHDAY; ?></dd>
                  </div>
                  <div class="detail-item">
                      <dt>出身地</dt>
                      <dd><?php echo HOMETOWN; ?></dd>
                  </div>
                  <div class="detail-item">
                      <dt>使用ソフト</dt>
                      <dd><?php echo SOFTWARE; ?></dd>
                  </div>
                  <div class="detail-item">
                      <dt>使用デバイス</dt>
                      <dd><?php echo DEVICES; ?></dd>
                  </div>
              </dl>
          </div>
        </div>
      </section>

      <section id="works">
        <h2 class="section-title"><span><?php echo WORKS; ?></span></h2>

        <div class="wrapper">
          <a class="item interior" href="gallery">
            <div class="text">
              <p class="title-ja">イラスト一覧</p>
              <p class="title-en">GALLERY</p>
              <p class="description"><?php echo ABOUTME_GALLERY; ?></p>
              <p class="view-more">VIEW MORE</p>
            </div>
            <div class="img">
              <img src="images/profile/playmat_kanon.png" alt="">
            </div>
          </a>

          <a class="item store" href="achievements">
            <div class="text">
              <p class="title-ja">実績紹介</p>
              <p class="title-en">ACHIEVEMENTS</p>
              <p class="description"><?php echo ABOUTME_ACHIEVEMENTS; ?></p>
              <p class="view-more">VIEW MORE</p>
            </div>
            <div class="img">
              <img src="images/profile/toalice_3rd_contest_thicca_view.png" alt="">
            </div>
          </a>
        </div>
      </section>

      <section id="ability">
        <h2 class="section-title"><span><?php echo ABILITY; ?></span></h2>

        <dl class="ability-list wrapper">
          <dt>趣味</dt>
          <dd>お絵描き / カードゲーム / 可愛い服を着ること(地雷系多め) / 配信</dd>
          <dt>できること・特技？</dt>
          <dd>お絵描き / Live2Dモデリング / 作曲(DTM) / プログラミング / 暗記 / 英語</dd>
          <dt>ゲーム</dt>
          <dd>デジタルカードゲーム / ポケモン / 原神 / ブルーアーカイブ / パルワールド / 魔法少女ノ魔女裁判 等</dd>
          <dt>カードゲーム(紙)</dt>
          <dd>デュエル・マスターズ / ヴァイスシュヴァルツ / 遊戯王OCG / 遊戯王ラッシュデュエル / ヴァンガード</dd>
          <dt>デジタルカードゲーム</dt>
          <dd>デュエル・マスターズ プレイス / Shadowverse: Worlds Beyond / 遊戯王マスターデュエル</dd>
          <dt>プログラミング</dt>
          <dd>
            ・言語: C/C++/Java/Python/PHP/CSS/HTML/JavaScript等 基本的なコーディング、既存コードの修正<br>
            ・Python: 進化計算、機械学習、深層学習等の人工知能ライブラリ使用経験有<br>
            ・PHP: MVCモデル(CodeIgniter)を用いた既存コード修正・追加コーディング経験有<br>
            ・OS: Linux(CentOS,Ubuntu) 基本的なコマンド操作<br>
            ・DB: MySQL 基本的なSQL記述やクエリ実行
          </dd>
        </dl>
      </section>

      <section id="certificate">
        <h2 class="section-title"><span><?php echo CERTIFICATE; ?></span></h2>

        <div class="wrapper">
          <div class="text-area">
            <div class="inner">
              <ul class="qualifications">
                <li>
                  <span class="q-name">基本情報技術者試験</span>
                  <span class="q-status">合格</span>
                </li>
                <li>
                  <span class="q-name">TOEIC L&amp;R 710点</span>
                  <span class="q-status">取得</span>
                </li>
                <li>
                  <span class="q-name">3級ファイナンシャル・プランニング技能士</span>
                  <span class="q-status">合格</span>
                </li>
                <li>
                  <span class="q-name">G検定</span>
                  <span class="q-status">合格</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="history">
        <h2 class="section-title"><span><?php echo HISTORY; ?></span></h2>

        <div class="wrapper">
          <div class="text-area">
            <div class="inner">
              <div class="history-timeline">
                <div class="history-timeline-year">
                  <h3 class="year">2021</h3>
                  <ul class="history-timeline-list">
                    <li>
                      <span class="date">12/3</span>
                      <span class="event">Twitter(現X)アカウント「てぃっか」開設</span>
                    </li>
                  </ul>
                </div>

                <div class="history-timeline-year">
                  <h3 class="year">2022</h3>
                  <ul class="history-timeline-list">
                    <li>
                      <span class="date">12/30</span>
                      <span class="event">「コミックマーケット101」サークル参加</span>
                    </li>
                  </ul>
                </div>

                <div class="history-timeline-year">
                  <h3 class="year">2023</h3>
                  <ul class="history-timeline-list">
                    <li>
                      <span class="date">8/12</span>
                      <span class="event">「コミックマーケット102」サークル参加</span>
                    </li>
                    <li>
                      <span class="date">11/13</span>
                      <span class="event">Twitch初配信</span>
                    </li>
                    <li>
                      <span class="date">12/8</span>
                      <span class="event">Twitchアフィリエイト</span>
                    </li>
                  </ul>
                </div>

                <div class="history-timeline-year">
                  <h3 class="year">2024</h3>
                  <ul class="history-timeline-list">
                    <li>
                      <span class="date">1/28</span>
                      <span class="event">
                        <a href="https://x.com/thicca_view/status/1751555774218998202" target="_blank" rel="noopener noreferrer">
                          「第3回ToAliceデザインコンテスト」特別賞受賞&amp;商品化
                        </a>
                      </span>
                    </li>
                    <li>
                      <span class="date">1/28</span>
                      <span class="event">Live2Dアバター完成&amp;お披露目</span>
                    </li>
                    <li>
                      <span class="date">8/29</span>
                      <span class="event">YouTube初配信</span>
                    </li>
                    <li>
                      <span class="date">10/1</span>
                      <span class="event">VTuber/Vライバーとしての名前を「夢毬てちか」に改名</span>
                    </li>
                  </ul>
                </div>

                <div class="history-timeline-year">
                  <h3 class="year">2025</h3>
                  <ul class="history-timeline-list">
                    <li>
                      <span class="date">3/15</span>
                      <span class="event">YouTube収益化</span>
                    </li>
                    <li>
                      <span class="date">9/6</span>
                      <span class="event">
                        <a href="https://dmps-tournament.takaratomy.co.jp/resulthost.asp?Route=UserResult&HostID=0&EventID=240&Seq=1" target="_blank" rel="noopener noreferrer">
                          「デュエプレグランプリ2025」TOP32(17位タイ)入賞
                        </a>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 