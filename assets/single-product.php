<?php get_header(); ?>

<div class="main">
  <div class="main__visual">
    
  </div>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>  <!--記事タイトル-->
    <?php the_content(); ?>  <!--記事本文-->
  <?php endwhile;?>
<?php endif; ?>

</div>

<?php get_footer(); ?>