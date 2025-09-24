<aside class="sidebar">
  <div class="sidebar-inner">
    <?php if ( is_active_sidebar('primary-sidebar') ) : ?>
      <?php dynamic_sidebar('primary-sidebar'); ?>
    <?php else: ?>
      <div class="widget">
        <h4>About</h4>
        <p>Tambahkan widget di Appearance → Widgets untuk mengisi sidebar ini.</p>
      </div>
    <?php endif; ?>
  </div>
</aside>
