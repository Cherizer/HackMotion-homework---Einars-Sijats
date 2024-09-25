<?php
function custom_theme_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', false);

    
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');