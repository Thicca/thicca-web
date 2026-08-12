<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = FAQ;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'faq';

// データ読み込み
$allItems = json_decode(file_get_contents(__DIR__ . '/../data/faq.json'), true);
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
          <img src="images/faq/profilevideo.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">FAQ</span>
            <span class="ja"><?php echo FAQ; ?></span>
          </h1>
        </div>
      </div>

      <p class="head-text"><?php echo FAQ_DESCRIPTION; ?></p>

      <dl class="faq-list">
        <?php foreach ($allItems as $item): ?>
        <div class="item">
          <dt>
            <span class="question">Q</span>
            <span><?php echo htmlspecialchars($item['question']); ?></span>
          </dt>
          <dd>
            <span class="answer">A</span>
            <span><?php echo $item['answer']; ?></span>
          </dd>
        </div>
        <?php endforeach; ?>
      </dl>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 