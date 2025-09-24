<?php get_header(); ?>

<main class="container site-main">
  <div class="content-area">
    <?php if ( have_posts() ) :
      while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="entry-meta">Posted on <?php the_time( 'F j, Y' ); ?> by <?php the_author(); ?></div>
          <div class="entry-content"><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile;
      the_posts_pagination();
    else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
  </div>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
