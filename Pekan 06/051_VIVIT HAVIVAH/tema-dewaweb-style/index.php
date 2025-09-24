<?php
// index.php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main class="site">
  <section class="content-grid">
    <main class="content-area">
      <?php if ( have_posts() ) : ?>
        <div class="posts-grid">
          <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
              <?php if ( has_post_thumbnail() ) : ?>
                <a class="thumb-wrap" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
              <?php endif; ?>

              <div class="post-body">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-meta">
                  <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                  <span class="sep">•</span>
                  <span class="author"><?php the_author(); ?></span>
                </div>
                <div class="excerpt"><?php the_excerpt(); ?></div>
                <a class="read-more" href="<?php the_permalink(); ?>">Baca Selengkapnya →</a>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <div class="pagination-wrap">
          <?php
            the_posts_pagination(array(
              'mid_size' => 1,
              'prev_text' => '← Sebelumnya',
              'next_text' => 'Berikutnya →'
            ));
          ?>
        </div>
      <?php else : ?>
        <div class="no-posts">
          <h2>Maaf, tidak ada posting.</h2>
        </div>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </section>
</main>

<?php get_footer(); ?>
