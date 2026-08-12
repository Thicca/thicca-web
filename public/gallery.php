<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = GALLERY;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'gallery';

// データ読み込み
$allItems = json_decode(file_get_contents(__DIR__ . '/../data/gallery.json'), true);
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <script src="js/gallery.js"></script>
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

      <p class="head-text"><?php echo GALLERY_DESCRIPTION; ?></p>

      <ul class="tab-list">
        <li class="tab active" data-category="all">全て</li>
        <li class="tab" data-category="original">オリジナル</li>
        <li class="tab" data-category="fanart">二次創作</li>
        <li class="tab" data-category="comic">漫画</li>
        <li class="tab" data-category="commission">ご依頼作品</li>
      </ul>

      <div class="sort-control">
          <button id="sortToggle" data-order="desc">日付順: 新しい順 ▼</button>
      </div>
      <ul class="gallery-list all" id="galleryList" data-items-per-page="<?php echo GALLERY_ITEMS_PER_PAGE; ?>">
          <?php foreach ($allItems as $item): ?>
          <?php
              $images = $item['image']; // 配列
              $thumbnail = $images[0];  // 一覧表示は1枚目
              $imagesJson = htmlspecialchars(json_encode($images), ENT_QUOTES, 'UTF-8'); // data属性用にJSON化
          ?>
          <li class="gallery-item" data-category="<?php echo htmlspecialchars(implode(' ', $item['category'])); ?>">
              <img src="images/gallery/<?php echo htmlspecialchars($thumbnail); ?>"
                   alt="<?php echo htmlspecialchars($item['name']); ?>"
                   class="modal-open"
                   data-images="<?php echo $imagesJson; ?>"
                   data-name="<?php echo htmlspecialchars($item['name']); ?>">
              <div class="info">
                  <p class="name"><?php echo htmlspecialchars($item['name']); ?></p>
                  <p class="date"><?php echo htmlspecialchars($item['date']); ?></p>
              </div>
          </li>
          <?php endforeach; ?>
      </ul>

      <!-- モーダルウィンドウ本体(ページに1つだけ用意) -->
      <div class="modal-container" id="imageModal">
          <div class="modal-overlay"></div>
          <div class="modal-content">
              <button class="modal-close" aria-label="閉じる">&times;</button>
              <div class="modal-images" id="modalImages"></div>
              <p class="modal-caption" id="modalCaption"></p>
          </div>
      </div>

      <nav class="pagination">
          <button class="prev" id="prevBtn">← 前へ</button>
          <span class="page-info" id="pageInfo">1 / 1</span>
          <button class="next" id="nextBtn">次へ →</button>
      </nav>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 