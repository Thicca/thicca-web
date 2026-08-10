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
            <span class="en">ABOUT</span>
            <span class="ja"><?php echo PROFILE; ?></span>
          </h1>
        </div>
      </div>

      <ul class="pagelink-list wrapper">
        <li><a href="#philosophy">企業理念</a></li>
        <li><a href="#service">事業紹介</a></li>
        <li><a href="#overview">会社概要</a></li>
        <li><a href="#access">アクセス</a></li>
      </ul>

      <section id="philosophy">
        <h2 class="section-title"><span>企業理念</span></h2>

        <div class="wrapper">
          <div class="text-area">
            <div class="inner">
              <p class="title">空間デザインで<br>新たな価値を創造する</p>
              <p class="text">私たちはインテリアをデザインするだけでなく、空間全体をデザインすることでその空間に新たな価値を創造します。</p>
              <p class="text">人が喜び感動し、そして心を通い合わせるようなそんな空間創りのお手伝いをいたします。</p>
            </div>
          </div>
          <div class="img-top">
            <img src="images/profile/philosophy1.jpg" alt="">
          </div>
          <div class="img-bottom">
            <img src="images/profile/philosophy2.jpg" alt="">
          </div>
        </div>
      </section>

      <section id="service">
        <h2 class="section-title"><span>事業紹介</span></h2>

        <div class="wrapper">
          <a class="item interior" href="products.html">
            <div class="text">
              <p class="title-ja">インテリアデザイン</p>
              <p class="title-en">Thicca's HP</p>
              <p class="description">ソファ、デスク、チェア、ダイニングを中心に、オリジナルのインテリアをデザインしています。</p>
              <p class="view-more">VIEW MORE</p>
            </div>
            <div class="img">
              <img src="images/profile/products-interior.jpg" alt="">
            </div>
          </a>

          <a class="item store" href="achievements.php">
            <div class="text">
              <p class="title-ja">住空間・商業空間のデザイン</p>
              <p class="title-en">Store Design</p>
              <p class="description">住む人やその空間を利用されるお客様が笑顔になるような空間のデザインを行なっています。</p>
              <p class="view-more">VIEW MORE</p>
            </div>
            <div class="img">
              <img src="images/profile/products-store.jpg" alt="">
            </div>
          </a>
        </div>
      </section>

      <section id="overview">
        <h2 class="section-title"><span>会社概要</span></h2>

        <dl class="overview-list wrapper">
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

      <section id="access">
        <h2 class="section-title"><span>アクセス</span></h2>

        <div class="info wrapper">
          <p>〒999-9999 東京都○○○○○○○○○○○○○○<br>TEL 03-999-9999 / FAX 03-999-9999</p>
          <a href="https://www.google.com/maps/place/%E3%80%92162-0846+%E6%9D%B1%E4%BA%AC%E9%83%BD%E6%96%B0%E5%AE%BF%E5%8C%BA%E5%B8%82%E8%B0%B7%E5%B7%A6%E5%86%85%E7%94%BA%EF%BC%92%EF%BC%91%E2%88%92%EF%BC%91%EF%BC%93/@35.693451,139.7330551,17z/data=!3m1!4b1!4m6!3m5!1s0x60188c5e40fd8ca9:0xe4e83101398f38cf!8m2!3d35.693451!4d139.73563!16s%2Fg%2F11ddy_my1l?entry=ttu" target="_blank">Google Map</a>
        </div>

        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.3318328808073!2d139.73305507623294!3d35.693450972583314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c5e40fd8ca9%3A0xe4e83101398f38cf!2z44CSMTYyLTA4NDYg5p2x5Lqs6YO95paw5a6_5Yy65biC6LC35bem5YaF55S677yS77yR4oiS77yR77yT!5e0!3m2!1sja!2sjp!4v1712552676765!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 