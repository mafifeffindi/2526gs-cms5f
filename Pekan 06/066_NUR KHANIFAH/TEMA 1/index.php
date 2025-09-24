<?php
// INDEX.PHP - list posts in grid
get_header();
?>

<section class="post-list container-inner">
  <h2 class="section-title">Cerita Terbaru</h2>
  <div class="grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
        <a class="card-thumb" href="<?php the_permalink(); ?>">
          <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('card-medium');
            } else {
              echo '<img src="https://source.unsplash.com/800x600/?travel,landscape" alt="image">';
            }
          ?>
        </a>
        <div class="card-body">
          <div class="card-cat"><?php the_category(', '); ?></div>
          <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <div class="card-meta">✍ <?php the_author(); ?> • <?php the_time('j M Y'); ?></div>
          <p class="card-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 28); ?></p>
          <a class="readmore" href="<?php the_permalink(); ?>">Baca Selengkapnya →</a>
        </div>
      </article>
    <?php endwhile; else: ?>
      <p>Tidak ada artikel. Mulai tulis petualangan pertamamu!</p>
    <?php endif; ?>
  </div>

  <div class="pagination">
    <?php
      the_posts_pagination(array(
        'mid_size' => 1,
        'prev_text' => '← Sebelumnya',
        'next_text' => 'Selanjutnya →',
      ));
    ?>
  </div>
</section>

<?php get_footer(); ?>

