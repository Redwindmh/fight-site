<?php

function fight_site_theme_support() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'fight_site_theme_support');

function fight_site_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('fight-night-css', get_template_directory_uri() . "/style.css", array('fight-night-bootstrap'), $version, 'all');
    wp_enqueue_style('fight-night-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css", array(), 5.1, 'all');
}


add_action( 'wp_enqueue_scripts', 'fight_site_styles');

function fight_site_scripts() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script('fight-night-bootstrap-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js", array(), 5.1, true);
    wp_enqueue_script('fight-night-js', get_template_directory_uri() . "/js/main.js", array(), $version, true);
    wp_enqueue_script('fight-night-fontawesome', "https://kit.fontawesome.com/5bf705b190.js", array(), 3, true);
}


add_action( 'wp_enqueue_scripts', 'fight_site_scripts');
?>