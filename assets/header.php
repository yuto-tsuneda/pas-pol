<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <div class="header__logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/siteLogo-sp@2x.png" alt=""></a></div>
  <nav class="header__pc--nav">
    <ul>
      <li><a href="<?php echo home_url(); ?>">TOP</a></li>
      <li><a href="<?php echo get_post_type_archive_link('product'); ?>">PRODUCT</a></li>
      <li>ABOUT</li>
      <li><a href="<?php echo get_post_type_archive_link('news'); ?>">NEWS</a></li>
      <li>CONTACT</li>
    </ul>
    <div class="header__sp">
      <div class="header__sp--menu">
        <p>MENU</p>
        <div class="header__sp--humberger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </nav>
</header>