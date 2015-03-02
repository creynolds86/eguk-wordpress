<?php
/**
 * @package _egukbasetheme
 */

function update_online_user_status($user_login, $user) {

  global $wpdb;

  $query = $wpdb->prepare(
    "
    UPDATE $wpdb->users 
    SET is_online = %s
    WHERE ID = %d
    ",
    true, $user->ID
  );

  $wpdb->query( $query );

}

add_action('wp_login', 'update_online_user_status', 10, 2);

function update_offline_user_status() {

  global $wpdb;

  $user = wp_get_current_user();

  $query = $wpdb->prepare(
    "
    UPDATE $wpdb->users 
    SET is_online = %s
    WHERE ID = %d
    ",
    false, $user->ID
  );

  $wpdb->query( $query );

}

add_action('clear_auth_cookie', 'update_offline_user_status', 10);
