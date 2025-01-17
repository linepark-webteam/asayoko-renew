// ヘッダーの透過処理（TOPページのみ）
const navbar = document.querySelector(".navbar");
const isTopPage = document.body.classList.contains("top-page"); // TOPページかどうかを判定

if (isTopPage) {
  // 初期状態で透過を適用
  navbar.classList.add("transparent");

  // スクロール時に透過を切り替え
  window.addEventListener("scroll", () => {
    if (window.scrollY > 0) {
      navbar.classList.remove("transparent"); // 透過解除
    } else {
      navbar.classList.add("transparent"); // 透過適用
    }
  });
}

// Hamburger Menu Toggle
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  hamburger.classList.toggle("toggle");
});

// メニュー内リンクをクリックしたら閉じる処理
navLinks.querySelectorAll("a").forEach(link => {
  link.addEventListener("click", () => {
    navLinks.classList.remove("open"); // メニューを閉じる
    hamburger.classList.remove("toggle"); // ハンバーガーアイコンを戻す
  });
});

// ページ内リンクでリンク先の要素にヘッダー（.navbar）が被らないようにするスクリプト
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault(); // 通常のリンク動作をキャンセル

        // ターゲットとなるIDを取得
        const targetId = this.getAttribute('href').substring(1); // #form から form を取得
        const targetElement = document.getElementById(targetId); // 対象の要素を取得
        const headerHeight = document.querySelector('.navbar').offsetHeight; // ヘッダーの高さを取得

        // スクロール位置を調整してスムーズにスクロール
        window.scrollTo({
            top: targetElement.offsetTop - headerHeight, // ヘッダー分だけオフセット
            behavior: 'smooth' // スムーズスクロール
        });
    });
});

// # をクリックしたときにページトップにスクロールする
document.querySelectorAll('a[href="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault(); // 通常のリンク動作をキャンセル

        // ページトップにスクロール
        window.scrollTo({
            top: 0, // ページトップにスクロール
            behavior: 'smooth' // スムーズスクロール
        });
    });
});

// ページロード時にフェードイン
window.addEventListener("load", () => {
    document.querySelector("main").classList.add("loaded");
});
