<?php get_header(); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <h1><?php the_title(); ?></h1>  <!--記事タイトル-->
    <?php the_content(); ?>  <!--記事本文-->
  <?php endwhile;?>
<?php endif; ?>

<div class="gotop">
  <p><a href="<?php echo home_url(); ?>"> < BACK TO TOP</a></p>
</div>


<?php get_footer(); ?>