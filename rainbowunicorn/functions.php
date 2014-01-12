<?php

function rainbowunicorn_scripts() {

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

