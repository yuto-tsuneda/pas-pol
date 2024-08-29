<?php

function theme_enqueue_scripts() {
  
  wp_enqueue_script('jquery');

  $theme_directory = get_template_directory_uri();

  wp_enqueue_style('reset-style', $theme_directory . '/css/reset.css');
  wp_enqueue_style( 'common-style', $theme_directory . '/css/common.css', array('reset-style'), null);
  wp_enqueue_script( 'common-script', $theme_directory . '/js/common.js', array('jquery'), null, true);

  if(is_front_page()){
    wp_enqueue_style('front-style', $theme_directory . '/css/front.css', array('common-style'));
    wp_enqueue_script( 'front-script', $theme_directory . '/js/front.js', array('common-script'), null, true);
  }

  if(is_singular('news') || is_post_type_archive('news')){
    wp_enqueue_style('news-style', $theme_directory . '/css/archive-news.css', array('common-style'));
    wp_enqueue_script('news-script', $theme_directory . '/js/news.js', array('jquery'), null, true);
  }

  if(is_post_type_archive('product')){
    wp_enqueue_style('product-style', $theme_directory . '/css/archive-product.css', array('common-style'));
    wp_enqueue_script('product-script', $theme_directory . '/js/product.js', array('jquery'), null, true);
  }

  if(is_singular('product')){
    wp_enqueue_style('product-single-style', $theme_directory . '/css/product.css', array('common-style'));
    wp_enqueue_script('product-single-script', $theme_directory . '/js/product.css', array('jquery'), null, true);
  }

  if(is_404()){
    wp_enqueue_style('404-style', $theme_directory . '/css/404.css', array('common-style'));
    wp_enqueue_script('404-script', $theme_directory . '/js/404.js', array('jquery'), null, true);
  }
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function create_news_post_type(){
  register_post_type('news',
    array(
      'labels' => array(
        'name' => __('News'),
        'singular_name' => __('News')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'news'),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
    )
  );
}
add_action('init', 'create_news_post_type');

function create_product_post_type(){
  register_post_type('product',
    array(
      'labels' => array(
        'name' => __('Products'),
        'singular_name' => __('Product')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'products'),
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments')
    )
  );
}
add_action('init', 'create_product_post_type');

function theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

// productのカスタム投稿一覧を表示する

function display_product_latest_thumbnails($posts_per_page = 5) {
  $args = array(
      'post_type' => 'product',
      'posts_per_page' => $posts_per_page,
      'orderby' => 'date',
      'order' => 'DESC'
  );

  $custom_query = new WP_Query($args);

  if ($custom_query->have_posts()) : ?>
      <div class="product-thumbnails-list">
          <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
              <div class="product-thumbnail-item">
                  <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('full'); // アイキャッチ画像を表示 ?>
                          <h2><?php the_title(); // 記事のタイトルを表示 ?></h2>
                      </a>
                  <?php endif; ?>
              </div>
          <?php endwhile; ?>
      </div>
    <!-- ページネーション追加 -->

      <?php wp_reset_postdata(); ?>
  <?php else : ?>
      <p>製品が見つかりませんでした。</p>
  <?php endif;
}

//newsのカスタム投稿一覧を表示する

function display_news_latest_thumbnails($posts_per_page = 5) {
  $args = array(
      'post_type' => 'news',
      'posts_per_page' => $posts_per_page,
      'orderby' => 'date',
      'order' => 'DESC'
  );

  $custom_query = new WP_Query($args);

  if ($custom_query->have_posts()) : ?>
      <div class="news-thumbnails-list">
          <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
              <div class="news-thumbnail-item">
                  <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <div class="news__wrapper">
                            <?php the_post_thumbnail('full'); // アイキャッチ画像を表示 ?>
                            <div class="news--right">
                            <h2><?php the_title(); // 記事のタイトルを表示 ?></h2>
                            <p class="time"><?php echo get_the_date('Y.m.d'); // 投稿日を表示 ?></p>
                            <div class="comment">
                              <?php the_excerpt(); // 記事の内容を表示 ?>
                            </div>
                            </div>
                          </div>
                      </a>
                  <?php endif; ?>
              </div>
          <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>
  <?php else : ?>
      <p>製品が見つかりませんでした。</p>
  <?php endif;
}

// カスタム投稿一覧ページ

function display_product_latest_thumbnails__archive($posts_per_page = 5) {
  // 現在のページ番号を取得
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
      'post_type' => 'product',
      'posts_per_page' => $posts_per_page,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged // paged 引数を追加
  );

  $custom_query = new WP_Query($args);

  if ($custom_query->have_posts()) : ?>
      <div class="product-thumbnails-list">
          <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
              <div class="product-thumbnail-item">
                  <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>">
                          <?php the_post_thumbnail('full'); // アイキャッチ画像を表示 ?>
                          <h2><?php the_title(); // 記事のタイトルを表示 ?></h2>
                      </a>
                  <?php endif; ?>
              </div>
          <?php endwhile; ?>
      </div>

      <!-- ページネーションの表示 -->
      <div class="pagination">
          <?php
          echo paginate_links(array(
              'total' => $custom_query->max_num_pages,
              'current' => max(1, $paged), // 現在のページ番号を設定
              'prev_text' => __('«'),
              'next_text' => __('»')
          ));
          ?>
      </div>

      <?php wp_reset_postdata(); ?>
  <?php else : ?>
      <p>製品が見つかりませんでした。</p>
  <?php endif;
}









function display_news_latest_thumbnails_archive($posts_per_page = 5) {
  // 現在のページ番号を取得
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
      'post_type' => 'news',
      'posts_per_page' => $posts_per_page,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged // 現在のページ番号を追加
  );

  $custom_query = new WP_Query($args);

  if ($custom_query->have_posts()) : ?>
      <div class="news-thumbnails-list">
          <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
              <div class="news-thumbnail-item">
                  <?php if (has_post_thumbnail()) : ?>
                      <a href="<?php the_permalink(); ?>">
                        <div class="news__wrapper">
                            <?php the_post_thumbnail('full'); // アイキャッチ画像を表示 ?>
                            <div class="news--right">
                            <h2><?php the_title(); // 記事のタイトルを表示 ?></h2>
                            <p class="time"><?php echo get_the_date('Y.m.d'); // 投稿日を表示 ?></p>
                            <div class="comment">
                              <?php the_excerpt(); // 記事の内容を表示 ?>
                            </div>
                            </div>
                          </div>
                      </a>
                  <?php endif; ?>
              </div>
          <?php endwhile; ?>
      </div>
      
      <!-- ページネーションの追加 -->
      <div class="pagination">
          <?php
          echo paginate_links(array(
              'total' => $custom_query->max_num_pages,
              'current' => $paged,
              'prev_text' => __('&laquo;'),
              'next_text' => __('&raquo;')
          ));
          ?>
      </div>

      <?php wp_reset_postdata(); ?>
  <?php else : ?>
      <p>製品が見つかりませんでした。</p>
  <?php endif;
}

remove_filter('the_content', 'wpautop'); // 記事の自動整形を無効にする
remove_filter('the_excerpt', 'wpautop'); // 抜粋の自動整形を無効にする