<?php 
  
  function eguk_enqueue_css() {

    wp_dequeue_style('bbp-default');

  }

  add_action('wp_print_styles', 'eguk_enqueue_css', 100);

  // function eguk_enqueue_scripts() { }

  // add_action( 'wp_enqueue_scripts', 'eguk_enqueue_scripts' );

