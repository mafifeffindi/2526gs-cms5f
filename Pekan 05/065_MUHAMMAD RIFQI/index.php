<?php get_header(); ?>

<main id="content">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <h2 class="entry-title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="entry-content">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; ?>

    <div class="pagination">
      <?php posts_nav_link(); ?>
    </div>

  <?php else : ?>
    <p>Tidak ada konten ditemukan.</p>
  <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
