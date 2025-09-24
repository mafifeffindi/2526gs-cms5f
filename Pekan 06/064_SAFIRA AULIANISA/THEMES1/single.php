<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title"><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span>Ditulis oleh <?php the_author(); ?> pada <?php the_time('d M Y'); ?></span>
                </div>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <div class="post-navigation">
                    <div class="prev"><?php previous_post_link('%link', '← Post Sebelumnya'); ?></div>
                    <div class="next"><?php next_post_link('%link', 'Post Selanjutnya →'); ?></div>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Postingan tidak ditemukan.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>