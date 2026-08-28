<?php
require_once __DIR__ . '/../includes/config.php';
require __DIR__ . '/../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start(); // 追加:成功メッセージをリダイレクト後も保持するため

$pageTitle = CONTACT;
$pageUrl = SITE_URL . '/contact';
$pageDescription = CONTACT_PAGE_DESCRIPTION;
$cssFile = 'contact';

$errors = [];

// フォーム送信時の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kind = trim($_POST['kind'] ?? '');
    $name = trim($_POST['name'] ?? '');
    $mail = trim($_POST['mail'] ?? '');
    $know = $_POST['know'] ?? [];
    $message = trim($_POST['message'] ?? '');
    $privacy = $_POST['privacy'] ?? '';

    // バリデーション
    if ($kind === '') $errors[] = 'お問い合わせ種別を選択してください。';
    if ($name === '') $errors[] = 'お名前を入力してください。';
    if ($mail === '' || !filter_var($mail, FILTER_VALIDATE_EMAIL)) $errors[] = '正しいメールアドレスを入力してください。';
    if ($message === '') $errors[] = 'お問い合わせ内容を入力してください。';
    if ($privacy !== 'agree') $errors[] = '個人情報の取り扱いに同意してください。';

    // 簡易スパム対策(ハニーポット)
    if (!empty($_POST['website'])) {
        $errors[] = '不正な送信です。';
    }

    // Google reCAPTCHA v3
    $recaptchaToken = $_POST['recaptcha_token'] ?? '';
    $recaptchaSecret = RECAPTCHA_SECRET_KEY;

    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$recaptchaToken}");
    $responseData = json_decode($verifyResponse);

    if (!$responseData->success || $responseData->score < 0.5) {
        $errors[] = '不正な送信と判定されました。';
    }

    if (empty($errors)) {
        $kindLabels = [
            'illust' => 'イラストの依頼について',
            'stream' => '配信のお仕事(案件)について',
            'collab' => '配信のコラボについて',
            'others' => 'その他のお仕事について',
            'question' => 'その他・質問など',
        ];
        $kindLabel = $kindLabels[$kind] ?? $kind;
        $knowText = !empty($know) ? implode(', ', $know) : '未選択';

        $subject = '【' . SITE_NAME . '】お問い合わせ: ' . $kindLabel;
        $body = "お問い合わせ種別: {$kindLabel}\n";
        $body .= "お名前: {$name}\n";
        $body .= "メールアドレス: {$mail}\n";
        $body .= "きっかけ: {$knowText}\n\n";
        $body .= "お問い合わせ内容:\n{$message}\n";

        $mailer = new PHPMailer(true);

        try {
            $mailer->isSMTP();
            $mailer->Host = SMTP_HOST;
            $mailer->SMTPAuth = true;
            $mailer->Username = SMTP_USERNAME;
            $mailer->Password = SMTP_PASSWORD;
            $mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailer->Port = SMTP_PORT;
            $mailer->CharSet = 'UTF-8';

            $mailer->setFrom(SMTP_USERNAME, SITE_NAME);
            $mailer->addAddress(CONTACT_EMAIL);
            $mailer->addReplyTo($mail, $name);

            $mailer->Subject = $subject;
            $mailer->Body = $body;

            $mailer->send();

            // 送信者本人への自動返信メール
            $autoReply = new PHPMailer(true);

            try {
                $autoReply->isSMTP();
                $autoReply->Host = SMTP_HOST;
                $autoReply->SMTPAuth = true;
                $autoReply->Username = SMTP_USERNAME;
                $autoReply->Password = SMTP_PASSWORD;
                $autoReply->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $autoReply->Port = SMTP_PORT;
                $autoReply->CharSet = 'UTF-8';

                $autoReply->setFrom(SMTP_USERNAME, SITE_NAME);
                $autoReply->addAddress($mail, $name); // 送信者本人のメールアドレス宛

                $autoReply->Subject = '【' . SITE_NAME . '】お問い合わせありがとうございます';

                $autoReplyBody = "{$name} 様\n\n";
                $autoReplyBody .= "この度はお問い合わせいただき、誠にありがとうございます。\n";
                $autoReplyBody .= "以下の内容で受け付けいたしました。内容を確認の上、改めてご連絡させていただきます。\n\n";
                $autoReplyBody .= "-----------------------------------\n";
                $autoReplyBody .= "お問い合わせ種別: {$kindLabel}\n";
                $autoReplyBody .= "お名前: {$name}\n";
                $autoReplyBody .= "メールアドレス: {$mail}\n";
                $autoReplyBody .= "きっかけ: {$knowText}\n\n";
                $autoReplyBody .= "お問い合わせ内容:\n{$message}\n";
                $autoReplyBody .= "-----------------------------------\n\n";
                $autoReplyBody .= "※本メールは自動送信されています。このメールに直接返信いただいても対応できない場合がございます。\n";
                $autoReplyBody .= SITE_NAME . "\n" . SITE_URL;

                $autoReply->Body = $autoReplyBody;

                $autoReply->send();
            } catch (Exception $e) {
                // 自動返信の失敗は、依頼自体の成功を妨げないようにする(エラーにはしない)
                // 必要であればログに残す
                // error_log('Auto-reply failed: ' . $e->getMessage());
            }

            // 成功:セッションにフラグを立てて、リダイレクト(PRGパターン)
            $_SESSION['contact_success'] = true;

            $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
            $currentHost = $_SERVER['HTTP_HOST'];
            $redirectUrl = $protocol . $currentHost . '/contact';

            header('Location: ' . $redirectUrl);
            exit;
        } catch (Exception $e) {
            $errors[] = '送信に失敗しました。エラー詳細: ' . $mailer->ErrorInfo;
            // $errors[] = '送信に失敗しました。時間をおいて再度お試しください。';
        }
    }
}

// リダイレクト後、セッションから成功フラグを取得(表示したら消す)
$success = false;
if (isset($_SESSION['contact_success'])) {
    $success = true;
    unset($_SESSION['contact_success']);
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
          <img src="/images/contact/tenshikaiwai.png" alt="">
        </div>
        <div class="page-title-area">
          <h1 class="page-title">
            <span class="en">CONTACT</span>
            <span class="ja"><?php echo CONTACT; ?></span>
          </h1>
        </div>
      </div>

      <p class="head-text">イラストのご依頼(法人様のみ。個人様は要相談)や配信のお仕事のご相談などございましたら、<br class="pc">下記のフォームからお気軽にお問い合わせください。<br class="pc">※イラストは、個人の方は<a href='https://skeb.jp/@thicca_view' target='_blank' rel='noopener noreferrer'>Skeb</a>からご依頼ください。</p>

      <div class="form-area">
        <p class="form-title">お問い合わせフォーム</p>

        <?php if ($success): ?>
          <p class="form-success">お問い合わせありがとうございます。内容を送信しました。返信までしばらくお待ちください。<br>
    ※確認メールをお送りしております。届かない場合は、迷惑メールフォルダもご確認ください。</p>
        <?php else: ?>

          <?php if (!empty($errors)): ?>
            <ul class="form-errors">
              <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

          <form action="" method="post" id="contactForm">
            <input type="hidden" name="recaptcha_token" id="recaptchaToken">
            <input type="text" name="website" class="honeypot" tabindex="-1" autocomplete="off">

            <dl>
              <div class="item">
                <dt><label for="kind">お問い合わせ種別</label><span class="require">必須</span></dt>
                <dd>
                  <select name="kind" id="kind">
                    <option value="">選択してください</option>
                    <option value="illust" <?php echo (($_POST['kind'] ?? '') === 'illust') ? 'selected' : ''; ?>>イラストの依頼について</option>
                    <option value="stream" <?php echo (($_POST['kind'] ?? '') === 'stream') ? 'selected' : ''; ?>>配信のお仕事(案件)について</option>
                    <option value="collab" <?php echo (($_POST['kind'] ?? '') === 'collab') ? 'selected' : ''; ?>>配信のコラボについて</option>
                    <option value="others" <?php echo (($_POST['kind'] ?? '') === 'others') ? 'selected' : ''; ?>>その他のお仕事について</option>
                    <option value="question" <?php echo (($_POST['kind'] ?? '') === 'question') ? 'selected' : ''; ?>>その他・質問など</option>
                  </select>
                </dd>
              </div>
              <div class="item">
                <dt><label for="name">お名前</label><span class="require">必須</span></dt>
                <dd><input id="name" type="text" name="name" placeholder="田中　太郎" value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"></dd>
              </div>
              <div class="item">
                <dt><label for="mail">メールアドレス</label><span class="require">必須</span></dt>
                <dd><input id="mail" type="email" name="mail" placeholder="xxxxxxxx@xxx.xxxx" value="<?php echo htmlspecialchars($_POST['mail'] ?? ''); ?>"></dd>
              </div>
              <div class="item">
                <dt>私を知ったきっかけ</dt>
                <dd class="checkbox-group">
                  <?php
                    $knowOptions = ['X', 'YouTube', 'Twitch', 'その他'];
                    $selectedKnow = $_POST['know'] ?? [];
                  ?>
                  <?php foreach ($knowOptions as $i => $option): ?>
                  <div class="checkbox-item">
                    <input type="checkbox" name="know[]" id="know-<?php echo $i + 1; ?>" value="<?php echo $option; ?>" <?php echo in_array($option, $selectedKnow) ? 'checked' : ''; ?>>
                    <label for="know-<?php echo $i + 1; ?>"><?php echo $option; ?></label>
                  </div>
                  <?php endforeach; ?>
                </dd>
              </div>
              <div class="item">
                <dt><label for="message">ご依頼・お問い合わせ内容</label><span class="require">必須</span></dt>
                <dd><textarea id="message" cols="40" rows="8" name="message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea></dd>
              </div>
            </dl>

            <div class="privacy-policy">
              <div class="privacy-text">
                <p class="privacy-title">個人情報の取り扱いについて</p>
                <p><?php echo PRIVACY_POLICY_TEXT; ?></p>
                <ol>
                  <li>1. お預かりした個人情報(お名前、メールアドレス、お問い合わせ内容等)は、ご依頼・お問い合わせへの回答および必要なやり取りのためにのみ使用します。</li>
                  <li>2. ご本人の同意なく、第三者へ個人情報を開示・提供することはありません。</li>
                  <li>3. お預かりした情報は適切な期間保管した後、順次削除いたします。</li>
                  <li>4. ご本人からのご請求があった場合、保有する個人情報の開示・訂正・削除に応じます。</li>
                  <li>5. 本ポリシーに関するお問い合わせは、本フォームまたは各種SNSのDMにてご連絡ください。</li>
                </ol>
              </div>
              <div class="privacy-item">
                <input type="checkbox" name="privacy" id="privacy" value="agree">
                <label for="privacy">個人情報の取り扱いに同意する</label>
              </div>
            </div>

            <input class="btn-submit" type="submit" name="send" value="送信">
          </form>

          <script>
          document.getElementById('contactForm').addEventListener('submit', function(e) {
              e.preventDefault();
              grecaptcha.ready(function() {
                  grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', {action: 'submit'}).then(function(token) {
                      document.getElementById('recaptchaToken').value = token;
                      e.target.submit();
                  });
              });
          });
          </script>

        <?php endif; ?>
      </div>
    </main>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
  </body>
</html>