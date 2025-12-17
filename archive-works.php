<?php get_header(); ?>
<!-- Google Fonts 読み込み -->
<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<section class="works-hero" style="position: relative; background-color: #f0f0f0; overflow: hidden;">
  <div class="works-hero-inner" style="position: relative; z-index: 2;">
    <div class="works-heading"><!-- 表示はSVG内でされるため非表示でOK --></div>
  </div>
  <div class="works-bg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 1;">
    <svg viewBox="0 0 1000 300" preserveAspectRatio="xMidYMid meet"
         xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
      <style>
        .stroke-text { font-family: 'Caveat', cursive; font-size: 200px; fill: none; stroke: #222; stroke-width: 2.5px; stroke-dasharray: 1500; stroke-dashoffset: 1500; animation: draw 2.5s forwards; }
        .fill-text { font-family: 'Caveat', cursive; font-size: 200px; fill: black; opacity: 0; animation: fillIn 0.5s forwards; animation-delay: 2.5s; }
        @keyframes draw { to { stroke-dashoffset: 0; } }
        @keyframes fillIn { to { opacity: 1; } }
      </style>
      <rect width="1000" height="300" fill="#f0f0f0"/>
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" class="stroke-text">Works</text>
      <text x="50%" y="50%" text-anchor="middle" dominant-baseline="middle" class="fill-text">Works</text>
    </svg>
  </div>
</section>

<section class="works-filter-section">
  <div class="id-glass-bg">
    <span class="blur-circle" style="top: 10%; left: 15%; width: 120px; height: 120px; background: #00ffe1;"></span>
    <span class="blur-circle" style="top: 30%; left: 70%; width: 200px; height: 200px; background: #ff4f4f;"></span>
    <span class="blur-circle" style="top: 60%; left: 40%; width: 90px; height: 90px; background: #8a2be2;"></span>
    <span class="blur-circle" style="top: 20%; left: 50%; width: 60px; height: 60px; background: #00bfff;"></span>
    <span class="blur-circle" style="top: 75%; left: 80%; width: 140px; height: 140px; background: #ff7f50;"></span>
  </div>

  <!-- ▼ 既存：カテゴリフィルター（据え置き） -->
  <div class="works-tabs">
    <button class="active" data-filter="all">すべて</button>
    <?php
    $terms = get_terms(array(
      'taxonomy' => 'work_category',
      'hide_empty' => false,
    ));
    foreach ($terms as $term) {
      echo '<button data-filter="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</button>';
    }
    ?>
  </div>

  <?php
  // ★ 業界ドロップダウン生成のための下準備（実績がある業界のみを抽出）
  $site_current = isset($_GET['site_type']) ? sanitize_text_field($_GET['site_type']) : ''; // 将来の拡張用（使わなくてもOK）
  $ind_current  = isset($_GET['industry'])  ? sanitize_text_field($_GET['industry'])  : '';

  // サイトタイプで事前絞り込み（必要なら）。今回は使わない場合でも残しておくと拡張が楽。
  $pre_meta = array();
  if ($site_current) {
    $pre_meta[] = array('key'=>'works_site_type','value'=>$site_current,'compare'=>'=');
  }

  $pre_q = new WP_Query(array(
    'post_type' => 'works',
    'posts_per_page' => -1,
    'meta_query' => $pre_meta
  ));

  $industry_counts = array(); // 実績のある industry key => 件数
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

  // ACFのchoicesからラベルを取得（存在するものだけに限定）
  $industry_choices = array();
  if (function_exists('get_field_object')) {
    $obj = get_field_object('works_industries');
    if ($obj && !empty($obj['choices'])) $industry_choices = $obj['choices'];
  }
  ?>

  <!-- ★ 追加：業界ドロップダウン（既存形を崩さないため最小限のUI） -->
  <div class="works-tabs" style="justify-content:flex-end; gap:8px; margin:8px 0 16px;">
<label for="filter-industry" class="form-label">業界</label>
  <select id="filter-industry" class="custom-select">
      <option value="">すべて</option>
      <?php
      foreach ($industry_counts as $key=>$cnt) {
        if ($cnt <= 0) continue; // 実績0は表示しない
        $label = isset($industry_choices[$key]) ? $industry_choices[$key] : $key;
        $selected = selected($ind_current, $key, false);
        printf('<option value="%s" %s>%s（%d）</option>', esc_attr($key), $selected, esc_html($label), $cnt);
      }
      ?>
    </select>
  </div>

  <!-- ▼ 制作実績カードグリッド（据え置きだが、サーバーサイド絞り込みを追加） -->
  <div class="works-grid">
  <?php
    // ★ サーバーサイドのMeta絞り込み：industry
    $meta_query = array();
    if ($ind_current) {
      $meta_query[] = array(
        'key' => 'works_industries',
        'value' => '"' . $ind_current . '"', // 複数選択はシリアライズ保存
        'compare' => 'LIKE'
      );
    }
    // （必要ならサイトタイプもAND条件で）
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
      while ($query->have_posts()) : $query->the_post();
        $image = get_field('works_image');
        $link  = get_field('works_url');
        $terms = get_the_terms(get_the_ID(), 'work_category');
        $term_class = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->slug : 'other';
  ?>
    <div class="works-card" data-category="<?php echo esc_attr($term_class); ?>">
      <a href="<?php the_permalink(); ?>">
        <div class="works-thumb">
          <?php if (!is_wp_error($image)) : ?>
            <?php if (is_array($image) && isset($image['url'])): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php the_title_attribute(); ?>">
            <?php elseif (is_string($image)): ?>
              <img src="<?php echo esc_url($image); ?>" alt="<?php the_title_attribute(); ?>">
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/noimage.jpg" alt="no image">
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <div class="works-content">
          <div class="works-meta">
            <span class="label"><?php echo esc_html($term_class); ?></span>
            <span class="date"><?php echo get_the_date(); ?></span>
          </div>
          <p class="title"><?php the_title(); ?></p>
        </div>
      </a>
    </div>
  <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>

  <!-- More View ボタン（据え置き） -->
  <div class="more-button-container">
    <button class="more-button">More View <span>▼</span></button>
  </div>
</section>

<script>
  // ★ 業界ドロップダウン変更時に URL パラメータを書き換えて遷移（形は維持）
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
</script>

<?php get_footer(); ?>
