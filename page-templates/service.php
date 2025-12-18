<?php
/* Template Name: Service Page */
get_header();
?>

<!-- Hero Section -->
<section class="service-hero-v2">
  <div class="hero-overlay"></div>
  <div class="container hero-content">
    <h1 class="hero-title">Services</h1>
    <p class="hero-subtitle">ビジネスの成長を加速させる、戦略的デジタルソリューション</p>
  </div>
</section>

<!-- Introduction Section -->
<section class="service-intro-v2">
  <div class="container">
    <div class="intro-grid">
      <div class="intro-text">
        <h2 class="section-heading">Strategic Digital Partner</h2>
        <p class="lead-text">
          Infinity Designは、企業のデジタルトランスフォーメーションを<br>
          戦略的にサポートするビジネスパートナーです。<br>
          最新のテクノロジーと豊富な実績を活かし、<br>
          お客様のビジネス課題を解決します。
        </p>
        <p class="desc-text">
          市場分析から戦略立案、実装、運用改善まで、<br>
          一貫したプロフェッショナルサービスを提供し、<br>
          持続的な成長を実現します。
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
    <h2 class="section-title-center">Our Services</h2>
    <p class="section-desc-center">包括的なデジタルマーケティングソリューション</p>
    
    <div class="service-category">
      <h3 class="category-title">Web Development</h3>
      <p class="category-desc">戦略的Webサイト構築</p>
      <div class="service-grid">
        <a href="/websitecreation/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-web-integration.jpg" alt="Web Development">
          </div>
          <div class="card-content">
            <h4 class="card-title">コーポレートサイト構築</h4>
            <p class="card-desc">ブランド価値を最大化する戦略的なWebサイトを構築。ユーザー体験を重視した設計で、ビジネス目標の達成を支援します。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/lp/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-creative.jpg" alt="Landing Page">
          </div>
          <div class="card-content">
            <h4 class="card-title">ランディングページ制作</h4>
            <p class="card-desc">コンバージョン最適化に特化したLP設計。データドリブンなアプローチで、ROIを最大化します。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
      </div>
    </div>

    <div class="service-category">
      <h3 class="category-title">Digital Marketing</h3>
      <p class="category-desc">データドリブンマーケティング</p>
      <div class="service-grid">
        <a href="/ad/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-marketing.jpg" alt="Digital Advertising">
          </div>
          <div class="card-content">
            <h4 class="card-title">デジタル広告運用</h4>
            <p class="card-desc">Google、Meta、LINE広告など、主要プラットフォームでの広告運用を最適化。データ分析に基づいた戦略的な運用で、確実な成果を実現します。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/service/seo" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-consulting.jpg" alt="SEO Strategy">
          </div>
          <div class="card-content">
            <h4 class="card-title">SEO戦略コンサルティング</h4>
            <p class="card-desc">検索エンジン最適化を通じて、持続的なオーガニック流入を実現。テクニカルSEOからコンテンツ戦略まで、包括的にサポートします。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
      </div>
    </div>

    <div class="service-category">
      <h3 class="category-title">Creative Design</h3>
      <p class="category-desc">ブランド価値を高めるクリエイティブ</p>
      <div class="service-grid">
        <a href="/service/creative" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-creative.jpg" alt="Creative Production">
          </div>
          <div class="card-content">
            <h4 class="card-title">クリエイティブ制作</h4>
            <p class="card-desc">バナー、動画、インフォグラフィックなど、マーケティング施策に必要なあらゆるクリエイティブを制作。ブランドの世界観を表現します。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
      </div>
    </div>

    <div class="service-category">
      <h3 class="category-title">Business Consulting</h3>
      <p class="category-desc">戦略的ビジネスコンサルティング</p>
      <div class="service-grid">
        <a href="/data-analytics" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-consulting.jpg" alt="Analytics Consulting">
          </div>
          <div class="card-content">
            <h4 class="card-title">データ分析コンサルティング</h4>
            <p class="card-desc">GA4導入支援、KPI設計、データ分析レポートなど、データに基づいた意思決定を支援。ビジネスの成長を加速させます。</p>
            <span class="card-arrow">詳細を見る →</span>
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
      <h2>Let's Talk</h2>
      <p>ビジネス課題の解決に向けて、<br>まずはお気軽にご相談ください。</p>
      <a href="/contact/" class="cta-button">無料相談を申し込む</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>

