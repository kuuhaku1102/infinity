<?php
function allow_svg_upload($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

// メニュー機能の有効化
function my_theme_setup() {
  add_theme_support('menus');
}
add_action('after_setup_theme', 'my_theme_setup');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_my_menus');

// ウィジェット（サイドバーなど）の有効化
function my_widgets_init() {
  register_sidebar(array(
    'name' => 'サイドバー',
    'id' => 'sidebar-1',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'my_widgets_init');

// エディター
function my_editor_styles() {
  // ブロックエディター（Gutenberg）用
  add_theme_support('editor-styles');
  add_editor_style('assets/css/editor-style.css'); // Gutenberg もこのファイルを見る
}
add_action('after_setup_theme', 'my_editor_styles');

// クラシックエディター用
add_action('admin_init', function () {
  add_editor_style('assets/css/editor-style.css');
});

// Scripts & Styles
function enqueue_theme_scripts() {
  wp_enqueue_script('theme-index-js', get_template_directory_uri() . '/assets/js/index.js', array(), null, true);
  wp_enqueue_style('logo-slider-css', get_template_directory_uri() . '/assets/css/logo-slider.css');
  wp_enqueue_script('logo-slider-js', get_template_directory_uri() . '/assets/js/logo-slider.js', array('theme-index-js'), null, true);
  
  // Service page CSS
  if (is_page_template('page-templates/service.php')) {
    wp_enqueue_style('service-css', get_template_directory_uri() . '/assets/css/service.css');
  }
  
  // About page CSS
  if (is_page_template('page-templates/about.php')) {
    wp_enqueue_style('about-css', get_template_directory_uri() . '/assets/css/about.css');
  }
  
  // SEO Consulting page CSS
  if (is_page_template('page-templates/seo-consulting.php')) {
    wp_enqueue_style('seo-consulting-css', get_template_directory_uri() . '/assets/css/seo-consulting.css');
  }
  
  // Data Analytics page CSS
  if (is_page_template('page-templates/data-analytics.php')) {
    wp_enqueue_style('data-analytics-css', get_template_directory_uri() . '/assets/css/data-analytics.css');
  }
}
add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

// News Custom Post Type
function register_news_post_type() {
  register_post_type('news', array(
    'labels' => array('name' => 'お知らせ', 'singular_name' => 'お知らせ'),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-megaphone',
    'show_in_rest' => true
  ));
  register_taxonomy('news_category', 'news', array(
    'label' => 'カテゴリ',
    'hierarchical' => true,
    'public' => true,
    'rewrite' => array('slug' => 'news-category'),
    'show_in_rest' => true
  ));
}
add_action('init', 'register_news_post_type');

// Works Custom Post Type
function register_custom_post_type_works() {
  register_post_type('works', array(
    'labels' => array(
      'name' => '制作実績',
      'singular_name' => '制作実績',
      'add_new' => '新規追加',
      'add_new_item' => '新しい制作実績を追加',
      'edit_item' => '制作実績を編集',
      'new_item' => '新しい制作実績',
      'view_item' => '制作実績を見る',
      'search_items' => '制作実績を検索',
      'not_found' => '制作実績が見つかりませんでした',
      'menu_name' => '制作実績'
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => array('title', 'thumbnail'),
    'rewrite' => array('slug' => 'works'),
    'show_in_rest' => true
  ));

  register_taxonomy('work_category', 'works', array(
    'labels' => array(
      'name' => 'カテゴリ',
      'singular_name' => 'カテゴリ',
      'search_items' => 'カテゴリを検索',
      'all_items' => 'すべてのカテゴリ',
      'edit_item' => 'カテゴリを編集',
      'update_item' => 'カテゴリを更新',
      'add_new_item' => '新しいカテゴリを追加',
      'new_item_name' => '新しいカテゴリ名',
      'menu_name' => 'カテゴリ'
    ),
    'public' => true,
    'hierarchical' => true,
    'show_ui' => true,
    'show_admin_column' => true,
    'rewrite' => array('slug' => 'work-category'),
    'show_in_rest' => true
  ));
}
add_action('init', 'register_custom_post_type_works');

// Json
function allow_json_uploads_for_admin($mimes) {
  if (current_user_can('manage_options')) {
    $mimes['json'] = 'application/json';
  }
  return $mimes;
}
add_filter('upload_mimes', 'allow_json_uploads_for_admin');

add_filter('wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if ($ext === 'json') {
    return [
      'ext'             => 'json',
      'type'            => 'application/json',
      'proper_filename' => $filename,
    ];
  }
  return $data;
}, 10, 4);


// lottie
function enqueue_lottie_scripts() {
  wp_enqueue_script('lottie-lib', 'https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js', [], null, true);
  wp_enqueue_script('lottie-init', get_template_directory_uri() . '/assets/js/lottie-init.js', ['lottie-lib'], null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_lottie_scripts');

// 広告実績
function register_ad_results_post_type() {
  $labels = array(
    'name'               => '広告実績',
    'singular_name'      => '広告実績',
    'menu_name'          => '広告実績',
    'name_admin_bar'     => '広告実績を追加',
    'add_new'            => '新規追加',
    'add_new_item'       => '新しい広告実績を追加',
    'new_item'           => '新しい広告実績',
    'edit_item'          => '広告実績を編集',
    'view_item'          => '広告実績を表示',
    'all_items'          => '広告実績一覧',
    'search_items'       => '広告実績を検索',
    'parent_item_colon'  => '親広告実績:',
    'not_found'          => '広告実績が見つかりませんでした。',
    'not_found_in_trash' => 'ゴミ箱に広告実績が見つかりませんでした。'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'ad_results'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-chart-bar',
    'supports'           => array('title', 'editor', 'thumbnail'),
    'show_in_rest'       => true
  );

  register_post_type('ad_results', $args);
}
add_action('init', 'register_ad_results_post_type');

// パートナーロゴ (Logo Slider)
function register_partner_logo_post_type() {
  $labels = array(
    'name'               => 'パートナーロゴ',
    'singular_name'      => 'パートナーロゴ',
    'menu_name'          => 'パートナーロゴ',
    'add_new'            => '新規追加',
    'add_new_item'       => '新しいロゴを追加',
    'edit_item'          => 'ロゴを編集',
    'new_item'           => '新しいロゴ',
    'view_item'          => 'ロゴを表示',
    'search_items'       => 'ロゴを検索',
    'not_found'          => 'ロゴが見つかりませんでした',
    'not_found_in_trash' => 'ゴミ箱にロゴが見つかりませんでした'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => false, // 詳細ページは不要
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'partner-logo'),
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'menu_icon'          => 'dashicons-images-alt2',
    'supports'           => array('title', 'thumbnail'),
    'show_in_rest'       => true
  );

  register_post_type('partner_logo', $args);
}
add_action('init', 'register_partner_logo_post_type');


// 計算
function calculate_ad_metrics($post_id) {
  // 投稿タイプを確認
  if (get_post_type($post_id) !== 'ad_results') return;

  // 自動保存・リビジョン・ゴミ箱時スキップ
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
  if (wp_is_post_revision($post_id)) return;
  if (get_post_status($post_id) === 'trash') return;

  // 入力値の取得（float型に変換）
  $impressions  = (float) get_field('impressions', $post_id);
  $clicks       = (float) get_field('clicks', $post_id);
  $conversions  = (float) get_field('conversions', $post_id);
  $cost         = (float) get_field('cost', $post_id);

  // 計算処理（ゼロ除算回避）
  $ctr = ($impressions > 0) ? ($clicks / $impressions) * 100 : 0;
  $cvr = ($clicks > 0) ? ($conversions / $clicks) * 100 : 0;
  $cpc = ($clicks > 0) ? ($cost / $clicks) : 0;
  $cpa = ($conversions > 0) ? ($cost / $conversions) : 0;

  // 保存（小数点2桁で丸め）
  update_field('ctr', round($ctr, 2), $post_id);
  update_field('cvr', round($cvr, 2), $post_id);
  update_field('cpc', round($cpc, 2), $post_id);
  update_field('cpa', round($cpa, 2), $post_id);
}
add_action('acf/save_post', 'calculate_ad_metrics', 20);


// ディレクトリー作成
function create_theme_file_if_not_exists() {
  $theme_dir = get_template_directory(); // テーマのパス（親テーマ）
  $folder = $theme_dir . '/';
  $file   = $folder . '/single-works.php';

  // フォルダがなければ作成
  if (!is_dir($folder)) {
    if (!mkdir($folder, 0755, true)) {
      error_log('ディレクトリ作成失敗: ' . $folder);
      return;
    }
  }

  // ファイルがなければ作成
  if (!file_exists($file)) {
    if (!touch($file)) {
      error_log('ファイル作成失敗: ' . $file);
      return;
    }
  }

  // 確認用ログ（オプション）
  error_log('ファイル作成済み: ' . $file);
}
add_action('after_setup_theme', 'create_theme_file_if_not_exists');