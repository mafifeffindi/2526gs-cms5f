<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="container">
      <div class="site-branding">
        <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
          the_custom_logo();
        } else { ?>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
        <?php } ?>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
      </div>
      <nav class="primary-menu">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav>
    </div>
  </header>
