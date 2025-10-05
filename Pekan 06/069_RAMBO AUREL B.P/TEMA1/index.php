<?php get_header(); ?>

<div class="site-content">
    <div class="main-column">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
            endwhile;
        else :
            echo '<p>Maaf, tidak ada postingan yang ditemukan.</p>';
        endif;
        ?>
    </div>

    <div class="sidebar-column">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>