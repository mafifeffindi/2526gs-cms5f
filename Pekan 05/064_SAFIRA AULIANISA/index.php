<?php get_header(); ?> 

<main id="main-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <div class="post-meta">
                    Diposting pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>

        <?php endwhile; ?>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>
        <p>Tidak ada postingan ditemukan.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
