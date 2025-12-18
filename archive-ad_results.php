<?php get_header(); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<!-- ヒーローセクション -->
<section class="ad-results-hero">
  <!-- SVG背景アニメーション -->
  <svg class="hero-bg-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
    <defs>
      <linearGradient id="waveGradient1" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgba(255,255,255,0.1);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgba(255,255,255,0.05);stop-opacity:1" />
      </linearGradient>
      <linearGradient id="waveGradient2" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgba(255,255,255,0.05);stop-opacity:1" />
        <stop offset="100%" style="stop-color:rgba(255,255,255,0.1);stop-opacity:1" />
      </linearGradient>
    </defs>
    <path class="wave wave1" fill="url(#waveGradient1)" d="M0,160L48,176C96,192,192,224,288,224C384,224,480,192,576,165.3C672,139,768,117,864,128C960,139,1056,181,1152,186.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    <path class="wave wave2" fill="url(#waveGradient2)" d="M0,224L48,213.3C96,203,192,181,288,186.7C384,192,480,224,576,229.3C672,235,768,213,864,197.3C960,181,1056,171,1152,181.3C1248,192,1344,224,1392,240L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
  </svg>
  
  <!-- 浮遊する円 -->
  <div class="floating-circles">
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
    <div class="circle circle4"></div>
    <div class="circle circle5"></div>
  </div>
  
  <div class="ad-results-hero-inner">
    <h1 class="ad-results-title">AD RESULTS</h1>
    <p class="ad-results-subtitle">
      データドリブンな広告運用で実現した成果事例
    </p>
  </div>
</section>

<!-- 実績セクション -->
<section class="case-study-section">
  <div class="infinity-container">
    <!-- フィルターボタン -->
    <div class="case-study-filter animate-on-scroll fade-in-up">
      <button class="filter-btn active" data-filter="all">すべて</button>
      <?php
      $industries = array('美容', '医療', '飲食', '小売', '教育', 'その他');
      foreach ($industries as $industry) {
        echo '<button class="filter-btn" data-filter="' . esc_attr($industry) . '">' . esc_html($industry) . '</button>';
      }
      ?>
    </div>

    <!-- 実績カードグリッド -->
    <div class="case-study-grid">
      <?php
      $args = array(
        'post_type' => 'ad_results',
        'posts_per_page' => -1
      );
      $query = new WP_Query($args);

      if ($query->have_posts()):
        while ($query->have_posts()) : $query->the_post();
          $image = get_field('creative_images');
          $industry = get_field('industry') ?: 'その他';

          $first_image = '';
          if (is_array($image) && isset($image['url'])) {
            $first_image = $image['url'];
          } elseif (is_numeric($image)) {
            $first_image = wp_get_attachment_url($image);
          } elseif (is_string($image)) {
            $first_image = $image;
          }
      ?>
        <div class="case-card animate-on-scroll scale-in" data-category="<?php echo esc_attr($industry); ?>">
          <a href="<?php the_permalink(); ?>" class="case-card-link">
            <div class="case-card-thumb">
              <img
                src="<?php echo esc_url($first_image ?: get_template_directory_uri() . '/assets/images/noimage.jpg'); ?>"
                alt="<?php the_title_attribute(); ?>"
                class="blurred-image">
              <div class="case-card-overlay">
                <span class="view-detail">詳細を見る <i class="fas fa-arrow-right"></i></span>
              </div>
            </div>
            <div class="case-card-body">
              <span class="case-tag"><?php echo esc_html($industry); ?></span>
              <h3 class="case-title"><?php the_title(); ?></h3>
              <time class="case-date"><i class="far fa-calendar-alt"></i> <?php echo get_the_date(); ?></time>
            </div>
          </a>
        </div>
      <?php
        endwhile;
      else:
        echo '<p class="no-posts">投稿が存在しません</p>';
      endif;
      wp_reset_postdata();
      ?>
    </div>

    <!-- More View ボタン -->
    <div class="more-button-container">
      <button class="more-button">More View <i class="fas fa-chevron-down"></i></button>
    </div>
  </div>
</section>

<script>
  // Moreボタン & フィルター制御
  document.addEventListener('DOMContentLoaded', function () {
    const moreButton = document.querySelector('.more-button');
    const cards = document.querySelectorAll('.case-card');
    const filterButtons = document.querySelectorAll('.filter-btn');
    let visibleCount = 9;

    function showCards(filter = 'all') {
      let count = 0;
      cards.forEach(card => {
        const match = filter === 'all' || card.dataset.category === filter;
        if (match && count < visibleCount) {
          card.style.display = 'block';
          count++;
        } else {
          card.style.display = 'none';
        }
      });
      
      // すべてのカードが表示されている場合、Moreボタンを非表示
      const totalMatchingCards = Array.from(cards).filter(card => 
        filter === 'all' || card.dataset.category === filter
      ).length;
      
      if (moreButton) {
        moreButton.style.display = count >= totalMatchingCards ? 'none' : 'inline-flex';
      }
    }

    showCards();

    if (moreButton) {
      moreButton.addEventListener('click', () => {
        visibleCount += 9;
        const active = document.querySelector('.filter-btn.active')?.dataset.filter || 'all';
        showCards(active);
      });
    }

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        visibleCount = 9;
        showCards(btn.dataset.filter);
      });
    });
  });
</script>

<?php get_footer(); ?>
