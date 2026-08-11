<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = SITE_NAME;
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
      </ul>

      <section id="aboutme">
        <h2 class="section-title"><span><?php echo ABOUTME; ?></span></h2>

        <div class="wrapper">
          <div class="text-area">
            <div class="inner">
              <p class="title"><?php echo ABOUTME_TITLE; ?></p>
              <p class="text"><?php echo ABOUTME_TEXT1; ?></p>
              <p class="text"><?php echo ABOUTME_TEXT2; ?></p>
            </div>
          </div>
          <div class="img-top">
            <img src="images/profile/aboutme1.png" alt="">
          </div>
          <div class="img-bottom">
            <img src="images/profile/aboutme2.png" alt="">
          </div>
        </div>
      </section>

      <section id="works">
        <h2 class="section-title"><span><?php echo WORKS; ?></span></h2>

        <div class="wrapper">
          <a class="item interior" href="gallery.php">
            <div class="text">
              <p class="title-ja">イラスト一覧</p>
              <p class="title-en">GALLERY</p>
              <p class="description"><?php echo ABOUTME_GALLERY; ?></p>
              <p class="view-more">VIEW MORE</p>
            </div>
            <div class="img">
              <img src="images/profile/products-interior.jpg" alt="">
            </div>
          </a>

          <a class="item store" href="achievements.php">
            <div class="text">
              <p class="title-ja">実績紹介</p>
              <p class="title-en">ACHIEVEMENTS</p>
              <p class="description"><?php echo ABOUTME_ACHIEVEMENTS; ?></p>
              <p class="view-more">VIEW MORE</p>
            </div>
            <div class="img">
              <img src="images/profile/products-store.jpg" alt="">
            </div>
          </a>
        </div>
      </section>

      <section id="ability">
        <h2 class="section-title"><span><?php echo ABILITY; ?></span></h2>

        <dl class="ability-list wrapper">
          <dt>会社名</dt>
          <dd>株式会社</dd>
          <dt>代表取締役</dt>
          <dd>○○ ○○</dd>
          <dt>設立</dt>
          <dd>2000年4月</dd>
          <dt>所在地</dt>
          <dd>東京都○○○○○○○○○○○○○</dd>
          <dt>事業内容</dt>
          <dd>インテリアデザイン<br>住空間及び商業空間のデザイン</dd>
        </dl>
      </section>

      <section id="certificate">
        <h2 class="section-title"><span><?php echo CERTIFICATE; ?></span></h2>

        <div class="wrapper">
          <div class="text-area">
            <div class="inner">
              <p class="text">基本情報技術者試験　合格</p>
              <p class="text">TOEIC L&R 710点　取得</p>
              <p class="text">3級ファイナンシャル・プランニング技能士　合格</p>
              <p class="text">G検定　合格</p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 