<aside class="widget-area">
  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <?php else : ?>
    <div class="widget">
      <h2 class="widget-title">Sidebar</h2>
      <p>Tambahkan widget di <em>Appearance → Widgets</em>.</p>
    </div>
  <?php endif; ?>
</aside>
