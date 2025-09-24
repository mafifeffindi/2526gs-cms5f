<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="container">
    <div class="site-brand">
      <div class="logo"><?php echo strtoupper(substr(get_bloginfo('name'),0,1)); ?></div>
      <div>
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="site-desc"><?php bloginfo('description'); ?></p>
      </div>
    </div>

    <nav class="main-nav" role="navigation" aria-label="<?php esc_attr_e('Primary Menu','pastel-theme'); ?>">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'items_wrap' => '<ul>%3$s</ul>'
        ));
      ?>
    </nav>
  </div>
</header>

<?php
// Hero: gunakan screenshot.png di folder theme sebagai background jika ada
$hero_image = get_theme_file_uri('/screenshot.png');
?>
<section class="hero" style="background-image:linear-gradient(rgba(255,154,162,.48), rgba(162,155,254,.34)), url('<?php echo esc_url($hero_image); ?>');">
  <div class="hero-inner">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>
</section>
