<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="site-branding">
        <?php 
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } 
        ?>
        <h1 class="site-title">
            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p class="site-description"><?php bloginfo('description'); ?></p>
    </div>

    <nav class="site-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'primary-menu',
        ));
        ?>
    </nav>
</header>