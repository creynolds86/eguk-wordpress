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

  $jumbotron = new WP_Query( 'category_name=jumbotron' );


?>

<article class="jumbotron">
  <h1>We are recruiting!</h1>
  <p>EGUK are currently searching for active members.</p>
  <p><a href="#" class="btn btn-primary btn-lg" role="button">Want to join us</a>?</p>
</article>
