<?php 
  
  function eguk_enqueue_css() {

    wp_enqueue_style( "eguk-css", get_template_directory_uri() . "/assets/styles/build/style.css", array(), "3.2.0", "all" );

  }

  add_action( 'wp_enqueue_scripts', 'eguk_enqueue_css' );

  // function eguk_enqueue_scripts() { }

  // add_action( 'wp_enqueue_scripts', 'eguk_enqueue_scripts' );
  