<?php

// Change all instances of 'starter' to the name of the current theme/project.

function starter_files() {
    wp_enqueue_style('starter_main_files', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('starter_js', get_template_directory_uri() . '/assets/js/index.js', '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'starter_files');

?>