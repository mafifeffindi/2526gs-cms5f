<?php
// single.php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main class="site">
  <section class="content-grid">
    <main class="content-area">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-full" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
              <?php echo get_the_date(); ?> • <?php the_author(); ?>
            </div>
          </header>

          <div class="article-content"><?php the_content(); ?></div>

          <?php
            // comments template (if enabled)
            if (comments_open() || get_comments_number()) {
              comments_template();
            }
          ?>
        </article>
      <?php endwhile; else : ?>
        <article><p>Maaf, posting tidak ditemukan.</p></article>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </section>
</main>

<?php get_footer(); ?>
