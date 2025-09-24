<?php
// header.php
if (!defined('ABSPATH')) exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="site">
    <header class="site-header">
      <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
        <?php if (has_custom_logo()) { the_custom_logo(); } else { ?>
          <div class="logo"><?php echo strtoupper(substr(get_bloginfo('name'),0,1)); ?></div>
        <?php } ?>
        <div>
          <div class="site-title"><?php bloginfo('name'); ?></div>
          <div class="site-desc"><?php bloginfo('description'); ?></div>
        </div>
      </a>

      <nav class="main-nav">
        <?php
          wp_nav_menu(array(
            'theme_location'=>'primary',
            'container'=>'',
            'menu_class'=>'menu',
            'fallback_cb' => false
          ));
        ?>
      </nav>
      <button id="navToggle" class="nav-toggle" aria-controls="mobileMenu" aria-expanded="false">☰</button>
    </header>

    <div id="mobileMenu" class="mobile-menu" style="display:none;">
      <?php wp_nav_menu(array('theme_location'=>'primary','container'=>'','menu_class'=>'mobile-menu-list')); ?>
    </div>
