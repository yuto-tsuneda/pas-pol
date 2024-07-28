<?php get_header(); ?>
<div class="main">
  <div class="main__visual">
    <div class="main__visual--top"><img src="<?php echo get_template_directory_uri(); ?>/images/5aafae338835b1fd1119f273565bd3de1.jpg" alt=""></div>
    <div class="main__visual--bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual-overlay@2x.png" alt=""></div>
  </div>
</div>

<?php display_news_latest_thumbnails_archive(5); ?>

<?php
// 基本のページネーション
the_posts_pagination( array(
  'mid_size' => 1,
  'prev_next' => false,
  'type' => 'list',
) );
?>

<?php get_footer(); ?>