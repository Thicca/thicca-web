$(function(){
/*-------------------------------
ハンバーガーメニュー
---------------------------------*/
  $(".hamburger").click(function () {
    $(this).toggleClass("active");
    $("#header .navi").toggleClass("active");
    $("#header .mask").toggleClass("active");
  });

  $(".navi a").click(function () {
    $(".hamburger").removeClass("active");
    $("#header .navi").removeClass("active");
    $("#header .mask").removeClass("active");
  });

  $(".mask").click(function () {
    $(".hamburger").removeClass("active");
    $("#header .navi").removeClass("active");
    $("#header .mask").removeClass("active");
  });

/*-------------------------------
ドロップダウンメニュー
---------------------------------*/
  $(".navi .menu .menu-first span").click(function () {
    $(this).toggleClass("active");
    $(this).next().slideToggle();
  });

  $(".navi .menu .menu-second").click(function () {
    $(this).prev().toggleClass("active");
    $(this).slideToggle();
  });

/*-------------------------------
Inview
---------------------------------*/
  $(".fadein").on("inview", function () {
    $(this).addClass("inview");
  });

/*-------------------------------
タブ切り替え
---------------------------------*/
  $(".tab-list .tab-all").addClass("active");
  $(".gallery-list.all").addClass("active");

  $(".tab-all").click(function () {
    $(".tab-list li").removeClass("active");
    $(".gallery-list").removeClass("active");
    $(this).addClass("active");
    $(".gallery-list.all").addClass("active");
  });

  $(".tab-original").click(function () {
    $(".tab-list li").removeClass("active");
    $(".gallery-list").removeClass("active");
    $(this).addClass("active");
    $(".gallery-list.original").addClass("active");
  });

  $(".tab-fanart").click(function () {
    $(".tab-list li").removeClass("active");
    $(".gallery-list").removeClass("active");
    $(this).addClass("active");
    $(".gallery-list.fanart").addClass("active");
  });

  $(".tab-commission").click(function () {
    $(".tab-list li").removeClass("active");
    $(".gallery-list").removeClass("active");
    $(this).addClass("active");
    $(".gallery-list.commission").addClass("active");
  });

  $(".tab-comic").click(function () {
    $(".tab-list li").removeClass("active");
    $(".gallery-list").removeClass("active");
    $(this).addClass("active");
    $(".gallery-list.comic").addClass("active");
  });

  /*-------------------------------
  実績ページ:モーダルウィンドウ
  ---------------------------------*/
  $(document).on("click", ".achievements-list .modal-open", function () {
      $("body").css("overflow-y", "hidden");
      $(this).closest("li").find(".modal-container").addClass("active");
  });

  $(document).on("click", ".achievements-list .modal-close", function () {
      $("body").css("overflow-y", "auto");
      $(this).closest(".modal-container").removeClass("active");
  });

  // モーダル背景(modal-content以外の部分)をクリックしたら閉じる
  $(document).on("click", ".achievements-list .modal-container", function (e) {
      if (!$(e.target).closest(".modal-content").length) {
          $("body").css("overflow-y", "auto");
          $(this).removeClass("active");
      }
  });

/*-------------------------------
アコーディオン(FAQ)
---------------------------------*/
  $(".faq-list dd").hide();
  $(".faq-list dt").click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass("active");
  });
});

/*-------------------------------
アコーディオン(aboutme)
---------------------------------*/
document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('moreToggle');
  const details = document.getElementById('moreDetails');

  if (toggleBtn && details) {
      toggleBtn.addEventListener('click', () => {
          const isOpen = details.classList.toggle('is-open');
          toggleBtn.classList.toggle('is-open');
          toggleBtn.setAttribute('aria-expanded', isOpen);
          toggleBtn.childNodes[0].textContent = isOpen ? '閉じる ' : 'もっと見る ';
      });
  }
  /*-------------------------------
  ギャラリー画像モーダル
  ---------------------------------*/
  $(document).on("click", ".gallery-item img.modal-open", function () {
      const images = $(this).data("images"); // 配列として自動パースされる
      const name = $(this).data("name");

      const $modalImages = $("#modalImages");
      $modalImages.empty(); // 前回分をクリア

      images.forEach((imgPath) => {
          $modalImages.append(`<img src="images/gallery/${imgPath}" alt="${name}">`);
      });

      $("#modalCaption").text(name);
      $("body").css("overflow-y", "hidden");
      $("#imageModal").addClass("active");
  });
});

/*-------------------------------
画像が画面内に入ってきたらis-visibleクラスを付与する処理(Intersection Observer)
---------------------------------*/
document.addEventListener('DOMContentLoaded', () => {
    const targets = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); // 一度表示したら監視終了
            }
        });
    }, {
        threshold: 0.1 // 画像が10%見えたら発火
    });

    targets.forEach((target) => observer.observe(target));
});
/*-------------------------------
右クリック保存の抑止
---------------------------------*/
document.addEventListener('contextmenu', (e) => {
    if (e.target.tagName === 'IMG') {
        e.preventDefault();
    }
});
// 特定のキー操作をブロック
document.addEventListener('keydown', function(e) {
  // Ctrl + C、Ctrl + U、Ctrl + S など
  if (e.ctrlKey && ['c', 'u', 's'].includes(e.key.toLowerCase())) {
    e.preventDefault();
  }
});
// コピー時にアラートを表示
document.addEventListener('copy', function(e) {
  alert('このページの内容はコピーできません。');
  e.preventDefault();
});