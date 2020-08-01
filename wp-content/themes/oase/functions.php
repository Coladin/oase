<?php
function oase_register_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style( 'oase', get_stylesheet_uri(), array(), $theme_version );
    wp_style_add_data( 'oase-style', 'rtl', 'replace' );

    // Add output of Customizer settings as inline style.
//    wp_add_inline_style( 'oase-style', twentytwenty_get_customizer_css( 'front-end' ) );

    // Add print CSS.
    wp_enqueue_style( 'oase-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
}

add_action( 'wp_enqueue_scripts', 'oase_register_styles' );