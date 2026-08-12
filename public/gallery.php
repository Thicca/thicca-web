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
        <li class="tab" data-category="commission">ご依頼作品</li>
        <li class="tab" data-category="music">曲</li>
      </ul>

      <ul class="gallery-list all" id="galleryList">
        <?php foreach ($allItems as $item): ?>
        <li class="gallery-item" data-category="<?php echo htmlspecialchars($item['category']); ?>">
            <img src="images/gallery/<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
            <div class="info">
                <p class="name"><?php echo htmlspecialchars($item['name']); ?></p>
                <p class="date"><?php echo htmlspecialchars($item['date']); ?></p>
            </div>
        </li>
        <?php endforeach; ?>
      </ul>

      <nav class="pagination">
          <button class="prev" id="prevBtn">← 前へ</button>
          <span class="page-info" id="pageInfo">1 / 1</span>
          <button class="next" id="nextBtn">次へ →</button>
      </nav>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 