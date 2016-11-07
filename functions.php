<?php 

function honda_styles() {
	wp_enqueue_style( 'bootstrap_styles', get_stylesheet_directory_uri() . "/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style( 'main_styles', get_stylesheet_uri() . "?v=3.4.2");
}
add_action( 'wp_enqueue_scripts', 'honda_styles' );



