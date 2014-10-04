<?php 
  
  function eguk_enqueue_css() {
    wp_dequeue_script();
  }

  add_action( 'wp_enqueue_scripts', 'eguk_enqueue_css' );

  // function eguk_enqueue_scripts() {

  //   wp_enqueue_script( "bootstrap", get_template_directory_uri() . "assets/js/vendor/bootstrap.js", array("jquery"), "3.2.0", true );

  // }

  // //add_action( 'wp_enqueue_scripts', 'eguk_enqueue_scripts' );
  // 