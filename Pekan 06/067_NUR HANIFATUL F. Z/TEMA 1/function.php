<?php
// Aktifkan menu
function tema_cms_hana_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tema-cms-hana'),
    ));
}
add_action('after_setup_theme', 'tema_cms_hana_setup');
?>
<?php
// Aktifkan menu
function tema_cms_hana_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'tema-cms-hana'),
        'secondary' => __('Secondary Menu', 'tema-cms-hana'),
    ));
}
add_action('after_setup_theme', 'tema_cms_hana_setup');
?>
