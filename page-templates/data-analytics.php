<?php
/*
Template Name: Data Analytics Page
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/data-analytics.css">

<!-- Hero Section -->
<section class="data-hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-badge">Data-Driven Decision Making</div>
    <h1 class="hero-title">データ分析コンサルティング</h1>
    <p class="hero-subtitle">データに基づいた意思決定で、ビジネスの成長を加速させます</p>
    <p class="hero-description">GA4導入支援、KPI設計、データ分析レポートなど、包括的にサポート</p>
    <div class="hero-cta">
      <a href="/contact" class="btn-primary">無料相談を申し込む</a>
      <a href="#services" class="btn-secondary">サービス詳細を見る</a>
    </div>
  </div>
</section>

<!-- Overview Section -->
<section class="data-overview">
  <div class="container">
    <div class="overview-grid">
      <div class="overview-text">
        <h2 class="section-title">なぜデータ分析が重要なのか</h2>
        <p class="section-lead">デジタル時代において、データは最も価値のある資産です。適切なデータ分析により、顧客行動の理解、マーケティング施策の最適化、ビジネス成長の加速が可能になります。</p>
        <div class="overview-benefits">
          <div class="benefit-item">
            <div class="benefit-icon">📊</div>
            <div class="benefit-content">
              <h3 class="benefit-title">客観的な意思決定</h3>
              <p class="benefit-description">勘や経験ではなく、データに基づいた客観的な判断が可能に</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon">🎯</div>
            <div class="benefit-content">
              <h3 class="benefit-title">施策の最適化</h3>
              <p class="benefit-description">効果測定により、何が機能し何が機能しないかを明確化</p>
            </div>
          </div>
          <div class="benefit-item">
            <div class="benefit-icon">💡</div>
            <div class="benefit-content">
              <h3 class="benefit-title">新たな機会の発見</h3>
              <p class="benefit-description">データから隠れたパターンやトレンドを発見し、ビジネス機会を創出</p>
            </div>
          </div>
        </div>
      </div>
      <div class="overview-visual">
        <div class="visual-container">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="data-svg">
            <defs>
              <linearGradient id="barGrad1" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#059669;stop-opacity:1" />
              </linearGradient>
              <linearGradient id="barGrad2" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#2563eb;stop-opacity:1" />
              </linearGradient>
              <linearGradient id="barGrad3" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#8b5cf6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#7c3aed;stop-opacity:1" />
              </linearGradient>
            </defs>
            <!-- Bars -->
            <rect x="50" y="180" width="40" height="70" fill="url(#barGrad1)" rx="4"/>
            <rect x="110" y="140" width="40" height="110" fill="url(#barGrad2)" rx="4"/>
            <rect x="170" y="100" width="40" height="150" fill="url(#barGrad3)" rx="4"/>
            <rect x="230" y="80" width="40" height="170" fill="url(#barGrad1)" rx="4"/>
            <rect x="290" y="50" width="40" height="200" fill="url(#barGrad2)" rx="4"/>
            <!-- Trend Line -->
            <path d="M 70 200 L 130 160 L 190 120 L 250 95 L 310 65" 
                  stroke="#f59e0b" stroke-width="3" fill="none" stroke-linecap="round" stroke-dasharray="5,5"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="data-services" id="services">
  <div class="container">
    <h2 class="section-title-center">提供サービス</h2>
    <p class="section-subtitle-center">データ活用の全プロセスを包括的にサポートします</p>
    
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
            <line x1="12" y1="22.08" x2="12" y2="12"></line>
          </svg>
        </div>
        <h3 class="service-title">GA4導入・移行支援</h3>
        <p class="service-description">Google Analytics 4の導入から設定、カスタマイズまで完全サポート。UAからの移行もスムーズに実施します。</p>
        <ul class="service-features">
          <li>GA4アカウント設定</li>
          <li>イベント・コンバージョン設定</li>
          <li>カスタムディメンション設定</li>
          <li>UAからのデータ移行</li>
          <li>GTM連携設定</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <h3 class="service-title">KPI設計・ダッシュボード構築</h3>
        <p class="service-description">ビジネス目標に基づいた適切なKPIを設計。Looker Studio等でリアルタイムダッシュボードを構築します。</p>
        <ul class="service-features">
          <li>ビジネスKPI設計</li>
          <li>測定指標の選定</li>
          <li>Looker Studioダッシュボード</li>
          <li>リアルタイムレポート</li>
          <li>カスタムレポート作成</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <line x1="12" y1="20" x2="12" y2="10"></line>
            <line x1="18" y1="20" x2="18" y2="4"></line>
            <line x1="6" y1="20" x2="6" y2="16"></line>
          </svg>
        </div>
        <h3 class="service-title">データ分析・インサイト抽出</h3>
        <p class="service-description">蓄積されたデータを深く分析し、ビジネスに活かせる具体的なインサイトを抽出。アクションプランまで提案します。</p>
        <ul class="service-features">
          <li>ユーザー行動分析</li>
          <li>コンバージョンファネル分析</li>
          <li>セグメント分析</li>
          <li>コホート分析</li>
          <li>アトリビューション分析</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
            <polyline points="14 2 14 8 20 8"></polyline>
            <line x1="16" y1="13" x2="8" y2="13"></line>
            <line x1="16" y1="17" x2="8" y2="17"></line>
            <line x1="10" y1="9" x2="8" y2="9"></line>
          </svg>
        </div>
        <h3 class="service-title">定期レポーティング</h3>
        <p class="service-description">月次・週次でのレポート作成と報告会を実施。データの可視化と具体的な改善提案を提供します。</p>
        <ul class="service-features">
          <li>月次分析レポート</li>
          <li>週次サマリーレポート</li>
          <li>KPIトラッキング</li>
          <li>改善提案</li>
          <li>レポート報告会</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <polyline points="12 6 12 12 16 14"></polyline>
          </svg>
        </div>
        <h3 class="service-title">A/Bテスト設計・分析</h3>
        <p class="service-description">科学的なA/Bテストの設計から実施、結果分析まで支援。データに基づいた最適化を実現します。</p>
        <ul class="service-features">
          <li>テスト設計・仮説立案</li>
          <li>サンプルサイズ計算</li>
          <li>テスト実施サポート</li>
          <li>統計的有意性検証</li>
          <li>結果分析・レポート</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
        </div>
        <h3 class="service-title">データ活用トレーニング</h3>
        <p class="service-description">社内でデータ活用できる体制を構築。GA4の使い方からデータ分析の基礎まで、実践的なトレーニングを提供します。</p>
        <ul class="service-features">
          <li>GA4操作トレーニング</li>
          <li>データ分析基礎研修</li>
          <li>レポート作成研修</li>
          <li>ダッシュボード活用研修</li>
          <li>個別コンサルティング</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="data-process">
  <div class="container">
    <h2 class="section-title-center">データ分析コンサルティングの流れ</h2>
    <p class="section-subtitle-center">体系的なアプローチで、データ活用を実現します</p>
    
    <div class="process-timeline">
      <div class="process-step">
        <div class="step-number">01</div>
        <div class="step-content">
          <h3 class="step-title">現状把握・目標設定</h3>
          <p class="step-description">現在のデータ収集状況、分析体制、ビジネス課題を詳しくヒアリング。達成したい目標とKPIを明確に定義します。</p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">02</div>
        <div class="step-content">
          <h3 class="step-title">計測環境の構築</h3>
          <p class="step-description">GA4の導入・設定、GTMの実装、イベント・コンバージョンの設定など、適切なデータ収集環境を構築します。</p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">03</div>
        <div class="step-content">
          <h3 class="step-title">分析・インサイト抽出</h3>
          <p class="step-description">収集したデータを多角的に分析し、ビジネスに活かせる具体的なインサイトを抽出。改善の優先順位を提案します。</p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">04</div>
        <div class="step-content">
          <h3 class="step-title">継続的な改善サイクル</h3>
          <p class="step-description">定期的なレポーティングと改善提案を実施。PDCAサイクルを回し、継続的なビジネス成長を支援します。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Tools Section -->
<section class="data-tools">
  <div class="container">
    <h2 class="section-title-center">活用ツール</h2>
    <p class="section-subtitle-center">最新のデータ分析ツールを駆使して、最適なソリューションを提供します</p>
    
    <div class="tools-grid">
      <div class="tool-card">
        <div class="tool-name">Google Analytics 4</div>
        <p class="tool-description">次世代のアクセス解析ツール。イベントベースの計測で詳細なユーザー行動を把握</p>
      </div>
      <div class="tool-card">
        <div class="tool-name">Google Tag Manager</div>
        <p class="tool-description">タグ管理システム。コードを編集せずに計測タグを柔軟に管理</p>
      </div>
      <div class="tool-card">
        <div class="tool-name">Looker Studio</div>
        <p class="tool-description">データ可視化ツール。リアルタイムダッシュボードで直感的にデータを把握</p>
      </div>
      <div class="tool-card">
        <div class="tool-name">BigQuery</div>
        <p class="tool-description">データウェアハウス。大規模データの高速分析とカスタム分析が可能</p>
      </div>
      <div class="tool-card">
        <div class="tool-name">Search Console</div>
        <p class="tool-description">検索パフォーマンス分析。SEO効果測定と検索流入の最適化</p>
      </div>
      <div class="tool-card">
        <div class="tool-name">Python / R</div>
        <p class="tool-description">データ分析言語。高度な統計分析と機械学習モデルの構築</p>
      </div>
    </div>
  </div>
</section>

<!-- Results Section -->
<section class="data-results">
  <div class="container">
    <h2 class="section-title-center">期待できる成果</h2>
    <p class="section-subtitle-center">データ分析により、以下のような成果が期待できます</p>
    
    <div class="results-grid">
      <div class="result-card">
        <div class="result-number">3倍</div>
        <div class="result-label">コンバージョン率の改善</div>
        <p class="result-description">データに基づいた施策により、平均3倍のCV率向上を実現</p>
      </div>
      <div class="result-card">
        <div class="result-number">50%</div>
        <div class="result-label">マーケティングコスト削減</div>
        <p class="result-description">効果的な施策に集中することで、無駄なコストを削減</p>
      </div>
      <div class="result-card">
        <div class="result-number">2週間</div>
        <div class="result-label">意思決定スピードの向上</div>
        <p class="result-description">リアルタイムダッシュボードで迅速な意思決定が可能に</p>
      </div>
      <div class="result-card">
        <div class="result-number">100%</div>
        <div class="result-label">データドリブン文化の醸成</div>
        <p class="result-description">組織全体でデータに基づいた意思決定が定着</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="data-cta">
  <div class="container">
    <div class="cta-content">
      <h2 class="cta-title">データで、ビジネスの可能性を最大化</h2>
      <p class="cta-description">無料相談で、貴社のデータ活用課題を診断します</p>
      <a href="/contact" class="cta-button">無料相談を申し込む</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
