<?php

    function my_theme_scripts() {
        wp_enqueue_script( 'my-great-script', get_template_directory_uri() . '/functions.js', array( 'jquery' ), '1.0.1', true );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

?>
