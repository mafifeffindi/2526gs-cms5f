<?php get_header(); ?>

<div class="main-content container">
    <main>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <span>By <?php the_author(); ?> | <?php the_time('F j, Y'); ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Baca selengkapnya...</a>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« Prev', 'mytheme'),
                    'next_text' => __('Next »', 'mytheme'),
                ));
                ?>
            </div>

        <?php else : ?>
            <article>
                <h2>HALLO! SELAMAT DATANG NUR KHANIFAH</h2>
                <p>Ini adalah tampilan baru kamu.</p>
            </article>
        <?php endif; ?>
    </main>

    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
