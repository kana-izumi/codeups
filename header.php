<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="CodeUps" />
    <meta name="”robots”" content="”noindex”" />
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- ファビコン -->
    <link rel="”icon”" href="<?php echo get_template_directory_uri(); ?>favicon.ico" />
    <!-- googlefont -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;700&family=Noto+Serif+JP:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
    <!-- ボタン
  <a href="" class="btn bgleft">
    <span>詳しく見る</span>
  </a> -->

    <!-- ヘッダー -->
    <header class="header js-header">
      <div class="header__inner">
        <h1 class="logo">
          <a href="#" class="logo__link">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="ヘッダーロゴ" />
          </a>
        </h1>
        <!-- ドロワー -->
        <div class="drawer js-drawer u-mobile">
          <div class="drawer__icon js-drawer-open">
            <div class="drawer__icon-bar1"><a href=""></a></div>
            <div class="drawer__icon-bar2"><a href=""></a></div>
            <div class="drawer__icon-bar3"><a href=""></a></div>
          </div>
        </div>

        <!-- spナビ -->
        <div class="sp-nav drawer-menu">
          <ul class="sp-nav__items">
            <li class="sp-nav__item">
              <a href="/">トップ</a>
            </li>
            <li class="sp-nav__item">
              <a href="#news">お知らせ</a>
            </li>
            <li class="sp-nav__item">
              <a href="#content">事業内容</a>
            </li>
            <li class="sp-nav__item">
              <a href="#works">制作実績</a>
            </li>
            <li class="sp-nav__item">
              <a href="#overview">企業概要</a>
            </li>
            <li class="sp-nav__item">
              <a href="#blog">ブログ</a>
            </li>
            <li class="sp-nav__item">
              <a href="#contact">お問い合わせ</a>
            </li>
          </ul>
        </div>

        <!-- pcナビ -->
        <div class="pc-nav u-desktop">
          <ul class="pc-nav__items">
            <li class="pc-nav__item pc-nav__item--hover">
              <a href="#news">お知らせ</a>
            </li>
            <li class="pc-nav__item pc-nav__item--hover">
              <a href="#content">事業内容</a>
            </li>
            <li class="pc-nav__item pc-nav__item--hover">
              <a href="#works">制作実績</a>
            </li>
            <li class="pc-nav__item pc-nav__item--hover">
              <a href="#overview">企業概要</a>
            </li>
            <li class="pc-nav__item pc-nav__item--hover">
              <a href="#blog">ブログ</a>
            </li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="#contact">
                <span>お問い合わせ<span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </header>