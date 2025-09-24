<aside class="sidebar">
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <p>Tambahkan widget di sidebar dari menu admin WP.</p>
    <?php endif; ?>
</aside>