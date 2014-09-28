<?php

  /**
  * The template for displaying news articles in the jumbtron.
  *
  * @package _egukbasetheme
  * Template Name: News
  */

  $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
  
  $args = array(
            'cat'                 => 1,
            'ignore_sticky_posts' => 1,
            'post__not_in'        => get_option( 'sticky_posts' ),
            'paged'               => $paged,
          );

  $news = new WP_Query( $args );

  if ( $news->have_posts() ) :

    while ( $news->have_posts() ) : $news->the_post();
      
      get_template_part( 'content', 'single' );

    endwhile;

  endif;
