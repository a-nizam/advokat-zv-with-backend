<?php

function theme_setup()
{
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 9999);

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ));
}

add_action('after_setup_theme', 'theme_setup');

function theme_scripts()
{
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('html5-shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '3.7.2');
    wp_script_add_data('html5-shiv', 'conditional', 'lt IE 9');
    wp_enqueue_script('html5-respond', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '1.4.2');
    wp_script_add_data('html5-respond', 'conditional', 'lt IE 9');



    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/functions.js', array('jquery'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_scripts');