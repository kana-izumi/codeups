<?php get_header(); ?>

    <!-- メインビジュアル -->
    <div class="mv">
      <div class="mv__heading">
        <h2 class="mv__title">メインタイトルが入ります</h2>
        <span class="mv__subtitle">サブタイトルが入ります</span>
      </div>
      <div class="swiper-container js-mv-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img-sp u-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp1.jpg" alt="メインビジュアル1" />
            </div>
            <div class="slide-img-pc u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-pc1.jpg" alt="メインビジュアル1" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img-sp u-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp2.jpg" alt="メインビジュアル2" />
            </div>
            <div class="slide-img-pc u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-pc2.jpg" alt="メインビジュアル2" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-img-sp u-mobile">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-sp3.jpg" alt="メインビジュアル3" />
            </div>
            <div class="slide-img-pc u-desktop">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/mv-pc3.png" alt="メインビジュアル3" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- お知らせ -->
    <section id="news" class="news news-wrap">
      <div class="news__inner">
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
            <div class="news__btn u-mobile">
              <a href="" class="btn">
                <span>すべて見る</span>
              </a>
            </div>
            <div class="news__btn u-desktop">
              <a href="" class="news__btn-link">
                <span>すべて見る</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 事業内容 -->
    <section id="content" class="content content-wrap">
      <div class="heading">
        <h2 class="heading__title heading__title-content" date-en="Content">
          <span>事業内容</span>
        </h2>
      </div>
      <div class="content__inner">
        <div class="content__items">
          <div class="content__item">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content1.jpg" alt="経営理念ページへ" />
              <p class="content__text">経営理念ページへ</p>
            </a>
          </div>
          <div class="content__item">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content2.jpg" alt="理念1へ" />
              <p class="content__text">理念1へ</p>
            </a>
          </div>
          <div class="content__item">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content3.jpg" alt="理念2へ" />
              <p class="content__text">理念2へ</p>
            </a>
          </div>
          <div class="content__item">
            <a href="">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/content4.jpg" alt="理念3へ" />
              <p class="content__text">理念3へ</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- 制作実績 -->
    <section id="works" class="works works-wrap">
      <div class="heading">
        <h2 class="works__heading heading-right" date-en="Works">
          <span>制作実績</span>
        </h2>
      </div>
      <div class="works__bg">
        <div class="works__inner">
          <div class="works__items">
            <div class="works__images">
              <!-- Swiper -->
              <div class="swiper works__swiper js-works-swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="works__item">
                      <div class="works__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/works1.jpg" alt="制作実績" />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="works__item">
                      <div class="works__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/works2.jpg" alt="制作実績" />
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="works__item">
                      <div class="works__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/top/works3.jpg" alt="制作実績" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination js-works-pagination"></div>
            </div>

            <div class="works__content item__content">
              <div class="works__text-block item__text-block">
                <p class="works__title item__title">
                  メインタイトルが入ります。
                </p>
                <p class="works__message item__message">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
              </div>
              <div class="works__btn item__btn">
                <a href="" class="btn">
                  <span>詳しく見る</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 企業概要 -->
    <section id="overview" class="overview overview-wrap">
      <div class="heading">
        <h2 class="overview__heading heading__title" date-en="Overview">
          <span>企業概要</span>
        </h2>
      </div>
      <div class="overview__bg">
        <div class="overview__inner">
          <div class="overview__items">
            <div class="overview__item">
              <div class="overview__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/top/overview.jpg" alt="企業概要" />
              </div>
              <div class="overview__content item__content">
                <div class="overview__text-block item__text-block">
                  <p class="overview__title item__title">
                    メインタイトルが入ります。
                  </p>
                  <p class="overview__message item__message">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="overview__btn item__btn">
                  <a href="" class="btn">
                    <span>詳しく見る</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ブログ -->
    <section id="blog" class="blog blog-wrap">
      <div class="blog__inner inner">
        <div class="heading">
          <h2 class="blog__heading heading-right" date-en="Blog">
            <span>ブログ</span>
          </h2>
        </div>
        <div class="blog__items card-list">
          <a href="" class="blog-card card-list__item new-icon">
            <figure class="blog-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog1.jpg" alt="ブログ" />
            </figure>
            <div class="blog-card__body">
              <div class="blog-card__title">
                タイトルが入ります。タイトルが入ります。
              </div>
              <p class="blog-card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p>
              <div class="blog-card__meta">
                <div class="blog-card__category">カテゴリ</div>
                <time class="blog-card__date" datetime="2021-07-20"
                  >2021.07.20</time
                >
              </div>
            </div>
          </a>
          <a href="" class="blog-card card-list__item">
            <figure class="blog-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog2.jpg" alt="ブログ" />
            </figure>
            <div class="blog-card__body">
              <div class="blog-card__title">
                タイトルが入ります。タイトルが入ります。
              </div>
              <p class="blog-card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p>
              <div class="blog-card__meta">
                <div class="blog-card__category">カテゴリ</div>
                <time class="blog-card__date" datetime="2021-07-20"
                  >2021.07.20</time
                >
              </div>
            </div>
          </a>
          <a href="" class="blog-card card-list__item">
            <figure class="blog-card__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/top/blog3.jpg" alt="ブログ" />
            </figure>
            <div class="blog-card__body">
              <div class="blog-card__title">
                タイトルが入ります。タイトルが入ります。
              </div>
              <p class="blog-card__text">
                説明文が入ります。説明文が入ります。説明文が入ります。
              </p>
              <div class="blog-card__meta">
                <div class="blog-card__category not_hover-color">カテゴリ</div>
                <time class="blog-card__date" datetime="2021-07-20"
                  >2021.07.20</time
                >
              </div>
            </div>
          </a>
        </div>
        <div class="blog__btn">
          <a href="" class="btn">
            <span>詳しく見る</span>
          </a>
        </div>
      </div>
    </section>
    <!-- お問い合わせ -->
    <section id="contact" class="contact contact-wrap">
      <div class="contact__inner">
        <div class="heading">
          <h2 class="contact__heading heading__title" date-en="Contact">
            <span>お問い合わせ</span>
          </h2>
        </div>
        <div class="contact__body">
          <p class="contact__message">
            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          </p>
          <div class="contact__btn">
            <a href="" class="contact__btn-link btn">
              <span class="contact__btn-text btn-text">お問い合わせへ</span>
            </a>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>