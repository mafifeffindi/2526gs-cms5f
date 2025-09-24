<?php get_header(); ?>

<main class="content-area">
  <section class="site-main">
    <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/content', 'page' );
    endwhile;
    ?>
  </section>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
