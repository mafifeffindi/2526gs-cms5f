<?php get_header(); ?> 

<main id="content">
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; 
    else : ?>
        <p>Maaf, tidak ada postingan ditemukan.</p>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
