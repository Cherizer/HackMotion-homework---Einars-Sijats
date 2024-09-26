<?php
/*
Plugin Name: Data Tracking Plugin
Description: Saves video watch events.
Version: 1.0
Author: Einars Sijats
*/


add_action('rest_api_init', function () {
    register_rest_route('data-tracking/v1', '/submit-data/', array(
        'methods' => 'POST',
        'callback' => 'handle_data_tracking_data',
        'permission_callback' => '__return_true'
    ));
});

function handle_data_tracking_data(WP_REST_Request $request) {
    global $wpdb;
    $data = $request->get_param('data');

    $user_ip = $_SERVER['REMOTE_ADDR'];
    $page_url = $_SERVER['REQUEST_URI'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];

    $insert_result = $wpdb->insert('wp_event_tracking', array(
        'user_id' => $data['user_id'],
        'event_type' => $data['event_type'],
        'ip_address' => $user_ip,
        'page_url' => $page_url,
        'user_agent' => $user_agent,
    ), array('%s', '%s', '%s', '%s', '%s'));

    return new WP_REST_Response(array(
        'status' => 'success',
        'received_data' => $data
    ), 200);
}