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
            'post_type'      => 'eguk_shoutbox',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' => -1
          );

  $user_args = array( 'is_online' => true );

  $user_query = new WP_User_Query( $user_args );
  $user_status = $user_query->results[0]->data->is_online;

  $shoutbox = new WP_Query( $args );

  if ( $shoutbox->have_posts() ) : ?>

    <?php while ( $shoutbox->have_posts() ) : $shoutbox->the_post(); ?>
      
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-avatar<?php echo ($user_status) ? ' is-online' : '' ?>">
          <?php echo get_avatar( get_the_author_email(), 512 ); ?>
        </div>

        <div class="entry-content">

          <?php the_content(); ?>

          <time datetime="<?php echo get_the_date( 'c' ); ?>" class="entry-meta"><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></time><!-- .entry-meta -->

          <?php if ( current_user_can( 'manage_options' ) ) : ?>

          <a href="<?php echo get_delete_post_link( get_the_ID() ) ?>" class="entry-delete">Delete</a>

          <?php endif; ?>

        </div><!-- .entry-content -->

      </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile;

  endif;

  wp_reset_postdata();
