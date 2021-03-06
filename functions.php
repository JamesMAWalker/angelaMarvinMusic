<?php

function angelamusic_files() {
    wp_enqueue_script('jquery', '1.0.0', true);
    wp_enqueue_style('angelamusic_main_files', get_template_directory_uri() . '/style.css', array(), '1.0.2', 'all');
    wp_enqueue_script('angelamusic_js', get_template_directory_uri() . '/assets/js/index.js', '1.0.2', true);
    wp_enqueue_script('scrollout_js', get_template_directory_uri() . '/assets/js/vendors/scrollout.min.js', '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'angelamusic_files');

function eq_add_favicon(){ ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri();?>/assets/images/favicon.png"/>
    <?php 
}

add_action('wp_head','eq_add_favicon');

function site_features() {
    add_theme_support( 'post-thumbnails', array('music', 'page') );
    add_theme_support( 'custom-background' );
}

add_action('after_setup_theme', 'site_features');

// passing theme directory to the frontend for use in listening section JS
wp_register_script( 'passDirs', 'path/to/myscript.js' );
wp_localize_script( 'passDirs', 'dirs', array(
    'styleDir' => get_stylesheet_directory_uri()
    )
);
wp_enqueue_script( 'passDirs' );

?>