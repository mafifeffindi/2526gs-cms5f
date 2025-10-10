<?php get_header(); ?>


<main class="main">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('card post animate-fade'); ?>>
<?php if(has_post_thumbnail()): ?>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
<?php endif; ?>


<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="meta">Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></div>
<div class="excerpt"><?php the_excerpt(); ?></div>
<p><a href="<?php the_permalink(); ?>">Read more →</a></p>
</article>
<?php endwhile; else: ?>
<div class="card">
<h2>Nothing found</h2>
<p>Sorry, no posts matched your criteria.</p>
</div>
<?php endif; ?>


<?php the_posts_pagination(array('mid_size'=>1,'prev_text'=>'←','next_text'=>'→')); ?>
</main>


<?php get_sidebar(); ?>
<?php get_footer(); ?>