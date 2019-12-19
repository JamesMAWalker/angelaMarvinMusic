<?php

// Change all instances of 'starter' to the name of the current theme/project.

function angelamusic_files() {
    wp_enqueue_style('angelamusic_main_files', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('angelamusic_js', get_template_directory_uri() . '/assets/js/index.js', '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'angelamusic_files');

// Remove 32px margin
function my_function_admin_bar() { return false; }

add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function eq_add_favicon(){ ?>
    <!-- Custom Favicons -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/favicon.png"/>
    <?php 
}

add_action('wp_head','eq_add_favicon');

?>