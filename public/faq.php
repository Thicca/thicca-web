<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = SITE_NAME;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'faq';
?>
<!DOCTYPE html>
<html lang="ja">
  <head>  
    <meta charset="utf-8">
    <title>Faq | Thicca's HP</title>
    <meta name="description" content="Thicca's HPの<?php echo FAQ; ?>ページです。お客様からよくいただく質問についてまとめています。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/common/favicon.ico">
    <link rel="apple-touch-icon" href="images/common/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&family=Zen+Old+Mincho:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/faq.css">
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
          <img src="images/faq/techika_kfb.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">FAQ</span>
            <span class="ja"><?php echo FAQ; ?></span>
          </h1>
        </div>
      </div>

      <p class="head-text">お客様からよくいただく質問をまとめました。<br>
        その他、ご質問やご不明点がございましたらお気軽にお問い合わせください。</p>

      <dl class="faq-list">
        <div class="item">
          <dt>
            <span class="question">Q</span>
            <span>インテリアの相談をしたいのですが</span>
          </dt>
          <dd>
            <span class="answer">A</span>
            <span>インテリアのことならなんでもご相談ください。<br>
              お電話または<a href="contact.php">お問い合わせフォーム</a>にてご相談を承っております。</span>
          </dd>
        </div>
        <div class="item">
          <dt>
            <span class="question">Q</span>
            <span>見積もりは無料ですか？</span>
          </dt>
          <dd>
            <span class="answer">A</span>
            <span>はい、無料です。ご予算に合わせたご提案も可能ですのでまずはお気軽にご相談ください。</span>
          </dd>
        </div>
        <div class="item">
          <dt>
            <span class="question">Q</span>
            <span>どんな業種の店舗でも対応していますか？</span>
          </dt>
          <dd>
            <span class="answer">A</span>
            <span>はい、どんな業種の店舗にも対応しています。特にカフェやアパレルは多数の実績があり得意としています。</span>
          </dd>
        </div>
        <div class="item">
          <dt>
            <span class="question">Q</span>
            <span>物件探しからお願いできますか？</span>
          </dt>
          <dd>
            <span class="answer">A</span>
            <span>はい、社内に物件探しの専門部署がありますので、お客様のご要望に合った物件をお探しいたします。</span>
          </dd>
        </div>
        <div class="item">
          <dt>
            <span class="question">Q</span>
            <span>アフターフォローはどうなっていますか？</span>
          </dt>
          <dd>
            <span class="answer">A</span>
            <span>24時間体制のアフターフォローサービスを設けています。<br>
              お困りごとがございましたらお電話やメールにてお気軽にご相談下さい。</span>
          </dd>
        </div>
      </dl>
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