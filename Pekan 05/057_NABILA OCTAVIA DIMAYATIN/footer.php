<footer id="site-footer">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?> | Powered by WordPress</p>
        
        <nav id="footer-nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'footer-menu'
            ));
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>