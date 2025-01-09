// Hamburger Menu Toggle
const hamburger = document.getElementById("hamburger");
const navLinks = document.getElementById("nav-links");

hamburger.addEventListener("click", () => {
  navLinks.classList.toggle("open");
  hamburger.classList.toggle("toggle");
});

// ページロード時にフェードイン
window.addEventListener("load", () => {
    document.querySelector("main").classList.add("loaded");
  });
  
  // リンククリック時にフェードアウトとページ遷移
  document.querySelectorAll('a[href]').forEach((link) => {
    const href = link.getAttribute("href");
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
  