<?php

  /**
  * The template for displaying shoutbox messages on the front page.
  *
  * @package _egukbasetheme
  */

  global $wpdb;

  $paged = get_query_var( 'paged' )
         ? get_query_var( 'paged' )
         : 1;
  
  $args = array(
            'post_type'      => 'eguk_shoutbox',
            'orderby'        => 'date',
            'order'          => 'ASC',
            'posts_per_page' => -1
          );

  $shoutbox = new WP_Query( $args );

  $online_users = $wpdb->get_results( 
                    $wpdb->prepare( 
                      "
                       SELECT ID, user_nicename FROM $wpdb->users
                       WHERE is_online = %s
                      ",
                      true 
                    )
                  );

  foreach ( $online_users as $user ) :

    $online_user_ids[] = $user->ID;

  endforeach;

  if ( $shoutbox->have_posts() ) : ?>

    <?php

      while ( $shoutbox->have_posts() ) : $shoutbox->the_post(); 

      $user_status = (!empty($online_user_ids))
                     ? in_array(get_the_author_meta('ID'), $online_user_ids)
                     : false;

    ?>

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
