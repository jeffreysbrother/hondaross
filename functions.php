<?php 

function honda_styles() {
    wp_enqueue_style( 'main_styles', get_stylesheet_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'honda_styles' );