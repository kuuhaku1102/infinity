console.log("=== My Custom JS Loaded ===");
// // Heroタイトルをフェードイン
document.addEventListener("DOMContentLoaded", function () {
  const title = document.querySelector(".hero-title");
  if (title) {
    title.classList.add("fade-in");
  }

  // News フィルター（タブ切り替え）
  const buttons = document.querySelectorAll(".news-tabs button");
  const cards = document.querySelectorAll(".news-card");

  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.getAttribute("data-filter");

      cards.forEach(card => {
        if (filter === "all" || card.getAttribute("data-category") === filter) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });

  // Pie Chart
  const pieCanvas = document.getElementById('pieChart');
  if (pieCanvas) {
    const ctx = pieCanvas.getContext('2d');
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['未導入', '導入済'],
        datasets: [{
          data: [53, 47],
          backgroundColor: ['#FFEB00', '#6A2DFF'],
          borderWidth: 0
        }]
      },
      options: {
        responsive: true,
        animation: {
          animateRotate: true,
          duration: 2000
        },
        plugins: {
          legend: {
            position: 'bottom',
            labels: {
              color: '#333',
              font: { size: 14 }
            }
          }
        },
        cutout: '55%'
      }
    });
  }
});
document.addEventListener("DOMContentLoaded", function () {
  // 背景スライダー
  const bg = document.querySelector(".background-slider");
  if (bg) {
    new Swiper(".background-slider", {
      slidesPerView: "auto",
      spaceBetween: 40,
      speed: 10000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      loop: false, // ← freeMode と併用しない
      freeMode: true,
      freeModeMomentum: false,
      allowTouchMove: false,
    });
  }

  // 制作実績スライダー
const worksSwiper = new Swiper('.works-swiper-mini', {
  slidesPerView: 1,
  spaceBetween: 32,
  loop: true, // ← スライドをループさせる
  autoplay: {
    delay: 4000, // 4秒ごとに自動でスライド
    disableOnInteraction: false // ユーザー操作後も自動再開
  },
  navigation: {
    nextEl: '.works-swiper-mini .swiper-button-next',
    prevEl: '.works-swiper-mini .swiper-button-prev',
  },
  pagination: {
    el: '.works-swiper-mini .swiper-pagination',
    clickable: true
  },
  breakpoints: {
    768: {
      slidesPerView: 1
    },
    1024: {
      slidesPerView: 1
    }
  }
});



  // Moreボタン：追加表示
  moreButton.addEventListener("click", () => {
    let hiddenCards = document.querySelectorAll(".work-card:not(.show)");
    hiddenCards.forEach((card, i) => {
      if (i < showLimit) {
        card.classList.add("show");
      }
    });
  });
});
 document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const nav = document.querySelector(".main-nav");

    hamburger.addEventListener("click", function () {
      nav.classList.toggle("active");
    });
  });
// main.js 内の最後などに追記
document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  }, {
    threshold: 0.1
  });

  const section = document.querySelector('.works-section-grid');
  if (section) observer.observe(section);

  document.querySelectorAll('.work-card-mini').forEach(card => observer.observe(card));
});

document.querySelectorAll('.works-tabs button').forEach(btn => {
  btn.addEventListener('click', () => {
    const filter = btn.dataset.filter;

    // ボタン切替
    document.querySelectorAll('.works-tabs button').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    // カードフィルタ
    document.querySelectorAll('.works-card').forEach(card => {
      if (filter === 'all' || card.dataset.category === filter) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const moreButton = document.querySelector(".more-button");
  const showLimit = 6;

  // 初期表示（最初の6件だけ表示）
  const allCards = document.querySelectorAll(".works-card");
  allCards.forEach((card, i) => {
    if (i < showLimit) {
      card.classList.add("show");
    }
  });

  // Moreボタン処理
  moreButton.addEventListener("click", () => {
    const hiddenCards = document.querySelectorAll(".works-card:not(.show)");
    hiddenCards.forEach((card, i) => {
      if (i < showLimit) {
        card.classList.add("show");
      }
    });

    // 全て表示したらボタンを消す
    if (document.querySelectorAll(".works-card:not(.show)").length === 0) {
      moreButton.style.display = "none";
    }
  });
});
// 
document.addEventListener("DOMContentLoaded", () => {
  const ring = document.querySelector(".media-rotating-ring");
  const logos = ring.querySelectorAll(".logo");
  const radius = 160; // 半径（調整可）
  const centerX = 200;
  const centerY = 200;
  const total = logos.length;

  logos.forEach((logo, i) => {
    const angle = (360 / total) * i;
    const rad = angle * (Math.PI / 180);
    const x = centerX + radius * Math.cos(rad);
    const y = centerY + radius * Math.sin(rad);
    logo.style.left = `${x}px`;
    logo.style.top = `${y}px`;
  });
});
// 
document.addEventListener('DOMContentLoaded', function () {
  const animationList = [
    "https://infinitydesign.online/wp-content/uploads/2025/08/Isometric-data-analysis.json",
    "https://infinitydesign.online/wp-content/uploads/2025/08/Business-team.json",
    "https://infinitydesign.online/wp-content/uploads/2025/08/Login.json",
    "https://infinitydesign.online/wp-content/uploads/2025/08/Meeting.json"
  ];

  const container = document.getElementById('lottie-animation');
  let lottieInstance = null;

  // 初期化
  function loadLottie(index) {
    if (lottieInstance) {
      lottieInstance.destroy();
      container.innerHTML = ""; // DOMクリア
    }
    lottieInstance = lottie.loadAnimation({
      container: container,
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: animationList[index]
    });
  }

  // 初回読み込み
  loadLottie(0);

  const buttons = document.querySelectorAll('.circle-btn');
  const details = document.querySelectorAll('.service-detail');

  buttons.forEach((btn, index) => {
    btn.addEventListener('click', () => {
      // ボタン切替
      buttons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      // コンテンツ切替
      details.forEach(d => d.classList.remove('active'));
      details[index].classList.add('active');

      // Lottie再読み込み
      loadLottie(index);
    });
  });
});
