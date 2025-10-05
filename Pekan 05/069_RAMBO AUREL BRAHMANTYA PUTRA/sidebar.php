<aside class="site-sidebar">
    <?php if ( is_active_sidebar('sidebar-1') ) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <div class="widget">
            <h3 class="widget-title">Widget Default</h3>
            <p>Tambahkan widget di Appearance → Widgets.</p>
        </div>
    <?php endif; ?>
</aside>
