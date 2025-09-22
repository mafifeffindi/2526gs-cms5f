<aside id="sidebar">
    <?php if ( is_active_sidebar('main-sidebar') ) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <div class="widget">
            <h3 class="widget-title">Sidebar Default</h3>
            <p>Tambahkan widget lewat menu <strong>Appearance → Widgets</strong>.</p>
        </div>
    <?php endif; ?>
</aside>
