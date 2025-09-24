<aside id="sidebar" class="container">
  <?php if ( is_active_sidebar('main-sidebar') ) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php else : ?>
    <div class="widget">
      <h3>Widget Default</h3>
      <p>Tambahkan widget dari <strong>Appearance → Widgets</strong>.</p>
    </div>
  <?php endif; ?>
</aside>
