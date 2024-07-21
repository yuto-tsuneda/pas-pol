<?php

function theme_enqueue_scripts() {
  
  wp_enqueue_script('jquery');

  $theme_directory = get_template_directory_uri();

  wp_enqueue_style('reset-style', $theme_directory . '/css/reset.css');
  wp_enqueue_style( 'common-style', $theme_directory . '/css/common.css', array('reset-style'), null);
  wp_enqueue_script( 'common-script', $theme_directory . '/js/common.js', array('jquery'), null, true);

  if(is_front_page()){
    wp_enqueue_style('front-style', $theme_directory . '/css/front.css', array('common.style'));
    wp_enqueue_script( 'front-script', $theme_directory . '/js/front.js', array('jquery'), null, true);
  }

  if(is_singular('news') || is_post_type_archive('news')){
    wp_enqueue_style('news-style', $theme_directory . '/css/news.css', array('common-style'));
    wp_enqueue_script('news-script', $theme_directory . '/js/news.js', array('jquery'), null, true);
  }

  if(is_singular('product') || is_post_type_archive('product')){
    wp_enqueue_style('product-style', $theme_directory . '/css/product.css', array('common-style'));
    wp_enqueue_script('product-script', $theme_directory . '/js/product.js', array('jquery'), null, true);
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