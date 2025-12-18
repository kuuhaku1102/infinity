<?php get_header(); ?>
<section class="business-hero">
  <div class="business-background-layer"></div>
  <div class="business-grid-layer"></div>

  <div class="business-hero-content">
    <h1>Webサイトはエンジンとなりビジネスの未来を切り拓く</h1>
    <p>Infinity Design — Grow your strategy digitally.</p>
  </div>

  <svg class="infinity-stroke" viewBox="0 0 490 470" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <linearGradient id="infinityGrad" x1="0%" y1="0%" x2="200%" y2="0%">
        <stop offset="0%" stop-color="#00FFE1" />
        <stop offset="50%" stop-color="#8A2BE2" />
        <stop offset="100%" stop-color="#FF4F4F" />
        <animate attributeName="x1" values="0%;100%" dur="6s" repeatCount="indefinite" />
        <animate attributeName="x2" values="100%;200%" dur="6s" repeatCount="indefinite" />
      </linearGradient>

      <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
        <feGaussianBlur stdDeviation="3.5" result="coloredBlur" />
        <feMerge>
          <feMergeNode in="coloredBlur" />
          <feMergeNode in="SourceGraphic" />
        </feMerge>
      </filter>
    </defs>

    <path
      d="M367.5 111.5C434.971 111.5 490 166.529 490 234C490 301.539 435.039 356.5 367.5 356.5C316.23 356.5 285.062 328.227 261 293.5C268.178 281.947 274.053 270.641 280 259.703C301.465 295.182 325.527 321.5 367.5 321.5C415.762 321.5 455 282.262 455 234C455 185.465 416.035 146.5 367.5 146.5C339.199 146.5 321.221 156.617 304.609 173.844C287.998 191.07 273.984 215.953 259.766 242.203C245.547 268.453 231.123 296.07 210 318.219C188.877 340.367 159.756 356.5 122.5 356.5C55.0293 356.5 0 301.471 0 234C0 166.461 54.9609 111.5 122.5 111.5C173.496 111.5 204.869 139.025 229 173C221.822 184.348 215.4 195.24 209.453 206.109C188.125 171.656 164.336 146.5 122.5 146.5C74.2383 146.5 35 185.738 35 234C35 282.535 73.9648 321.5 122.5 321.5C150.322 321.5 167.822 311.383 184.297 294.156C200.771 276.93 214.854 252.047 229.141 225.797C243.428 199.547 258.125 171.93 279.453 149.781C300.781 127.633 329.902 111.5 367.5 111.5Z"
      fill="none"
      stroke="url(#infinityGrad)"
      stroke-width="4"
      stroke-linecap="round"
      stroke-linejoin="round"
      stroke-dasharray="3000"
      stroke-dashoffset="3000"
      filter="url(#glow)">
      <animate attributeName="stroke-dashoffset" values="3000;0;0;3000" dur="6s" repeatCount="indefinite" />
    </path>
  </svg>
</section>
	


<section class="id-service-v3">
	<div class="infinite-text-loop">
  <div class="scroll-track">
    <span>OURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICE</span>
    <span>OURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICEOURSERVICE</span>
  </div>
</div>
<div class="id-glass-bg">
  <span class="blur-circle" style="top: 10%; left: 15%; width: 120px; height: 120px; background: #00ffe1;"></span>
  <span class="blur-circle" style="top: 30%; left: 70%; width: 200px; height: 200px; background: #ff4f4f;"></span>
  <span class="blur-circle" style="top: 60%; left: 40%; width: 90px; height: 90px; background: #8a2be2;"></span>
  <span class="blur-circle" style="top: 20%; left: 50%; width: 60px; height: 60px; background: #00bfff;"></span>
  <span class="blur-circle" style="top: 75%; left: 80%; width: 140px; height: 140px; background: #ff7f50;"></span>
</div>
  <div class="id-service-v3-header">
    <h2><span>Our Service</span><br>未来につながるWeb戦略</h2>
    <p>企画・UI/UX・開発・マーケティングまで、ビジネスを拡張する全工程をワンストップで。</p>
  </div>
</section>
<section class="circle-switcher">
  <!-- 左の丸ボタン -->
  <div class="circle-left">
    <div class="circle-menu">
      <button class="circle-btn active" data-index="0">
        <img src="https://infinitydesign.online/wp-content/uploads/2025/08/laptop.png" alt="">
<!--         <span>Web制作</span> -->
      </button>
      <button class="circle-btn" data-index="1">
        <img src="https://infinitydesign.online/wp-content/uploads/2025/08/digital-business-1.png" alt="">
<!--         <span>LP制作</span> -->
      </button>
      <button class="circle-btn" data-index="2">
        <img src="https://infinitydesign.online/wp-content/uploads/2025/08/social-media.png" alt="">
<!--         <span>UI/UX設計</span> -->
      </button>
      <button class="circle-btn" data-index="3">
        <img src="https://infinitydesign.online/wp-content/uploads/2025/08/share-1.png" alt="">
<!--         <span>広告運用・SEO</span> -->
      </button>
    </div>
  </div>

  <!-- Lottieアニメーションが入る大きな円 -->
  <div class="circle-content">
    <div id="lottie-animation" class="lottie-box2"></div>
  </div>

  <!-- 切り替え対象のサービス説明 -->
  <div class="service-detail-wrapper">
    <div class="service-detail active">
      <h3>Web制作</h3>
      <p>ビジネス成果に直結する戦略的なサイト設計と制作</p>
      <a href="/websitecreation">詳しく見る →</a>
    </div>
    <div class="service-detail">
      <h3>WEBコンサルティング</h3>
      <p>事業成長を加速させる戦略的アドバイス</p>
      <a href="/lp">詳しく見る →</a>
    </div>
    <div class="service-detail">
      <h3>システム・機能開発</h3>
      <p>業務効率化とUX向上に繋がる先進的な機能設計と開発</p>
      <a href="/creative">詳しく見る →</a>
    </div>
    <div class="service-detail">
      <h3>広告運用・SEO</h3>
      <p>戦略的運用と内部改善を両軸サポート</p>
      <a href="/ad">詳しく見る →</a>
    </div>
  </div>
</section>






<section class="works-section-grid">
  <div class="works-left">
    <div class="works-label">WORKS</div>
    <p class="works-description">制作実績を一部ご紹介します。</p>
  </div>

<div class="works-right">
  <div class="swiper works-swiper-mini">
    <div class="swiper-wrapper">
      <?php
      $args = array(
        'post_type' => 'works',
        'posts_per_page' => -1,
      );
      $works_query = new WP_Query($args);

      if ($works_query->have_posts()) :
        $count = 0;
        $slide_open = false;

        while ($works_query->have_posts()) : $works_query->the_post();
		if ($count % 6 === 0) {
            if ($slide_open) {
              echo '</div></div>'; // 前スライドを閉じる
            }
            echo '<div class="swiper-slide"><div class="mini-work-grid">';
            $slide_open = true;
          }

          // カテゴリ取得
          $terms = get_the_terms(get_the_ID(), 'work_category');
          $term_name = '';
          $term_color = 'gray';
          if (!is_wp_error($terms) && !empty($terms)) {
            $term_name = esc_html($terms[0]->name);
            if ($term_name === 'LP制作') {
              $term_color = 'purple';
            } elseif ($term_name === 'MEO対策') {
              $term_color = 'yellow';
            }
          }

          $image = get_field('works_image');
          $link_url = get_field('works_url');
          ?>

          <div class="work-card-mini">
            <div class="thumb">
              <?php if ($image && isset($image['url'])): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
              <?php else: ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/noimage.jpg" alt="no image">
              <?php endif; ?>
            </div>
            <div class="meta">
              <span class="label <?php echo esc_attr($term_color); ?>"><?php echo esc_html($term_name); ?></span>
              <span class="date"><?php echo get_the_date(); ?></span>
            </div>
            <p class="title"><?php the_title(); ?></p>
          </div>

        <?php
        $count++;
        endwhile;

        if ($slide_open) {
          echo '</div></div>'; // 最後のスライド閉じ
        }

        wp_reset_postdata();
      endif;
      ?>
    </div>

    <!-- ナビゲーション -->
   <!-- 矢印ナビゲーション -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  </div>
</div>



</section>




<section class="achievements-section">
  <!-- 背景スライダー：works投稿から画像をランダムで取得 -->
  <!-- 背景：ポリゴンアニメーション -->
  <div class="polygon-background">
    <svg viewBox="0 0 1920 1080" preserveAspectRatio="xMidYMid slice">
      <defs>
        <linearGradient id="polyGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
          <stop offset="0%" style="stop-color:#3B40FF;stop-opacity:0.4" />
          <stop offset="100%" style="stop-color:#8A2BE2;stop-opacity:0.1" />
        </linearGradient>
        <linearGradient id="polyGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" style="stop-color:#00FFE1;stop-opacity:0.3" />
          <stop offset="100%" style="stop-color:#3B40FF;stop-opacity:0.1" />
        </linearGradient>
      </defs>
      <g class="poly-layer-1">
        <polygon points="200,100 800,0 600,600" fill="url(#polyGrad1)" />
        <polygon points="1200,200 1920,0 1500,800" fill="url(#polyGrad2)" />
      </g>
      <g class="poly-layer-2">
        <polygon points="0,800 600,1080 0,1080" fill="url(#polyGrad2)" />
        <polygon points="1000,600 1600,1080 1920,800" fill="url(#polyGrad1)" />
        <circle cx="1000" cy="500" r="100" fill="rgba(255,255,255,0.03)" />
      </g>
      <g class="poly-layer-3">
         <polygon points="800,400 1200,200 1100,600" fill="rgba(255,255,255,0.05)" />
      </g>
    </svg>
  </div>

  <!-- 前面にテキスト -->
  <div class="achievement-overlay">
    <div class="stat-block">
      <p class="label">制作実績</p>
      <p class="number"><span>500</span> 件以上</p>
      <p class="caption">LP・HP・バナー含む</p>
    </div>
    <div class="stat-block">
      <p class="label">お取引様企業</p>
      <p class="number"><span>100</span> 社以上</p>
      <p class="caption">補足説明</p>
    </div>
  </div>
</section>


<section class="marketing-stats">
	<div class="id-glass-bg">
  <span class="blur-circle" style="top: 10%; left: 15%; width: 120px; height: 120px; background: #00ffe1;"></span>
  <span class="blur-circle" style="top: 30%; left: 70%; width: 200px; height: 200px; background: #ff4f4f;"></span>
  <span class="blur-circle" style="top: 60%; left: 40%; width: 90px; height: 90px; background: #8a2be2;"></span>
  <span class="blur-circle" style="top: 20%; left: 50%; width: 60px; height: 60px; background: #00bfff;"></span>
  <span class="blur-circle" style="top: 75%; left: 80%; width: 140px; height: 140px; background: #ff7f50;"></span>
</div>
  <div class="container">
    <div class="stats-text">
    <h2>デジタルマーケティング領域</h2>
<p>
  蓄積されたナレッジと最新のノウハウを駆使し、<br>
  成果創出に向けた導線設計をデータドリブンで最適化します。
</p>
      <a href="https://infinitydesign.online/ad_results/" class="cta-button">マーケティング実績を見る →</a>
    </div>
    <div class="stats-graph">
<!--       <canvas id="pieChart" width="240" height="240"></canvas> -->
<div class="media-circle-container">
<div class="media-rotating-ring">
  <div class="logo" style="top: 0%; left: 50%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/images.png" alt="Google広告">
    <p>Google</p>
  </div>
  <div class="logo" style="top: 15%; left: 85%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/LY.png" alt="Yahoo広告">
    <p>LINEYahoo</p>
  </div>
  <div class="logo" style="top: 35%; left: 98%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/1984164fdc15896bd363c1305ea5ce4c-e1675095875438.webp" alt="Meta広告">
    <p>Meta</p>
  </div>
  <div class="logo" style="top: 65%; left: 98%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/icon_l.jpg" alt="Microsoft">
    <p>MicroSoft</p>
  </div>
  <div class="logo" style="top: 85%; left: 85%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/xtwitter-2.jpg" alt="X">
    <p>X</p>
  </div>
  <div class="logo" style="top: 100%; left: 50%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/tiktok-app-icon-social-media-logo-vector-illustration_277909-404.avif" alt="TikTok">
    <p>TikTok</p>
  </div>
  <div class="logo" style="top: 85%; left: 15%">
    <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/download.png" alt="Smart News">
    <p>Smart News</p>
  </div>
  <div class="logo" style="top: 65%; left: 2%">
    <img src="https://infinitydesign.online/wp-content/uploads/2025/08/unnamed.png" alt="ジモティー">
    <p>ジモティー</p>
  </div>
  <div class="logo" style="top: 35%; left: 2%">
    <img src="https://infinitydesign.online/wp-content/uploads/2025/08/s.webp" alt="グノシー">
    <p>グノシー</p>
  </div>
  <div class="logo" style="top: 15%; left: 15%">
    <img src="https://infinitydesign.online/wp-content/uploads/2025/08/3.png" alt="メルカリ">
    <p>メルカリ</p>
  </div>
  <div class="logo" style="top: -5%; left: 30%">
    <img src="https://infinitydesign.online/wp-content/uploads/2025/08/unnamed-1.png" alt="ABEMA">
    <p>ABEMA</p>
  </div>

</div>

  <div class="center-label">Marketing Medias<br><small>対応可能なメディア</small></div>
</div>

    </div>
  </div>
</section>

<section class="news-section">
  <h2 class="news-title"><span>News</span><br>お知らせ</h2>

  <!-- カテゴリタブ -->
  <div class="news-tabs">
    <button class="active" data-filter="all">最新情報</button>
    <?php
    $terms = get_terms(array(
      'taxonomy' => 'news_category',
      'hide_empty' => false,
    ));
    foreach ($terms as $term) {
      echo '<button data-filter="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</button>';
    }
    ?>
  </div>

  <!-- 投稿一覧 -->
  <div class="news-list">
    <?php
    $args = array(
      'post_type' => 'news',
      'posts_per_page' => 10
    );
    $news_query = new WP_Query($args);
    if ($news_query->have_posts()) :
      while ($news_query->have_posts()) : $news_query->the_post();
        $terms = get_the_terms(get_the_ID(), 'news_category');
        $term = $terms ? $terms[0] : null;
    ?>
      <div class="news-card" data-category="<?php echo esc_attr($term ? $term->slug : ''); ?>">
        <div class="meta">
          <span class="date"><?php echo get_the_date('Y. m. d'); ?></span>
          <?php if ($term): ?>
            <span class="label"><?php echo esc_html($term->name); ?></span>
          <?php endif; ?>
        </div>
        <div class="content">
          <p class="title"><?php the_title(); ?></p>
          <a href="<?php the_permalink(); ?>" class="arrow">→</a>
        </div>
      </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
</section>

<?php get_template_part('template-parts/logo-slider'); ?>

<?php get_footer(); ?>