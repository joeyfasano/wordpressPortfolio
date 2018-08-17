<?php

function killer_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/killer.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customjs',get_template_directory_uri() . '/js/killer.js', array(), '1.0.0', true);
};

add_action('wp_enqueue_scripts', 'killer_script_enqueue');

add_post_type_support( 'page', 'page-attributes');

//

function killer_theme_setup() {
add_theme_support('menus');

register_nav_menu('primary', 'Primary Header Navigation');
register_nav_menu('secondary', 'Footer Navigation');

add_post_type_support( 'page', 'page-attributes');
};

add_action('init', 'killer_theme_setup');