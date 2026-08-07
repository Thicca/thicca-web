<?php
/**
 * フッター用用html
 * 各ページから require_once で読み込んで使用する
 */
?>
<footer id="footer">
    <div class="info-area">
        <a class="logo" href="index.php">
            <img src="images/common/logo-w.svg" alt="Interior Design">
        </a>
        <p class="copyright"><?php echo COPYRIGHT; ?></p>
    </div>

    <div class="menu-area">
        <div class="menu-col">
            <p class="menu-title"><a href="company.html">会社情報</a></p>
            <ul class="menu-list">
                <li><a href="company.html#philosophy">企業理念</a></li>
                <li><a href="company.html#service">事業紹介</a></li>
                <li><a href="company.html#overview">会社概要</a></li>
                <li><a href="company.html#access">アクセス</a></li>
            </ul>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="products.html">商品一覧</a></p>
            <p class="menu-title"><a href="works.html">実績紹介</a></p>
        </div>

        <div class="menu-col">
            <p class="menu-title"><a href="faq.html">よくある質問</a></p>
            <p class="menu-title"><a href="contact.html">お問い合わせ</a></p>
        </div>
    </div>
</footer>