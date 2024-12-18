<?php
function my_theme_enqueue_styles() {
    // Enqueue the main stylesheet (always works for both parent and child theme)
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());

    // Enqueue the CSS file.
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css');

    // Enqueue JavaScript file.
    // wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/script.js');
}

// Hook into the 'wp_enqueue_scripts' action to add our custom styles and scripts
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
?>
