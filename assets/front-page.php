<?php get_header(); ?>

<main>
  <div class="main">
    <div class="mainvisual">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main_visual_2-0x0.jpg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main_visual_6-0x0.jpg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main_visual_7-0x0.jpg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main_visual_13-0x0.jpg" alt="">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main_visual_111-0x0.jpg" alt="">
    </div>
    <img class="main--logo" src="<?php echo get_template_directory_uri()?>/images/siteLogo-sp@2x.png" alt="">
    <img class="main--bottom" src="<?php echo get_template_directory_uri() ?>/images/mainVisual-overlay@2x.png" alt="">
  </div>

  <div class="about">
    <div class="about__content">
      <h2>旅に出よう。</h2>
      <div class="about__content--wrap">
        <p>僕たちが作りたいのは<br>
          持っているだけで旅に出たくなるモノ。<br>
          持っているだけでわくわくするモノ。<br>
        </p>
        <p>
          それは新しい時代の “パスポート”<br>
          僕たちが作るものは、<br>
          そんな、存在でありたい。<br>
        </p>
        <p>
          そして、人と人が繋がる<br>
          こんな時代だからこそ、<br>
          僕たちは、みんなでひとつのモノを<br>
          作ることを追求したい。<br>
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/images/concept-siteLogo@2x.png" alt="">
        <p>それは、自分と世界を繋げる<br>
          旅のモノづくりブランド</p>
      </div>
    </div>
  </div>

  <div class="product">
    <div class="product__wrap">
      <div class="product__wrap--title">
        <h2>PRODUCT</h2>
        <img src="<?php echo get_template_directory_uri() ?>/images/sectionTitle-underLine@2x.png" alt="">
      </div>
      <p><a href="">MORE</a></p>
    </div>
    <div class="product__wrap">
      <?php display_product_latest_thumbnails(6); ?>
    </div>
    <div class="more__sp">
      <a href="">MORE</a>
    </div>
  </div>

  <div class="news--bg">
    <div class="news">
      <div class="news__wrap">
        <div class="news__wrap--title">
          <h2>NEWS</h2>
          <img src="<?php echo get_template_directory_uri() ?>/images/sectionTitle-underLine@2x.png" alt="">
        </div>
        <p><a href="">MORE</a></p>
      </div>
      <div class="news__contents">
        <?php display_news_latest_thumbnails(6); ?>
      </div>
    </div>
    <div class="more__sp">
      <a href="">MORE</a>
    </div>
  </div>
</main>



<?php get_footer(); ?>