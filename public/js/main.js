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

  $(".tab-dining").click(function () {
    $(".tab-list li").removeClass("active");
    $(".gallery-list").removeClass("active");
    $(this).addClass("active");
    $(".gallery-list.dining").addClass("active");
  });

/*-------------------------------
モーダルウィンドウ
---------------------------------*/
// オープン
  $(".work1 .modal-open").click(function () {
    $("body").css("overflow-y", "hidden");
    $(".work1 .modal-container").addClass("active");
  });

  $(".work2 .modal-open").click(function () {
    $("body").css("overflow-y", "hidden");
    $(".work2 .modal-container").addClass("active");
  });

  $(".work3 .modal-open").click(function () {
    $("body").css("overflow-y", "hidden");
    $(".work3 .modal-container").addClass("active");
  });

// クローズ
  $(".modal-close").click(function () {
    $("body").css("overflow-y", "auto");
    $(".modal-container").removeClass("active");
  });

/*-------------------------------
アコーディオン
---------------------------------*/
  $(".faq-list dd").hide();
  $(".faq-list dt").click(function () {
    $(this).next().slideToggle();
    $(this).toggleClass("active");
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