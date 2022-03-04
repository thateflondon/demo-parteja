<?php

function parteja_register_styles()
{

    wp_enqueue_style('parteja-style', get_template_directory_uri() . "/theme-template/css/style.css", array('parteja-bootstrap'), '1.0', 'all');
    wp_enqueue_style('parteja-bootstrap', get_template_directory_uri() . "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('parteja-fontawesome', get_template_directory_uri() . "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'parteja_register_styles');
