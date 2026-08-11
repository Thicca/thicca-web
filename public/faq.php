<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = SITE_NAME;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'faq';
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/faq/profilevideo.png" alt="">
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
              お電話または<a href="contact">お問い合わせフォーム</a>にてご相談を承っております。</span>
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

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 