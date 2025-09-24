<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=7.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="header">
    <div class="logo"><?php bloginfo('name'); ?></div>
    <div class="user-info">
        <span>Hai, <?php bloginfo('name'); ?></span>
    </div>
</div>

<nav class="nav">
    <div class="nav-content">
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#data-pribadi">Data Pribadi</a></li>
            <li><a href="#prestasi">Prestasi</a></li>
            <li><a href="#pengalaman">Pengalaman</a></li>
            <li><a href="#keahlian">Keahlian</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </div>
</nav>

<div class="container">
