<?php

  /**
  * The template for displaying the front page.
  *
  * This is the template that displays on the front page only.
  *
  * @package _egukbasetheme
  */

  get_header(); ?>

  <div class="row">

    <?php get_template_part( 'content', 'jumbotron' ); ?>

  </div>
  
  <div class="row">

    <section id="news" class="col-md-8" role="region">
      <?php get_template_part( 'content', 'news' ); ?>
    </section>

    <section id="shoutbox" class="col-md-4" role="region">
      <div class="wrapper">
        <?php get_template_part( 'content', 'shoutbox' ); ?>
      </div>
      <?php get_template_part( 'form', 'shoutbox' ); ?>
    </section>

  </div>

  <?php get_footer(); ?>
