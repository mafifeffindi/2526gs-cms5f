<?php get_header(); ?>

<main id="content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <div class="entry-meta">
        <span>Ditulis oleh <?php the_author(); ?> pada <?php the_time('d M Y'); ?></span>
      </div>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <div class="post-navigation">
        <?php previous_post_link('%link', '← Sebelumnya'); ?> |
        <?php next_post_link('%link', 'Berikutnya →'); ?>
      </div>
    </article>

    <?php comments_template(); ?>

  <?php endwhile; endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
