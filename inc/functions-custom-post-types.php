<?php
/**
 * _egukbasetheme functions and definitions
 *
 * @package _egukbasetheme
 */

function create_eguk_shoutbox() {

  register_post_type( 'eguk_shoutbox',
    array(
      'labels' => array(
        'name' => __( 'Shoutbox' ),
        'singular_name' => __( 'Shoutbox' )
      ),
      'public' => true
    )
  );

  add_post_type_support( 'eguk_shoutbox', 'quote' );
  
}

add_action( 'init', 'create_eguk_shoutbox' );
