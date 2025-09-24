<?php get_header(); ?>

<main>
    <h1 class="search-title">
        Hasil pencarian untuk: "<?php echo get_search_query(); ?>"
    </h1>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <p>Tidak ada hasil ditemukan. Coba kata kunci lain.</p>
        <?php get_search_form(); ?>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>