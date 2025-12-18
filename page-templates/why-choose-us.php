<?php
/*
Template Name: Why Choose Us Page
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/why-choose-us.css">

<!-- Hero Section -->
<section class="why-hero">
  <div class="hero-particles"></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-badge">Why Choose Us</div>
    <h1 class="hero-title">私たちが選ばれる理由</h1>
    <p class="hero-subtitle">Infinity Designが提供する、他にはない価値</p>
  </div>
</section>

<!-- Promise Section -->
<section class="promise-section">
  <div class="container">
    <h2 class="section-title-center">Infinity Designの約束</h2>
    <p class="section-subtitle-center">お客様のビジネスを成功に導くため、私たちはこれらをお約束します</p>
    
    <div class="promise-grid">
      <div class="promise-card" data-aos="fade-up" data-aos-delay="0">
        <div class="promise-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
            <polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline>
            <polyline points="7.5 19.79 7.5 14.6 3 12"></polyline>
            <polyline points="21 12 16.5 14.6 16.5 19.79"></polyline>
            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
            <line x1="12" y1="22.08" x2="12" y2="12"></line>
          </svg>
        </div>
        <h3 class="promise-title">戦略的で納得度の高い提案</h3>
        <p class="promise-description">市場調査、競合分析、データ分析を通じて、お客様のビジネスを最大限に活かす戦略をご提案します。見栄えだけでなく、ビジネス目標に直結するロジカルなアプローチで、具体的な成功のイメージを共有します。</p>
      </div>

      <div class="promise-card" data-aos="fade-up" data-aos-delay="100">
        <div class="promise-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
        </div>
        <h3 class="promise-title">真のビジネスパートナー</h3>
        <p class="promise-description">単なる制作パートナーではなく、ビジネスパートナーとして並走します。お客様のニーズを自分事化し、潜在的な課題を予測。先回りした改善策で、まだ言語化されていない未来の課題も解決します。</p>
      </div>

      <div class="promise-card" data-aos="fade-up" data-aos-delay="200">
        <div class="promise-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
          </svg>
        </div>
        <h3 class="promise-title">安心感のあるコミュニケーション</h3>
        <p class="promise-description">迅速かつ柔軟な対応で、安心感のあるサポート体制を整えます。Web担当初心者の方にも分かりやすい丁寧な説明を心がけ、疑問や不安を取り除きながらスムーズなプロジェクト体験をお届けします。</p>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-aos="fade-up" data-aos-delay="0">
        <div class="stat-number" data-count="100">0</div>
        <div class="stat-suffix">+</div>
        <div class="stat-label">プロジェクト実績</div>
      </div>
      <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
        <div class="stat-number" data-count="98">0</div>
        <div class="stat-suffix">%</div>
        <div class="stat-label">顧客満足度</div>
      </div>
      <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
        <div class="stat-number" data-count="5">0</div>
        <div class="stat-suffix">年</div>
        <div class="stat-label">平均継続年数</div>
      </div>
      <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
        <div class="stat-number" data-count="24">0</div>
        <div class="stat-suffix">時間</div>
        <div class="stat-label">サポート体制</div>
      </div>
    </div>
  </div>
</section>

<!-- Reasons Section -->
<section class="reasons-section">
  <div class="container">
    <h2 class="section-title-center">選ばれる5つの理由</h2>
    <p class="section-subtitle-center">Infinity Designが選ばれ続ける理由をご紹介します</p>
    
    <!-- Reason 1 -->
    <div class="reason-item" data-aos="fade-right">
      <div class="reason-content">
        <div class="reason-number">01</div>
        <h3 class="reason-title">データドリブンな戦略設計</h3>
        <p class="reason-description">高い知識とスキル、豊富な経験を有するスタッフによる、データとマーケティング視点でのご提案を得意としています。型にはまったフレームワークではなく、常にお客様にとって最適な手法・ツールを選択しながら、課題を整理し解決に導きます。Webサイトという枠だけでとどまらず、経営やマーケティング戦略上の問題点を把握し、お客様と同じ目線に立ってビジネス課題を改善していきます。</p>
        <ul class="reason-features">
          <li>市場調査・競合分析</li>
          <li>ユーザー行動分析</li>
          <li>KPI設計・効果測定</li>
          <li>データに基づいた改善提案</li>
        </ul>
      </div>
      <div class="reason-visual">
        <div class="visual-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="reason-svg">
            <defs>
              <linearGradient id="chartGrad1" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
              </linearGradient>
            </defs>
            <rect x="50" y="150" width="60" height="100" fill="url(#chartGrad1)" rx="4" opacity="0.8"/>
            <rect x="130" y="120" width="60" height="130" fill="url(#chartGrad1)" rx="4" opacity="0.9"/>
            <rect x="210" y="80" width="60" height="170" fill="url(#chartGrad1)" rx="4" opacity="1"/>
            <rect x="290" y="50" width="60" height="200" fill="url(#chartGrad1)" rx="4" opacity="0.95"/>
            <path d="M 80 170 L 160 135 L 240 95 L 320 60" stroke="#f59e0b" stroke-width="3" fill="none" stroke-linecap="round"/>
            <circle cx="80" cy="170" r="6" fill="#f59e0b"/>
            <circle cx="160" cy="135" r="6" fill="#f59e0b"/>
            <circle cx="240" cy="95" r="6" fill="#f59e0b"/>
            <circle cx="320" cy="60" r="6" fill="#f59e0b"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Reason 2 -->
    <div class="reason-item reverse" data-aos="fade-left">
      <div class="reason-visual">
        <div class="visual-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="reason-svg">
            <defs>
              <linearGradient id="processGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                <stop offset="50%" style="stop-color:#8b5cf6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#ec4899;stop-opacity:1" />
              </linearGradient>
            </defs>
            <circle cx="80" cy="150" r="40" fill="url(#processGrad)" opacity="0.9"/>
            <circle cx="200" cy="150" r="40" fill="url(#processGrad)" opacity="0.9"/>
            <circle cx="320" cy="150" r="40" fill="url(#processGrad)" opacity="0.9"/>
            <line x1="120" y1="150" x2="160" y2="150" stroke="#8b5cf6" stroke-width="3" stroke-dasharray="5,5"/>
            <line x1="240" y1="150" x2="280" y2="150" stroke="#8b5cf6" stroke-width="3" stroke-dasharray="5,5"/>
            <text x="80" y="155" text-anchor="middle" fill="white" font-size="20" font-weight="bold">1</text>
            <text x="200" y="155" text-anchor="middle" fill="white" font-size="20" font-weight="bold">2</text>
            <text x="320" y="155" text-anchor="middle" fill="white" font-size="20" font-weight="bold">3</text>
          </svg>
        </div>
      </div>
      <div class="reason-content">
        <div class="reason-number">02</div>
        <h3 class="reason-title">企画から運用まで一貫サポート</h3>
        <p class="reason-description">ただ「作るだけ」の制作会社ではありません。作る前の調査分析や施策立案から、作ったあとの効果検証と改善施策の実行まで、非常に広い守備範囲を誇ります。写真撮影、インタビュー、動画制作、アンケート調査など付随業務のご対応も可能です。リニューアルの実施判断から目的を達成するための構築・運用まで総合的にご提案いたします。</p>
        <ul class="reason-features">
          <li>要件定義・戦略立案</li>
          <li>デザイン・開発</li>
          <li>コンテンツ制作</li>
          <li>運用・保守・改善</li>
        </ul>
      </div>
    </div>

    <!-- Reason 3 -->
    <div class="reason-item" data-aos="fade-right">
      <div class="reason-content">
        <div class="reason-number">03</div>
        <h3 class="reason-title">最新技術とパフォーマンス最適化</h3>
        <p class="reason-description">モダンな技術スタックを活用し、高速で安全、SEOに強いWebサイトを構築します。React、Next.js、WordPress等の最新フレームワークから、お客様のニーズに最適な技術を選定。ページ速度、セキュリティ、アクセシビリティなど、あらゆる側面で最高品質を追求します。技術的な専門知識を分かりやすく説明し、お客様が安心して意思決定できるようサポートします。</p>
        <ul class="reason-features">
          <li>モダンなフレームワーク</li>
          <li>高速なページ表示</li>
          <li>SEO最適化</li>
          <li>セキュリティ対策</li>
        </ul>
      </div>
      <div class="reason-visual">
        <div class="visual-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="reason-svg">
            <defs>
              <linearGradient id="techGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#10b981;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#3b82f6;stop-opacity:1" />
              </linearGradient>
            </defs>
            <rect x="50" y="50" width="120" height="80" fill="url(#techGrad)" rx="8" opacity="0.8"/>
            <rect x="230" y="50" width="120" height="80" fill="url(#techGrad)" rx="8" opacity="0.8"/>
            <rect x="50" y="170" width="120" height="80" fill="url(#techGrad)" rx="8" opacity="0.8"/>
            <rect x="230" y="170" width="120" height="80" fill="url(#techGrad)" rx="8" opacity="0.8"/>
            <line x1="170" y1="90" x2="230" y2="90" stroke="#8b5cf6" stroke-width="2"/>
            <line x1="110" y1="130" x2="110" y2="170" stroke="#8b5cf6" stroke-width="2"/>
            <line x1="290" y1="130" x2="290" y2="170" stroke="#8b5cf6" stroke-width="2"/>
          </svg>
        </div>
      </div>
    </div>

    <!-- Reason 4 -->
    <div class="reason-item reverse" data-aos="fade-left">
      <div class="reason-visual">
        <div class="visual-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="reason-svg">
            <defs>
              <linearGradient id="flexGrad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#ec4899;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#8b5cf6;stop-opacity:1" />
              </linearGradient>
            </defs>
            <path d="M 200 50 L 350 150 L 200 250 L 50 150 Z" fill="url(#flexGrad)" opacity="0.8"/>
            <circle cx="200" cy="150" r="50" fill="white" opacity="0.9"/>
            <circle cx="200" cy="150" r="30" fill="url(#flexGrad)"/>
          </svg>
        </div>
      </div>
      <div class="reason-content">
        <div class="reason-number">04</div>
        <h3 class="reason-title">柔軟なカスタマイズ対応</h3>
        <p class="reason-description">お客様のビジネスモデルや業界特性に合わせた、完全オーダーメイドのソリューションを提供します。テンプレートに頼らず、お客様固有の課題や要望に応じて最適な設計を行います。予算や納期に応じた柔軟な提案が可能で、小規模なサイトから大規模なシステムまで幅広く対応。お客様の「こんなこともできますか？」というご要望に、常に前向きにお応えします。</p>
        <ul class="reason-features">
          <li>完全オーダーメイド設計</li>
          <li>業界特化型ソリューション</li>
          <li>予算・納期に応じた提案</li>
          <li>スケーラブルな拡張性</li>
        </ul>
      </div>
    </div>

    <!-- Reason 5 -->
    <div class="reason-item" data-aos="fade-right">
      <div class="reason-content">
        <div class="reason-number">05</div>
        <h3 class="reason-title">透明性の高いプロジェクト管理</h3>
        <p class="reason-description">プロジェクトの進捗状況を常に可視化し、定期的な報告とコミュニケーションで安心感を提供します。スケジュール、予算、品質の全てにおいて透明性を保ち、お客様が常にプロジェクトの状況を把握できる体制を整えています。問題が発生した際も迅速に報告し、解決策を提案。お客様との信頼関係を何よりも大切にし、長期的なパートナーシップを築きます。</p>
        <ul class="reason-features">
          <li>定期的な進捗報告</li>
          <li>リアルタイムな情報共有</li>
          <li>迅速な問題解決</li>
          <li>長期的なサポート体制</li>
        </ul>
      </div>
      <div class="reason-visual">
        <div class="visual-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 300" class="reason-svg">
            <defs>
              <linearGradient id="commGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#10b981;stop-opacity:1" />
              </linearGradient>
            </defs>
            <rect x="50" y="80" width="300" height="40" fill="url(#commGrad)" rx="20" opacity="0.3"/>
            <rect x="50" y="80" width="240" height="40" fill="url(#commGrad)" rx="20" opacity="0.9"/>
            <rect x="50" y="150" width="300" height="40" fill="url(#commGrad)" rx="20" opacity="0.3"/>
            <rect x="50" y="150" width="180" height="40" fill="url(#commGrad)" rx="20" opacity="0.9"/>
            <rect x="50" y="220" width="300" height="40" fill="url(#commGrad)" rx="20" opacity="0.3"/>
            <rect x="50" y="220" width="270" height="40" fill="url(#commGrad)" rx="20" opacity="0.9"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="process-section">
  <div class="container">
    <h2 class="section-title-center">プロジェクトの流れ</h2>
    <p class="section-subtitle-center">お客様のビジネスを成功に導くための、体系的なアプローチ</p>
    
    <div class="process-timeline">
      <div class="process-step" data-aos="fade-up" data-aos-delay="0">
        <div class="step-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
          </svg>
        </div>
        <h3 class="step-title">ヒアリング・分析</h3>
        <p class="step-description">ビジネス目標、課題、ターゲットを詳しくヒアリング。市場調査と競合分析を実施します。</p>
      </div>

      <div class="process-step" data-aos="fade-up" data-aos-delay="100">
        <div class="step-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
            <polyline points="2 17 12 22 22 17"></polyline>
            <polyline points="2 12 12 17 22 12"></polyline>
          </svg>
        </div>
        <h3 class="step-title">戦略立案・提案</h3>
        <p class="step-description">分析結果に基づき、最適な戦略を策定。具体的な施策と見積もりをご提案します。</p>
      </div>

      <div class="process-step" data-aos="fade-up" data-aos-delay="200">
        <div class="step-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="9" y1="9" x2="15" y2="9"></line>
            <line x1="9" y1="15" x2="15" y2="15"></line>
          </svg>
        </div>
        <h3 class="step-title">デザイン・開発</h3>
        <p class="step-description">承認された戦略に基づき、デザインと開発を実施。定期的に進捗を報告します。</p>
      </div>

      <div class="process-step" data-aos="fade-up" data-aos-delay="300">
        <div class="step-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
          </svg>
        </div>
        <h3 class="step-title">公開・運用サポート</h3>
        <p class="step-description">サイト公開後も効果測定と改善提案を継続。長期的な成功をサポートします。</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="why-cta">
  <div class="container">
    <div class="cta-content" data-aos="zoom-in">
      <h2 class="cta-title">あなたのビジネスを、次のステージへ</h2>
      <p class="cta-description">無料相談で、貴社の課題とニーズをお聞かせください</p>
      <a href="/contact" class="cta-button">無料相談を申し込む</a>
    </div>
  </div>
</section>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    easing: 'ease-out',
    once: true,
    offset: 100
  });

  // Counter Animation
  const counters = document.querySelectorAll('.stat-number');
  const speed = 200;

  const runCounter = (counter) => {
    const target = +counter.getAttribute('data-count');
    const count = +counter.innerText;
    const inc = target / speed;

    if (count < target) {
      counter.innerText = Math.ceil(count + inc);
      setTimeout(() => runCounter(counter), 1);
    } else {
      counter.innerText = target;
    }
  };

  const observerOptions = {
    threshold: 0.5,
    rootMargin: '0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counter = entry.target;
        runCounter(counter);
        observer.unobserve(counter);
      }
    });
  }, observerOptions);

  counters.forEach(counter => {
    observer.observe(counter);
  });
</script>

<?php get_footer(); ?>
