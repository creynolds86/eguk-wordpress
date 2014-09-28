<?php

  /**
  * The template for displaying news articles on the front page.
  *
  * @package _egukbasetheme
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

    while ( $news->have_posts() ) : $news->the_post(); ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="entry-meta">
          <span class="entry-date"><?php echo esc_html( get_the_date('j') ); ?></span>
          <span class="entry-month"><?php echo esc_html( get_the_date('M') ); ?></span>
        </div><!-- .entry-meta -->
        <header class="entry-header">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
          <?php the_content(); ?>
          <?php
            wp_link_pages( array(
              'before' => '<div class="page-links">' . __( 'Pages:', '_egukbasetheme' ),
              'after'  => '</div>',
            ) );
          ?>
        </div><!-- .entry-content -->

        <?php if (current_user_can('edit_posts')) : ?>
        <footer class="entry-footer">
          <?php edit_post_link( __( 'Edit post', '_egukbasetheme' ), '<p class="edit-link">', '</p>' ); ?>
        </footer><!-- .entry-footer -->
        <?php endif; ?>

      </article><!-- #post-## -->

    <?php endwhile;

  endif;
