// lottie
document.addEventListener('DOMContentLoaded', function () {
  if (typeof lottie === 'undefined') return;

  lottie.loadAnimation({
    container: document.getElementById('lottie-expert'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'http://demo.infinitydesign.online/wp-content/uploads/2025/08/Siri-Animation.json'
  });

  lottie.loadAnimation({
    container: document.getElementById('lottie-design'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://your-site.com/wp-content/uploads/2025/08/design.json'
  });

  lottie.loadAnimation({
    container: document.getElementById('lottie-marketing'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://your-site.com/wp-content/uploads/2025/08/marketing.json'
  });
});
// lottie-init.js
document.addEventListener('DOMContentLoaded', function () {
  if (typeof lottie === 'undefined') return;

  // 1つ目のアニメーション（Siri）
  lottie.loadAnimation({
    container: document.getElementById('lottie-expert'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://demo.infinitydesign.online/wp-content/uploads/2025/08/Siri-Animation.json'
  });

  // 2つ目のアニメーション（Loading）
  lottie.loadAnimation({
    container: document.getElementById('lottie-loading'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://demo.infinitydesign.online/wp-content/uploads/2025/08/Loading.json'
  });
	  lottie.loadAnimation({
    container: document.getElementById('lottie-comit'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://demo.infinitydesign.online/wp-content/uploads/2025/08/Growth-Chart.json'
  });
		  lottie.loadAnimation({
    container: document.getElementById('lottie-analyst'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'https://demo.infinitydesign.online/wp-content/uploads/2025/08/Business-analyst.json'
  });
});



