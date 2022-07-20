<?php

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'illdy', get_template_directory_uri() . '/style.css' ); 
} );

add_action( 'after_setup_theme', function () {
    load_child_theme_textdomain( 'illdy', get_stylesheet_directory() . '/languages' );
} );

