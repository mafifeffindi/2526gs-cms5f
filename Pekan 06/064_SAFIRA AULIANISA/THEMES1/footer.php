<footer>
    <div class="footer-widgets">
        <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
        <?php endif; ?>
    </div>

    <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class'     => 'footer-menu',
    ));
    ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>