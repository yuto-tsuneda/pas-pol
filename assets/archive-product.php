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
      <?php display_product_latest_thumbnails__archive(12); ?>
    </div>
  </div>

<div class="gotop">
  <p><a href="<?php echo home_url(); ?>"> < BACK TO TOP</a></p>
</div>



<?php get_footer(); ?>