<?php get_header(); ?>

<main class="container">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article class="post-card">
        <?php if ( has_post_thumbnail() ) : ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', ['style' => 'width:100%; border-radius:8px;']); ?>
          </a>
        <?php endif; ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><small>📅 <?php echo get_the_date(); ?> · ✍️ <?php the_author(); ?></small></p>
        
        <div><?php the_excerpt(); ?></div>
        <a href="<?php the_permalink(); ?>" class="btn-read">Baca Selengkapnya →</a>
      </article>
    <?php endwhile; ?>

    <div class="pagination">
      <?php the_posts_pagination(); ?>
    </div>
  <?php else : ?>
    <h2>Tidak ada postingan ditemukan.</h2>
  <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

