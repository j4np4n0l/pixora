<?php
function pixora_theme_setup() {
    // Support menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pixora'),
    ));
}
add_action('after_setup_theme', 'pixora_theme_setup');