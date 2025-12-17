<?php
/* Template Name: Service Page */
get_header();
?>

<!-- Hero Section -->
<section class="service-hero-v2">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1 class="hero-title">Service</h1>
    <p class="hero-subtitle">お客様の声に寄り添い、ワンストップで課題を解決</p>
  </div>
</section>

<!-- Introduction Section -->
<section class="service-intro-v2">
  <div class="container">
    <div class="intro-grid">
      <div class="intro-text">
        <h2 class="section-heading">Our Feature</h2>
        <p class="lead-text">
          Infinity Designは、デジタル領域のインテグレーターです。<br>
          企業のビジネス支援として各種サービスを提供するとともに、<br>
          分野ごとにこれらを支える最先端の知識・技術の研究・開発を積極的におこなっています。
        </p>
        <p class="desc-text">
          課題の本質を見極め、正確に戦略設計を行い、<br>
          制作・実行・改善まで伴走するプロフェッショナルサービスを提供します。
        </p>
      </div>
      <div class="intro-visual">
        <dotlottie-wc src="https://lottie.host/8dedf270-27e1-432b-a9bd-7efc0be99358/T50RTd8Z3n.lottie" style="width: 100%; height: auto;" speed="1" autoplay loop></dotlottie-wc>
      </div>
    </div>
  </div>
</section>

<!-- Service List Section -->
<section class="service-list-v2">
  <div class="container">
    <h2 class="section-title-center">Our Service</h2>
    <p class="section-desc-center">Webサイト戦略支援サービス</p>
    
    <div class="service-category">
      <h3 class="category-title">Web Integration</h3>
      <p class="category-desc">Webサイト構築</p>
      <div class="service-grid">
        <a href="/websitecreation/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-web-integration.jpg" alt="Web Integration">
          </div>
          <div class="card-content">
            <h4 class="card-title">Webサイト構築</h4>
            <p class="card-desc">調査・分析から戦略立案、情報設計、デザイン、実装まで、Webサイト構築の全フェーズをワンストップで支援します。</p>
            <span class="card-arrow">View More →</span>
          </div>
        </a>
        <a href="/lp/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-creative.jpg" alt="LP Production">
          </div>
          <div class="card-content">
            <h4 class="card-title">ランディングページ制作</h4>
            <p class="card-desc">コンバージョン獲得に特化したLPを制作。戦略設計から広告連携まで一貫して対応します。</p>
            <span class="card-arrow">View More →</span>
          </div>
        </a>
      </div>
    </div>

    <div class="service-category">
      <h3 class="category-title">Digital Marketing</h3>
      <p class="category-desc">デジタルマーケティング</p>
      <div class="service-grid">
        <a href="/ad/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-marketing.jpg" alt="Ad Operation">
          </div>
          <div class="card-content">
            <h4 class="card-title">広告運用代行</h4>
            <p class="card-desc">Google, Meta, LINEなど、主要プラットフォームでの広告運用を最適化し、ROASを最大化します。</p>
            <span class="card-arrow">View More →</span>
          </div>
        </a>
        <a href="/service/seo" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-consulting.jpg" alt="SEO">
          </div>
          <div class="card-content">
            <h4 class="card-title">SEO対策</h4>
            <p class="card-desc">検索エンジンからの流入を最大化。テクニカルSEOからコンテンツSEOまで包括的にサポートします。</p>
            <span class="card-arrow">View More →</span>
          </div>
        </a>
      </div>
    </div>

    <div class="service-category">
      <h3 class="category-title">Creative & UX</h3>
      <p class="category-desc">クリエイティブ・UX</p>
      <div class="service-grid">
        <a href="/service/creative" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-creative.jpg" alt="Creative Design">
          </div>
          <div class="card-content">
            <h4 class="card-title">クリエイティブ制作</h4>
            <p class="card-desc">バナー、図解、動画素材など、マーケティングに必要なあらゆるクリエイティブを制作します。</p>
            <span class="card-arrow">View More →</span>
          </div>
        </a>
      </div>
    </div>

    <div class="service-category">
      <h3 class="category-title">Consulting</h3>
      <p class="category-desc">コンサルティング</p>
      <div class="service-grid">
        <a href="/service/ga4" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-consulting.jpg" alt="Web Consulting">
          </div>
          <div class="card-content">
            <h4 class="card-title">Webコンサルティング</h4>
            <p class="card-desc">データ分析に基づいた改善提案。GA4設定やKPI設計など、デジタルマーケティングの基盤を構築します。</p>
            <span class="card-arrow">View More →</span>
          </div>
        </a>
      </div>
    </div>

  </div>
</section>

<!-- CTA Section -->
<section class="service-cta">
  <div class="container">
    <div class="cta-inner">
      <h2>Contact</h2>
      <p>Webサイトの構築・リニューアル、運用、マーケティングなど、<br>お気軽にご相談ください。</p>
      <a href="/contact/" class="cta-button">お問い合わせ・ご相談はこちら</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>