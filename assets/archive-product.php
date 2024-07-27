<?php get_header(); ?>
<div class="main">
  <div class="main__visual">
    <div class="main__visual--top"><img src="<?php echo get_template_directory_uri(); ?>/images/fdbc5ff355eecda21f063b701c8b6b72.jpg" alt=""></div>
    <div class="main__visual--bottom"><img src="<?php echo get_template_directory_uri(); ?>/images/mainVisual-overlay@2x.png" alt=""></div>
  </div>
</div>

<div class="product">
    <div class="product__wrap">
      <div class="product__wrap--title">
        <h1>PRODUCT</h1>
        <img src="<?php echo get_template_directory_uri() ?>/images/sectionTitle-underLine@2x.png" alt="">
      </div>
    </div>
    <div class="product__wrapper">
      <?php display_product_latest_thumbnails__archive(5); ?>
    </div>
  </div>

  <?php the_posts_pagination(
    array(
        'mid_size'      => 3, // 現在ページの左右に表示するページ番号の数
        'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
        'prev_text'     => ('<'), // 「前へ」リンクのテキスト
        'next_text'     => ('>'), // 「次へ」リンクのテキスト
        'type'          => 'list', // 戻り値の指定 (plain/list)
    )
); ?>

<?php get_footer(); ?>