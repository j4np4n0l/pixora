<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="site-logo">
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
        </div>
        <?php if ( ! has_custom_logo() ) : ?>
            <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></span>
        <?php endif; ?>
        <nav>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,  
                'menu_class'     => 'main-nav'
            )); 
            ?>
        </nav>
    </header>