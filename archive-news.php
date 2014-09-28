<?php

  /**
  * The template for displaying the news archive
  *
  * This is the template that displays on the front page only.
  *
  * @package _egukbasetheme
  * Template Name: News Archive
  */

  get_header(); ?>

  <section id="news" class="col-md-12 container archive" role="region">
    <h1>Latest news articles</h1>
    <?php get_template_part( 'content', 'news' ); ?>
  </section>

  <?php get_footer(); ?>
