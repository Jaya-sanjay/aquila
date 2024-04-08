<?php
/**
 * Theme Custom Functions.
 *
 * @package Aquila
 */


// Register Custom Navigation Menu
function custom_theme_register_menus() {
    register_nav_menus(
        array(
            'custom-menu' => __( 'Custom Menu' ),
        )
    );
}
add_action( 'init', 'custom_theme_register_menus' );


// Custom CSS
function theme_enqueue_styles() {
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/custom.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Define default button text
function my_theme_default_button_text() {
    return 'Default Button Text';
}

// Register setting for button text
function my_theme_customize_register($wp_customize) {
    $wp_customize->add_setting('button_text_setting', array(
        'default' => my_theme_default_button_text(),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('button_text_control', array(
        'label' => __('Button Text', 'my-theme'),
        'section' => 'title_tagline',
        'settings' => 'button_text_setting',
        'type' => 'text',
    ));
}
add_action('customize_register', 'my_theme_customize_register');

function register_custom_footer_menus() {
    register_nav_menus(
        array(
            'resources' => __( 'Resources', 'aquila' ),
            'quick-link' => __( 'Quick Link', 'aquila' ),
            'legal' => __( 'Legal', 'aquila' ),
        )
    );
}
add_action( 'init', 'register_custom_footer_menus' );

