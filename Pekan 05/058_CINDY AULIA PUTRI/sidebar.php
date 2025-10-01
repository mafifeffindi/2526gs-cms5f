<aside id="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <?php else : ?>
        <p>Tambahkan widget di Dashboard → Appearance → Widgets.</p>
    <?php endif; ?>
</aside>

