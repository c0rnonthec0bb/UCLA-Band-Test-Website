<?php
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
        wp_enqueue_style( 'menu', get_template_directory_uri() . '/menu.css');
        
        wp_enqueue_script( 'functions', get_template_directory_uri() . '/functions.js', array ( 'jquery' ));
    }
    add_action('wp_enqueue_scripts', 'add_theme_scripts');
?>
