<?php get_header(); ?>
<section class="works-hero" style="position: relative; background-color: #f0f0f0; overflow: hidden;">
  <div class="works-hero-inner" style="position: relative; z-index: 2;">
    <div class="works-heading">
      <h1>Works</h1>
      <p class="sub">広告運用実績</p>
      <p class="breadcrumb">TOPページ ＞ <span>広告運用実績</span></p>
    </div>
  </div>

  <!-- 背景に塗りつぶしアニメーション適用 -->
  <div class="works-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
    <svg viewBox="0 0 1000 300" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
      <defs>
        <mask id="reveal">
          <rect x="0" y="0" width="0" height="300" fill="white">
            <animate attributeName="width" from="0" to="1000" dur="3s" fill="freeze" />
          </rect>
        </mask>
      </defs>

      <!-- 背景 -->
      <rect width="1000" height="300" fill="#f0f0f0"/>

      <!-- テキスト（マスクで塗り進む） -->
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle"
            fill="#222" font-size="64" font-family="Segoe UI, sans-serif" mask="url(#reveal)">
        Works
      </text>
    </svg>
  </div>
</section>


<section class="works-filter-section">
  <!-- 業種別フィルター -->
  <div class="works-tabs">
    <button class="active" data-filter="all">すべて</button>
    <?php
    $industries = array('美容', '医療', '飲食', '小売', '教育', 'その他');
    foreach ($industries as $industry) {
      echo '<button data-filter="' . esc_attr($industry) . '">' . esc_html($industry) . '</button>';
    }
    ?>
  </div>

  <!-- 実績カードグリッド -->
  <div class="works-grid">
    <?php
    $args = array(
      'post_type' => 'ad_results',
      'posts_per_page' => -1
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
      while ($query->have_posts()) : $query->the_post();
        $images = get_field('creative_images');
        $industry = get_field('industry') ?: 'その他';

        $first_image = '';
        if (is_array($images) && !empty($images)) {
          $first_image = is_array($images[0]) ? $images[0]['url'] : wp_get_attachment_url($images[0]);
        }
    ?>
      <div class="work-card" data-category="<?php echo esc_attr($industry); ?>">
        <a href="<?php the_permalink(); ?>">
          <div class="thumb">
            <?php if ($first_image): ?>
              <img src="<?php echo esc_url($first_image); ?>" alt="<?php the_title_attribute(); ?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="no image">
            <?php endif; ?>
          </div>
          <div class="meta">
            <span class="label"><?php echo esc_html($industry); ?></span>
            <span class="date"><?php echo get_the_date(); ?></span>
          </div>
          <p class="title"><?php the_title(); ?></p>
        </a>
      </div>
    <?php
      endwhile;
    else:
      echo '<p style="color:red;">投稿が存在しません</p>';
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
