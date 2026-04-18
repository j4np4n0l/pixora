<?php
function pixora_theme_setup() {
    // Support menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pixora'),
    ));
}
add_action('after_setup_theme', 'pixora_theme_setup');

function pixora_scripts() { 
    // Pulls in style.css file
    wp_enqueue_style('pixora-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'pixora_scripts');