<?php
// add dynamic title tag support
function parteja_theme_support()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'parteja_theme_support');


//enqueue styles
function parteja_register_styles()
{
    //dynamic version set
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('parteja-style', get_template_directory_uri() . "/theme-template/css/style.css", array('parteja-bootstrap'), $version, 'all');
    wp_enqueue_style('parteja-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('parteja-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'parteja_register_styles');



//enqueue scripts
function parteja_register_scripts()
{
    //true option helps put the script line back in the bottom of the page
    wp_enqueue_script('parteja-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('parteja-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '16.0', true);
    wp_enqueue_script('parteja-bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('parteja-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}


add_action('wp_enqueue_scripts', 'parteja_register_scripts');
