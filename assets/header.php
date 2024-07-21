<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>
<body>

<header class="header">
  <div class="header__logo"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/siteLogo-pc@2x.png" alt=""></a></div>
  <nav class="header__pc--nav">
    <ul>
      <li>TOP</li>
      <li>PRODUCT</li>
      <li>ABOUT</li>
      <li>NEWS</li>
      <li>CONTACT</li>
    </ul>
  </nav>
</header>