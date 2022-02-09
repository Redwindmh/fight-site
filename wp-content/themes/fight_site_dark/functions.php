<?php

function fight_sight_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('', get_template_directory_uri() . "/style.css", array(''), $version, 'all')

}


add_action( 'wp_enqueue_scripts', 'fight_sight_styles');
?>