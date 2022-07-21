<?php 

add_theme_support( 'post-thumbnails', 'menus' );

add_action( 'init', 'register_menus' );

function register_menus() {
    register_nav_menus( 
        array (
            'Primary Menu' => __('Primary Menu'),
            'Secondary Menu' => __('Secondary Menu')
            )
        );
}

// Load Styles

function load_styles() {

    wp_register_style( 'bootstrap', get_template_directory_uri() .'/assets/css/bootstrap/bootstrap.min.css', false, 'all' );
    wp_enqueue_style( 'bootstrap');

    wp_register_style( 'style', get_template_directory_uri() .'/style.css', false, 'all' );
    wp_enqueue_style( 'style');

}

add_action( 'wp_enqueue_scripts', 'load_styles');

// Load JS

function load_js() {
    wp_register_script( 'customjs', get_template_directory_uri() .'/assets/js/scripts.js', '', 1, true );
    wp_enqueue_script ( 'customjs' );
}

add_action( 'wp_enqueue_scripts', 'load_js' );



add_image_size( 'frontpage-thumb', 160, 160, true );


?>