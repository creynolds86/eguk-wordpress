<?php

  function eguk_add_subscribe_link_icon($link_html) {

    $sub_replace = '<span class="glyphicon glyphicon-plus"></span>' . __('Subscribe', 'bbpress' );
    $unsub_replace = '<span class="glyphicon glyphicon-minus"></span>' . __('Unsubscribe', 'bbpress' );

    $link_html = str_replace(__('Subscribe', 'bbpress' ), $sub_replace, $link_html);
    $link_html = str_replace(__('Unsubscribe', 'bbpress' ), $unsub_replace, $link_html);

    return $link_html;
  }

  if ( has_filter('bbp_get_user_subscribe_link') )
    add_filter( 'bbp_get_user_subscribe_link', eguk_add_subscribe_link_icon, 10 );
