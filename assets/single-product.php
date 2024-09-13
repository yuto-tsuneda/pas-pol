<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>  <!--記事タイトル-->
    <?php the_content(); ?>  <!--記事本文-->
  <?php endwhile;?>
<?php endif; ?>


<img src="<?php the_field('main-image'); ?>" alt="">
<h2><?php the_field('page-title'); ?></h2>
<p><?php the_field('main-textarea'); ?></p>
<img src="<?php the_field('image1'); ?>" alt="">
<h2><?php the_field('item-title'); ?></h2>
<p><?php the_field('iteam-discription1'); ?></p>
<img src="<?php the_field('item-image1'); ?>" alt="">
<img src="<?php the_field('item-image2'); ?>" alt="">
<h2><?php the_field('iteam-title2'); ?></h2>
<p><?php the_field('iteam-discription2'); ?></p>


<div class="gotop">
  <p><a href="<?php echo home_url(); ?>"> < BACK TO TOP</a></p>
</div>


<?php get_footer(); ?>