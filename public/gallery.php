<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = GALLERY;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'gallery';
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/gallery/techika_kfb.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">GALLERY</span>
            <span class="ja"><?php echo GALLERY; ?></span>
          </h1>
        </div>
      </div>

      <ul class="tab-list">
        <li class="tab-all">全て</li>
        <li class="tab-sofa">ソファ</li>
        <li class="tab-desk">デスク</li>
        <li class="tab-chair">チェア</li>
        <li class="tab-dining">ダイニング</li>
      </ul>

      <ul class="gallery-list all">
        <li>
          <img src="images/gallery/products1.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 01</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products2.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 02</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products3.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 03</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products4.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 04</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products5.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 05</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products6.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 06</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products7.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 07</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products8.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 08</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products9.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 09</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products10.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 10</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products11.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 11</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products12.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 12</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products13.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 13</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products14.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 14</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products15.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 15</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
      </ul>

      <ul class="gallery-list sofa">
        <li>
          <img src="images/gallery/products1.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 01</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products4.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 04</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products7.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 07</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products10.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 10</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products15.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 15</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
      </ul>

      <ul class="gallery-list desk">
        <li>
          <img src="images/gallery/products2.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 02</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products5.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 05</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products8.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 08</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products11.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 11</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
      </ul>

      <ul class="gallery-list chair">
        <li>
          <img src="images/gallery/products3.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 03</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products6.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 06</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products9.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 09</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products12.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 12</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
      </ul>

      <ul class="gallery-list dining">
        <li>
          <img src="images/gallery/products13.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 13</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
        <li>
          <img src="images/gallery/products14.jpg" alt="">
          <div class="info">
            <p class="name">Product Name 14</p>
            <p class="price">¥99,999</p>
          </div>
        </li>
      </ul>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 