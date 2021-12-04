<?php

function monito_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'monito_theme_support');

function monito_menus(){
    $locations = array(
        'primary' => 'Desktop primary',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}
add_action('init', 'monito_menus');

function monito_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('monito-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('monito-styles', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
    wp_enqueue_style('monito-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style('monito-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'monito_register_styles');



function monito_register_scripts(){
    wp_enqueue_script('monito-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js", array(), null, 'all', true);
    wp_enqueue_script('monito-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), null, 'all', true);
    wp_enqueue_script('monito-script', get_template_directory_uri() . "/assets/js/custom.js", array(), '1.0', 'all', true);
}
add_action('wp_enqueue_scripts', 'monito_register_scripts');