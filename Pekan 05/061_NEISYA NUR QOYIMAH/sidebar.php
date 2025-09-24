<aside class="sidebar">
  <?php if(is_active_sidebar('main-sidebar')) : ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php else : ?>
    <p>Tambahkan widget di Sidebar.</p>
  <?php endif; ?>
</aside>