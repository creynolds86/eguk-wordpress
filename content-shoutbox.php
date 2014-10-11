<?php

  /**
  * The template for displaying shoutbox messages on the front page.
  *
  * @package _egukbasetheme
  */

  $paged = get_query_var( 'paged' )
         ? get_query_var( 'paged' )
         : 1;
  
  $args = array(
            'post_type' => 'eguk_shoutbox',
            'orderby'   => 'date',
            'order'     => 'ASC',
            'paged'     => $paged
          );

  $shoutbox = new WP_Query( $args );

  if ( $shoutbox->have_posts() ) :

    while ( $shoutbox->have_posts() ) : $shoutbox->the_post(); ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-meta">
          <span class="entry-date"><?php echo esc_html( get_the_date('j') ); ?></span>
          <span class="entry-month"><?php echo esc_html( get_the_date('M') ); ?></span>
        </div><!-- .entry-meta -->

        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

      </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile;

  endif;

  wp_reset_postdata();
