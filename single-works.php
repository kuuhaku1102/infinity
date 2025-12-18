<?php
/**
 * Template: single-works.php
 * CPT: works
 */
get_header();

if ( have_posts() ) :
  while ( have_posts() ) : the_post();

    // === ACF ===
    $image        = get_field('works_image');            // array or URL
    $link_url     = get_field('works_url');              // string

    $industries   = get_field('works_industries') ?: []; // value[]
    $site_type    = get_field('works_site_type');        // value

    $feat_cv      = get_field('features_cv')  ?: [];     // value[]
    $feat_ui      = get_field('features_ui')  ?: [];
    $feat_ops     = get_field('features_ops') ?: [];
    $uniq         = get_field('unique_features') ?: [];  // value[]
    $admin_feats  = get_field('admin_features') ?: [];   // value[]

    // 画像URL抽出
    $image_url = '';
    if (!is_wp_error($image)) {
      if (is_array($image) && isset($image['url'])) $image_url = $image['url'];
      elseif (is_string($image)) $image_url = $image;
    }

    // === 値→ラベル ===
    $LABEL_INDS = [
      'medical'=>'医療／クリニック','construction'=>'建設／設備','manufacturing'=>'製造','hr'=>'人材','education'=>'教育',
      'food'=>'飲食','ec'=>'EC／小売','realestate'=>'不動産','legal'=>'士業','gov'=>'行政／自治体','it_saas'=>'IT／SaaS',
      'beauty'=>'美容／エステ','care'=>'介護／福祉','tourism'=>'観光／ホテル','finance'=>'金融／保険','npo'=>'NPO／NGO',
      'entertainment'=>'エンタメ／イベント','sports'=>'スポーツ／フィットネス','logistics'=>'物流／運輸','agriculture'=>'農業／畜産',
      'publishing'=>'出版／メディア','advertising'=>'広告代理店／マーケティング','consulting'=>'コンサルティング','tech_startup'=>'テックスタートアップ','toc_service'=>'TOCサービス','web_service'  => 'ウェブサービス', 'profession'  => '士業',   // ★ 追加
    ];
$LABEL_SITE = [
  'corporate' => 'コーポレートサイト',
  'marketing' => '集客サイト',
  'system'    => 'システム開発サイト',
  'lp'        => 'LP制作',
  'recruit'   => '採用サイト'   // ★ 追加
];
    $LABEL_CV = [
      'form_contact'=>'お問い合わせフォーム','form_reservation'=>'予約システム連携','cta_fixed'=>'CTA追従',
      'tel_link'=>'電話タップ','coupon'=>'クーポン表示','exit_popup'=>'離脱ポップ','line_add'       => 'LINE追加（友だち追加／連携）',
    ];
    $LABEL_UI = [
      'fv_slider'=>'FV動画／スライダー','before_after'=>'Before/Afterスライダー','faq'=>'FAQアコーディオン',
      'animation'=>'スクロールアニメーション','gallery'=>'実績ギャラリー','voice'=>'お客様の声',
      'badge'=>'受賞歴・認証バッジ','case'=>'事例掲載','map'=>'Googleマップ埋め込み','sns'=>'SNS埋め込み（Instagram／X／TikTok）','three_columns' => '3カラムデザイン',
  'internal_link' => '内部リンクデザイン（サイト内導線）'
    ];
    $LABEL_OPS = [
      'ga4_gtm'=>'GA4／GTM','meta_tiktok'=>'Meta／TikTok ピクセル','ab_test'=>'A/Bテスト',
      'pagespeed'=>'PageSpeed最適化','seo_basic'=>'SEO基本対策（OGP／メタ／構造化）'
    ];
    $LABEL_UNIQ = [
      'membership'=>'会員登録／ログイン','role_view'=>'会員別表示（会員ランク／ロール）','slider_form'=>'スライダーフォーム（段階式UI）',
      'quiz_diagnosis'=>'クイズ／診断フォーム','progress_bar'=>'進捗バー（フォーム/CV導線）','dynamic_coupon'=>'ダイナミッククーポン（条件出し分け）',
      'barcode_jan'=>'バーコード読取／JAN検索','inventory_link'=>'在庫連携（外部DB／シート）','geo_location'=>'位置情報連動（近隣店舗／距離表示）',
      'line_login'=>'LINEログイン／連携','point_system'=>'ポイント／会員ステータス','recommendation'=>'レコメンド（閲覧履歴／人気）',
      'review'=>'レビュー／評価投稿','i18n'=>'多言語対応','a11y'=>'アクセシビリティ強化','amp'=>'AMP対応',
      'pwa'=>'PWA（ホーム追加／オフライン）','push'=>'プッシュ通知（PWA／OneSignal 等）','personalize'=>'パーソナライズ（UTM／Cookie連動）','simulator'    => 'シミュレーター',          // ★ 追加
  'chatbot_form' => 'チャットボットフォーム',  // ★ 追加
    ];
    $LABEL_ADMIN = [
      'blog'=>'ブログ機能（投稿／カテゴリ／タグ）','news'=>'お知らせ更新機能（News）','pages'=>'固定ページ管理',
      'cpt'=>'カスタム投稿タイプ','block_editor'=>'ブロックエディタ対応（Gutenberg）','schedule'=>'予約投稿（公開日時スケジュール）',
      'search'=>'サイト内検索','breadcrumb'=>'パンくず表示','related_posts'=>'関連記事表示','archives_auto'=>'アーカイブ／一覧自動生成',
      'rss'=>'RSS配信／フィード','newsletter'=>'メールマガジン配信／連携','form_manage'=>'フォーム投稿管理（一覧／CSV）',
      'form_spam'=>'スパム対策（reCAPTCHA 等）','media_opt'=>'画像最適化／メディア管理','seo_plugin'=>'SEO管理（タイトル／メタ／OGP）',
      'analytics_dash'=>'解析ダッシュボード（GA4連携）','tag_manager'=>'タグマネージャ（GTM）','social_share'=>'SNSシェアボタン',
      'sitemap'=>'サイトマップ自動生成（XML／HTML）','robots'=>'robots／noindex 制御','redirects'=>'301リダイレクト管理',
      'cache_cdn'=>'キャッシュ／CDN連携','backup'=>'バックアップ／復元','security'=>'セキュリティ（ログイン保護等）',
      'roles'=>'権限／ロール管理','i18n'=>'多言語運用（WPML／Polylang）','ecommerce'=>'EC機能（WooCommerce 等）',
      'review_moderation'=>'コメント／レビュー承認','author_profiles'=>'著者プロフィール／複数著者','press'=>'プレスリリース管理',
      'faq_cpt'=>'FAQ投稿管理','banner_manager'=>'バナー／告知管理'
    ];

    $terms = get_the_terms(get_the_ID(), 'work_category');
?>
<style>
  :root{ --text:#0f172a; --muted:#64748b; --border:#e2e8f0; --surface:#fff; --chip:#f8fafc; --brand:#111; }
  .single-works-wrap{max-width:1080px;margin:48px auto;padding:0 20px;color:var(--text)}
  .works-breadcrumb{font-size:.875rem;color:var(--muted);margin-bottom:12px}
  .works-breadcrumb a{ color:inherit; text-decoration:none; border-bottom:1px solid transparent; }
  .works-breadcrumb a:hover{ border-bottom-color:var(--muted); }
  .works-header{display:grid;grid-template-columns:1.1fr .9fr;gap:28px;align-items:start}
  .works-thumb img{width:100%;height:auto;border-radius:10px;box-shadow:0 2px 10px rgba(15,23,42,.06)}
  .works-meta{display:flex;flex-wrap:wrap;gap:8px;margin:6px 0 8px}
  .works-meta .term{font-size:.8rem;background:var(--chip);color:#334155;border:1px solid var(--border);padding:4px 10px;border-radius:999px}
  .works-meta .date{font-size:.8rem;color:var(--muted)}
  .works-title{font-size:clamp(1.6rem,2.2vw,2rem);font-weight:800;letter-spacing:.02em;margin:6px 0 12px}

  .badge-row{display:flex;flex-wrap:wrap;gap:8px;margin:12px 0 8px}
  .badge{display:inline-flex;align-items:center;gap:6px;padding:6px 10px;border:1px solid var(--border);border-radius:999px;background:var(--chip);font-size:.8rem}
  .badge--site{background:#eef6ff;border-color:#dbeafe}

  .works-cta{display:flex;gap:10px;margin:22px 0 0}
  .works-cta .btn{display:inline-flex;align-items:center;gap:8px;padding:10px 16px;border-radius:8px;border:1px solid var(--brand);background:var(--brand);color:#fff;text-decoration:none}
  .works-cta .btn--ghost{background:#fff;color:var(--text);border:1px solid var(--border)}

  .works-content{margin-top:28px;line-height:1.85}

  .feat-section{margin-top:28px;border-top:1px solid var(--border);padding-top:20px}
  .feat-section h3{font-size:1.05rem;margin-bottom:10px}
  .feat-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:14px}
  .feat-card{border:1px solid var(--border);border-radius:10px;padding:12px;background:var(--surface)}
  .feat-card h4{font-size:.95rem;margin:0 0 8px}
  .feat-card ul{display:flex;flex-wrap:wrap;gap:8px;padding:0;margin:0}
  .feat-card li{list-style:none;font-size:.85rem;border:1px solid var(--border);padding:4px 8px;border-radius:999px;background:var(--chip)}
  .feat-card--cv h4{color:#1d4ed8}
  .feat-card--ui h4{color:#0f766e}
  .feat-card--ops h4{color:#7c3aed}
  .feat-card--uniq h4{color:#334155}
  .feat-card--admin h4{color:#0b5cab}

  /* 関連実績（縦長・小さめ・見切れ防止） */
  .works-related{margin-top:48px}
  .related-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:10px}
  .related-item{border:1px solid var(--border);border-radius:8px;background:#fff;overflow:hidden;text-decoration:none;color:inherit;transition:transform .08s ease, box-shadow .08s ease}
  .related-item:hover{transform:translateY(-1px);box-shadow:0 4px 14px rgba(15,23,42,.06)}
  .related-item .thumb{height:220px;background:#f8fafc;display:flex;align-items:center;justify-content:center}
  .related-item img{height:auto !important;width:auto !important;max-width:100%;max-height:100%;object-fit:contain;display:block}
  .related-item .cap{padding:6px;font-size:.8rem;line-height:1.35;text-align:center;min-height:34px}

  @media(max-width:1024px){ .works-header{grid-template-columns:1fr} .feat-grid{grid-template-columns:1fr 1fr} }
  @media(max-width:640px){ .feat-grid{grid-template-columns:1fr} }
  @media (min-width:1200px){ .related-grid{grid-template-columns:repeat(5,1fr)} }
</style>

<div class="single-works-wrap">
  <div class="works-breadcrumb">
    <a href="<?php echo esc_url( home_url('/') ); ?>">Home</a> &raquo;
    <a href="<?php echo esc_url( get_post_type_archive_link('works') ); ?>">制作実績</a> &raquo;
    <span><?php the_title(); ?></span>
  </div>

  <header class="works-header">
    <div class="works-thumb">
      <?php if ($image_url): ?>
        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
      <?php else: ?>
        <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/noimage.jpg' ); ?>" alt="no image">
      <?php endif; ?>
    </div>

    <div class="works-summary">
      <div class="works-meta">
        <?php
          $terms = get_the_terms(get_the_ID(), 'work_category');
          if (!is_wp_error($terms) && !empty($terms)):
            foreach ($terms as $t): ?>
              <span class="term"><?php echo esc_html($t->name); ?></span>
        <?php endforeach; endif; ?>
        <span class="date"><?php echo esc_html( get_the_date() ); ?></span>
      </div>

      <h1 class="works-title"><?php the_title(); ?></h1>

      <?php if ( has_excerpt() ): ?>
        <div class="excerpt"><?php the_excerpt(); ?></div>
      <?php endif; ?>

      <!-- 業界 -->
      <?php if (!empty($industries)): ?>
        <div class="badge-row">
          <?php foreach ($industries as $v): ?>
            <span class="badge"><?php echo esc_html( $LABEL_INDS[$v] ?? $v ); ?></span>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <!-- サイトタイプ -->
      <?php if ($site_type): ?>
        <div class="badge-row">
          <span class="badge badge--site"><?php echo esc_html( $LABEL_SITE[$site_type] ?? $site_type ); ?></span>
        </div>
      <?php endif; ?>

      <div class="works-cta">
        <?php if ($link_url): ?>
          <a class="btn" href="<?php echo esc_url($link_url); ?>" target="_blank" rel="noopener nofollow">サイトを見る</a>
        <?php endif; ?>
        <a class="btn btn--ghost" href="<?php echo esc_url( home_url('/contact/') ); ?>">制作のご相談</a>
      </div>
    </div>
  </header>

  <main class="works-content">
    <?php the_content(); ?>
  </main>

  <!-- カテゴリ別 機能 + ユニーク機能 + CMS/運用機能 -->
  <?php if (!empty($feat_cv) || !empty($feat_ui) || !empty($feat_ops) || !empty($uniq) || !empty($admin_feats)): ?>
  <section class="feat-section" aria-labelledby="feat-title">
    <h3 id="feat-title">実装機能</h3>
    <div class="feat-grid">
      <?php if ($feat_cv): ?>
        <div class="feat-card feat-card--cv">
          <h4>CV獲得系</h4>
          <ul><?php foreach ($feat_cv as $k): ?><li><?php echo esc_html($LABEL_CV[$k] ?? $k); ?></li><?php endforeach; ?></ul>
        </div>
      <?php endif; ?>

      <?php if ($feat_ui): ?>
        <div class="feat-card feat-card--ui">
          <h4>UI／コンテンツ系</h4>
          <ul><?php foreach ($feat_ui as $k): ?><li><?php echo esc_html($LABEL_UI[$k] ?? $k); ?></li><?php endforeach; ?></ul>
        </div>
      <?php endif; ?>

      <?php if ($feat_ops): ?>
        <div class="feat-card feat-card--ops">
          <h4>計測／運用系</h4>
          <ul><?php foreach ($feat_ops as $k): ?><li><?php echo esc_html($LABEL_OPS[$k] ?? $k); ?></li><?php endforeach; ?></ul>
        </div>
      <?php endif; ?>

      <?php if ($uniq): ?>
        <div class="feat-card feat-card--uniq" style="grid-column:1 / -1;">
          <h4>ユニーク機能</h4>
          <ul><?php foreach ($uniq as $k): ?><li><?php echo esc_html($LABEL_UNIQ[$k] ?? $k); ?></li><?php endforeach; ?></ul>
        </div>
      <?php endif; ?>

      <?php if ($admin_feats): ?>
        <div class="feat-card feat-card--admin" style="grid-column:1 / -1;">
          <h4>CMS／運用機能</h4>
          <ul><?php foreach ($admin_feats as $k): ?><li><?php echo esc_html($LABEL_ADMIN[$k] ?? $k); ?></li><?php endforeach; ?></ul>
        </div>
      <?php endif; ?>
    </div>
  </section>
  <?php endif; ?>

  <!-- 関連実績（同カテゴリから最大5件） -->
  <?php
    if (!is_wp_error($terms) && !empty($terms)) {
      $term_ids = wp_list_pluck($terms, 'term_id');
      $rel_q = new WP_Query([
        'post_type'      => 'works',
        'posts_per_page' => 5,
        'post__not_in'   => [get_the_ID()],
        'tax_query'      => [[
          'taxonomy'=>'work_category','field'=>'term_id','terms'=>$term_ids
        ]]
      ]);
      if ($rel_q->have_posts()): ?>
        <section class="works-related" aria-labelledby="related-works-heading">
          <h3 id="related-works-heading">関連する制作実績</h3>
          <div class="related-grid">
            <?php while ($rel_q->have_posts()): $rel_q->the_post();
              $rel_img = get_field('works_image');
              $rel_img_url = '';
              if (!is_wp_error($rel_img)) {
                if (is_array($rel_img) && isset($rel_img['url'])) $rel_img_url = $rel_img['url'];
                elseif (is_string($rel_img)) $rel_img_url = $rel_img;
              } ?>
              <a class="related-item" href="<?php the_permalink(); ?>">
                <div class="thumb">
                  <?php if ($rel_img_url): ?>
                    <img src="<?php echo esc_url($rel_img_url); ?>" alt="<?php the_title_attribute(); ?>">
                  <?php else: ?>
                    <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/noimage-9x16.png' ); ?>" alt="no image">
                  <?php endif; ?>
                </div>
                <div class="cap"><?php the_title(); ?></div>
              </a>
            <?php endwhile; wp_reset_postdata(); ?>
          </div>
        </section>
      <?php endif; } ?>
</div>

<!-- 構造化データ -->
<script type="application/ld+json">
<?php
$about_bits = [];
foreach ($industries as $v) $about_bits[] = $LABEL_INDS[$v] ?? $v;
foreach ([$feat_cv,$feat_ui,$feat_ops,$uniq,$admin_feats] as $arr) { foreach ($arr as $v) $about_bits[] = $v; }
$sd = [
  '@context'=>'https://schema.org',
  '@type'=>'CreativeWork',
  'name'=>get_the_title(),
  'url'=>get_permalink(),
  'image'=>$image_url ?: '',
  'datePublished'=>get_the_date('c'),
  'dateModified'=>get_the_modified_date('c'),
  'about'=>implode(', ', array_unique($about_bits)),
  'author'=>['@type'=>'Organization','name'=>get_bloginfo('name')]
];
echo wp_json_encode($sd, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
?>
</script>

<?php
  endwhile;
endif;

get_footer();
