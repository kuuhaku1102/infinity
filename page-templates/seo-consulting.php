<?php
/*
Template Name: SEO Consulting Page
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/seo-consulting.css">

<!-- Hero Section -->
<section class="seo-hero">
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-badge">Strategic SEO Consulting</div>
    <h1 class="hero-title">SEO戦略コンサルティング</h1>
    <p class="hero-subtitle">検索エンジン最適化を通じて、持続的なオーガニック流入を実現</p>
    <p class="hero-description">テクニカルSEOからコンテンツ戦略まで、包括的にサポートします</p>
    <div class="hero-cta">
      <a href="/contact" class="btn-primary">無料相談を申し込む</a>
      <a href="#services" class="btn-secondary">サービス詳細を見る</a>
    </div>
  </div>
</section>

<!-- Overview Section -->
<section class="seo-overview">
  <div class="container">
    <div class="overview-grid">
      <div class="overview-text">
        <h2 class="section-title">なぜSEOが重要なのか</h2>
        <p class="section-lead">検索エンジン最適化（SEO）は、デジタルマーケティングにおいて最も費用対効果の高い施策の一つです。適切なSEO戦略により、広告費をかけずに持続的な集客を実現できます。</p>
        <div class="overview-stats">
          <div class="stat-item">
            <div class="stat-number">93%</div>
            <div class="stat-label">オンライン体験は検索から始まる</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">75%</div>
            <div class="stat-label">ユーザーは検索結果の1ページ目しか見ない</div>
          </div>
          <div class="stat-item">
            <div class="stat-number">14.6%</div>
            <div class="stat-label">オーガニック検索の平均CVR</div>
          </div>
        </div>
      </div>
      <div class="overview-image">
        <div class="image-placeholder">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="overview-svg">
            <defs>
              <linearGradient id="chartGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
              </linearGradient>
            </defs>
            <path d="M 50 250 L 100 220 L 150 180 L 200 140 L 250 100 L 300 60 L 350 40" 
                  stroke="url(#chartGrad)" stroke-width="3" fill="none" stroke-linecap="round"/>
            <circle cx="50" cy="250" r="5" fill="#3b82f6"/>
            <circle cx="100" cy="220" r="5" fill="#3b82f6"/>
            <circle cx="150" cy="180" r="5" fill="#3b82f6"/>
            <circle cx="200" cy="140" r="5" fill="#3b82f6"/>
            <circle cx="250" cy="100" r="5" fill="#8b5cf6"/>
            <circle cx="300" cy="60" r="5" fill="#8b5cf6"/>
            <circle cx="350" cy="40" r="5" fill="#8b5cf6"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="seo-services" id="services">
  <div class="container">
    <h2 class="section-title-center">提供サービス</h2>
    <p class="section-subtitle-center">包括的なSEO戦略で、ビジネスの成長を加速させます</p>
    
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
            <line x1="12" y1="22.08" x2="12" y2="12"></line>
          </svg>
        </div>
        <h3 class="service-title">テクニカルSEO</h3>
        <p class="service-description">サイト構造の最適化、ページ速度改善、モバイル対応、構造化データの実装など、検索エンジンがサイトを正しく理解できるよう技術的な基盤を整えます。</p>
        <ul class="service-features">
          <li>サイト構造分析・改善</li>
          <li>ページ速度最適化</li>
          <li>モバイルフレンドリー対応</li>
          <li>構造化データ実装</li>
          <li>クロール最適化</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
          </svg>
        </div>
        <h3 class="service-title">キーワード戦略</h3>
        <p class="service-description">ビジネス目標に基づいた包括的なキーワード調査を実施。検索ボリューム、競合性、コンバージョンポテンシャルを分析し、最適なキーワード戦略を策定します。</p>
        <ul class="service-features">
          <li>キーワード調査・分析</li>
          <li>競合キーワード分析</li>
          <li>検索意図の分類</li>
          <li>ロングテールキーワード戦略</li>
          <li>キーワードマッピング</li>
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
        <h3 class="service-title">コンテンツSEO</h3>
        <p class="service-description">ユーザーと検索エンジンの両方に評価されるコンテンツ戦略を構築。E-E-A-T（経験・専門性・権威性・信頼性）を重視した質の高いコンテンツ制作をサポートします。</p>
        <ul class="service-features">
          <li>コンテンツ戦略立案</li>
          <li>SEOライティング</li>
          <li>既存コンテンツ最適化</li>
          <li>E-E-A-T強化施策</li>
          <li>コンテンツギャップ分析</li>
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
        <h3 class="service-title">リンクビルディング</h3>
        <p class="service-description">質の高い被リンク獲得戦略を展開。ホワイトハットな手法で、ドメインオーソリティを向上させ、検索順位の改善を実現します。</p>
        <ul class="service-features">
          <li>被リンク分析</li>
          <li>リンク獲得戦略立案</li>
          <li>コンテンツマーケティング</li>
          <li>デジタルPR</li>
          <li>リンク品質監視</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
            <polyline points="7 10 12 15 17 10"></polyline>
            <line x1="12" y1="15" x2="12" y2="3"></line>
          </svg>
        </div>
        <h3 class="service-title">ローカルSEO</h3>
        <p class="service-description">地域ビジネスの集客を強化。Googleビジネスプロフィール最適化、ローカルキーワード対策、口コミ管理など、地域検索での上位表示を実現します。</p>
        <ul class="service-features">
          <li>Googleビジネスプロフィール最適化</li>
          <li>ローカルキーワード対策</li>
          <li>口コミ管理・促進</li>
          <li>ローカル被リンク獲得</li>
          <li>NAP情報の統一</li>
        </ul>
      </div>

      <div class="service-card">
        <div class="service-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
          </svg>
        </div>
        <h3 class="service-title">SEO分析・レポーティング</h3>
        <p class="service-description">GA4、Google Search Consoleなどのデータを活用し、SEOパフォーマンスを可視化。定期的なレポートで施策の効果を測定し、継続的な改善を実現します。</p>
        <ul class="service-features">
          <li>GA4・GSC分析</li>
          <li>順位モニタリング</li>
          <li>トラフィック分析</li>
          <li>コンバージョン分析</li>
          <li>月次レポート作成</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="seo-process">
  <div class="container">
    <h2 class="section-title-center">SEOコンサルティングの流れ</h2>
    <p class="section-subtitle-center">体系的なアプローチで、確実な成果を実現します</p>
    
    <div class="process-timeline">
      <div class="process-step">
        <div class="step-number">01</div>
        <div class="step-content">
          <h3 class="step-title">現状分析・ヒアリング</h3>
          <p class="step-description">ビジネス目標、ターゲット顧客、競合状況を詳しくヒアリング。現在のサイトのSEO状態を包括的に分析し、課題と機会を特定します。</p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">02</div>
        <div class="step-content">
          <h3 class="step-title">戦略立案・提案</h3>
          <p class="step-description">分析結果に基づき、具体的なSEO戦略を策定。キーワード戦略、コンテンツ計画、技術的改善項目をまとめた提案書を作成します。</p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">03</div>
        <div class="step-content">
          <h3 class="step-title">施策実行</h3>
          <p class="step-description">承認された戦略に基づき、テクニカルSEO、コンテンツ制作、リンクビルディングなどの施策を実行。優先順位をつけて段階的に実施します。</p>
        </div>
      </div>

      <div class="process-step">
        <div class="step-number">04</div>
        <div class="step-content">
          <h3 class="step-title">効果測定・改善</h3>
          <p class="step-description">施策の効果を定期的に測定し、レポートで報告。データに基づいて戦略を調整し、継続的な改善サイクルを回します。</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Results Section -->
<section class="seo-results">
  <div class="container">
    <h2 class="section-title-center">期待できる成果</h2>
    <p class="section-subtitle-center">適切なSEO戦略により、以下のような成果が期待できます</p>
    
    <div class="results-grid">
      <div class="result-card">
        <div class="result-icon">📈</div>
        <h3 class="result-title">オーガニック流入の増加</h3>
        <p class="result-description">検索順位の向上により、広告費をかけずに継続的な集客を実現</p>
      </div>
      <div class="result-card">
        <div class="result-icon">💰</div>
        <h3 class="result-title">費用対効果の向上</h3>
        <p class="result-description">広告と比較して長期的なROIが高く、持続的な効果が得られます</p>
      </div>
      <div class="result-card">
        <div class="result-icon">🎯</div>
        <h3 class="result-title">質の高いリード獲得</h3>
        <p class="result-description">検索意図に合ったユーザーを集客し、コンバージョン率が向上</p>
      </div>
      <div class="result-card">
        <div class="result-icon">🏆</div>
        <h3 class="result-title">ブランド認知度の向上</h3>
        <p class="result-description">検索結果での露出増加により、ブランドの信頼性が向上</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="seo-cta">
  <div class="container">
    <div class="cta-content">
      <h2 class="cta-title">SEOで、ビジネスを次のステージへ</h2>
      <p class="cta-description">無料相談で、貴社のSEO課題を診断します</p>
      <a href="/contact" class="cta-button">無料相談を申し込む</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
