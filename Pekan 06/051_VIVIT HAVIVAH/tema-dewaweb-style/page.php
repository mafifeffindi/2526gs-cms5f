<?php
// page.php
if (!defined('ABSPATH')) exit;
get_header();
?>

<main class="site">
  <section class="content-grid">
    <main class="content-area">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article-full" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header><h1><?php the_title(); ?></h1></header>
          <div class="article-content"><?php the_content(); ?></div>
        </article>
      <?php endwhile; else : ?>
        <article><p>Maaf, halaman tidak ditemukan.</p></article>
      <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
  </section>
</main>

<?php get_footer(); ?>
