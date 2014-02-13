<?php

function rainbowunicorn_scripts() {

    wp_enqueue_script(
        'jQuery',
        get_template_directory_uri() . '/js/jquery.js',
        array(''),
        '2.1.0',
        true
    );

    wp_enqueue_script(
        'unicorn',
        get_template_directory_uri() . '/js/unicorn.js',
        array(''),
        '0.1',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'rainbowunicorn_scripts');

function register_navigation() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_navigation' );

// Enable post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(520, 250, true);

if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'Sidebar Widgets',
      'id'   => 'sidebar-widgets',
      'description'   => 'Widget Area',
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>'
    ));
}

function unicornify($id) {

    $color = array( 
        'pastel-red', 
        'pastel-red-orange', 
        'pastel-yellow-orange', 
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
        'one', 
        'two', 
        'three', 
        'four',
        'five',
        'six',
        'seven',
        'eight',
        'nine',
        'ten',
        'eleven',
        'twelve',
        'thirteen',
        'fourteen',
        'fifteen' 
    );

    return $color[ ( $id % count( $color ) ) ];
}

