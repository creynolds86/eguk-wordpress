<?php
/**
 * @package _egukbasetheme
 */

  function eguk_add_subscribe_link_icon($link_html) {

    $sub_replace = '<span class="glyphicon glyphicon-plus"></span>' . __('Subscribe', 'bbpress' );
    $unsub_replace = '<span class="glyphicon glyphicon-minus"></span>' . __('Unsubscribe', 'bbpress' );

    $link_html = str_replace(__('Subscribe', 'bbpress' ), $sub_replace, $link_html);
    $link_html = str_replace(__('Unsubscribe', 'bbpress' ), $unsub_replace, $link_html);

    return $link_html;
  }

  if ( has_filter('bbp_get_user_subscribe_link') )
    add_filter( 'bbp_get_user_subscribe_link', eguk_add_subscribe_link_icon, 10 );

  function eguk_add_favourites_link_icon($link_html) {

    $replace = '<span class="glyphicon glyphicon-heart"></span>' . __('Favourite', 'bbpress' );

    $link_html = str_replace(__('Favorite', 'bbpress' ), $replace, $link_html);

    return $link_html;
  }

  if ( has_filter('bbp_get_user_favorites_link') )
    add_filter( 'bbp_get_user_favorites_link', eguk_add_favourites_link_icon, 10 );

  function eguk_remove_forum_post_meta_sep($html) {

    $html = str_replace(' | ', '', $html);

    return $html;
  }

  add_filter( 'bbp_get_reply_admin_links', eguk_remove_forum_post_meta_sep, 10 );
  add_filter( 'bbp_get_topic_admin_links', eguk_remove_forum_post_meta_sep, 10 );

  function eguk_forum_breadcrumb_crumbs($crumbs) {

    foreach ($crumbs as $crumb)      
      $html[]= "<li>$crumb</li>";

    echo '<ol class="breadcrumb">' . join('', $html) . '</ol>';

    return;
  }

  add_filter( 'bbp_breadcrumbs', eguk_forum_breadcrumb_crumbs, 10 );
