<?php

  /**
   * The template for displaying thhe login form.
   *
   * This is the template that displays all pages by default.
   * Please note that this is the WordPress construct of pages
   * and that other 'pages' on your WordPress site will use a
   * different template.
   *
   * @package _egukbasetheme
   * Template Name: Video page
   */

  get_header(); ?>

  <section id="videos" role="region" class="container">

    <h1><?php the_title(); ?></h1>
    
    <?php get_template_part( 'content', 'video' ); ?>

  </section>

  <?php get_footer(); ?>
