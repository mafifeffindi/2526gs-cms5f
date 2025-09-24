<?php get_header(); ?>
<main class="wrap">
  <div class="main-grid">
    <section class="content-area content-thin">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-loop">
          <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="meta">Oleh: <?php the_author(); ?> — <?php the_time('j M Y'); ?></div>
          </header>
          <?php the_excerpt(); ?>
        </article>
      <?php endwhile; else : ?>
        <article class="article-loop">
          <p>Maaf, tidak ada posting yang ditemukan!</p>
        </article>
      <?php endif; ?>

      <!-- Pagination simple -->
      <div class="pagination">
        <?php
          the_posts_pagination(array(
            'mid_size' => 1,
            'prev_text' => __('&laquo;'),
            'next_text' => __('&raquo;'),
          ));
        ?>
      </div>
    </section>

    <?php get_sidebar(); ?>
  </div>
</main>
<?php get_footer(); ?>
