<aside id="sidebar">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    <?php else : ?>
        <p>Tambahkan widget di Sidebar dari Dashboard WordPress.</p>
    <?php endif; ?>
</aside>
