<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col">
        <h4><?php _e('Tentang Kami','pastel-theme'); ?></h4>
        <p><?php bloginfo('description'); ?></p>
      </div>

      <div class="footer-col">
        <h4><?php _e('Menu','pastel-theme'); ?></h4>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => false,
            'depth' => 1
          ));
        ?>
      </div>

      <div class="footer-col">
        <h4><?php _e('Kontak','pastel-theme'); ?></h4>
        <p>Email: <a href="mailto:info@example.com">info@example.com</a></p>
        <p>HP: +62 857-0451-4344</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> · <?php _e('Dibuat dengan','pastel-theme'); ?> ❤</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
