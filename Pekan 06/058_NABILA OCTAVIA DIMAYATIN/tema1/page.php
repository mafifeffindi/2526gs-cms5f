<?php get_header(); ?>

<main class="container site-main">
  <div class="content-area">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; endif; ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
