<?php get_header(); ?>

<style>
/* モダンな広告詳細ページのスタイル */
.ad-results-modern {
  background: #f8f9fa;
  min-height: 100vh;
  padding-bottom: 80px;
}

/* ヒーローセクション */
.ad-hero-modern {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 80px 20px 60px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.ad-hero-modern::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
  opacity: 0.3;
}

.ad-hero-content {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
}

.ad-hero-title {
  font-size: 3rem;
  font-weight: 700;
  margin-bottom: 20px;
  text-shadow: 0 2px 10px rgba(0,0,0,0.2);
}

.ad-breadcrumb {
  font-size: 0.9rem;
  opacity: 0.9;
  margin-top: 10px;
}

.ad-breadcrumb a {
  color: white;
  text-decoration: none;
  transition: opacity 0.3s;
}

.ad-breadcrumb a:hover {
  opacity: 0.7;
}

.ad-status-badge {
  display: inline-block;
  padding: 8px 20px;
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 600;
  margin-top: 20px;
  background: rgba(255,255,255,0.2);
  backdrop-filter: blur(10px);
}

.ad-status-badge.active {
  background: #10b981;
}

.ad-status-badge.ended {
  background: #6b7280;
}

/* コンテナ */
.ad-container {
  max-width: 1200px;
  margin: -40px auto 0;
  padding: 0 20px;
  position: relative;
  z-index: 2;
}

/* カード共通スタイル */
.ad-card {
  background: white;
  border-radius: 16px;
  padding: 30px;
  margin-bottom: 30px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.05), 0 1px 3px rgba(0,0,0,0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}

.ad-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 20px rgba(0,0,0,0.1), 0 3px 6px rgba(0,0,0,0.05);
}

.ad-card-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 25px;
  color: #1f2937;
  display: flex;
  align-items: center;
  gap: 10px;
}

.ad-card-title::before {
  content: '';
  width: 4px;
  height: 24px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 2px;
}

/* キャンペーン情報グリッド */
.ad-meta-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.ad-meta-item {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 15px;
  background: #f9fafb;
  border-radius: 12px;
  transition: background 0.3s;
}

.ad-meta-item:hover {
  background: #f3f4f6;
}

.ad-meta-icon {
  font-size: 1.5rem;
  flex-shrink: 0;
}

.ad-meta-content {
  flex: 1;
}

.ad-meta-label {
  font-size: 0.85rem;
  color: #6b7280;
  margin-bottom: 4px;
  font-weight: 500;
}

.ad-meta-value {
  font-size: 1rem;
  color: #1f2937;
  font-weight: 600;
}

/* 成果指標グリッド */
.ad-stats-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 20px;
}

.ad-stat-card {
  background: linear-gradient(135deg, #f9fafb 0%, #ffffff 100%);
  border: 2px solid #e5e7eb;
  border-radius: 16px;
  padding: 24px;
  text-align: center;
  transition: all 0.3s;
  position: relative;
  overflow: hidden;
}

.ad-stat-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
  transform: scaleX(0);
  transition: transform 0.3s;
}

.ad-stat-card:hover {
  border-color: #667eea;
  transform: translateY(-4px);
  box-shadow: 0 10px 20px rgba(102, 126, 234, 0.2);
}

.ad-stat-card:hover::before {
  transform: scaleX(1);
}

.ad-stat-icon {
  font-size: 2rem;
  margin-bottom: 12px;
}

.ad-stat-label {
  font-size: 0.85rem;
  color: #6b7280;
  margin-bottom: 8px;
  font-weight: 500;
}

.ad-stat-value {
  font-size: 2rem;
  font-weight: 700;
  color: #1f2937;
  margin-bottom: 4px;
}

.ad-stat-unit {
  font-size: 0.9rem;
  color: #9ca3af;
}

/* 重要指標の強調 */
.ad-stat-card.highlight {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-color: #667eea;
  color: white;
}

.ad-stat-card.highlight .ad-stat-label,
.ad-stat-card.highlight .ad-stat-value,
.ad-stat-card.highlight .ad-stat-unit {
  color: white;
}

/* 広告クリエイティブ画像 */
.ad-creative-section {
  text-align: center;
}

.ad-creative-image {
  max-width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  transition: transform 0.3s;
}

.ad-creative-image:hover {
  transform: scale(1.02);
}

/* 運用概要セクション */
.ad-overview-content {
  color: #374151;
  line-height: 1.8;
}

.ad-overview-content h2 {
  font-size: 1.5rem;
  font-weight: 700;
  color: #1f2937;
  margin-top: 30px;
  margin-bottom: 15px;
}

.ad-overview-content h3 {
  font-size: 1.25rem;
  font-weight: 600;
  color: #374151;
  margin-top: 25px;
  margin-bottom: 12px;
}

.ad-overview-content ul {
  list-style: none;
  padding-left: 0;
}

.ad-overview-content ul li {
  padding-left: 24px;
  margin-bottom: 8px;
  position: relative;
}

.ad-overview-content ul li::before {
  content: '▸';
  position: absolute;
  left: 0;
  color: #667eea;
  font-weight: bold;
}

/* PDFダウンロードボタン */
.ad-pdf-button {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 16px 32px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  text-decoration: none;
  border-radius: 12px;
  font-weight: 600;
  font-size: 1rem;
  transition: all 0.3s;
  box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
}

.ad-pdf-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
}

.ad-pdf-icon {
  font-size: 1.5rem;
}

.ad-no-content {
  text-align: center;
  padding: 40px;
  color: #9ca3af;
  font-style: italic;
}

/* レスポンシブ対応 */
@media (max-width: 768px) {
  .ad-hero-title {
    font-size: 2rem;
  }
  
  .ad-meta-grid,
  .ad-stats-grid {
    grid-template-columns: 1fr;
  }
  
  .ad-stat-value {
    font-size: 1.5rem;
  }
  
  .ad-card {
    padding: 20px;
  }
}
</style>

<main class="ad-results-modern">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- ヒーローセクション -->
    <section class="ad-hero-modern">
      <div class="ad-hero-content">
        <h1 class="ad-hero-title"><?php the_title(); ?></h1>
        <p class="ad-breadcrumb">
          <a href="<?php echo home_url(); ?>">TOPページ</a> ＞ 
          <a href="<?php echo get_post_type_archive_link('ad_results'); ?>">広告実績</a> ＞ 
          <?php the_title(); ?>
        </p>
        <?php 
        $status = get_field('status');
        $status_class = ($status == '実施中') ? 'active' : 'ended';
        ?>
        <span class="ad-status-badge <?php echo $status_class; ?>">
          <?php echo $status ? $status : '終了'; ?>
        </span>
      </div>
    </section>

    <div class="ad-container">
      
      <!-- キャンペーン情報 -->
      <div class="ad-card">
        <h2 class="ad-card-title">キャンペーン情報</h2>
        <div class="ad-meta-grid">
          <div class="ad-meta-item">
            <div class="ad-meta-icon">🎯</div>
            <div class="ad-meta-content">
              <div class="ad-meta-label">キャンペーン名</div>
              <div class="ad-meta-value"><?php the_field('campaign_name'); ?></div>
            </div>
          </div>
          
          <div class="ad-meta-item">
            <div class="ad-meta-icon">🏢</div>
            <div class="ad-meta-content">
              <div class="ad-meta-label">クライアント名</div>
              <div class="ad-meta-value"><?php the_field('client_name'); ?></div>
            </div>
          </div>
          
          <div class="ad-meta-item">
            <div class="ad-meta-icon">🏭</div>
            <div class="ad-meta-content">
              <div class="ad-meta-label">業種</div>
              <div class="ad-meta-value"><?php the_field('industry'); ?></div>
            </div>
          </div>
          
          <div class="ad-meta-item">
            <div class="ad-meta-icon">📱</div>
            <div class="ad-meta-content">
              <div class="ad-meta-label">広告媒体</div>
              <div class="ad-meta-value"><?php echo is_array(get_field('ad_platform')) ? implode(', ', get_field('ad_platform')) : ''; ?></div>
            </div>
          </div>
          
          <div class="ad-meta-item">
            <div class="ad-meta-icon">📅</div>
            <div class="ad-meta-content">
              <div class="ad-meta-label">実施期間</div>
              <div class="ad-meta-value"><?php the_field('start_date'); ?> ～ <?php the_field('end_date'); ?></div>
            </div>
          </div>
        </div>
      </div>

      <!-- 成果指標 -->
      <div class="ad-card">
        <h2 class="ad-card-title">成果指標</h2>
        <div class="ad-stats-grid">
          <div class="ad-stat-card">
            <div class="ad-stat-icon">👁️</div>
            <div class="ad-stat-label">インプレッション</div>
            <div class="ad-stat-value"><?php echo number_format(get_field('impressions')); ?></div>
            <div class="ad-stat-unit">回</div>
          </div>
          
          <div class="ad-stat-card">
            <div class="ad-stat-icon">👆</div>
            <div class="ad-stat-label">クリック</div>
            <div class="ad-stat-value"><?php echo number_format(get_field('clicks')); ?></div>
            <div class="ad-stat-unit">回</div>
          </div>
          
          <div class="ad-stat-card">
            <div class="ad-stat-icon">✅</div>
            <div class="ad-stat-label">コンバージョン</div>
            <div class="ad-stat-value"><?php echo number_format(get_field('conversions')); ?></div>
            <div class="ad-stat-unit">件</div>
          </div>
          
          <div class="ad-stat-card highlight">
            <div class="ad-stat-icon">📊</div>
            <div class="ad-stat-label">CTR</div>
            <div class="ad-stat-value"><?php the_field('ctr'); ?></div>
            <div class="ad-stat-unit">%</div>
          </div>
          
          <div class="ad-stat-card highlight">
            <div class="ad-stat-icon">🎯</div>
            <div class="ad-stat-label">CVR</div>
            <div class="ad-stat-value"><?php the_field('cvr'); ?></div>
            <div class="ad-stat-unit">%</div>
          </div>
          
          <div class="ad-stat-card">
            <div class="ad-stat-icon">💰</div>
            <div class="ad-stat-label">CPC</div>
            <div class="ad-stat-value"><?php the_field('cpc'); ?></div>
            <div class="ad-stat-unit">円</div>
          </div>
          
          <div class="ad-stat-card highlight">
            <div class="ad-stat-icon">💵</div>
            <div class="ad-stat-label">CPA</div>
            <div class="ad-stat-value"><?php the_field('cpa'); ?></div>
            <div class="ad-stat-unit">円</div>
          </div>
          
          <div class="ad-stat-card">
            <div class="ad-stat-icon">💳</div>
            <div class="ad-stat-label">広告費</div>
            <div class="ad-stat-value"><?php echo number_format(get_field('cost')); ?></div>
            <div class="ad-stat-unit">円</div>
          </div>
        </div>
      </div>

      <!-- 広告クリエイティブ画像 -->
      <div class="ad-card ad-creative-section">
        <h2 class="ad-card-title">広告クリエイティブ画像</h2>
        <?php
        $image = get_field('creative_images');
        if (is_array($image) && isset($image['url'])) {
          echo '<img src="' . esc_url($image['url']) . '" alt="広告クリエイティブ画像" class="ad-creative-image blurred-image">';
        } elseif (is_numeric($image)) {
          echo '<img src="' . esc_url(wp_get_attachment_url($image)) . '" alt="広告クリエイティブ画像" class="ad-creative-image blurred-image">';
        } elseif (is_string($image)) {
          echo '<img src="' . esc_url($image) . '" alt="広告クリエイティブ画像" class="ad-creative-image blurred-image">';
        } else {
          echo '<p class="ad-no-content">画像が登録されていません。</p>';
        }
        ?>
      </div>

      <!-- 運用概要・施策内容 -->
      <div class="ad-card">
        <h2 class="ad-card-title">運用概要・施策内容</h2>
        <div class="ad-overview-content">
          <?php the_field('overview'); ?>
        </div>
      </div>

      <!-- レポートPDF -->
      <div class="ad-card" style="text-align: center;">
        <h2 class="ad-card-title">レポートPDF</h2>
        <?php
        $pdf = get_field('result_pdf');
        if ($pdf) {
          echo '<a href="' . esc_url($pdf) . '" target="_blank" rel="noopener" class="ad-pdf-button">';
          echo '<span class="ad-pdf-icon">📄</span>';
          echo '<span>PDFレポートを開く</span>';
          echo '</a>';
        } else {
          echo '<p class="ad-no-content">PDFが登録されていません。</p>';
        }
        ?>
      </div>

    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
