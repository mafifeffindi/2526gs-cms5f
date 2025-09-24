<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style>
    .site-branding img{max-height:56px; display:inline-block; vertical-align:middle;}
  </style>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-top container-inner">
    <div class="site-branding">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
      </a>
      <div class="brand-text">
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="site-tagline">Petualangan Seru, Cerita Nyata</p>
      </div>
    </div>

    <nav class="site-nav" aria-label="Main navigation">
      <?php
        wp_nav_menu(array(
          'theme_location' => 'main-menu',
          'container' => false,
          'menu_class' => 'main-menu',
          'fallback_cb' => 'wp_page_menu'
        ));
      ?>
      <button class="nav-toggle" aria-expanded="false">Menu</button>
    </nav>
  </div>

  <?php
  $latest = new WP_Query(array('posts_per_page' => 1));
  if ($latest->have_posts()):
    while($latest->have_posts()): $latest->the_post();
      $url = get_the_post_thumbnail_url(get_the_ID(), 'hero-large');
      if (!$url) $url = 'https://source.unsplash.com/1600x700/?adventure,nature';
  ?>
    <div class="hero" style="background-image:url('<?php echo esc_url($url); ?>')">
      <div class="hero-inner container-inner">
        <div class="hero-meta"><?php the_category(', '); ?></div>
        <h2 class="hero-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="hero-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 28); ?></p>
        <a class="hero-btn" href="<?php the_permalink(); ?>">Baca Cerita</a>
      </div>
    </div>
  <?php
    endwhile;
    wp_reset_postdata();
  endif;
  ?>
</header>

<main class="site-main container-inner">
