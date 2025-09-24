<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">
    <header class="site-header">
      <div class="site-branding">
        <?php
        if ( has_custom_logo() ) {
          the_custom_logo();
        } else {
          ?>
          <h1 class="site-title">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <?php bloginfo( 'name' ); ?>
            </a>
          </h1>
          <p class="site-description"><?php bloginfo( 'description' ); ?></p>
          <?php
        }
        ?>
      </div>

      <nav class="site-nav">
        <?php
        wp_nav_menu( array(
          'theme_location' => 'primary',
          'menu_id'        => 'primary-menu',
        ) );
        ?>
      </nav>
    </header>
