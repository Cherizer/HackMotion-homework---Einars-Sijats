<?php
/*
Plugin Name: Page View Plugin
Description: Tracks page views.
Version: 1.0
Author: Einars Sijats
*/

add_action('rest_api_init', function () {
    register_rest_route('page-view/v1', '/submit-data/', array(
        'methods' => 'POST',
        'callback' => 'handle_page_view_data',
        'permission_callback' => '__return_true'
    ));
});

function handle_page_view_data(WP_REST_Request $request) {
    global $wpdb;

    if (!isset($_COOKIE['user_id'])) {
        $user_id = uniqid('user_', true);
        setcookie('user_id', $user_id, time() + (86400 * 30), "/");
    } else {
        $user_id = $_COOKIE['user_id'];
    }

    $user_ip = $_SERVER['REMOTE_ADDR'];
    $page_url = $_SERVER['REQUEST_URI'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $insert_result = $wpdb->insert('wp_event_tracking', array(
        'user_id' => $user_id,
        'event_type' => 'page_view',
        'ip_address' => $user_ip,
        'page_url' => $page_url,
        'user_agent' => $user_agent,
    ), array('%s', '%s', '%s', '%s', '%s'));

    return new WP_REST_Response(array(
        'status' => 'success',
        'message' => 'Page view event tracked successfully.',
        'user_id' => $user_id
    ), 200);
}