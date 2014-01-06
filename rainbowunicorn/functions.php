<?php

function rainbowunicorn_scripts() {

    wp_enqueue_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery.js',
        array(),
        '2.0.3',
        true
    );

    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js',
        array('jquery'),
        '2.3.2',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'rainbowunicorn_scripts');

add_action( 'wp_enqueue_scripts', 'rainbowunicorn_styles' );

function rainbowunicorn_styles() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
}