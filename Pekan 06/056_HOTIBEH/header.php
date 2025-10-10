<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site-wrapper">
<header class="header">
<div class="site-brand">
<a class="logo" href="<?php echo esc_url(home_url('/')); ?>">A</a>
<div>
<div class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
<div class="site-desc"><?php bloginfo('description'); ?></div>
</div>
</div>


<nav class="nav">
<button class="menu-toggle" aria-expanded="false">☰</button>
<?php
wp_nav_menu(array(
'theme_location'=>'primary',
'container' => '',
'menu_class' => 'main-nav',
'link_before'=>'',
));
?>
</nav>
</header>


<div class="layout">
