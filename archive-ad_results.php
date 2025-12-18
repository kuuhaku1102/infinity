<?php get_header(); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<!-- ヒーローセクション -->
<section class="ad-results-hero">
  <div class="ad-results-hero-inner">
    <!-- SVGタイトル -->
    <svg viewBox="0 0 800 200" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" class="ad-results-svg-title">
      <defs>
        <linearGradient id="adResultsGradient" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
        </linearGradient>
        <filter id="adResultsShadow">
          <feDropShadow dx="2" dy="2" stdDeviation="3" flood-opacity="0.3"/>
        </filter>
      </defs>
      
      <style>
        .ad-results-stroke-text {
          font-family: 'Caveat', cursive;
          font-size: 120px;
          fill: none;
          stroke: url(#adResultsGradient);
          stroke-width: 3;
          stroke-dasharray: 1500;
          stroke-dashoffset: 1500;
          animation: adResultsDraw 2s forwards;
          filter: url(#adResultsShadow);
        }
        
        .ad-results-fill-text {
          font-family: 'Caveat', cursive;
          font-size: 120px;
          fill: url(#adResultsGradient);
          opacity: 0;
          animation: adResultsFillIn 0.5s forwards;
          animation-delay: 2s;
          filter: url(#adResultsShadow);
        }
        
        @keyframes adResultsDraw {
          to {
            stroke-dashoffset: 0;
          }
        }
        
        @keyframes adResultsFillIn {
          to {
            opacity: 1;
          }
        }
      </style>
      
      <!-- 書き順アニメーション -->
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" class="ad-results-stroke-text">
        AD RESULTS
      </text>
      
      <!-- グラデーションで塗りつぶす -->
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" class="ad-results-fill-text">
        AD RESULTS
      </text>
    </svg>
    
    <h2 class="ad-results-subtitle animate-on-scroll fade-in-up">
      データドリブンな広告運用で実現した<span class="highlight-text">成果事例</span>
    </h2>
    <p class="ad-results-lead animate-on-scroll fade-in-up delay-1">
      InfinityDesignが手がけた広告運用の実績をご紹介します。業種・業界を問わず、データ分析と最適化により、クライアント様のビジネス成長をサポートしています。
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
