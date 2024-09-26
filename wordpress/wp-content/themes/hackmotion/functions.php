<?php
function custom_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', false);
}

function timeline_script() {
    wp_enqueue_script('timeline-js', get_template_directory_uri() . '/assets/js/timeline.js', array(), null, true);
}

function track_event_script() {
    wp_enqueue_script('track-event', get_template_directory_uri() . '/assets/js/track-event.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'track_event_script');
add_action('wp_enqueue_scripts', 'timeline_script');
add_action('wp_enqueue_scripts', 'custom_styles');