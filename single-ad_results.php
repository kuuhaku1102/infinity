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

/* SVG背景レイヤー1: 波模様 */
.ad-hero-modern::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgba(255,255,255,0.05)" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,154.7C960,171,1056,181,1152,165.3C1248,149,1344,107,1392,85.3L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
  background-repeat: no-repeat;
  background-position: bottom;
  background-size: cover;
  opacity: 1;
  z-index: 1;
}

/* SVG背景レイヤー2: グラデーションブロブ */
.ad-hero-modern::after {
  content: '';
  position: absolute;
  top: -50px;
  right: -50px;
  width: 400px;
  height: 400px;
  background-image: url('data:image/svg+xml,<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="blobGradient" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" style="stop-color:rgba(255,255,255,0.1);stop-opacity:1" /><stop offset="100%" style="stop-color:rgba(255,255,255,0.05);stop-opacity:1" /></linearGradient></defs><path fill="url(%23blobGradient)" d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.6,90,-16.3,88.5,-0.9C87,14.6,81.4,29.2,73.1,42.2C64.8,55.2,53.8,66.6,40.3,73.4C26.8,80.2,10.8,82.4,-4.3,79.9C-19.4,77.4,-33.5,70.2,-46.2,62.8C-58.9,55.4,-70.2,47.8,-77.8,36.6C-85.4,25.4,-89.3,10.6,-88.1,-3.7C-86.9,-17.9,-80.6,-31.6,-71.8,-43.2C-63,-54.8,-51.7,-64.3,-38.8,-72C-25.9,-79.7,-11.3,-85.6,2.4,-89.5C16.1,-93.4,30.6,-83.6,44.7,-76.4Z" transform="translate(100 100)" /></svg>');
  background-repeat: no-repeat;
  background-size: contain;
  opacity: 0.6;
  z-index: 1;
  animation: float 20s ease-in-out infinite;
}

/* 幾何学模様レイヤー */
.ad-hero-geometric {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
  pointer-events: none;
}

.ad-hero-geometric::before {
  content: '';
  position: absolute;
  top: 20%;
  left: 10%;
  width: 100px;
  height: 100px;
  background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/><circle cx="50" cy="50" r="25" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="2"/></svg>');
  background-size: contain;
  animation: rotate 30s linear infinite;
}

.ad-hero-geometric::after {
  content: '';
  position: absolute;
  bottom: 30%;
  right: 15%;
  width: 80px;
  height: 80px;
  background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><polygon points="50,10 90,90 10,90" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="2"/><polygon points="50,30 70,70 30,70" fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="2"/></svg>');
  background-size: contain;
  animation: rotate 25s linear infinite reverse;
}

/* 抽象的なラインレイヤー */
.ad-hero-lines {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 2;
  pointer-events: none;
  background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="none" stroke="rgba(255,255,255,0.08)" stroke-width="2" d="M0,160 Q360,100 720,160 T1440,160"/><path fill="none" stroke="rgba(255,255,255,0.06)" stroke-width="2" d="M0,200 Q360,140 720,200 T1440,200"/><path fill="none" stroke="rgba(255,255,255,0.04)" stroke-width="2" d="M0,240 Q360,180 720,240 T1440,240"/></svg>');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  opacity: 0.8;
}

/* アニメーション */
@keyframes float {
  0%, 100% {
    transform: translate(0, 0) rotate(0deg);
  }
  25% {
    transform: translate(20px, -20px) rotate(5deg);
  }
  50% {
    transform: translate(-10px, 10px) rotate(-3deg);
  }
  75% {
    transform: translate(15px, 15px) rotate(4deg);
  }
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

.ad-hero-content {
  position: relative;
  z-index: 10;
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
  max-width: 600px;
  width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.15);
  transition: transform 0.3s;
  margin: 0 auto;
  display: block;
}

.ad-creative-image:hover {
  transform: scale(1.02);
}

/* 運用概要セクション */
.ad-overview-content {
  color: #374151;
  line-height: 1.8;
  font-size: 1rem;
}

/* h2スタイル - 大見出し */
.ad-overview-content h2 {
  font-size: 1.75rem;
  font-weight: 700;
  color: #1f2937;
  margin-top: 40px;
  margin-bottom: 20px;
  padding-bottom: 12px;
  border-bottom: 3px solid transparent;
  border-image: linear-gradient(90deg, #667eea 0%, #764ba2 50%, transparent 50%);
  border-image-slice: 1;
  position: relative;
}

.ad-overview-content h2::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: -3px;
  width: 60px;
  height: 3px;
  background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
  border-radius: 2px;
}

/* h3スタイル - 中見出し */
.ad-overview-content h3 {
  font-size: 1.35rem;
  font-weight: 600;
  color: #374151;
  margin-top: 30px;
  margin-bottom: 15px;
  padding-left: 16px;
  border-left: 4px solid #667eea;
  background: linear-gradient(90deg, rgba(102, 126, 234, 0.05) 0%, transparent 100%);
  padding-top: 8px;
  padding-bottom: 8px;
  border-radius: 0 8px 8px 0;
}

/* h4スタイル - 小見出し */
.ad-overview-content h4 {
  font-size: 1.15rem;
  font-weight: 600;
  color: #4b5563;
  margin-top: 25px;
  margin-bottom: 12px;
  padding-left: 12px;
  position: relative;
}

.ad-overview-content h4::before {
  content: '●';
  position: absolute;
  left: 0;
  color: #667eea;
  font-size: 0.8rem;
}

/* 段落スタイル */
.ad-overview-content p {
  margin-bottom: 16px;
  line-height: 1.9;
}

/* 強調テキスト */
.ad-overview-content strong {
  color: #667eea;
  font-weight: 700;
  background: linear-gradient(180deg, transparent 60%, rgba(102, 126, 234, 0.15) 60%);
  padding: 2px 4px;
  border-radius: 2px;
}

/* リストスタイル */
.ad-overview-content ul {
  list-style: none;
  padding-left: 0;
  margin-bottom: 20px;
}

.ad-overview-content ul li {
  padding-left: 28px;
  margin-bottom: 10px;
  position: relative;
  line-height: 1.8;
  transition: transform 0.2s;
}

.ad-overview-content ul li:hover {
  transform: translateX(4px);
}

.ad-overview-content ul li::before {
  content: '▸';
  position: absolute;
  left: 0;
  color: #667eea;
  font-weight: bold;
  font-size: 1.1rem;
  transition: color 0.2s;
}

.ad-overview-content ul li:hover::before {
  color: #764ba2;
}

/* ネストされたリスト */
.ad-overview-content ul ul {
  margin-top: 10px;
  margin-left: 20px;
}

.ad-overview-content ul ul li::before {
  content: '◦';
  font-size: 1.2rem;
}

/* 番号付きリスト */
.ad-overview-content ol {
  counter-reset: item;
  list-style: none;
  padding-left: 0;
  margin-bottom: 20px;
}

.ad-overview-content ol li {
  padding-left: 40px;
  margin-bottom: 12px;
  position: relative;
  line-height: 1.8;
}

.ad-overview-content ol li::before {
  content: counter(item);
  counter-increment: item;
  position: absolute;
  left: 0;
  width: 28px;
  height: 28px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 0.9rem;
}

/* コードブロック風の引用 */
.ad-overview-content blockquote {
  margin: 20px 0;
  padding: 20px 24px;
  background: #f9fafb;
  border-left: 4px solid #667eea;
  border-radius: 0 8px 8px 0;
  color: #4b5563;
  font-style: italic;
}

/* テーブルスタイル */
.ad-overview-content table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  background: white;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.ad-overview-content table th {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 12px 16px;
  text-align: left;
  font-weight: 600;
}

.ad-overview-content table td {
  padding: 12px 16px;
  border-bottom: 1px solid #e5e7eb;
}

.ad-overview-content table tr:last-child td {
  border-bottom: none;
}

.ad-overview-content table tr:hover {
  background: #f9fafb;
}

/* リンクスタイル */
.ad-overview-content a {
  color: #667eea;
  text-decoration: none;
  font-weight: 500;
  border-bottom: 1px solid transparent;
  transition: all 0.3s;
}

.ad-overview-content a:hover {
  color: #764ba2;
  border-bottom-color: #764ba2;
}

/* セクション区切り */
.ad-overview-content hr {
  border: none;
  height: 2px;
  background: linear-gradient(90deg, transparent 0%, #e5e7eb 20%, #e5e7eb 80%, transparent 100%);
  margin: 40px 0;
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
  
  .ad-meta-grid {
    grid-template-columns: 1fr;
  }
  
  /* スマホ表示時の成果指標カードをスマートに */
  .ad-stats-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }
  
  .ad-stat-card {
    padding: 16px;
  }
  
  .ad-stat-icon {
    font-size: 1.5rem;
    margin-bottom: 8px;
  }
  
  .ad-stat-label {
    font-size: 0.75rem;
    margin-bottom: 6px;
  }
  
  .ad-stat-value {
    font-size: 1.3rem;
  }
  
  .ad-stat-unit {
    font-size: 0.7rem;
  }
  
  .ad-card {
    padding: 20px;
  }
  
  /* 広告クリエイティブ画像のスマホ表示 */
  .ad-creative-image {
    max-width: 100%;
  }
}
</style>

<main class="ad-results-modern">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <!-- ヒーローセクション -->
    <section class="ad-hero-modern">
      <!-- SVGレイヤー -->
      <div class="ad-hero-geometric"></div>
      <div class="ad-hero-lines"></div>
      
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
            <div class="ad-stat-value"><?php echo number_format((float)get_field('impressions')); ?></div>
            <div class="ad-stat-unit">回</div>
          </div>
          
          <div class="ad-stat-card">
            <div class="ad-stat-icon">👆</div>
            <div class="ad-stat-label">クリック</div>
            <div class="ad-stat-value"><?php echo number_format((float)get_field('clicks')); ?></div>
            <div class="ad-stat-unit">回</div>
          </div>
          
          <div class="ad-stat-card">
            <div class="ad-stat-icon">✅</div>
            <div class="ad-stat-label">コンバージョン</div>
            <div class="ad-stat-value"><?php echo number_format((float)get_field('conversions')); ?></div>
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
            <div class="ad-stat-value"><?php echo number_format((float)get_field('cost')); ?></div>
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


    </div>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
