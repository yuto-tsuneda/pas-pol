<?php get_header(); ?>
<div class="main">
  <div class="main__visual">
    <div class="main__visual--top"><img src="<?php echo get_template_directory_uri(); ?>/images/5aafae338835b1fd1119f273565bd3de1.jpg" alt=""></div>
    <div class="main__visual--bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual-overlay@2x.png" alt=""></div>
  </div>

  <div class="news">
      <div class="news__wrap">
        <div class="news__wrap--title">
          <h2>NEWS</h2>
          <img src="<?php echo get_template_directory_uri() ?>/images/sectionTitle-underLine@2x.png" alt="">
        </div>
      </div>
      <div class="news__contents">
        <?php display_news_latest_thumbnails(6); ?>
      </div>
  </div>
</div>

<?php display_news_latest_thumbnails_archive(5); ?>

<div class="gotop">
  <p><a href="<?php echo home_url(); ?>"> < BACK TO TOP</a></p>
</div>

<?php get_footer(); ?>