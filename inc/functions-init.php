<?php 

function eguk_init() {

  add_image_size('gallery_thumb', 370, 9999, false);

}

add_action('after_setup_theme', 'eguk_init');

?>
