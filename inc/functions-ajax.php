<?php
/**
 * @package _egukbasetheme
 */

function ajax_shoutbox_init() {

    wp_register_script('ajax-shoutbox-script', EGUK_ASSETS_DIR . 'js/main.min.js', array('jquery') ); 
    wp_enqueue_script('ajax-shoutbox-script');

    wp_localize_script( 'ajax-shoutbox-script', 'shoutboxObject',
        array(
            'ajaxUrl'        => admin_url( 'admin-ajax.php' ),
            'loadingMessage' => __( 'Posting...', '_egukbasetheme' )
        )
    );

    add_action( 'wp_ajax_ajax-shoutbox-create-post', 'ajax_shoutbox_create_post' );
    add_action( 'wp_ajax_ajax-shoutbox-get-new-post', 'ajax_shoutbox_get_posts' );
}

add_action('init', 'ajax_shoutbox_init');

function ajax_shoutbox_create_post() {

    check_ajax_referer( 'ajax-shoutbox-nonce', 'security' );

    $content = sanitize_text_field( $_POST['message'] );
    $name    = 'shoutbox-' . rand(1, 1000);
    $author  = get_current_user_id();

    $args = array(
                'post_title'    => 'shoutbox-' . rand(1, 1000),
                'post_content'  => $content,
                'post_status'   => 'publish',
                'post_type'     => 'eguk_shoutbox',
                'post_author'   => get_current_user_id(),
                'post_date'     => date('Y-m-d H:i:s'),
                'post_date_gmt' => date('Y-m-d H:i:s')
            );

    echo wp_insert_post($args);

    exit;

}
function ajax_shoutbox_get_posts() {

    ob_start();

    get_template_part( 'content', 'shoutbox' );

    echo ob_get_clean();

    wp_reset_postdata();

    exit;
}