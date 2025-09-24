<?php get_header(); ?>
<main class="wrap">
<section class="content-area content-thin">
<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article class="article-full">
<header>
<h2><?php the_title(); ?></h2>
Oleh: <?php the_author(); ?>
</header>
<?php the_content(); ?>
</article>
<?php endwhile; else : ?>
<article>
    @media screen and (max-width: 400px) {
.content-area,
.primary-sidebar {
width: 100%;
}
}
<p>Maaf, halaman tidak ditemukan!</p>
</article>
<?php endif; ?>
</section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>