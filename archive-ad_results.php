<?php get_header(); ?>
<!-- Google Fonts（head内などで一度だけ読み込めばOK） -->
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<!-- Google Fonts 読み込み（headに1度だけ） -->
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<section class="works-hero" style="position: relative; background-color: #f0f0f0; overflow: hidden;">
  <div class="works-hero-inner" style="position: relative; z-index: 2;">
    <div class="works-heading">
      <!-- 表示はSVG内でされるため非表示でOK -->
    </div>
  </div>

  <div class="works-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
    <svg viewBox="0 0 1000 300" preserveAspectRatio="xMidYMid meet"
         xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">

      <style>
        .stroke-text {
          font-family: 'Caveat', cursive;
		font-size: 200px;
          fill: none;
          stroke: #222;
          stroke-width: 2.5px;
          stroke-dasharray: 1500;
          stroke-dashoffset: 1500;
          animation: draw 2.5s forwards;
        }

        .fill-text {
          font-family: 'Caveat', cursive;
          font-size: 200px;
          fill: black;
          opacity: 0;
          animation: fillIn 0.5s forwards;
          animation-delay: 2.5s;
        }

        @keyframes draw {
          to {
            stroke-dashoffset: 0;
          }
        }

        @keyframes fillIn {
          to {
            opacity: 1;
          }
        }
      </style>

      <!-- 背景 -->
      <rect width="1000" height="300" fill="#f0f0f0"/>

      <!-- 書き順アニメーション -->
      <text x="50%" y="55%" text-anchor="middle" dominant-baseline="middle" class="stroke-text">
        Ad Results
      </text>

      <!-- 黒で塗りつぶす -->
      <text x="50%" y="55%" text-anchor="middle" dominant-baseline="middle" class="fill-text">
        Ad Results
      </text>
    </svg>
  </div>
</section>



<section class="case-study-section">
		<div class="id-glass-bg">
  <span class="blur-circle" style="top: 10%; left: 15%; width: 120px; height: 120px; background: #00ffe1;"></span>
  <span class="blur-circle" style="top: 30%; left: 70%; width: 200px; height: 200px; background: #ff4f4f;"></span>
  <span class="blur-circle" style="top: 60%; left: 40%; width: 90px; height: 90px; background: #8a2be2;"></span>
  <span class="blur-circle" style="top: 20%; left: 50%; width: 60px; height: 60px; background: #00bfff;"></span>
  <span class="blur-circle" style="top: 75%; left: 80%; width: 140px; height: 140px; background: #ff7f50;"></span>
</div>
  <div class="case-study-filter">
    <button class="filter-btn active" data-filter="all">すべて</button>
    <?php
    $industries = array('美容', '医療', '飲食', '小売', '教育', 'その他');
    foreach ($industries as $industry) {
      echo '<button class="filter-btn" data-filter="' . esc_attr($industry) . '">' . esc_html($industry) . '</button>';
    }
    ?>
  </div>

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
      <div class="case-card" data-category="<?php echo esc_attr($industry); ?>">
        <a href="<?php the_permalink(); ?>" class="case-card-link">
          <div class="case-card-thumb">
            <img
              src="<?php echo esc_url($first_image ?: get_template_directory_uri() . '/assets/images/noimage.jpg'); ?>"
              alt="<?php the_title_attribute(); ?>"
              class="blurred-image">
          </div>
          <div class="case-card-body">
            <span class="case-tag"><?php echo esc_html($industry); ?></span>
            <h3 class="case-title"><?php the_title(); ?></h3>
            <time class="case-date"><?php echo get_the_date(); ?></time>
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
    <button class="more-button">More View <span>▼</span></button>
  </div>
</section>

<script>
  // Moreボタン & フィルター制御
  document.addEventListener('DOMContentLoaded', function () {
    const moreButton = document.querySelector('.more-button');
    const cards = document.querySelectorAll('.work-card');
    const filterButtons = document.querySelectorAll('.works-tabs button');
    let visibleCount = 6;

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
    }

    showCards();

    if (moreButton) {
      moreButton.addEventListener('click', () => {
        visibleCount += 6;
        const active = document.querySelector('.works-tabs .active')?.dataset.filter || 'all';
        showCards(active);
      });
    }

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        filterButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        visibleCount = 6;
        showCards(btn.dataset.filter);
      });
    });
  });
</script>

<?php get_footer(); ?>
