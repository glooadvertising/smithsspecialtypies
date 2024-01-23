<?php

function outfox_theme_styles_and_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', array(), false, 'all' );
}
add_action( 'wp_enqueue_scripts', 'outfox_theme_styles_and_scripts' );