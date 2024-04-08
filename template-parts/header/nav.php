<?php
/**
 * Header Navigation template.
 *
 * @package Aquila
 */

$menu_class     = \Aquila_Theme\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'aquila-header-menu' );
$header_menus   = wp_get_nav_menu_items( $header_menu_id );
?>

<div class="container">
    <div class="logo"><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?></div>
    <div class="menu"><?php
        // Display Custom Menu
        wp_nav_menu(array(
            'theme_location' => 'custom-menu',
            'menu_class' => 'custom-menu-class', // Optional CSS class for the menu
            // Add more parameters as needed
        ));
    ?></div>
<div class="button">
    <a href="#" class="btn"><?php echo esc_html(get_theme_mod('button_text_setting', my_theme_default_button_text())); ?></a>
     </div>
</div>
