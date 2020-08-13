<?php
function oase_register_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );

//    wp_enqueue_style( 'oase', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme_version );
//    wp_style_add_data( 'oase-style', 'rtl', 'replace' );

    // Add output of Customizer settings as inline style.
//    wp_add_inline_style( 'oase-style', twentytwenty_get_customizer_css( 'front-end' ) );

    // Add print CSS.
    wp_enqueue_style( 'oase-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
}

add_action( 'wp_enqueue_scripts', 'oase_register_styles' );

// Add specific CSS class by filter.
add_filter( 'body_class','container' );
function container( $classes ) {
	$classes[] = 'container';
//	$classes[] = 'm-auto';
	return $classes;
}

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(
	array(
		'oase' => __( 'Primary', 'oase' ),
		'mali-menu' => __( 'Secondary', 'mali-menu' ),
	)
);

/**
 * Enqueue scripts and styles.
 */
function oase_scripts() {

	if ( has_nav_menu( 'oase' ) ) {
		wp_enqueue_script( 'oase-priority-menu', get_theme_file_uri( '/js/priority-menu.js' ), array(), '20181214', true );
//		wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '20181231', true );
	}
	
	wp_enqueue_style( 'twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

}
add_action( 'wp_enqueue_scripts', 'oase_scripts' );
