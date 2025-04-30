const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  speed: 1000,
  slidesPerView: 1.5,
  spaceBetween: 40,
  centeredSlides: true, // アクティブなスライドを中央に配置する
  breakpoints:{
    768:{
      slidesPerView: 3,
    },
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination", // ページネーション要素のクラス
    clickable: true, // クリックによるスライド切り替えを有効にする
    type: "bullets", // 'bullets'（デフォルト） | 'fraction' | 'progressbar'
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// 問題1. タブボタンのクリックイベントを受け取る処理をJavaScriptで書いてください
const buttons = document.querySelectorAll(".tab-button");
buttons.forEach((button) => {
  // 問題2. ボタンがクリックされた時、関連するオブジェクトを取得する処理をJavaScriptで書いてください
  button.addEventListener("click", (e) => {
    const targetId = e.currentTarget.getAttribute("data-target");
    const allContents = document.querySelectorAll(".tab-content");
    const targetContent = document.getElementById(targetId);

    // 問題1. 表示するタブを変える前に、一度全てから`*active*`クラスを取り除く処理をJavaScriptで書いてください
    buttons.forEach((btn) => {
      btn.classList.remove("active");
    });
    // 問題1. 表示するタブを変える前に、一度全てから`*active*`クラスを取り除く処理をJavaScriptで書いてください
    allContents.forEach((content) => {
      content.classList.remove("active");
    });

    // 問題2. クリックしたボタンに対応するコンテンツとボタンに`*active*`クラスを付与してください
    e.currentTarget.classList.add("active");

    // 問題2. クリックしたボタンに対応するコンテンツとボタンに`*active*`クラスを付与してください
    targetContent.classList.add("active");
  });
});

// 問題1. ボタンがクリックされたとき、モーダルウィンドウが表示される処理をJavaScriptで書いてください
const thumbnails = document.querySelectorAll(".thumbnail");
const modal = document.getElementById("myModal");
const modalImg = document.getElementById("modal-img");
// const btn = document.getElementById('openModalBtn');

// btn.addEventListener('click', function () {
//   modal.style.display = 'block'
// })

thumbnails.forEach(function (thumbnail) {
  thumbnail.addEventListener("click", function () {
    const fullSrc = this.getAttribute("data-fullsrc");
    modalImg.src = fullSrc;
    modal.style.display = "block";
  });
});

// 問題1. 閉じるボタンがクリックされたとき、モーダルウィンドウが非表示になる処理をJavaScriptで書いてください
const closeBtn = document.getElementById("closeModalBtn");

closeBtn.addEventListener("click", function () {
  modal.style.display = "none";
});

// 問題1. モーダルウィンドウの外側をクリックしたとき、モーダルウィンドウが閉じる処理をJavaScriptで書いてください
window.onclick = function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

// セクションがスクロールされたらリンクの色が変化する
const sections = document.querySelectorAll(".content-section");
const navLinks = document.querySelectorAll(".nav-link");

function activateLink(id) {
  navLinks.forEach((link) => {
    link.classList.toggle("active", link.dataset.target === id);
  });
}

function onScroll() {
  let currentSectionId = "";

  sections.forEach((section) => {
    const rect = section.getBoundingClientRect();
    if (
      rect.top <= window.innerHeight / 2 &&
      rect.bottom >= window.innerHeight / 2
    ) {
      currentSectionId = section.getAttribute("id");
    }
  });

  if (currentSectionId) {
    activateLink(currentSectionId);
  }
}

window.addEventListener("scroll", onScroll);
window.addEventListener("load", onScroll); // ページ読み込み時にも反映

// ハンバーガーメニュー
// ボタンのクリックイベントを受け取った時の処理をJavaScriptで書いてください
const hamburgerMenu = document.querySelector(".hamburger-menu");

const navi = document.getElementById("hamburger-navigation");

// クリックイベントを受けっとたきにメニューの表示と非表示を切り替えるJavaScriptを書いてください
// hamburgerMenuのクリックイベント内で書いてください

// クリックイベントを受け取ったときにボタンの表示と非表示を切り替える処理をJavaScriptで書いてください

hamburgerMenu.addEventListener("click", function () {
  navi.classList.toggle("active");
  hamburgerMenu.classList.toggle("active");
});

// セクションをクリックした時にメニューを閉じる処理をJavaScriptで書いてください

// 「hamburger-menu-section」クラスを持つ要素を全て取得し、定数「hamburgerMenuSections」に代入しよう
const hamburgerMenuSections = document.querySelectorAll(
  ".hamburger-menu-section"
);

// 「hamburgerMenuSections」から繰り返し処理を使用し、「hamburgerMenuSection」を取得しよう
// それぞれのセクションでクリックイベントを追加しよう
// クリックイベント内でメニューとボタンから「active」クラスを削除してください

// ＜実装案その2＞背景のどこをクリックしても背景が閉じて元の画面に戻るように修正するには以下のように書き換える
navi.addEventListener("click", function () {
  navi.classList.remove("active");
  hamburgerMenu.classList.remove("active");
});
