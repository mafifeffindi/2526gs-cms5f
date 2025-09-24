<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="article-full">
        <header>
          <h2><?php the_title(); ?></h2>
          <div class="meta">Oleh: <?php the_author(); ?> — <?php the_time('j M Y'); ?></div>
        </header>
        <?php the_content(); ?>
        <?php
          // optional: comments template
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        ?>
      </article>
    <?php endwhile; else : ?>
      <article class="article-full"><p>Maaf, halaman tidak ditemukan!</p></article>
    <?php endif; ?>
  </section>
  <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
