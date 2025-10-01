<?php get_header(); ?>

<main id="main" class="site-main">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
        </header>
        
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
        
        <footer class="entry-footer">
          <a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya</a>
        </footer>
      </article>
    <?php endwhile; ?>
    
    <div class="pagination">
      <?php
        the_posts_pagination( array(
          'prev_text' => '&laquo; Sebelumnya',
          'next_text' => 'Selanjutnya &raquo;',
        ) );
      ?>
    </div>

  <?php else : ?>
    <article class="no-posts">
      <h2>Tidak ada artikel</h2>
      <p>Konten akan segera hadir.</p>
    </article>
  <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

