<footer>
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>. Semua hak dilindungi.</p>

        <nav>
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'footer-menu'
                ));
            ?>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
