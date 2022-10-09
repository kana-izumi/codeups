<?php
  function my_setup()
  {
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support('html5', array( // HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      )
    );
  }
  add_action('after_setup_theme', 'my_setup');{
  /* CSSとJavaScriptの読み込み */
  function my_script_init()
    { // WordPress提供のjquery.jsを読み込まない
      wp_deregister_script('jquery');
      // jQueryの読み込み
      wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "1.0.1" );
      // // Google Fonts(2つ以上ある場合は1つずつ書く)
      // wp_enqueue_style( 'NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap' );
      // wp_enqueue_style( 'Lexend', '//fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;500&display=swap' );
      // micromodal
      wp_enqueue_script( 'micromodal', '//unpkg.com/micromodal/dist/micromodal.min.js', "", "1.0.1" );
      // swiper
      wp_enqueue_script( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.js', "", "1.0.1", false );
      wp_enqueue_style( 'swiper', '//unpkg.com/swiper@8/swiper-bundle.min.css', "", "1.0.1", false );
      // 自作jsファイルの読み込み
      wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.1', true );
      // 自作cssファイルの読み込み
      wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/styles.css', array(), '1.0.1', false );
    }
    add_action('wp_enqueue_scripts', 'my_script_init');
  }
	//記事表示時の整形無効
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
  // ビジュアルエディタ(TinyMCE)の整形無効
  add_filter(
    'tiny_mce_before_init',
    function($init_array){
      global $allowedposttags;
      $init_array['valid_elements']          = '*[*]';
      $init_array['extended_valid_elements'] = '*[*]';
      $init_array['valid_children']          = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']';
      $init_array['indent']                  = true;
      $init_array['wpautop']                 = false;
      $init_array['force_p_newlines']        = false;
      return $init_array;
    }
  );
  // カスタムメニュー機能
  register_nav_menus(
    array(
      'place_global' => 'ヘッダー',
      'place_footer' => 'フッター',
    )
    );