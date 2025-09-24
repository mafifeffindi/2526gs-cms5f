</main> <!-- .site-main -->

<footer class="site-footer">
  <div class="container-inner footer-grid">
    <div class="f-col">
      <h3><?php bloginfo('name'); ?></h3>
      <p class="footer-tag">Jelajahi, Rasakan, Ceritakan kembali.</p>
      <small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</small>
    </div>
    <div class="f-col">
      <h4>Menu</h4>
      <?php wp_nav_menu(array('theme_location' => 'main-menu','container'=>false,'menu_class'=>'footer-menu')); ?>
    </div>
    <div class="f-col">
      <h4>Ikuti Kami</h4>
      <p>Instagram • YouTube • Twitter</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
