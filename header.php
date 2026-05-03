<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="primary_header">
        <div class="logo_container">
            <?php 
            if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                the_custom_logo();
            } else {
                echo '<h1><a href="' . esc_url( home_url( '/' ) ) . '" class="flex" style="color: var(--color-white);">' . get_bloginfo('name') . '</a></h1>';
            }
            ?>
        </div>
        
        <nav class="navigation_menu_container">
            <button class="mobile_nav_toggle" aria-controls="primary_nav">
                <svg class="menu_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path class="icon_path" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                <span class="screen_reader_only">Menu</span>
            </button>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '<ul id="primary_nav" class="primary_nav" data-visible="false">%3$s</ul>'
            )); 
            ?>
        </nav>
    </div>
</header>