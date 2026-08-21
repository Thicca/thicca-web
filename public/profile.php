<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = PROFILE;
$pageUrl = SITE_URL . '/profile';
$pageDescription = PROFILE_PAGE_DESCRIPTION;
$cssFile = 'profile';

// デッキリストデータ読み込み
$deckItems = json_decode(file_get_contents(__DIR__ . '/../data/decks.json'), true);
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <script src="js/profile.js"></script>
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
        <li><a href="#deck"><?php echo DECK; ?></a></li>
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
              <p class="text"><?php echo ABOUTME_TEXT4; ?></p>
              <p class="text"><?php echo ABOUTME_TEXT5; ?></p>
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
                      <dt>肩書・名前</dt>
                      <dd><?php echo TITLENAME; ?></dd>
                  </div>
                  <div class="detail-item">
                      <dt>同人サークル名</dt>
                      <dd><?php echo CIRCLE_NAME; ?>(ゆめのてまりあと)<br><a href="<?php echo SNS_BOOTH; ?>" target='_blank' rel="noopener noreferrer">BOOTH</a> / <a href="<?php echo SNS_CIRCLEMS; ?>" target='_blank' rel="noopener noreferrer">Circle.ms</a></dd>
                  </div>
                  <div class="detail-item">
                      <dt>SNS</dt>
                      <dd>
                        <a href="<?php echo SNS_X; ?>" target='_blank' rel="noopener noreferrer">X</a> / 
                        <a href="<?php echo SNS_X_SUB; ?>" target='_blank' rel="noopener noreferrer">X(お洋服専用サブ垢)</a> / 
                        <a href="<?php echo SNS_WICK; ?>" target='_blank' rel="noopener noreferrer">Wick</a> / <a href="<?php echo SNS_PIXIV; ?>" target='_blank' rel="noopener noreferrer">pixiv</a>
                      </dd>
                  </div>
                  <div class="detail-item">
                      <dt>配信拠点</dt>
                      <dd>
                        <a href="<?php echo SNS_YOUTUBE; ?>" target='_blank' rel="noopener noreferrer">YouTube</a> / 
                        <a href="<?php echo SNS_TWITCH; ?>" target='_blank' rel="noopener noreferrer">Twitch</a>
                      </dd>
                  </div>
                  <div class="detail-item">
                      <dt>配信内容</dt>
                      <dd><?php echo STREAM_CONTENTS; ?></dd>
                  </div>
                  <div class="detail-item">
                      <dt>記念日</dt>
                      <dd><?php echo ANNIVERSARY; ?></dd>
                  </div>
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
          <dd><?php echo ABILITY_HOBBY; ?></dd>
          <dt>できること・特技？</dt>
          <dd><?php echo ABILITY_SKILL; ?></dd>
          <dt>ゲーム</dt>
          <dd><?php echo ABILITY_GAME; ?></dd>
          <dt>カードゲーム(紙)</dt>
          <dd><?php echo ABILITY_CARDGAME; ?></dd>
          <dt>デジタルカードゲーム</dt>
          <dd><?php echo ABILITY_DCG; ?></dd>
          <dt>プログラミング</dt>
          <dd><?php echo ABILITY_PROGRAMMING; ?></dd>
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

      <section id="deck">
        <h2 class="section-title"><span><?php echo DECK; ?></span></h2>

        <div class="wrapper">
        <p class="head-text"><?php echo DECK_DESCRIPTION; ?></p>
          <ul class="deck-tab-list">
            <li class="tab active" data-category="all">
              <span class="full">全て</span><span class="short">全て</span>
            </li>
            <li class="tab " data-category="dm">
              <span class="full">デュエマ</span><span class="short">DM</span>
            </li>
            <li class="tab " data-category="dmc">
              <span class="full">デュエマclassic</span><span class="short">DMC</span>
            </li>
            <li class="tab" data-category="ws">
              <span class="full">ヴァイス</span><span class="short">WS</span>
            </li>
            <li class="tab" data-category="ygo">
              <span class="full">遊戯王OCG</span><span class="short">YGO</span>
            </li>
            <li class="tab" data-category="rd">
              <span class="full">ラッシュデュエル</span><span class="short">RD</span>
            </li>
            <li class="tab" data-category="vg">
              <span class="full">ヴァンガード</span><span class="short">VG</span>
            </li>
          </ul>

          <div class="sort-control">
              <button id="sortToggle" data-order="desc">日付順: 新しい順 ▼</button>
          </div>

          <ul class="deck-list all" id="deckList" data-items-per-page="<?php echo GALLERY_ITEMS_PER_PAGE; ?>">
            <?php foreach ($deckItems as $deck): ?>
            <li class="deck-item" data-category="<?php echo htmlspecialchars($deck['category']); ?>">
              <img src="images/deck/<?php echo htmlspecialchars($deck['image']); ?>" alt="<?php echo htmlspecialchars($deck['name']); ?>" class="modal-open" data-image="<?php echo htmlspecialchars($deck['image']); ?>" data-name="<?php echo htmlspecialchars($deck['name']); ?>">
              <div class="deck-info">
                <p class="deck-name"><?php echo htmlspecialchars($deck['name']); ?></p>
                <p class="deck-source">出典: <?php echo htmlspecialchars($deck['source']); ?></p>
                <p class="deck-date"><?php echo htmlspecialchars($deck['date']); ?></p>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- モーダルウィンドウ本体 -->
        <div class="modal-container" id="imageModal">
            <div class="modal-overlay"></div>
            <button class="modal-close" aria-label="閉じる">&times;</button>
            <div class="modal-content">
                <div class="modal-image" id="modalImage"></div>
                <p class="modal-caption" id="modalCaption"></p>
            </div>
        </div>

        <nav class="pagination">
            <button class="prev" id="prevBtn">← 前へ</button>
            <div class="page-numbers" id="pageNumbers"></div>
            <button class="next" id="nextBtn">次へ →</button>
        </nav>
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

                <div class="history-timeline-year">
                  <h3 class="year">2026</h3>
                  <ul class="history-timeline-list">
                    <li>
                      <span class="date">8/13</span>
                      <span class="event">本Webサイト「てぃっかのHP」完成&amp;公開</span>
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