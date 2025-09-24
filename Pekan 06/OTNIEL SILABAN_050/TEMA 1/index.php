<?php get_header(); ?>

<main class="content-area">
  <section class="site-main">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <h2 class="entry-title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <div class="post-meta">
              Diposting pada <?php the_time('d M Y'); ?> oleh <?php the_author(); ?>
            </div>
          </header>

          <div class="entry-content">
            <?php the_excerpt(); ?>
          </div>

          <footer class="entry-footer">
            <a href="<?php the_permalink(); ?>">Baca Selengkapnya</a>
          </footer>
        </article>
      <?php endwhile; ?>

      <div class="pagination">
        <?php the_posts_navigation(); ?>
      </div>
    <?php else : ?>
      <p>Belum ada postingan.</p>
    <?php endif; ?>
  </section>

  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
