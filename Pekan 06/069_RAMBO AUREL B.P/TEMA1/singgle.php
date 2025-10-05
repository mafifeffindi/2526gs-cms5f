<?php get_header(); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <div class="entry-meta">
                <p>Oleh <?php the_author(); ?> pada <?php the_time('F j, Y'); ?></p>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php
        endwhile;
    endif;
    ?>

<?php get_footer(); ?>