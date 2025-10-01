<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <div class="logo">
    <a href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo">
    </a>
  </div>
  <nav>
    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => '',
        'items_wrap' => '<ul>%3$s</ul>',
      ));
    ?><nav>

  <ul>
    <li><a href="#">Beranda</a></li>
    <li><a href="#">Profil</a></li>
    <li><a href="#">Akademik</a></li>
    <li><a href="#">Galeri</a></li>
    <li><a href="#">Kontak</a></li>
  </ul>
</nav>

  </nav>
</header>

