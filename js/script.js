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

// ページロード時にフェードイン
window.addEventListener("load", () => {
    document.querySelector("main").classList.add("loaded");
  });
  
// リンククリック時にフェードアウトとページ遷移
document.querySelectorAll('a[href]').forEach((link) => {
    const href = link.getAttribute("href");
    
    // target="_blank" のリンクはそのまま動作させる
    if (link.target === "_blank") {
      return;
    }
    
    if (href && !href.startsWith("#")) {
      link.addEventListener("click", (e) => {
        e.preventDefault(); // 通常のリンク動作をキャンセル
        document.querySelector("main").classList.remove("loaded"); // フェードアウト開始
        setTimeout(() => {
          window.location.href = href; // 遷移
        }, 500); // アニメーション終了後に遷移
      });
    }
  });
  
  // Prefetch機能の維持
  document.querySelectorAll('a[href]').forEach((link) => {
    const href = link.getAttribute("href");
    if (href && !href.startsWith("#")) {
      const prefetchLink = document.createElement("link");
      prefetchLink.rel = "prefetch";
      prefetchLink.href = href;
      document.head.appendChild(prefetchLink);
    }
  });
  
// アコーディオンを制御するスクリプト
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const target = document.querySelector(header.dataset.target);

        // 他のアイテムを閉じないようにする
        if (header.classList.contains('active')) {
            header.classList.remove('active');
            target.classList.remove('active');
        } else {
            header.classList.add('active');
            target.classList.add('active');
        }
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
window.addEventListener('load', () => {
    // URLにアンカーが含まれているか確認
    const hash = window.location.hash;  // 現在のURLのハッシュ（#form など）

    if (hash) {
        const targetElement = document.querySelector(hash);  // ハッシュに対応する要素を取得

        if (targetElement) {
            const headerHeight = document.querySelector('.navbar').offsetHeight;  // ヘッダーの高さを取得

            // スクロール位置を調整してスムーズにスクロール
            window.scrollTo({
                top: targetElement.offsetTop - headerHeight,  // ヘッダー分だけオフセット
                behavior: 'smooth'  // スムーズスクロール
            });
        }
    }
});

