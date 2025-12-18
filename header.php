<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">

  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/service.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/editor-style.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/website-creation.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lp-sections.css">

	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

	<!-- Google Fonts 読み込み（head内 or 上部に配置） -->

<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap" rel="stylesheet">



  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>



<header class="site-header">

  <div class="container">

    <div class="header-inner">

      <h1 class="site-logo">

        <a href="<?php echo esc_url(home_url('/')); ?>">

          <img src="http://demo.infinitydesign.online/wp-content/uploads/2025/07/合同会社InfinityDesign様_よこロゴ_印刷用.png" alt="InfinityDesign">

        </a>

      </h1>



      <nav class="main-nav">

        <div class="hamburger"><span></span><span></span><span></span></div>

        <ul class="nav-list">

          <li><a href="<?php echo home_url(); ?>">Home</a></li>

          <li><a href="<?php echo home_url('/service'); ?>">Service</a></li>

          <li><a href="<?php echo home_url('/about'); ?>">About Us</a></li>

          <li><a href="<?php echo home_url('/works'); ?>">Works</a></li>

		  <li><a href="<?php echo home_url('/ad_results'); ?>">Marketing</a></li>

          <li><a href="<?php echo home_url('/blogs'); ?>">Blogs</a></li>

          <li><a href="<?php echo home_url('/contact'); ?>" class="contact-btn">お問い合わせ</a></li>

        </ul>

      </nav>

    </div>

  </div>

</header>





