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

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

function unicornify($id) {

    $color = array( 
        'pastel-red', 
        'pastel-red-orange', 
        'pastel-yellow-orange', 
        'pastel-yellow', 
        'pastel-pea-green',
        'pastel-yellow-green',
        'pastel-green',
        'pastel-green-cyan',
        'pastel-cyan',
        'pastel-cyan-blue',
        'pastel-blue',
        'pastel-blue-violet',
        'pastel-violet',
        'pastel-violet-magenta',
        'pastel-magenta',
        'pastel-magenta-red' 
    );

    return $color[ ( $id % count( $color ) ) ];
}
