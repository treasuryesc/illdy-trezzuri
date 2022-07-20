<?php

add_action( 'wp_enqueue_scripts', 'child_enqueue_style' );
add_action( 'after_setup_theme', 'child_after_setup_theme' ); 

function child_enqueue_style () {
    wp_enqueue_style( 'illdy-trezzuri', get_template_directory_uri() . '/style.css' ); 
} 

function child_after_setup_theme () {
    load_child_theme_textdomain( 'illdy', get_stylesheet_directory() . '/languages' );
    add_image_size( 'illdy-blog-list', 500, 500, true );
} 