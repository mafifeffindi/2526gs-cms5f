<?php get_header(); ?>

<main>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('large', ['style' => 'width:100%; border-radius:12px; margin-bottom:15px;']); ?>
          </div>
        <?php endif; ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Belum ada postingan.</p>
  <?php endif; ?>
</main>
<article>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-thumbnail">
      <?php the_post_thumbnail('large', ['style' => 'width:100%; border-radius:12px; margin-bottom:15px;']); ?>
    </div>
  <?php endif; ?>

  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <small class="post-meta">📅 <?php echo get_the_date(); ?> | ✍️ <?php the_author(); ?></small>
  <div><?php the_excerpt(); ?></div>
  <a class="read-more" href="<?php the_permalink(); ?>">Baca Selengkapnya →</a>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
