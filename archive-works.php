<?php get_header(); ?>

<!-- Google Fonts 読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- AOS (Animate On Scroll) Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<section class="works-hero-modern">
  <div class="works-hero-bg">
    <svg class="works-animated-bg" viewBox="0 0 1200 400" preserveAspectRatio="none">
      <defs>
        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
          <stop offset="50%" style="stop-color:#764ba2;stop-opacity:1" />
          <stop offset="100%" style="stop-color:#f093fb;stop-opacity:1" />
        </linearGradient>
      </defs>
      <!-- 動く波のパス -->
      <path fill="url(#grad1)" opacity="0.3">
        <animate attributeName="d" dur="20s" repeatCount="indefinite"
          values="M0,160 Q300,100 600,160 T1200,160 L1200,400 L0,400 Z;
                  M0,180 Q300,240 600,180 T1200,180 L1200,400 L0,400 Z;
                  M0,160 Q300,100 600,160 T1200,160 L1200,400 L0,400 Z"/>
      </path>
      <path fill="url(#grad1)" opacity="0.2">
        <animate attributeName="d" dur="15s" repeatCount="indefinite"
          values="M0,200 Q300,260 600,200 T1200,200 L1200,400 L0,400 Z;
                  M0,220 Q300,140 600,220 T1200,220 L1200,400 L0,400 Z;
                  M0,200 Q300,260 600,200 T1200,200 L1200,400 L0,400 Z"/>
      </path>
    </svg>
  </div>
  
  <div class="works-hero-content">
    <h1 class="works-hero-title" data-aos="fade-down" data-aos-duration="1000">
      <span class="works-title-line">Our</span>
      <span class="works-title-main">Works</span>
    </h1>
    <p class="works-hero-subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
      私たちが手がけた制作実績をご覧ください
    </p>
    <div class="works-hero-stats" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
      <div class="stat-item">
        <span class="stat-number" data-count="100">0</span>
        <span class="stat-label">プロジェクト</span>
      </div>
      <div class="stat-item">
        <span class="stat-number" data-count="50">0</span>
        <span class="stat-label">クライアント</span>
      </div>
      <div class="stat-item">
        <span class="stat-number" data-count="98">0</span>
        <span class="stat-label">満足度%</span>
      </div>
    </div>
  </div>
</section>

<section class="works-filter-section-modern">
  <div class="container">
    <!-- フィルターヘッダー -->
    <div class="filter-header" data-aos="fade-up">
      <h2 class="filter-title">制作実績を探す</h2>
      <p class="filter-subtitle">カテゴリーや業界で絞り込んで、ご希望の実績をご覧いただけます</p>
    </div>

    <!-- カテゴリフィルター（モダンなデザイン） -->
    <div class="works-tabs-modern" data-aos="fade-up" data-aos-delay="100">
      <button class="tab-button active" data-filter="all">
        <span class="tab-icon">🎨</span>
        <span class="tab-text">すべて</span>
      </button>
      <?php
      $terms = get_terms(array(
        'taxonomy' => 'work_category',
        'hide_empty' => false,
      ));
      $icons = array(
        'HP制作' => '🌐',
        'LP制作' => '📱',
        'システム' => '⚙️',
      );
      foreach ($terms as $term) {
        $icon = isset($icons[$term->name]) ? $icons[$term->name] : '📄';
        echo '<button class="tab-button" data-filter="' . esc_attr($term->slug) . '">';
        echo '<span class="tab-icon">' . $icon . '</span>';
        echo '<span class="tab-text">' . esc_html($term->name) . '</span>';
        echo '</button>';
      }
      ?>
    </div>

    <!-- 業界フィルター（モダンなドロップダウン） -->
    <?php
    $site_current = isset($_GET['site_type']) ? sanitize_text_field($_GET['site_type']) : '';
    $ind_current  = isset($_GET['industry'])  ? sanitize_text_field($_GET['industry'])  : '';

    $pre_meta = array();
    if ($site_current) {
      $pre_meta[] = array('key'=>'works_site_type','value'=>$site_current,'compare'=>'=');
    }

    $pre_q = new WP_Query(array(
      'post_type' => 'works',
      'posts_per_page' => -1,
      'meta_query' => $pre_meta
    ));

    $industry_counts = array();
    if ($pre_q->have_posts()):
      while ($pre_q->have_posts()): $pre_q->the_post();
        $inds = get_field('works_industries') ?: array();
        if (!is_array($inds)) $inds = array($inds);
        foreach ($inds as $k) {
          if (!$k) continue;
          if (!isset($industry_counts[$k])) $industry_counts[$k] = 0;
          $industry_counts[$k]++;
        }
      endwhile;
      wp_reset_postdata();
    endif;

    $industry_choices = array();
    if (function_exists('get_field_object')) {
      $obj = get_field_object('works_industries');
      if ($obj && !empty($obj['choices'])) $industry_choices = $obj['choices'];
    }
    ?>

    <div class="industry-filter-wrapper" data-aos="fade-up" data-aos-delay="200">
      <label for="filter-industry" class="filter-label">
        <span class="label-icon">🏢</span>
        <span class="label-text">業界で絞り込む</span>
      </label>
      <select id="filter-industry" class="modern-select">
        <option value="">すべての業界</option>
        <?php
        foreach ($industry_counts as $key=>$cnt) {
          if ($cnt <= 0) continue;
          $label = isset($industry_choices[$key]) ? $industry_choices[$key] : $key;
          $selected = selected($ind_current, $key, false);
          printf('<option value="%s" %s>%s（%d件）</option>', esc_attr($key), $selected, esc_html($label), $cnt);
        }
        ?>
      </select>
    </div>

    <!-- 制作実績グリッド（モダンなカードデザイン） -->
    <div class="works-grid-modern">
    <?php
      $meta_query = array();
      if ($ind_current) {
        $meta_query[] = array(
          'key' => 'works_industries',
          'value' => '"' . $ind_current . '"',
          'compare' => 'LIKE'
        );
      }
      if ($site_current) {
        $meta_query[] = array('key'=>'works_site_type','value'=>$site_current,'compare'=>'=');
      }

      $args = array(
        'post_type' => 'works',
        'posts_per_page' => -1,
        'meta_query' => $meta_query
      );
      $query = new WP_Query($args);

      if ($query->have_posts()):
        $delay = 0;
        while ($query->have_posts()) : $query->the_post();
          $image = get_field('works_image');
          $link  = get_field('works_url');
          $terms = get_the_terms(get_the_ID(), 'work_category');
          $term_class = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->slug : 'other';
          $term_name = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->name : 'その他';
    ?>
      <div class="works-card-modern" data-category="<?php echo esc_attr($term_class); ?>" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
        <a href="<?php the_permalink(); ?>" class="card-link">
          <div class="card-image-wrapper">
            <?php if (!is_wp_error($image)) : ?>
              <?php if (is_array($image) && isset($image['url'])): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title_attribute(); ?>" class="card-image">
              <?php elseif (is_string($image)): ?>
                <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>" class="card-image">
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="no image" class="card-image">
              <?php endif; ?>
            <?php endif; ?>
          </div>
          <div class="card-content">
            <div class="card-meta">
              <span class="card-category"><?php echo esc_html($term_name); ?></span>
              <span class="card-date"><?php echo get_the_date('Y.m.d'); ?></span>
            </div>
            <h3 class="card-title"><?php the_title(); ?></h3>
            <div class="card-button-wrapper">
              <span class="card-view-button">詳しく見る →</span>
            </div>
          </div>
        </a>
      </div>
    <?php 
          $delay += 50;
          if ($delay > 300) $delay = 0;
        endwhile; 
        wp_reset_postdata(); 
      endif; 
    ?>
    </div>

    <!-- More View ボタン（モダンなデザイン） -->
    <div class="more-button-wrapper" data-aos="fade-up">
      <button class="more-button-modern">
        <span class="button-text">さらに表示</span>
        <span class="button-icon">▼</span>
      </button>
    </div>
  </div>
</section>

<script>
  // AOS初期化
  AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 100
  });

  // カウントアップアニメーション
  document.addEventListener('DOMContentLoaded', function() {
    const statNumbers = document.querySelectorAll('.stat-number');
    
    const animateCount = (element) => {
      const target = parseInt(element.getAttribute('data-count'));
      const duration = 2000;
      const step = target / (duration / 16);
      let current = 0;
      
      const timer = setInterval(() => {
        current += step;
        if (current >= target) {
          element.textContent = target + (target === 98 ? '' : '+');
          clearInterval(timer);
        } else {
          element.textContent = Math.floor(current);
        }
      }, 16);
    };
    
    // Intersection Observer for count animation
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(num => observer.observe(num));
  });

  // 業界ドロップダウン変更時の処理
  (function(){
    var sel = document.getElementById('filter-industry');
    if(!sel) return;
    sel.addEventListener('change', function(){
      var url = new URL(location.href);
      if (this.value) url.searchParams.set('industry', this.value);
      else url.searchParams.delete('industry');
      location.href = url.toString();
    });
  })();

  // カテゴリフィルター
  document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab-button');
    const cards = document.querySelectorAll('.works-card-modern');
    const moreButton = document.querySelector('.more-button-modern');
    const initialDisplay = 9;
    
    function updateDisplay(filter) {
      let visibleCount = 0;
      
      // カードのフィルタリングと表示制御
      cards.forEach((card, index) => {
        const category = card.getAttribute('data-category');
        const shouldShow = (filter === 'all' || category === filter);
        
        if (shouldShow) {
          if (visibleCount < initialDisplay) {
            card.style.display = 'block';
            card.classList.remove('hidden-card');
            card.classList.add('aos-animate');
          } else {
            card.style.display = 'none';
            card.classList.add('hidden-card');
          }
          visibleCount++;
        } else {
          card.style.display = 'none';
          card.classList.remove('hidden-card');
        }
      });
      
      // More Viewボタンの表示/非表示
      const hiddenCards = Array.from(cards).filter(card => 
        card.classList.contains('hidden-card') && 
        (filter === 'all' || card.getAttribute('data-category') === filter)
      );
      
      if (hiddenCards.length > 0) {
        moreButton.style.display = 'flex';
      } else {
        moreButton.style.display = 'none';
      }
    }
    
    tabs.forEach(tab => {
      tab.addEventListener('click', function() {
        const filter = this.getAttribute('data-filter');
        
        // アクティブタブの切り替え
        tabs.forEach(t => t.classList.remove('active'));
        this.classList.add('active');
        
        // 表示を更新
        updateDisplay(filter);
      });
    });
    
    // 初期表示
    updateDisplay('all');
  });

  // More Viewボタン
  document.addEventListener('DOMContentLoaded', function() {
    const moreButton = document.querySelector('.more-button-modern');
    const cards = document.querySelectorAll('.works-card-modern');
    const tabs = document.querySelectorAll('.tab-button');
    
    moreButton.addEventListener('click', function() {
      // 現在のアクティブタブを取得
      const activeTab = document.querySelector('.tab-button.active');
      const currentFilter = activeTab ? activeTab.getAttribute('data-filter') : 'all';
      
      // 現在のフィルターに一致する非表示カードを取得
      const hiddenCards = Array.from(cards).filter(card => {
        const category = card.getAttribute('data-category');
        const matchesFilter = (currentFilter === 'all' || category === currentFilter);
        return card.classList.contains('hidden-card') && matchesFilter;
      });
      
      // 9個ずつ表示
      let count = 0;
      hiddenCards.forEach(card => {
        if (count < 9) {
          card.style.display = 'block';
          card.classList.remove('hidden-card');
          card.classList.add('aos-animate');
          count++;
        }
      });
      
      // まだ非表示のカードがあるか確認
      const remainingHidden = Array.from(cards).filter(card => {
        const category = card.getAttribute('data-category');
        const matchesFilter = (currentFilter === 'all' || category === currentFilter);
        return card.classList.contains('hidden-card') && matchesFilter;
      });
      
      if (remainingHidden.length === 0) {
        moreButton.style.display = 'none';
      }
    });
  });
</script>

<?php get_footer(); ?>
