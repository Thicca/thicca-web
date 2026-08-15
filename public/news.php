<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = 'News';
$pageUrl = SITE_URL . '/news';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'news';

$newsItems = json_decode(file_get_contents(__DIR__ . '/../data/news.json'), true);

foreach ($newsItems as $index => &$item) {
    $item['_index'] = $index;
}
unset($item);

usort($newsItems, function ($a, $b) {
    $dateCompare = strtotime(str_replace('.', '-', $b['date'])) - strtotime(str_replace('.', '-', $a['date']));
    if ($dateCompare !== 0) {
        return $dateCompare;
    }
    return $b['_index'] - $a['_index'];
});
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <script src="js/news.js"></script>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/gallery/2024/アポロてぃっか.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">NEWS</span>
            <span class="ja"><?php echo NEWS; ?></span>
          </h1>
        </div>
      </div>

      <ul class="news-list-full" id="newsList" data-items-per-page="<?php echo NEWS_ITEMS_PER_PAGE; ?>">
        <?php foreach ($newsItems as $news): ?>
        <li class="news-item">
          <span class="news-date"><?php echo htmlspecialchars($news['date']); ?></span>
          <span class="news-text"><?php echo htmlspecialchars($news['text']); ?></span>
        </li>
        <?php endforeach; ?>
      </ul>

      <nav class="pagination">
          <button class="prev" id="prevBtn">← 前へ</button>
          <div class="page-numbers" id="pageNumbers"></div>
          <button class="next" id="nextBtn">次へ →</button>
      </nav>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html>