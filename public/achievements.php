<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = ACHIEVEMENTS;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'achievements';
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/achievements/techika_zone.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">ACHIEVEMENTS</span>
            <span class="ja"><?php echo ACHIEVEMENTS; ?></span>
          </h1>
        </div>
      </div>

      <p class="head-text"><?php echo ACHIEVEMENTS_DESCRIPTION; ?><br class="pc"><?php echo ACHIEVEMENTS_DESCRIPTION2; ?></p>
      
      <ul class="achievements-list">
        <li class="work1">
          <div class="img">
            <img src="images/achievements/works1-1.jpg" alt="">
          </div>
          <div class="text">
            <p class="name">PROJECT NAME NO.001</p>
            <dl class="info">
              <div class="item">
                <dt>Category:</dt>
                <dd>Cafe</dd>
              </div>
              <div class="item">
                <dt>Location:</dt>
                <dd>Tokyo</dd>
              </div>
              <div class="item">
                <dt>Detail:</dt>
                <dd>東京都渋谷区にあるカフェの店舗デザインを担当させていただきました。</dd>
              </div>
            </dl>
            <div class="modal-open">More Images<img src="images/achievements/icon-modal-open.svg" alt=""></div>
          </div>

          <div class="modal-container">
            <div class="modal-content">
              <div class="modal-close"><img src="images/achievements/icon-modal-close.svg" alt=""></div>
              <p class="modal-name">PROJECT NAME NO.001</p>
              <div class="modal-img">
                <img src="images/achievements/works1-1.jpg" alt="">
                <img src="images/achievements/works1-2.jpg" alt="">
                <img src="images/achievements/works1-3.jpg" alt="">
                <img src="images/achievements/works1-4.jpg" alt="">
              </div>
            </div>
          </div>
        </li>
        
        <li class="work2">
          <div class="img">
            <img src="images/achievements/works2-1.jpg" alt="">
          </div>
          <div class="text">
            <p class="name">PROJECT NAME NO.002</p>
            <dl class="info">
              <div class="item">
                <dt>Category:</dt>
                <dd>Apparel</dd>
              </div>
              <div class="item">
                <dt>Location:</dt>
                <dd>Osaka</dd>
              </div>
              <div class="item">
                <dt>Detail:</dt>
                <dd>大阪府大阪市にあるアパレルブランドの店舗デザインを担当させていただきました。</dd>
              </div>
            </dl>
            <div class="modal-open">More Images<img src="images/achievements/icon-modal-open.svg" alt=""></div>
          </div>

          <div class="modal-container">
            <div class="modal-content">
              <div class="modal-close"><img src="images/achievements/icon-modal-close.svg" alt=""></div>
              <p class="modal-name">PROJECT NAME NO.002</p>
              <div class="modal-img">
                <img src="images/achievements/works2-1.jpg" alt="">
                <img src="images/achievements/works2-2.jpg" alt="">
                <img src="images/achievements/works2-3.jpg" alt="">
                <img src="images/achievements/works2-4.jpg" alt="">
              </div>
            </div>
          </div>
        </li>
        
        <li class="work3">
          <div class="img">
            <img src="images/achievements/works3-1.jpg" alt="">
          </div>
          <div class="text">
            <p class="name">PROJECT NAME NO.003</p>
            <dl class="info">
              <div class="item">
                <dt>Category:</dt>
                <dd>Residence</dd>
              </div>
              <div class="item">
                <dt>Location:</dt>
                <dd>Fukuoka</dd>
              </div>
              <div class="item">
                <dt>Detail:</dt>
                <dd>福岡県福岡市にある邸宅のインテリアデザインを担当させていただきました。</dd>
              </div>
            </dl>
            <div class="modal-open">More Images<img src="images/achievements/icon-modal-open.svg" alt=""></div>
          </div>

          <div class="modal-container">
            <div class="modal-content">
              <div class="modal-close"><img src="images/achievements/icon-modal-close.svg" alt=""></div>
              <p class="modal-name">PROJECT NAME NO.003</p>
              <div class="modal-img">
                <img src="images/achievements/works3-1.jpg" alt="">
                <img src="images/achievements/works3-2.jpg" alt="">
                <img src="images/achievements/works3-3.jpg" alt="">
                <img src="images/achievements/works3-4.jpg" alt="">
              </div>
            </div>
          </div>
        </li>
      </ul>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 