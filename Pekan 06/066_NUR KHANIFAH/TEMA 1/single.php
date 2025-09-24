<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
<article class="single-post container-inner">
  <header class="single-header">
    <h1><?php the_title(); ?></h1>
    <div class="single-meta">✍ <?php the_author(); ?> • <?php the_time('j F Y'); ?></div>
  </header>

  <div class="single-thumbnail">
    <?php
      if (has_post_thumbnail()) the_post_thumbnail('hero-large');
      else echo '<img src="https://source.unsplash.com/1200x600/?hiking,mountain" alt="">';
    ?>
  </div>

  <div class="single-content">
    <?php the_content(); ?>
  </div>

  <footer class="single-footer">
    <p class="tags">Kategori: <?php the_category(', '); ?></p>
  </footer>

  <?php
    // comments template (optional)
    if (comments_open() || get_comments_number()) {
      comments_template();
    }
  ?>
</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
