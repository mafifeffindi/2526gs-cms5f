<aside class="widget-area" role="complementary">
  <div class="container">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) :
      dynamic_sidebar( 'sidebar-1' );
    else: ?>
      <section class="widget">
        <h3 class="widget-title">Search</h3>
        <?php get_search_form(); ?>
      </section>
      <section class="widget">
        <h3 class="widget-title">Recent Posts</h3>
        <ul>
          <?php wp_get_archives( array( 'type' => 'postbypost', 'limit' => 5 ) ); ?>
        </ul>
      </section>
    <?php endif; ?>
  </div>
</aside>
