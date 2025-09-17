<?php get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><small>Diposting pada <?php echo get_the_date(); ?> oleh <?php the_author(); ?></small></p>
            <div><?php the_excerpt(); ?></div>
            <hr>

        <?php endwhile; ?>

        <div class="pagination">
            <?php posts_nav_link(' | ', '« Post Sebelumnya', 'Post Selanjutnya »'); ?>
        </div>
    <?php else : ?>
        <h2>Tidak ada postingan ditemukan.</h2>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

