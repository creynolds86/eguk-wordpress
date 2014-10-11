<?php

  /**
  * The template for displaying the front page.
  *
  * This is the template that displays on the front page only.
  *
  * @package _egukbasetheme
  */

  get_header();

  get_template_part( 'content', 'jumbotron' ); ?>
 
  <section id="news" class="col-md-12" role="region">
    <?php get_template_part( 'content', 'news' ); ?>
  </section>

  <section id="shoutbox" class="col-md-12" role="region">
    <?php get_template_part( 'content', 'shoutbox' ); ?>
    <?php get_template_part( 'form', 'shoutbox' ); ?>
  </section>

  <?php get_footer(); ?>
