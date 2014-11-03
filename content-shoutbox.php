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

  if ( $shoutbox->have_posts() ) : ?>

    <?php while ( $shoutbox->have_posts() ) : $shoutbox->the_post(); ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
          <?php the_content(); ?>
        </div><!-- .entry-content -->

        <time datetime="<?php echo get_the_date( 'c' ); ?>" class="entry-meta"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></time><!-- .entry-meta -->

        <?php if ( current_user_can( 'manage_options' ) ) : ?>
        <a href="<?php echo get_delete_post_link( get_the_ID() ) ?>" class="entry-delete">Delete</a>
        <?php endif; ?>

      </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile;

  endif;

  wp_reset_postdata();