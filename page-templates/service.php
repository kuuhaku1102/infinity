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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-hero.png" alt="Strategic Digital Partner" style="width: 100%; height: auto; border-radius: 20px; box-shadow: 0 10px 40px rgba(102, 126, 234, 0.2);">
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/corporate-site-service.png?v=1" alt="Web Development">
          </div>
          <div class="card-content">
            <h4 class="card-title">コーポレートサイト構築</h4>
            <p class="card-desc">ブランド価値を最大化する戦略的なWebサイトを構築。ユーザー体験を重視した設計で、ビジネス目標の達成を支援します。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/lp/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing-page-service.png?v=1" alt="Landing Page">
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
        <a href="/service/listing-ad/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/listing-ad-service.png" alt="Listing Advertising">
          </div>
          <div class="card-content">
            <h4 class="card-title">リスティング広告運用</h4>
            <p class="card-desc">Google広告・Yahoo!広告の運用を特に強みとする広告代理店。検索連動型広告で購買意欲の高いユーザーに効果的にアプローチします。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/service/sns-ad/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns-ad-service.png" alt="SNS Advertising">
          </div>
          <div class="card-content">
            <h4 class="card-title">SNS広告運用</h4>
            <p class="card-desc">Instagram、Facebook、TikTok、LINE広告など、主要SNSプラットフォームでの広告運用を最適化。ターゲット層に効果的にリーチします。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/service/display-ad/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/display-ad-service.png" alt="Display Advertising">
          </div>
          <div class="card-content">
            <h4 class="card-title">ディスプレイ広告運用</h4>
            <p class="card-desc">Googleディスプレイネットワーク（GDN）やYahoo!ディスプレイ広告（YDA）で、潜在層へのアプローチとブランド認知を拡大します。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/service/video-ad/" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-ad-service.png" alt="Video Advertising">
          </div>
          <div class="card-content">
            <h4 class="card-title">動画広告運用</h4>
            <p class="card-desc">YouTube広告を中心に、動画コンテンツでビジュアル訴求。ブランドストーリーを効果的に伝え、エンゲージメントを高めます。</p>
            <span class="card-arrow">詳細を見る →</span>
          </div>
        </a>
        <a href="/service/seo" class="service-card">
          <div class="card-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seo-service.png" alt="SEO Strategy">
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/creative-service.png" alt="Creative Production">
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/data-analytics-service.png" alt="Analytics Consulting">
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

