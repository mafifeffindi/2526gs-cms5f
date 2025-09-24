<aside id="sidebar" class="sidebar">
  <?php if (is_active_sidebar('sidebar-1')) : ?>
    <?php dynamic_sidebar('sidebar-1'); ?>
  <?php else: ?>
    <div class="widget">
      <h3 class="widget-title">Tentang Penulis</h3>
      <p>Halo! Aku petualang yang senang berbagi cerita. Mulai tulis kisahmu sekarang.</p>
    </div>
  <?php endif; ?>
</aside>
