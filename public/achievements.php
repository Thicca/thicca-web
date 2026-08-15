<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = ACHIEVEMENTS;
$pageUrl = SITE_URL . '/achievements';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'achievements';

// データ読み込み
$groups = json_decode(file_get_contents(__DIR__ . '/../data/achievements.json'), true);

// 動画かどうかを判定するヘルパー
function isVideo($path) {
    return preg_match('/\.(mp4|webm|mov)$/i', $path);
}
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/achievements/techika_zone.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">ACHIEVEMENTS</span>
            <span class="ja"><?php echo ACHIEVEMENTS; ?></span>
          </h1>
        </div>
      </div>

      <p class="head-text"><?php echo ACHIEVEMENTS_DESCRIPTION; ?><br class="pc"><?php echo ACHIEVEMENTS_DESCRIPTION2; ?></p>

      <ul class="achievements-list">
        <?php foreach ($groups as $group): ?>
        <?php
            $thumbnail = $group['contents'][0]['media'];
            $thumbnailIsVideo = isVideo($thumbnail);
        ?>
        <li class="<?php echo htmlspecialchars($group['category']); ?>">
          <div class="img">
            <?php if ($thumbnailIsVideo): ?>
              <video src="images/achievements/<?php echo htmlspecialchars($thumbnail); ?>" muted playsinline></video>
            <?php else: ?>
              <img src="images/achievements/<?php echo htmlspecialchars($thumbnail); ?>" alt="">
            <?php endif; ?>
          </div>
          <div class="text">
            <p class="name"><?php echo htmlspecialchars($group['name']); ?></p>
            <dl class="info">
              <div class="item">
                <dt>件数:</dt>
                <dd><?php echo count($group['contents']); ?>件</dd>
              </div>
            </dl>
            <div class="modal-open">More<img src="images/achievements/icon-modal-open.svg" alt=""></div>
          </div>

          <div class="modal-container">
            <div class="modal-content">
              <div class="modal-close"><img src="images/achievements/icon-modal-close.svg" alt=""></div>
              <p class="modal-name"><?php echo htmlspecialchars($group['name']); ?></p>
              <div class="modal-img">
                <?php foreach ($group['contents'] as $content): ?>
                <div class="modal-item">
                  <?php if (isVideo($content['media'])): ?>
                    <video src="images/achievements/<?php echo htmlspecialchars($content['media']); ?>" controls></video>
                  <?php else: ?>
                    <img src="images/achievements/<?php echo htmlspecialchars($content['media']); ?>" alt="<?php echo htmlspecialchars($content['name']); ?>">
                  <?php endif; ?>
                  <p class="modal-item-name"><?php echo htmlspecialchars($content['name']); ?></p>
                  <p class="modal-item-date"><?php echo htmlspecialchars($content['date']); ?></p>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </li>
        <?php endforeach; ?>
      </ul>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html>