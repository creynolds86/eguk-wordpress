<?php

  /**
  * The template for displaying news articles in the jumbtron.
  *
  * @package _egukbasetheme
  * Template Name: Jumbotron
  */

  $args = array(
            'posts_per_page'      => 1,
            'post__in'            => get_option( 'sticky_posts' ),
            'ignore_sticky_posts' => 1,
          );

  $jumbotron = new WP_Query( $args );

  if ( $jumbotron->have_posts() ) :

    echo '<article class="jumbotron">';

    while ( $jumbotron->have_posts() ) : $jumbotron->the_post();
      
      echo '<h1>' . get_the_title() . '</h1>';
      echo get_the_content();

    endwhile;

    echo '</article>';

  endif;
