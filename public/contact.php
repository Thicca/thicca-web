<?php
require_once __DIR__ . '/../includes/config.php';
$pageTitle = CONTACT;
$pageUrl = SITE_URL . '/';
$pageDescription = SITE_DESCRIPTION;
$cssFile = 'contact';
?>
<!DOCTYPE html>
<html lang="ja">
  <?php require_once __DIR__ . '/../includes/head.php'; ?>
  <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>
    <main>
      <div class="page-header">
        <div class="img">
          <img src="images/contact/tenshikaiwai.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">CONTACT</span>
            <span class="ja"><?php echo CONTACT; ?></span>
          </h1>
        </div>
      </div>

      <p class="head-text">ご不明点やご質問などございましたら、<br class="pc">下記のフォームからお気軽にお問い合わせください。</p>

      <div class="form-area">
        <p class="form-title">お問い合わせフォーム</p>
        <form action="" method="post">
          <dl>
            <div class="item">
              <dt><label for="kind">お問い合わせ種別</label><span class="require">必須</span></dt>
              <dd>
                <select name="kind" id="kind">
                  <option value="">選択してください</option>
                  <option value="インテリアについて">インテリアについて</option>
                  <option value="店舗デザインについて">店舗デザインについて</option>
                  <option value="採用について">採用について</option>
                  <option value="取材依頼について">取材依頼について</option>
                  <option value="その他">その他</option>
                </select>
              </dd>
            </div>
            <div class="item">
              <dt><label for="kind">お名前</label><span class="require">必須</span></dt>
              <dd><input id="name" type="text" name="name" placeholder="インテリア　太郎"></dd>
            </div>
            <div class="item">
              <dt><label for="mail">メールアドレス</label><span class="require">必須</span></dt>
              <dd><input id="mail" type="email" name="mail" placeholder="xxxxxxxx@xxx.xxxx"></dd>
            </div>
            <div class="item">
              <dt>どこでお知りになりましたか？</dt>
              <dd class="checkbox-group">
                <div class="checkbox-item">
                  <input type="checkbox" name="know[]" id="know-1" value="SNS">
                  <label for="know-1">SNS</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" name="know[]" id="know-2" value="Google検索">
                  <label for="know-2">Google検索</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" name="know[]" id="know-3" value="紹介・口コミ">
                  <label for="know-3">紹介・口コミ</label>
                </div>
                <div class="checkbox-item">
                  <input type="checkbox" name="know[]" id="know-4" value="その他">
                  <label for="know-4">その他</label>
                </div>
              </dd>
            </div>
            <div class="item">
              <dt><label for="message">お問い合わせ内容</label><span class="require">必須</span></dt>
              <dd><textarea id="message" cols="40" rows="8" name="message"></textarea></dd>
            </div>
          </dl>

          <div class="privacy-policy">
            <div class="privacy-text">
              <p class="privacy-title">個人情報の取り扱いについて</p>
              <p>当社は、お客様等の個人情報について、個人情報保護に関する法令およびその他の規範を遵守します。</p>
              <ol>
                <li>1. 個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります</li>
                <li>2. 個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります</li>
                <li>3. 個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります</li>
                <li>4. 個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります</li>
                <li>5. 個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります個人情報の取り扱いに関するテキストが入ります</li>
              </ol>
            </div>
            <div class="privacy-item">
              <input type="checkbox" name="privacy" id="privacy" value="">
              <label for="privacy">個人情報の取り扱いに同意する</label>
            </div>
          </div>

          <input class="btn-submit" type="submit" name="send" value="送信">
        </form>
      </div>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html> 