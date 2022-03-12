<?php
add_action('wp_enqueue_scripts', 'mycotra_enqueue_styles');
add_action('after_setup_theme', 'mycotra_locale');

function mycotra_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function mycotra_locale()
{
    load_child_theme_textdomain('scapeshot', get_stylesheet_directory() . '/languages');
}

