<?php get_header(); ?>

<main class="single-ad-result">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="hero-section">
      <h1><?php the_title(); ?></h1>
      <p class="breadcrumb">TOPページ ＞ 広告実績 ＞ <?php the_title(); ?></p>
    </section>

    <section class="ad-meta">
      <ul>
        <li><strong>キャンペーン名：</strong> <?php the_field('campaign_name'); ?></li>
        <li><strong>クライアント名：</strong> <?php the_field('client_name'); ?></li>
        <li><strong>業種：</strong> <?php the_field('industry'); ?></li>
        <li><strong>広告媒体：</strong> <?php echo is_array(get_field('ad_platform')) ? implode(', ', get_field('ad_platform')) : ''; ?></li>
        <li><strong>掲載状況：</strong> <?php the_field('status'); ?></li>
        <li><strong>実施期間：</strong> <?php the_field('start_date'); ?> ～ <?php the_field('end_date'); ?></li>
      </ul>
    </section>

    <section class="ad-stats">
      <h2>成果指標</h2>
      <ul>
        <li><strong>インプレッション：</strong> <?php the_field('impressions'); ?> 回</li>
        <li><strong>クリック：</strong> <?php the_field('clicks'); ?> 回</li>
        <li><strong>コンバージョン：</strong> <?php the_field('conversions'); ?> 件</li>
        <li><strong>CTR：</strong> <?php the_field('ctr'); ?> %</li>
        <li><strong>CVR：</strong> <?php the_field('cvr'); ?> %</li>
        <li><strong>CPC：</strong> <?php the_field('cpc'); ?> 円</li>
        <li><strong>CPA：</strong> <?php the_field('cpa'); ?> 円</li>
        <li><strong>広告費：</strong> <?php the_field('cost'); ?> 円</li>
      </ul>
    </section>

    <section class="ad-image">
      <h2>広告クリエイティブ画像</h2>
      <?php
      $image = get_field('creative_images');
      if (is_array($image) && isset($image['url'])) {
        echo '<img src="' . esc_url($image['url']) . '" alt="広告クリエイティブ画像" style="max-width:100%;height:auto;">';
      } elseif (is_numeric($image)) {
        echo '<img src="' . esc_url(wp_get_attachment_url($image)) . '" alt="広告クリエイティブ画像">';
      } elseif (is_string($image)) {
        echo '<img src="' . esc_url($image) . '" alt="広告クリエイティブ画像">';
      } else {
        echo '<p>画像が登録されていません。</p>';
      }
      ?>
    </section>

    <section class="ad-overview">
      <h2>運用概要・施策内容</h2>
      <div><?php the_field('overview'); ?></div>
    </section>

    <section class="ad-pdf">
      <h2>レポートPDF</h2>
      <?php
      $pdf = get_field('result_pdf');
      if ($pdf) {
        echo '<a href="' . esc_url($pdf) . '" target="_blank" rel="noopener">PDFを開く</a>';
      } else {
        echo '<p>PDFが登録されていません。</p>';
      }
      ?>
    </section>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
