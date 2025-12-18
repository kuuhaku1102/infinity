<?php

/* Template Name: websitecreation */

get_header();

?>

<section class="infinity-section">

  <div class="infinity-container">



    <!-- メインビジュアル（ダミー画像） -->

<svg viewBox="0 0 800 240" xmlns="http://www.w3.org/2000/svg">

  <style>

    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap');



    text {

      font-family: 'Dancing Script', cursive;

      font-size: 68px;

      text-anchor: middle;

    }



    .stroke {
      fill: none;
      stroke: #667eea;
      stroke-width: 3;
      stroke-dasharray: 2000;
      stroke-dashoffset: 2000;
      animation: draw 2s ease-out forwards;
    }

    .fill {
      fill: url(#gradient);
      opacity: 0;
      animation: fillIn 1.2s ease-out forwards;
      animation-delay: 2s;
    }



    .line2-stroke {

      animation-delay: 1s;

    }



    .line2-fill {

      animation-delay: 3s;

    }



    @keyframes draw {

      to {

        stroke-dashoffset: 0;

      }

    }



    @keyframes fillIn {

      to {

        opacity: 1;

      }

    }

  </style>

  <!-- グラデーション定義 -->
  <defs>
    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
    </linearGradient>
  </defs>

  <!-- 1行目 -->

  <text x="50%" y="90" class="stroke">WEBSITE</text>

  <text x="50%" y="90" class="fill">WEBSITE</text>



  <!-- 2行目 -->

  <text x="50%" y="180" class="stroke line2-stroke">CREATION</text>

  <text x="50%" y="180" class="fill line2-fill">CREATION</text>

</svg>









    <div class="infinity-title">ビジネスの成長を加速させる、戦略的Webサイト構築</div>

	  

    <div class="infinity-lead">

      Infinity Designは、<span class="infinity-highlight">調査・分析から戦略立案、情報設計、デザイン、実装まで</span>、Webサイト構築の全フェーズをワンストップで支援します。<br>

      単なる「見た目の良いサイト」ではなく、<b>ビジネス成果に直結する戦略的Webサイト</b>を構築し、貴社の成長を加速させます。

    </div>



    <h3>Infinity Designの強み <span class="infinity-badge">選ばれる理由</span></h3>

	  <section class="infinity-cards">

		  <div class="infinity-card">

  <div id="lottie-challenge"><dotlottie-wc src="https://lottie.host/ec8ae6ee-c182-434e-904c-4cbef679c30c/PB4HHGktSy.lottie" class="infinity-card-img" speed="1" autoplay loop></dotlottie-wc></div>

  <div class="infinity-card-title">戦略設計力</div>

  <ul>

    <li>ビジネス目標から逆算した情報設計</li>

    <li>ユーザー行動分析に基づく導線設計 <span class="infinity-badge">成果にコミット</span></li>

  </ul>

</div>

<div class="infinity-card">

  <div id="lottie-expert-team">

<dotlottie-wc src="https://lottie.host/27ac0dc0-b220-48be-8dd8-8d3e5dc5327f/YNiourUvgW.lottie" class="infinity-card-img" speed="1" autoplay loop></dotlottie-wc></div>

  <div class="infinity-card-title">デザイン × UX</div>

  <ul>

    <li>ブランドイメージを体現する美しいデザイン</li>

    <li>直感的で使いやすいユーザー体験 <span class="infinity-badge">UI/UX最適化</span></li>

  </ul>

</div>



<div class="infinity-card">

	  <div id="lottie-expert-team">

<dotlottie-wc src="https://lottie.host/02bff638-490b-450e-899b-46d7140d4cd6/kGidmzFAhc.lottie" speed="1" autoplay loop></dotlottie-wc></div>

  <div class="infinity-card-title">技術力</div>

  <ul>

    <li>最新技術を活用した高度な機能実装</li>

    <li>SEO・パフォーマンス最適化を標準実装 <span class="infinity-badge">高品質コーディング</span></li>

  </ul>

</div>



      <div class="infinity-card">

 <div id="lottie-expert-team">

<dotlottie-wc src="https://lottie.host/241fe00a-c538-4822-b807-313bca560da6/fQJCe6rS42.lottie" speed="1" autoplay loop></dotlottie-wc></div>

        <div class="infinity-card-title">継続的サポート</div>

        <ul>

          <li>公開後も分析・改善提案で成長を支援</li>

          <li>3ヶ月間の無償保守で安心運用 <span class="infinity-badge">伴走型支援</span></li>

        </ul>

      </div>

		  	  </section>

<!-- LP制作実績400件以上・次世代型LP制作セクション -->
<section class="lp-performance-section">
  <div class="infinity-container">
    <h3 class="lp-section-title">
      <dotlottie-wc src="https://lottie.host/f56e0c58-28b8-46d8-9412-b7cb6f0e1e52/42fD9PexxW.lottie" 
        style="width: 60px; height: 60px; display: inline-block; vertical-align: middle; margin-right: 12px;" 
        speed="1" autoplay loop></dotlottie-wc>
      LP制作実績400件以上。「機能」で売る、次世代型LP制作
    </h3>
    <p class="lp-section-subtitle">
      見栄えだけで終わらせない、成果を最大化する「機能性LP」。<br>
      CVRを継続的に押し上げる仕組みを実装します。
    </p>

    <!-- 3つの特徴カード -->
    <div class="lp-feature-cards">
      <div class="lp-feature-card">
        <div class="lp-feature-icon">
          <i class="fas fa-brain"></i>
        </div>
        <h4 class="lp-feature-title">徹底した心理導線設計</h4>
        <ul class="lp-feature-list">
          <li>ファーストビューでの離脱を防ぐ訴求検証</li>
          <li>意思決定トリガーとなるコンテンツ配置</li>
          <li>社会的証明・FAQの最適化配置</li>
        </ul>
      </div>

      <div class="lp-feature-card">
        <div class="lp-feature-icon">
          <i class="fas fa-mobile-alt"></i>
        </div>
        <h4 class="lp-feature-title">スマホファーストUI/UX</h4>
        <ul class="lp-feature-list">
          <li>表示速度最適化・コアウェブバイタル対応</li>
          <li>指の可動域を考慮したタップ優先レイアウト</li>
          <li>入力ストレスを軽減するスライドフォーム</li>
        </ul>
      </div>

      <div class="lp-feature-card">
        <div class="lp-feature-icon">
          <i class="fas fa-chart-line"></i>
        </div>
        <h4 class="lp-feature-title">データで改善できる構造</h4>
        <ul class="lp-feature-list">
          <li>A/Bテスト前提の設計・LPO対応</li>
          <li>GA4・Clarity・Lookerで数値を可視化</li>
          <li>広告連携による継続的な最適化</li>
        </ul>
      </div>
    </div>

    <!-- 実績数値 -->
    <div class="lp-stats-row">
      <div class="lp-stat-card">
        <div class="lp-stat-value">+62<span class="lp-stat-unit">%</span></div>
        <div class="lp-stat-label">直近CVR中央値</div>
      </div>
      <div class="lp-stat-card">
        <div class="lp-stat-value">2.8<span class="lp-stat-unit">倍</span></div>
        <div class="lp-stat-label">最高CVR改善率<br><small>※機能性LP導入後</small></div>
      </div>
      <div class="lp-stat-card">
        <div class="lp-stat-value">2-3<span class="lp-stat-unit">週間</span></div>
        <div class="lp-stat-label">最短納期<br><small>※案件により変動</small></div>
      </div>
    </div>

    <!-- 専門家チーム -->
    <div class="lp-team-section">
      <h4 class="lp-team-title">
        <i class="fas fa-users" style="margin-right: 8px; color: #667eea;"></i>
        専門家構成チーム
      </h4>
      <div class="lp-team-row">
        <div class="lp-team-member">
          <i class="fas fa-bullhorn"></i>
          <span>マーケター</span>
        </div>
        <div class="lp-team-cross">×</div>
        <div class="lp-team-member">
          <i class="fas fa-palette"></i>
          <span>デザイナー</span>
        </div>
        <div class="lp-team-cross">×</div>
        <div class="lp-team-member">
          <i class="fas fa-code"></i>
          <span>専門エンジニア</span>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 成果に直結する「高機能LP」ラインナップセクション -->
<section class="lp-lineup-section">
  <div class="infinity-container">
    <h3>成果に直結する「高機能LP」ラインナップ <span class="infinity-badge">CVR 1.3〜2.8倍</span></h3>
    <p class="lp-lineup-subtitle">
      一般的な制作会社では難しいシステム連携も、技術力で実現。<br>
      ビジネス課題を解決する5つの特殊機能。
    </p>

    <div class="lp-lineup-cards">
      <!-- 予約機能付きLP -->
      <div class="lp-lineup-card">
        <div class="lp-lineup-icon">
          <i class="fas fa-calendar-check"></i>
        </div>
        <h4 class="lp-lineup-title">予約機能付きLP</h4>
        <div class="lp-lineup-badge">クリニック・サロン</div>
        <ul class="lp-lineup-features">
          <li>LP内で予約完結・Googleカレンダー/LINE自動連携</li>
          <li>自動リマインド配信でキャンセル防止</li>
        </ul>
        <div class="lp-lineup-effect">
          <i class="fas fa-arrow-up"></i> 機会損失ゼロ・来院率向上
        </div>
      </div>

      <!-- シミュレーションLP -->
      <div class="lp-lineup-card">
        <div class="lp-lineup-icon">
          <i class="fas fa-calculator"></i>
        </div>
        <h4 class="lp-lineup-title">シミュレーションLP</h4>
        <div class="lp-lineup-badge">SaaS・金融・リフォーム</div>
        <ul class="lp-lineup-features">
          <li>見積自動計算・料金試算機能の実装</li>
          <li>結果に応じたCTA（オファー）の出し分け</li>
        </ul>
        <div class="lp-lineup-effect">
          <i class="fas fa-arrow-down"></i> 検討ハードル低減・高確度リード獲得
        </div>
      </div>

      <!-- スライドフォームLP -->
      <div class="lp-lineup-card">
        <div class="lp-lineup-icon">
          <i class="fas fa-sliders-h"></i>
        </div>
        <h4 class="lp-lineup-title">スライドフォームLP</h4>
        <div class="lp-lineup-badge">D2C・人材・教育</div>
        <ul class="lp-lineup-features">
          <li>一問一答形式の横型スライドUI</li>
          <li>ゲーム感覚で回答でき、入力負担を最小化</li>
        </ul>
        <div class="lp-lineup-effect">
          <i class="fas fa-arrow-up"></i> フォーム離脱防止・完了率UP
        </div>
      </div>

      <!-- 診断・アンケートLP -->
      <div class="lp-lineup-card">
        <div class="lp-lineup-icon">
          <i class="fas fa-tasks"></i>
        </div>
        <h4 class="lp-lineup-title">診断・アンケートLP</h4>
        <div class="lp-lineup-badge">幅広い業種</div>
        <ul class="lp-lineup-features">
          <li>回答結果でコンテンツ分岐・オファー最適化</li>
          <li>ユーザーごとにパーソナライズされた提案</li>
        </ul>
        <div class="lp-lineup-effect">
          <i class="fas fa-bullseye"></i> One to One訴求でCVR向上
        </div>
      </div>

      <!-- KW反応型LP -->
      <div class="lp-lineup-card">
        <div class="lp-lineup-icon">
          <i class="fas fa-search"></i>
        </div>
        <h4 class="lp-lineup-title">KW反応型LP</h4>
        <div class="lp-lineup-badge">広告運用向け</div>
        <ul class="lp-lineup-features">
          <li>検索キーワードに応じて見出し・本文自動変化</li>
          <li>ユーザーの検索意図に完全マッチさせる</li>
        </ul>
        <div class="lp-lineup-effect">
          <i class="fas fa-star"></i> 品質スコア向上・CTR改善
        </div>
      </div>
    </div>

    <!-- 技術基盤・対応業種 -->
    <div class="lp-lineup-footer">
      <div class="lp-lineup-tech">
        <h5><i class="fas fa-shield-alt"></i> 技術基盤（専門エンジニア監修）</h5>
        <p>API・CRM・決済連携 / 計測タグ自動連携 / セキュリティ対策</p>
      </div>
      <div class="lp-lineup-industries">
        <h5><i class="fas fa-building"></i> 対応業種</h5>
        <div class="lp-industry-tags">
          <span class="lp-industry-tag">美容・医療</span>
          <span class="lp-industry-tag">SaaS・IT</span>
          <span class="lp-industry-tag">EC・D2C</span>
          <span class="lp-industry-tag">不動産</span>
          <span class="lp-industry-tag">士業</span>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>



    

	<section class="feature">

		<h3>Infinity Designが提供する価値</h3>

<div class="infinity-feature-row">

  <!-- 左：Lottieアニメ -->

  <div class="infinity-feature-left">

<dotlottie-wc src="https://lottie.host/f56e0c58-28b8-46d8-9412-b7cb6f0e1e52/42fD9PexxW.lottie" class="lottie-large" speed="1" autoplay loop></dotlottie-wc>

  </div>



  <!-- 右：テキストとリスト -->

<div class="infinity-feature-grid">

  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/1c7d9784-1ce6-4abd-8bce-8cdd325e7295/uEzEy9rfCW.lottie" style="width: 200px;height: 200px" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>ビジネス成果へのコミットメント</b>

      <ul class="infinity-list">

        <li><b>目標設定:</b> KPI設計から成果測定まで一貫支援</li>

        <li><b>ROI重視:</b> 投資対効果を最大化する戦略設計</li>

      </ul>

    </div>

  </div>



  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/5cfced01-3dde-4069-ba7b-adcc9ca0b47e/mSJWLMxcMO.lottie" style="width: 200px;height: 200px" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>ワンストップ対応</b>

      <ul class="infinity-list">

        <li><b>全フェーズ対応:</b> 戦略立案から運用まで一貫サポート</li>

        <li><b>スピード納品:</b> 最短2週間から対応可能</li>

      </ul>

    </div>

  </div>



  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/8a2d3228-71f7-44b2-9efb-7260e301a454/VhdepkfiRJ.lottie" style="width: 200px;height: 200px" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>最新技術の活用</b>

      <ul class="infinity-list">

        <li><b>先進機能:</b> AI・チャットボット・予約システムなど</li>

        <li><b>拡張性:</b> ビジネス成長に合わせた柔軟な拡張</li>

      </ul>

    </div>

  </div>



  <div class="infinity-feature-item">

    <div class="feature-img">

<dotlottie-wc src="https://lottie.host/3aad48c1-8136-4bbc-9c84-09d02db64e30/v8WeEd6Trr.lottie" style="width: 200px;height: 200px" speed="1" autoplay loop></dotlottie-wc>

    </div>

    <div class="feature-text">

      <b>データドリブンな改善</b>

      <ul class="infinity-list">

        <li><b>継続分析:</b> アクセス解析・ユーザー行動分析</li>

        <li><b>改善提案:</b> データに基づく具体的な施策提案</li>

      </ul>

    </div>

  </div>

</div>



</div>

</section>



    <h3>Webサイト構築サービス <span class="infinity-badge">全フェーズ対応</span></h3>

    <div class="infinity-cards2">

      <div class="infinity-card2">

<dotlottie-wc src="https://lottie.host/7ba99a35-9b1c-4722-a58b-c99bae2c700e/3rNQkNN5hH.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>

        <div class="infinity-card2-title">調査・分析</div>

        <ul>

          <li>市場調査・競合分析で現状を正確に把握</li>

          <li>ユーザーインサイトの抽出と課題の明確化</li>

          <li>データに基づく戦略的方向性の策定</li>

        </ul>

      </div>

      <div class="infinity-card2">

<dotlottie-wc src="https://lottie.host/ebd155ff-55c4-41fd-8abe-7c9d219dc887/atJFFnF5NM.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>

        <div class="infinity-card2-title">戦略立案</div>

        <ul>

          <li>ビジネス目標とWebサイト目標の整合</li>

          <li>ターゲットユーザーの明確化とペルソナ設計</li>

          <li>KPI設計と成果測定の仕組み構築</li>

        </ul>

      </div>

      <div class="infinity-card2">

    

<dotlottie-wc src="https://lottie.host/498ebcae-06fc-4e14-a55e-39ca3cba28c3/LQMZMbNPLA.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>

        <div class="infinity-card2-title">情報設計</div>

        <ul>

          <li>サイト構造・ナビゲーション設計</li>

          <li>ユーザー導線の最適化とコンバージョン設計</li>

          <li>コンテンツ企画とメッセージ設計</li>

        </ul>

      </div>

      <div class="infinity-card2">

<dotlottie-wc src="https://lottie.host/a8f93ab4-f517-4e6b-8b17-ca8bb0f3d5a1/BxYdApcpws.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>

        <div class="infinity-card2-title">デザイン制作</div>

        <ul>

          <li>ブランドアイデンティティを体現するビジュアルデザイン</li>

          <li>直感的で使いやすいUI/UX設計</li>

          <li>レスポンシブ対応で全デバイス最適化</li>

        </ul>

      </div>

      <div class="infinity-card2">

<dotlottie-wc src="https://lottie.host/5d2d9eff-142b-4668-89af-6b521bead4dc/sKeHL1CgTq.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>

        <div class="infinity-card2-title">実装・開発</div>

        <ul>

          <li>高品質なコーディングとSEO内部対策</li>

          <li>CMS構築・API連携・システム開発</li>

          <li>パフォーマンス最適化とセキュリティ対策</li>

        </ul>

      </div>

      <div class="infinity-card2">

<dotlottie-wc src="https://lottie.host/00a62431-4afb-465d-81f0-0b2ddb013c95/OZC58GKVSt.lottie" style="width: 300px;height: 300px" speed="1" autoplay loop></dotlottie-wc>

        <div class="infinity-card2-title">運用・改善</div>

        <ul>

          <li>アクセス解析・ユーザー行動分析</li>

          <li>データに基づく改善提案と実装</li>

          <li>コンテンツ更新・SEO対策の継続支援</li>

        </ul>

      </div>

    </div>

<section class="zisseki">

    <h3>制作実績・成果事例</h3>

<div class="infinity-feature-row">

  <div class="infinity-feature-text">

    <b>500件以上</b>のWebサイト構築実績。<br>

    医療・不動産・製造業・サービス業など、<br>

    幅広い業種で成果を実現しています。

  </div>

  <div class="infinity-feature-lottie">

    <dotlottie-wc 

      src="https://lottie.host/f56e0c58-28b8-46d8-9412-b7cb6f0e1e52/42fD9PexxW.lottie" 

      style="width: 300px; height: 300px" 

      speed="1" autoplay loop>

    </dotlottie-wc>

  </div>

</div>



<ul class="infinity-list">

  <div class="works-grid">

    <?php

    $args = array(

      'post_type' => 'works',

      'posts_per_page' => -1,

      'tax_query' => array(

        array(

          'taxonomy' => 'work_category',

          'field'    => 'slug',

          'terms'    => 'hp-seisaku'

        ),

      ),

    );



    $hp_works_query = new WP_Query($args);

    $count = 0;



    if ($hp_works_query->have_posts()) :

      while ($hp_works_query->have_posts()) : $hp_works_query->the_post();

        $custom_image = get_field('works_image');

        $image_url = is_array($custom_image) ? $custom_image['sizes']['medium'] : $custom_image;

        $count++;

        ?>

        <div class="works-item<?php echo ($count > 3) ? ' hidden' : ''; ?>">

          <div class="works-image">

            <?php if ($image_url) : ?>

              <a href="<?php the_permalink(); ?>">

                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>">

              </a>

            <?php endif; ?>

          </div>

          <div class="works-content">

            <h4 class="works-title"><?php the_title(); ?></h4>

            <div class="works-link">

              <a href="<?php the_permalink(); ?>">詳しく見る</a>

            </div>

          </div>

        </div>

        <?php

      endwhile;

      wp_reset_postdata();

    else :

      echo '<p>「HP制作」カテゴリの制作実績はまだありません。</p>';

    endif;

    ?>

  </div>

</ul>



<?php if ($count > 3) : ?>

  <div class="works-more-wrap">

    <button class="works-more-btn">もっと見る</button>

  </div>

<?php endif; ?>




</div>

		</ul>



		</section>



<section class="infinity-flow-section">

  <h3 class="infinity-flow-heading">

    プロジェクトの進め方 <span class="infinity-badge">6つのステップ</span>

  </h3>

  <div class="infinity-flow">

    <!-- 各STEPカード -->

    <div class="infinity-flow-step">

      <dotlottie-wc src="https://lottie.host/7ba99a35-9b1c-4722-a58b-c99bae2c700e/3rNQkNN5hH.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>

      <strong>STEP 1. ヒアリング・調査分析</strong>

      <p>ビジネス課題・目標を深掘りし、市場・競合・ユーザーを分析（1〜2週間）</p>

    </div>

    <div class="infinity-flow-step">

      <dotlottie-wc src="https://lottie.host/ebd155ff-55c4-41fd-8abe-7c9d219dc887/atJFFnF5NM.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>

      <strong>STEP 2. 戦略立案・情報設計</strong>

      <p>Webサイト戦略を策定し、サイト構造・導線・コンテンツを設計（1〜2週間）</p>

    </div>

    <div class="infinity-flow-step">

      <dotlottie-wc src="https://lottie.host/a8f93ab4-f517-4e6b-8b17-ca8bb0f3d5a1/BxYdApcpws.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>

      <strong>STEP 3. デザイン制作</strong>

      <p>ブランドイメージを体現し、ユーザー体験を最適化したデザインを制作（2〜3週間）</p>

    </div>

    <div class="infinity-flow-step">

      <dotlottie-wc src="https://lottie.host/5d2d9eff-142b-4668-89af-6b521bead4dc/sKeHL1CgTq.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>

      <strong>STEP 4. コーディング・実装</strong>

      <p>高品質なコーディングとSEO内部対策、システム開発を実施（2〜4週間）</p>

    </div>

    <div class="infinity-flow-step">

      <dotlottie-wc src="https://lottie.host/63cdeb5c-6825-44e8-aba6-fcf1cd03db60/NOhN2fBPLd.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>

      <strong>STEP 5. テスト・最終調整</strong>

      <p>動作確認・表示確認・パフォーマンステストを実施し、最終調整（1〜2週間）</p>

    </div>

    <div class="infinity-flow-step">

      <dotlottie-wc src="https://lottie.host/00a62431-4afb-465d-81f0-0b2ddb013c95/OZC58GKVSt.lottie" class="flow-lottie" speed="1" autoplay loop></dotlottie-wc>

      <strong>STEP 6. リリース・運用開始</strong>

      <p>Webサイトを公開し、アクセス解析・改善提案で継続的に成長を支援（1週間〜）</p>

    </div>

  </div>

</section>
<!-- LP特化プラン・料金セクション -->
<section class="lp-pricing-section">
  <div class="infinity-container">
    <h3>LP特化プラン・料金 <span class="infinity-badge">ご予算に合わせて</span></h3>
    <p class="lp-pricing-subtitle">
      ご予算、ご希望に合わせて最適なプランをご提案します
    </p>

    <!-- 3つのプラン -->
    <div class="lp-pricing-table">
      <!-- スピード重視プラン -->
      <div class="lp-pricing-column">
        <div class="lp-pricing-icon">
          <i class="fas fa-tachometer-alt"></i>
        </div>
        <div class="lp-pricing-plan-name">スピード重視プラン</div>
        <div class="lp-pricing-price">
          <span class="lp-price-value">10</span>
          <span class="lp-price-unit">万円〜</span>
        </div>
        <div class="lp-pricing-period">/ 最短2日</div>
        <ul class="lp-pricing-features">
          <li>デザイン + コーディング</li>
          <li>原稿素材は完全支給（ライティング無）</li>
          <li>テンプレートベースで高速構築</li>
          <li>スマホ最適化（レスポンシブ）</li>
        </ul>
      </div>

      <!-- デザイン重視プラン（推奨） -->
      <div class="lp-pricing-column lp-pricing-featured">
        <div class="lp-pricing-badge">おすすめ</div>
        <div class="lp-pricing-icon">
          <i class="fas fa-palette"></i>
        </div>
        <div class="lp-pricing-plan-name">デザイン重視プラン</div>
        <div class="lp-pricing-price">
          <span class="lp-price-value">30</span>
          <span class="lp-price-unit">万円〜</span>
        </div>
        <div class="lp-pricing-period">/ 3週間〜</div>
        <ul class="lp-pricing-features">
          <li>完全オリジナルデザイン制作</li>
          <li>ブランディングを重視した設計</li>
          <li>プロのライティング支援込み</li>
          <li>詳細な競合調査と戦略立案</li>
        </ul>
      </div>

      <!-- 機能充実プラン -->
      <div class="lp-pricing-column">
        <div class="lp-pricing-icon">
          <i class="fas fa-cogs"></i>
        </div>
        <div class="lp-pricing-plan-name">機能充実プラン</div>
        <div class="lp-pricing-price">
          <span class="lp-price-value">50</span>
          <span class="lp-price-unit">万円〜</span>
        </div>
        <div class="lp-pricing-period">/ 1.5ヶ月〜</div>
        <ul class="lp-pricing-features">
          <li>システム連携や高度な機能実装</li>
          <li>予約・決済・MA連携などに対応</li>
          <li>運用を見据えたCMS構築</li>
          <li>リリース後の改善サポート</li>
        </ul>
      </div>
    </div>

    <!-- 機能別アドオン料金 -->
    <div class="lp-addon-section">
      <h4 class="lp-addon-title">機能別アドオン料金（目安）</h4>
      <div class="lp-addon-grid">
        <div class="lp-addon-item">
          <div class="lp-addon-name">アンケート型機能</div>
          <div class="lp-addon-price">+5万円〜</div>
          <div class="lp-addon-period">工期+3日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">予約システム連携</div>
          <div class="lp-addon-price">+8万円〜</div>
          <div class="lp-addon-period">工期+5日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">KW連動バナー</div>
          <div class="lp-addon-price">+3万円〜</div>
          <div class="lp-addon-period">工期+2日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">カウントダウン</div>
          <div class="lp-addon-price">+2万円〜</div>
          <div class="lp-addon-period">工期+1日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">アニメーション演出</div>
          <div class="lp-addon-price">+5万円〜</div>
          <div class="lp-addon-period">工期+4日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">ECカート連携</div>
          <div class="lp-addon-price">+10万円〜</div>
          <div class="lp-addon-period">工期+7日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">CMS実装(WP)</div>
          <div class="lp-addon-price">+8万円〜</div>
          <div class="lp-addon-period">工期+5日</div>
        </div>
        <div class="lp-addon-item">
          <div class="lp-addon-name">多言語対応</div>
          <div class="lp-addon-price">別途見積</div>
          <div class="lp-addon-period">規模による</div>
        </div>
      </div>
    </div>

    <!-- オプションパック -->
    <div class="lp-option-pack">
      <div class="lp-option-badge">お得なオプションパック</div>
      <p>セットで依頼すると割引適用</p>
      <div class="lp-option-tags">
        <span class="lp-option-tag"><i class="fas fa-pen"></i> プロライティング</span>
        <span class="lp-option-tag"><i class="fas fa-chart-bar"></i> ヒートマップ/GA4設定</span>
        <span class="lp-option-tag"><i class="fas fa-ad"></i> 広告バナー制作</span>
      </div>
    </div>

    <div class="lp-pricing-note">
      お客様の課題に合わせて柔軟にプランニングいたします。<br>
      まずはお気軽にご相談ください。
    </div>
  </div>
</section>

<section class="infinity-pricing-section">

  <h3 class="infinity-pricing-heading">料金プラン</h3>

  <div class="infinity-pricing-table">

    <!-- プラン:スタンダード -->

    <div class="pricing-column">

      <dotlottie-wc src="https://lottie.host/e6bd22ca-6ab6-4d5f-b605-eca501589e23/sbpQdIiyvf.lottie"

        class="pricing-lottie" speed="1" autoplay loop></dotlottie-wc>

      <div class="pricing-title">スタンダードプラン</div>

      <div class="pricing-price">¥450,000〜</div>

      <div class="pricing-summary">

        ビジネス向け標準Webサイト（5〜8P）<br>

        フォーム・簡易CMS・SEO基本・スマホ対応・3ヶ月保守

      </div>

      <ul class="pricing-details">

        <li>ヒアリング</li>

        <li>デザイン</li>

        <li>コーディング</li>

        <li>レスポンシブ対応</li>

        <li>対応言語：HTML / CSS / JS / PHP</li>

      </ul>

    </div>



    <!-- プラン：ビジネス -->

    <div class="pricing-column featured">

      <dotlottie-wc src="https://lottie.host/390728e9-a233-4ecc-8987-305916b3780c/Ucj6NCDgBF.lottie"

        class="pricing-lottie" speed="1" autoplay loop></dotlottie-wc>

      <div class="pricing-title">ビジネスプラン</div>

      <div class="pricing-price">¥680,000〜</div>

      <div class="pricing-summary">

        成長を支援する高機能サイト（10〜15P）<br>

        予約/CMS/SNS連携など

      </div>

      <ul class="pricing-details">

        <li>テキスト構築</li>

        <li>ヒアリング</li>

        <li>デザイン</li>

        <li>コーディング</li>

        <li>レスポンシブ対応</li>

        <li>管理画面開発 / API連携</li>

        <li>対応言語：HTML / CSS / JS / PHP / React / Node / TS</li>

      </ul>

    </div>



    <!-- プラン：プレミアム -->

    <div class="pricing-column">

      <dotlottie-wc src="https://lottie.host/10172254-c7c5-4a0e-9b72-9e68e5ca6dc7/mlVzVLiRVB.lottie"

        class="pricing-lottie" speed="1" autoplay loop></dotlottie-wc>

      <div class="pricing-title">プレミアムプラン</div>

      <div class="pricing-price">¥1,350,000〜</div>

      <div class="pricing-summary">

        フルオーダーメイド / Webアプリ / 決済・会員・AI連携 / 専任サポート

      </div>

      <ul class="pricing-details">

        <li>テキスト構築 / ヒアリング</li>

        <li>デザイン / コーディング</li>

        <li>レスポンシブ対応 / 管理画面開発</li>

        <li>API連携 / EC / 会員制 / 決済 / 機能開発</li>

        <li>対応言語：HTML / CSS / JS / PHP / React / Node / TS / その他</li>

      </ul>

    </div>

  </div>

  <div class="pricing-note">

    ※上記価格は税抜。内容により変動します。詳細はお気軽にご相談ください。

  </div>

</section>



	

<?php get_footer(); ?>
