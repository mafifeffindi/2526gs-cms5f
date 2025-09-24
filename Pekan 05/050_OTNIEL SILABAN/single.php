<?php get_header(); ?>

<main class="content-area">
  <section class="site-main">
    <?php
    while ( have_posts() ) : the_post();
      get_template_part( 'template-parts/content', get_post_type() );
      the_post_navigation();
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;
    endwhile;
    ?>
  </section>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
