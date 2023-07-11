<?php

/**
 * Enqueue scripts and styles.
 */
function dmz_ct_scripts() {
	wp_enqueue_style( 'dmz-ct-style', get_stylesheet_uri(), array(), DMZ_THEME_VERSION );
	wp_style_add_data( 'dmz-ct-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dmz-ct-navigation', get_template_directory_uri() . '/js/navigation.js', array(), DMZ_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'dmz_ct_scripts' );


