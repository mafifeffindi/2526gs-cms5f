<?php get_header(); ?>

<main id="main" class="site-main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <div class="entry-meta">
                    <span>Ditulis oleh <?php the_author(); ?> pada <?php the_time('d M Y'); ?></span>
                </div>

                <div class="entry-content">
                    <?php if ( is_singular() ) : ?>
                        <?php the_content(); ?>
                    <?php else : ?>
                        <?php the_excerpt(); ?>
                    <?php endif; ?>
                </div>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php
            // Navigasi bawaan WordPress (sejak WP 4.1+)
            the_posts_pagination( array(
                'prev_text' => '← Sebelumnya',
                'next_text' => 'Berikutnya →',
            ) );
            ?>
        </div>

    <?php else : ?>
        <article class="no-posts">
            <h2>Tidak ada postingan</h2>
            <p>Konten belum tersedia.</p>
        </article>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
