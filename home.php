<?php get_header(); ?>
<div class="mv-sub">
    <img src="" alt="">
</div>
<div class="breadcrumb">
  <?php
    if ( function_exists( 'bcn_display' ) ) {
      bcn_display();
    }
  ?>
</div>
<!-- お知らせ一覧 -->
<div class="news-sub">
  <div class="news-sub__inner">
    <div class="news__items">
              <div class="news__item">
                <div class="news__info">
                  <time class="news__date" datetime="2020-07-20">2020.07.20</time>
                  <span class="news__category">お知らせ</span>
                </div>
                <div class="news__text">
                  <a href="" class="news__title">
                    記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。
                  </a>
                </div>
              </div>
    </div>
  </div>
</div>
<!-- ページネーション(数字あり) -->
<div class="">
	<?php
	  the_posts_pagination( array(
	    'mid_size' => 1,
	    'prev_text' => 'PREV',
	    'next_text' => 'NEXT',
	  ) );
	?>
</div>