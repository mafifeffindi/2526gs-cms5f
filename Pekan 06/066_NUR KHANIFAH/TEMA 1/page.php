<?php get_header(); ?>
<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article class="page container-inner">
    <h1><?php the_title(); ?></h1>
    <div class="page-content"><?php the_content(); ?></div>
  </article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
