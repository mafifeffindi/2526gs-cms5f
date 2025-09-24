<aside id="sidebar" class="widget-area" role="complementary">
  <?php if ( is_active_sidebar('main-sidebar') ) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php else : ?>
    <div class="widget">
      <h3 class="widget-title"><?php _e('Tentang','pastel-theme'); ?></h3>
      <p><?php bloginfo('description'); ?></p>
    </div>

    <div class="widget">
      <h3 class="widget-title"><?php _e('Cari','pastel-theme'); ?></h3>
      <?php get_search_form(); ?>
    </div>

    <div class="widget">
      <h3 class="widget-title"><?php _e('Kategori Populer','pastel-theme'); ?></h3>
      <ul>
        <?php wp_list_categories(array('title_li' => '', 'number' => 6)); ?>
      </ul>
    </div>
  <?php endif; ?>
</aside>
