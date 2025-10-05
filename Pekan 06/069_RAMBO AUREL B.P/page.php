<?php get_header(); ?>

<main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="page-title"><?php the_title(); ?></h1>
                
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </article>

            <?php
            // Menampilkan komentar jika diaktifkan untuk halaman ini
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    <?php else : ?>
        <article class="no-page">
            <h2>Halaman tidak ditemukan</h2>
            <p>Maaf, halaman yang Anda cari tidak tersedia.</p>
        </article>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>