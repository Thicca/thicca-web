<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = SITE_NAME;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'achievements';
?>
<!DOCTYPE html>
<html lang="ja">
  <head>  
    <meta charset="utf-8">
    <title>achievements | Thicca's HP</title>
    <meta name="description" content="Thicca's HPの実績紹介ページです。住む人やその空間を利用されるお客様が笑顔になるような空間創りをお手伝いさせていただきます。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/common/favicon.ico">
    <link rel="apple-touch-icon" href="images/common/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/achievements.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
  </head>

  <body>
    <header id="header">
      <div class="logo">
        <a href="index.php">
          <img src="images/common/logo.svg" alt="Thicca's HP">
        </a>
      </div>

      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="navi">
        <ul class="menu">
          <li class="menu-first">
            <span>会社情報</span>
            <ul class="menu-second">
              <li><a href="profile.php#philosophy">企業理念</a></li>
              <li><a href="profile.php#service">事業紹介</a></li>
              <li><a href="profile.php#overview">会社概要</a></li>
              <li><a href="profile.php#access">アクセス</a></li>
            </ul>
          </li>
          <li><a href="products.php">商品一覧</a></li>
          <li><a href="achievements.php">実績紹介</a></li>
          <li><a href="faq.php"><?php echo FAQ; ?></a></li>
          <li class="menu-contact"><a href="contact.php">お問い合わせ</a></li>
        </ul>
      </nav>
      
      <div class="mask"></div>
    </header>

    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/achievements/techika_kfb.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">achievements</span>
            <span class="ja">実績紹介</span>
          </h1>
        </div>
      </div>

      <p class="head-text">住む人やその空間を利用されるお客様が笑顔になるような<br class="pc">空間創りをお手伝いさせていただきます。</p>
      
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

    <footer id="footer">
      <div class="info-area">
        <a class="logo" href="index.php">
          <img src="images/common/logo-w.svg" alt="Thicca's HP">
        </a>
        <div class="info">
          <p>〒999-9999<br>東京都○○○○○○○○○○○○○○</p>
          <p>TEL: 03-9999-9999</p>
        </div>
        <p class="copyright">Copyright © Thicca's HP. All rights reserved.</p>
      </div>

      <div class="menu-area">
        <div class="menu-col">
          <p class="menu-title"><a href="profile.php">会社情報</a></p>
          <ul class="menu-list">
            <li><a href="profile.php#philosophy">企業理念</a></li>
            <li><a href="profile.php#service">事業紹介</a></li>
            <li><a href="profile.php#overview">会社概要</a></li>
            <li><a href="profile.php#access">アクセス</a></li>
          </ul>
        </div>

        <div class="menu-col">
          <p class="menu-title"><a href="products.php">商品一覧</a></p>
          <p class="menu-title"><a href="achievements.php">実績紹介</a></p>
        </div>
        
        <div class="menu-col">
          <p class="menu-title"><a href="faq.php"><?php echo FAQ; ?></a></p>
          <p class="menu-title"><a href="contact.php">お問い合わせ</a></p>
        </div>
      </div>
    </footer>
  </body>
</html> 