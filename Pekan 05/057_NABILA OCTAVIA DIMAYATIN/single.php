<?php get_header(); ?>

<main id="main-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="post-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    Diposting pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?>
                </div>
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-tags">
                    <?php the_tags('<span class="tag">', ', ', '</span>'); ?>
                </div>
            </article>

            <nav class="post-navigation">
                <div class="prev"><?php previous_post_link(); ?></div>
                <div class="next"><?php next_post_link(); ?></div>
            </nav>

            <?php comments_template(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>