<?php
function pixora_theme_setup() {
    // Support menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'pixora'),
    ));
}
add_action('after_setup_theme', 'pixora_theme_setup');

function pixora_scripts() { 
    wp_enqueue_style('pixora-style', get_stylesheet_uri());
    wp_enqueue_style('pixora-posts', get_template_directory_uri() . '/css/posts.css', array('pixora-style'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'pixora_scripts');

add_theme_support( 'post-thumbnails' );