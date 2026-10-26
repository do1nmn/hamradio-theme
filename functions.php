<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function hamradio_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Title tag support
    add_theme_support('title-tag');

    // Post thumbnails
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Hauptmenü', 'hamradio-theme'),
        'footer'  => __('Fußzeilen-Menü', 'hamradio-theme'),
    ));

    // HTML5 markup support
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'hamradio_theme_setup');

function hamradio_theme_scripts() {
    wp_enqueue_style('hamradio-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'hamradio_theme_scripts');

// Register Widget Areas / Sidebars
function hamradio_widgets_init() {
    register_sidebar(array(
        'name'          => __('Haupt-Sidebar', 'hamradio-theme'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in dieser Leiste werden auf der rechten Seite angezeigt.', 'hamradio-theme'),
        'before_widget' => '<div id="%1$s" class="card widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="card-title widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'hamradio_widgets_init');
?>