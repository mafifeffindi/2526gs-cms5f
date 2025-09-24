<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article class="article-loop">
          <header>
            <h2>
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
              </a>
            </h2>
            <p class="post-meta">Oleh: <?php the_author(); ?> | <?php echo get_the_date(); ?></p>
          </header>
          <div class="entry-summary">
            <?php the_excerpt(); ?>
          </div>
          <a class="read-more" href="<?php the_permalink(); ?>">Baca Selengkapnya &raquo;</a>
        </article>
      <?php endwhile; ?>

      <!-- Navigasi Pagination -->
      <nav class="post-navigation">
        <div class="nav-previous"><?php next_posts_link('&laquo; Postingan Lama'); ?></div>
        <div class="nav-next"><?php previous_posts_link('Postingan Baru &raquo;'); ?></div>
      </nav>

    <?php else : ?>
      <article class="no-posts">
        <p>Maaf, tidak ada posting yang ditemukan!</p>
      </article>
    <?php endif; ?>
  </section>

  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
