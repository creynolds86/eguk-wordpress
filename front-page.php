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

  <div class="row">
    <section id="news" class="col-md-12" role="region">
      <?php get_template_part( 'content', 'news' ); ?>
    </section>
  </div>

  <?php get_footer(); ?>
