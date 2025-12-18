<!-- Service Page Redesign -->
<?php
/* Template Name: Service Page */
get_header();
?>

<!-- Hero Section -->
<section class="service-hero">
  <div class="service-hero-inner container">
    <div class="service-heading">
      <h1>Our Service</h1>
      <p class="sub">私たちのサービス</p>
      <p class="breadcrumb">TOPページ ＞ <span>Our service</span></p>
    </div>
  </div>
</section>

<!-- Introduction Section -->
<section class="service-intro">
  <div class="service-intro-inner container">
    <div class="text">
      <h2>
        デジタルシフトの今だからこそ<br>
        ビジネスを成功に導く6つのソリューション。
      </h2>
      <p>
        課題の本質を見極め、正確に戦略設計を行い、<br>
        制作・実行・改善まで伴走するプロフェッショナルサービスを提供します。
      </p>
    </div>
    <div class="image">

<dotlottie-wc src="https://lottie.host/8dedf270-27e1-432b-a9bd-7efc0be99358/T50RTd8Z3n.lottie" style="width: 100%;height: auto" speed="1" autoplay loop></dotlottie-wc>
    </div>
  </div>
</section>

<!-- Service List Section -->
<section class="service-list-section container">
			<div class="id-glass-bg">
  <span class="blur-circle" style="top: 10%; left: 15%; width: 120px; height: 120px; background: #00ffe1;"></span>
  <span class="blur-circle" style="top: 30%; left: 70%; width: 200px; height: 200px; background: #ff4f4f;"></span>
  <span class="blur-circle" style="top: 60%; left: 40%; width: 90px; height: 90px; background: #8a2be2;"></span>
  <span class="blur-circle" style="top: 20%; left: 50%; width: 60px; height: 60px; background: #00bfff;"></span>
  <span class="blur-circle" style="top: 75%; left: 80%; width: 140px; height: 140px; background: #ff7f50;"></span>
</div>
  <div class="service-list-container">
<?php
$services = [
["title" => "HP制作", "desc" => "SEO構造・更新性・UI/UXを意識した成果重視のWebサイトを構築します。", "url" => "/websitecreation/"],
["title" => "LP制作", "desc" => "コンバージョン特化型LP。戦略・構成・デザイン・広告連携まで一貫対応。", "url" => "/lp/"],
["title" => "クリエイティブ制作", "desc" => "広告バナー・LP・SNS用など多様な用途に応じたビジュアル制作を行います。", "url" => "/service/creative"],
["title" => "広告運用代行", "desc" => "Google, Meta, LINE広告などの運用を通じてPDCAを高速に回します。", "url" => "/ad/"],
["title" => "SEO対策", "desc" => "検索エンジンに適切に評価される構造を整え、順位向上のための改善施策を実施します。", "url" => "/service/seo"],
["title" => "Webコンサルティング", "desc" => "GA4やタグマネ・CVイベント設定を通じてマーケティング基盤を構築。", "url" => "/service/ga4"]
];
?>


    <?php foreach ($services as $service): ?>
    <div class="service-item">
      <div class="service-icon">
        <dotlottie-player src="https://lottie.host/b582d99c-b263-4d27-8f4a-2c5b3d12518b/C5EZQOPDUT.json" background="transparent" speed="1" style="width: 50px; height: 50px;" loop autoplay></dotlottie-player>
      </div>
		 <a href="<?php echo esc_url($service['url']); ?>">
      <div class="service-title"><?php echo esc_html($service['title']); ?></div>
      <div class="service-desc"><?php echo esc_html($service['desc']); ?></div>
			   </a>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php get_footer(); ?>