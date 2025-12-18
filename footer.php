<!-- Contact Section -->
<section class="contact-section">
  <div class="contact-inner">
    <div class="contact-text">
      <h2><span class="highlight">Contact Us</span><br>お問い合わせ</h2>
      <p class="lead">革新的なWeb施策で、貴社の課題を解決します。</p>
      <p class="desc">
        経験豊富な構築実績とエンジニアの力を、最短で課題に寄り添わせていただきます。<br>
        お見積もりやご相談は無料。お気軽にお問い合わせください。
      </p>
      <div class="contact-buttons">
        <a href="https://infinitydesign.online/contact/" class="btn-black">お問い合わせフォーム</a>
      </div>
      <p class="hours">受付時間：10:00〜19:00</p>
    </div>
    <div class="contact-illustration">
<dotlottie-wc src="https://lottie.host/85a0ed21-2b69-4698-b37d-ad00428cd644/P96NMVKNZp.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-brand">
            <p>
        合同会社 Infinity Design<br>
        〒810-0001<br>
        福岡県福岡市中央区天神二丁目3番10号天神パインクレスト719号
      </p>
    </div>

    <nav class="footer-nav">
      <ul>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo home_url('/service'); ?>">Service</a></li>
        <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>
        <li><a href="<?php echo home_url('/blogs'); ?>">Blogs</a></li>
        <li><a href="<?php echo home_url('/works'); ?>">Works</a></li>
      </ul>
    </nav>
  </div>

  <div class="footer-bottom">
    <div class="scroll-top">scroll top</div>
    <div class="footer-meta">
      <a href="<?php echo home_url('/privacy'); ?>">プライバシーポリシー</a>　
      &copy; <?php echo date('Y'); ?> infinity design Inc. All Rights Reserved.
    </div>
  </div>
</footer>
 <?php wp_footer(); ?>

    <!-- テーマ直下の index.js を直接読み込む -->
<!--     <script src="<?php echo get_template_directory_uri(); ?>/index.js"></script> -->
<!-- footer.php内の</body>直前 -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/index.js"></script> -->
 <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
const swiper = new Swiper(".works-swiper", {
  slidesPerView: 3,
  spaceBetween: 24,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  breakpoints: {
    768: { slidesPerView: 2 },
    480: { slidesPerView: 1 }
  }
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const moreBtn = document.querySelector('.works-more-btn');
  if (moreBtn) {
    moreBtn.addEventListener('click', function () {
      document.querySelectorAll('.works-item.hidden').forEach(function (el) {
        el.style.display = 'block';
        el.classList.remove('hidden');
      });
      moreBtn.style.display = 'none';
    });
  }
});
</script>
</body>
</html>

