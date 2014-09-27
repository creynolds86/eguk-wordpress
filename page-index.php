<?php

  /**
  * The template for displaying all pages.
  *
  * This is the template that displays all pages by default.
  * Please note that this is the WordPress construct of pages
  * and that other 'pages' on your WordPress site will use a
  * different template.
  *
  * @package _egukbasetheme
  * Template Name: Index page
  */

  get_header();

  get_template_part( 'content', 'jumbotron' );

  $news = new WP_Query( 'category_name=news' );

  if ( $news->have_posts() ) : 

    while ( $news->have_posts() ) : $news->the_post();

      /* Include the Post-Format-specific template for the content.
       * If you want to override this in a child theme, then include a file
       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
       */
      get_template_part( 'content', get_post_format() );

    endwhile;

    _egukbasetheme_paging_nav();

  else :

    get_template_part( 'content', 'none' );

  endif;
